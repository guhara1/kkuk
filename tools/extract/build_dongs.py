# -*- coding: utf-8 -*-
"""
행정동 전수 추출기  (서울 / 경기 / 인천)

출처 : admdongkor (행정동 경계 오픈 데이터, PyPI)
산출 : tools/seed/dongs.php

  - 번호 행정동(○○1동·2동, ○○1·2동, ○○1가제1동 …)은 사용자 요청대로 대표 1곳으로 합친다.
  - 합쳐진 구역의 중심 좌표·면적은 실제 경계에서 계산한다(기존 근사 좌표를 대체).
  - 인접 행정동, 구 안에서의 방위, 면적 등급은 전부 경계에서 유도한 "검증 가능한 사실"이다.
    앵커(역·시장·공원)를 수기로 채우지 못한 동도 이 값들로 고유 문장을 만들 수 있다.

실행 : python3 tools/extract/build_dongs.py
"""
import json, math, re, sys, warnings
from pathlib import Path

warnings.filterwarnings('ignore')
sys.path.insert(0, str(Path(__file__).parent))
from romanize import slug as rslug          # noqa: E402

import admdongkor as ak                     # noqa: E402

ROOT = Path(__file__).resolve().parents[2]
VERSION = '20260701'
SIDO = {'서울특별시': 'seoul', '경기도': 'gyeonggi', '인천광역시': 'incheon'}

# ── 1. 번호 행정동 통합 ──────────────────────────────────────────────
NUM = re.compile(r'\d+(·\d+)*(가)?(제\d+)?동$')
BON = re.compile(r'^(.+)본동$')
# 숫자 규칙으로는 안 잡히는 결합 명칭
SPECIAL = {'화수1·화평동': '화수동'}


def collapse(name):
    if name in SPECIAL:
        return SPECIAL[name]
    if NUM.search(name):
        return NUM.sub('동', name)
    m = BON.match(name)
    if m:
        return m.group(1) + '동'
    return name


# ── 2. 방위 ─────────────────────────────────────────────────────────
DIRS = ['북', '북동', '동', '남동', '남', '남서', '서', '북서']


def direction(dx, dy, span):
    """구 중심 대비 방위. 중심에서 충분히 가까우면 '중심부'."""
    if math.hypot(dx, dy) < span * 0.18:
        return '중심부'
    ang = math.degrees(math.atan2(dx, dy)) % 360        # 북=0, 시계방향
    return DIRS[int((ang + 22.5) // 45) % 8] + '쪽'


def area_grade(km2):
    if km2 < 1.0:   return 'dense'      # 조밀
    if km2 < 3.0:   return 'mid'
    if km2 < 10.0:  return 'wide'
    return 'vast'                        # 광역


def kind_of(name, km2, gu_trait):
    if name.endswith('면'):
        return 'tr' if gu_trait == 'tr' else 'rs'
    if name.endswith('읍'):
        return 'nt' if km2 > 20 else 'ap'
    if km2 >= 8:
        return 'rs'
    if km2 <= 1.2:
        return 'st'
    return {'office': 'of', 'resi': 'ap', 'mixed': 'mixed'}.get(gu_trait, gu_trait)


# ── 3. 추출 ─────────────────────────────────────────────────────────
def main():
    print(f'행정동 경계 로드 … (version {VERSION})')
    gdf = ak.get(VERSION, level='emd')
    t = gdf[gdf.sidonm.isin(SIDO)].copy()
    print(f'  대상 원본 행정동 {len(t)}개')

    t['base'] = t.emdnm.map(collapse)

    # 예외 : 통합 결과 행정동이 1개만 남는 시군구는 원래 이름을 유지한다.
    #        (예) 화성시동탄구는 동탄1~9동 → '동탄동' 하나가 되어 구 페이지와 사실상 같아진다.
    for key, grp in t.groupby(['sidonm', 'sggnm']):
        if grp['base'].nunique() == 1 and grp['emdnm'].nunique() > 1:
            t.loc[grp.index, 'base'] = grp['emdnm']
            print(f"  · 통합 예외 : {key[1]} — 원래 행정동 {grp['emdnm'].nunique()}개 유지")

    # 같은 시군구 안에서 같은 base 끼리 합친다
    merged = t.dissolve(by=['sidonm', 'sggnm', 'base'],
                        aggfunc={'area': 'sum'}).reset_index()
    print(f'  번호 행정동 통합 후 {len(merged)}개')

    # 좌표계 : 면적은 원본(5179 계열), 중심 좌표는 WGS84
    wgs = merged.to_crs(4326)
    merged['lng'] = wgs.geometry.representative_point().x
    merged['lat'] = wgs.geometry.representative_point().y
    merged['km2'] = merged['area'] / 1_000_000

    # 인접 관계 (경계가 맞닿은 행정동)
    print('  인접 관계 계산 …')
    sj = merged.sjoin(merged[['geometry']], predicate='touches', how='left')
    nb = {}
    for i, j in zip(sj.index, sj['index_right']):
        if j != j:      # NaN
            continue
        nb.setdefault(i, []).append(int(j))

    # 시군구 중심 / 크기
    gu_center, gu_span = {}, {}
    for key, grp in merged.groupby(['sidonm', 'sggnm']):
        gu_center[key] = (grp['lng'].mean(), grp['lat'].mean())
        gu_span[key] = max(grp['lng'].max() - grp['lng'].min(),
                           grp['lat'].max() - grp['lat'].min()) or 0.01

    out = {}
    used_slug = {}
    for idx, r in merged.iterrows():
        key = (r['sidonm'], r['sggnm'])
        cx, cy = gu_center[key]
        s = rslug(r['base'])
        # 같은 구 안에서 슬러그가 겹치면 뒤에 번호를 붙인다
        sk = (r['sggnm'], s)
        if sk in used_slug:
            used_slug[sk] += 1
            s = f"{s}-{used_slug[sk]}"
        else:
            used_slug[sk] = 1

        neighbors = []
        for j in nb.get(idx, []):
            n = merged.loc[j]
            if n['sidonm'] != r['sidonm']:
                continue
            label = n['base'] if n['sggnm'] == r['sggnm'] else f"{n['sggnm']} {n['base']}"
            neighbors.append(label)

        out.setdefault(r['sidonm'], {}).setdefault(r['sggnm'], []).append({
            'name': r['base'],
            'slug': s,
            'lat': round(float(r['lat']), 6),
            'lng': round(float(r['lng']), 6),
            'km2': round(float(r['km2']), 3),
            'grade': area_grade(r['km2']),
            'dir': direction(r['lng'] - cx, r['lat'] - cy, gu_span[key]),
            'nb': sorted(set(neighbors))[:6],
        })

    for sidonm in out:
        for sgg in out[sidonm]:
            out[sidonm][sgg].sort(key=lambda x: x['name'])

    Path(ROOT / 'tools/extract/dongs.json').write_text(
        json.dumps(out, ensure_ascii=False, indent=1), encoding='utf-8')

    tot = sum(len(v) for s in out.values() for v in s.values())
    print(f'\n저장 : tools/extract/dongs.json')
    for sidonm, sggs in out.items():
        n = sum(len(v) for v in sggs.values())
        print(f'  {sidonm}: 시군구 {len(sggs)} / 행정동 {n}')
    print(f'  합계 {tot}개')


if __name__ == '__main__':
    main()
