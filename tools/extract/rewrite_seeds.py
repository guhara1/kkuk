# -*- coding: utf-8 -*-
"""
시드 재구성
  1) 시군구 시드를 2026-07-01 행정구역 기준으로 갱신 (인천 2군9구 / 부천·화성 일반구)
  2) 기존 수기 앵커(231개 동)를 tools/seed/dong_anchors.php 로 분리
  3) 전체 행정동 778개를 tools/seed/dongs.php 로 생성

실행 : python3 tools/extract/rewrite_seeds.py
"""
import json, subprocess
from pathlib import Path

ROOT = Path(__file__).resolve().parents[2]
SEED = ROOT / 'tools/seed'
# 원본(개편 전) 시드 — git 에서 꺼내 둔 사본. 앵커 승계용으로만 읽는다.
OLDSEED = ROOT / 'tools/extract/_old'
SIDO_SLUG = {'서울특별시': 'seoul', '경기도': 'gyeonggi', '인천광역시': 'incheon'}

# ── 1. 기존 시드 덤프 ────────────────────────────────────────────────
DUMP = r'''<?php
$o=[];
foreach(["seoul","gyeonggi","incheon"] as $f){
  $s=require $argv[1]."/$f.php";
  $o[$f]=["sido"=>$s["sido"],"gu"=>[]];
  foreach($s["gu"] as $row){ $meta=array_shift($row); $o[$f]["gu"][]=["meta"=>$meta,"dongs"=>$row]; }
}
echo json_encode($o,JSON_UNESCAPED_UNICODE);'''
(ROOT / 'tools/extract/_dump.php').write_text(DUMP, encoding='utf-8')
old = json.loads(subprocess.check_output(
    ['php', str(ROOT / 'tools/extract/_dump.php'), str(OLDSEED)]).decode())

# ── 2. 시군구 패치 ───────────────────────────────────────────────────
# 포맷 : 이름|슬러그|위도|경도|노선|주요역|랜드마크|상권성격|인접지역|한줄특성|상위시|옛이름
DROP = {'incheon': {'중구', '동구', '서구'}, 'gyeonggi': {'부천시', '화성시'}}

ADD = {
'incheon': [
 '제물포구|jemulpo|37.4738|126.6330|1호선,수인분당선|동인천역,인천역,도원역|신포국제시장,차이나타운,월미도|md|미추홀구,영종구,부평구|개항장 원도심 상권과 항만 배후 주거지가 맞물린 인천의 역사 중심부||중구 내륙·동구',
 '영종구|yeongjong|37.4930|126.5210|공항철도|운서역,영종역,인천공항1터미널역|인천국제공항,을왕리해수욕장,영종하늘도시|nt|제물포구,서해구,강화군|공항 교대 근무 인구와 하늘도시 입주 수요가 중심인 섬 생활권||중구 영종·용유',
 '서해구|seohae|37.5330|126.6660|공항철도,인천2호선|가정역,검암역,석남역|청라호수공원,루원시티,아라뱃길|nt|검단구,계양구,부평구|청라 신도시와 가정·석남 재정비가 동시에 진행되는 인천 서부 중심||서구',
 '검단구|geomdan|37.6030|126.6650|인천2호선|검단사거리역,완정역,왕길역|검단신도시,아라뱃길,나진포천|nt|서해구,계양구,김포시|검단신도시 입주가 이어지며 신규 수요가 가장 빠르게 늘어나는 지역||서구 검단',
],
'gyeonggi': [
 '원미구|wonmi|37.5035|126.7660|1호선,7호선,서해선|부천역,신중동역,상동역|상동호수공원,한국만화박물관,부천시청|st|소사구,오정구,서울 강서구|중동·상동 상권이 집중된 부천의 중심 생활권|부천시|부천시',
 '소사구|sosa|37.4830|126.7920|1호선,서해선|소사역,송내역,소새울역|성주산,소사 상권,송내역 일대|ap|원미구,오정구,서울 구로구|송내·소사 역세권 주거지가 중심인 비교적 조용한 생활권|부천시|부천시',
 '오정구|ojeong|37.5290|126.7850|7호선,서해선|원종역,부천종합운동장역,까치울역|고강선사유적공원,오정물류단지,베르네천|ind|원미구,서울 강서구,인천 계양구|물류·제조 기능과 원종·고강 주거지가 섞인 부천 북부|부천시|부천시',
 '동탄구|dongtan|37.2000|127.0980|SRT,GTX-A,1호선|동탄역,서동탄역|동탄호수공원,롯데백화점 동탄점,동탄센트럴파크|nt|병점구,수원시 영통구,용인시 기흥구|동탄신도시 입주가 집중된 경기 남부 최대 신도시 생활권|화성시|화성시',
 '병점구|byeongjeom|37.2050|127.0300|1호선|병점역,서동탄역|융건릉,병점 상권,황구지천|ap|동탄구,효행구,수원시 권선구|병점역 중심 주거지와 융건릉 일대가 묶인 생활권|화성시|화성시',
 '효행구|hyohaeng|37.2130|126.9400|수인분당선|어천역,야목역|수원대학교,봉담 택지,어천저수지|ap|병점구,만세구,수원시 권선구|봉담 택지와 대학 배후 수요가 중심인 화성 중부|화성시|화성시',
 '만세구|manse|37.1150|126.8000|서해선|화성시청역,송산역|제부도,궁평항,송산그린시티|tr|효행구,안산시 단원구,평택시|서해안 관광지와 향남·남양 택지가 함께 있는 화성 서부|화성시|화성시',
]}

# 인접지역 표기 교체 (행정구역 개편 반영)
NEAR_FIX = {
    '인천 서구': '인천 검단구', '서구': '서해구', '동구': '제물포구', '중구': '제물포구',
    '부천시': '부천시 원미구', '화성시': '화성시 동탄구',
}
# 시도별로 다르게 적용해야 하는 항목(서울 중구/동구와 충돌 방지)
def fix_near(sido, gu_name, near_csv):
    out = []
    for n in [x.strip() for x in near_csv.split(',') if x.strip()]:
        if sido == 'incheon' and n in ('서구', '동구', '중구'):
            n = NEAR_FIX[n]
        elif n in ('인천 서구', '부천시', '화성시'):
            n = NEAR_FIX[n]
        out.append(n)
    return ','.join(out)

new_gu, anchors = {}, {}
for f, blk in old.items():
    sido_slug = blk['sido'].split('|')[1]
    rows = []
    for g in blk['gu']:
        m = (g['meta'].split('|') + [''] * 12)[:12]
        if m[0] in DROP.get(f, set()):
            keep_anchor_gu = None            # 폐지된 구의 동 앵커는 이름만으로 승계
        else:
            m[8] = fix_near(f, m[0], m[8])
            rows.append('|'.join(m).rstrip('|'))
            keep_anchor_gu = m[1]
        for d in g['dongs']:
            dn, ds, dk, da = (d.split('|') + ['', '', '', ''])[:4]
            anchors.setdefault(sido_slug, {})[dn] = da
    rows.extend(ADD.get(f, []))
    new_gu[f] = {'sido': blk['sido'], 'gu': rows}

# ── 3. 시군구 시드 파일 출력 ─────────────────────────────────────────
HEAD = '''<?php
/**
 * {title} 시군구 시드  ({n}곳)
 *
 * 포맷 : 이름|슬러그|위도|경도|노선|주요역|랜드마크|상권성격|인접지역|한줄특성|상위시|옛이름
 *   상권성격 : st 역세권 / ap 대단지주거 / uni 대학가 / of 오피스 / md 구도심
 *              nt 신도시 / ind 산업 / tr 관광 / rs 주택가 / mixed 주상복합
 *   옛이름   : 2026년 행정구역 개편으로 명칭이 바뀐 곳만 기재(검색 수요 보완용)
 *
 * 행정동은 tools/seed/dongs.php(자동 생성)에서 가져오고,
 * 동별 앵커(역·시장·공원)는 tools/seed/dong_anchors.php 에서 덮어쓴다.
 */
return [
'sido' => '{sido}',
'gu' => [
'''
TITLE = {'seoul': '서울특별시', 'gyeonggi': '경기도', 'incheon': '인천광역시'}
for f, blk in new_gu.items():
    body = ''.join("  '" + r.replace("'", "\\'") + "',\n" for r in sorted(blk['gu']))
    (SEED / f'{f}.php').write_text(
        HEAD.format(title=TITLE[f], n=len(blk['gu']), sido=blk['sido']) + body + "]];\n",
        encoding='utf-8')
    print(f'  {f}.php : 시군구 {len(blk["gu"])}곳')

# ── 4. 동별 앵커 파일 ────────────────────────────────────────────────
lines = ['<?php', '/**', ' * 행정동 앵커(역·시장·공원 등 지역 기준점) 수기 데이터', ' *',
         ' * 키   : 시도슬러그/행정동명   값 : 앵커 최대 3개',
         ' * 비워 두면 콘텐츠 엔진이 인접 행정동·방위·면적 같은 경계 데이터 기반 사실로 대체한다.',
         ' * 실제 지역을 잘 아는 동을 여기에 채울수록 본문 품질이 올라간다.',
         ' */', 'return [']
for sido in ('seoul', 'gyeonggi', 'incheon'):
    lines.append(f"  /* ── {TITLE[sido]} ── */")
    for dn in sorted(anchors.get(sido, {})):
        da = anchors[sido][dn]
        if da:
            lines.append(f"  '{sido}/{dn}' => '{da}',")
lines.append('];')
(SEED / 'dong_anchors.php').write_text('\n'.join(lines) + '\n', encoding='utf-8')
print(f'  dong_anchors.php : {sum(1 for s in anchors.values() for v in s.values() if v)}개 동')

# ── 5. 행정동 시드 ──────────────────────────────────────────────────
dj = json.loads((ROOT / 'tools/extract/dongs.json').read_text(encoding='utf-8'))

# 동 성격(kind) : 면적 등급 + 읍/면 여부 + 소속 구의 상권 성격에서 유도한다.
# 전부 경계 데이터에서 나온 값이라 임의로 지어낸 설정이 아니다.
TRAIT = {}
for f, blk in new_gu.items():
    for r in blk['gu']:
        m = (r.split('|') + [''] * 12)[:12]      # 뒤쪽 빈 필드가 잘려 있을 수 있다
        TRAIT[(m[10] or '') + m[0]] = m[7]


def kind_of(name, km2, gt, pct):
    """
    동 성격 = 읍·면 여부 + 구 안에서의 면적 순위(pct) + 소속 구의 상권 성격.
    면적 순위를 쓰는 이유 : 같은 구라도 도심 쪽은 동이 잘게 쪼개져 작고,
    외곽은 하나가 넓다. 실제 밀도 차이를 반영하면서 구 안에서 성격이 고르게 퍼진다.
    """
    if name.endswith('면'):
        return 'tr' if gt == 'tr' else 'rs'
    if name.endswith('읍'):
        return 'nt' if km2 > 20 else 'ap'
    base = {'office': 'of', 'resi': 'ap', 'mixed': 'mixed'}.get(gt, gt)
    if pct <= 0.30:                      # 구 안에서 가장 조밀한 쪽
        return 'st'
    if pct >= 0.78:                      # 가장 넓은 쪽
        return 'rs' if base not in ('nt', 'ind', 'tr') else base
    if 0.30 < pct <= 0.55 and base in ('of', 'st'):
        return 'md' if km2 < 2.0 else base
    return base


missing = set()
for sidonm, sggs in dj.items():
    for sgg, rows in sggs.items():
        gt = TRAIT.get(sgg)
        if gt is None:
            missing.add(sgg); gt = 'mixed'
        order = sorted(range(len(rows)), key=lambda i: rows[i]['km2'])
        pct = {}
        n = max(1, len(rows) - 1)
        for rank, i in enumerate(order):
            pct[i] = rank / n
        for i, r in enumerate(rows):
            r['kind'] = kind_of(r['name'], r['km2'], gt, pct[i])
if missing:
    print('  ! 구 성격 미매칭:', sorted(missing))
out = ['<?php', '/**', ' * 행정동 전수 시드 (서울 · 경기 · 인천)', ' *',
       ' * ⚠ 자동 생성 — 직접 수정하지 말고 `python3 tools/extract/build_dongs.py` 후',
       ' *   `python3 tools/extract/rewrite_seeds.py` 로 다시 만든다.',
       ' *',
       ' * 출처 : 행정동 경계 오픈 데이터(2026-07-01 기준). 번호 행정동은 대표 1곳으로 통합.',
       ' * 필드 : 이름|슬러그|성격|위도|경도|면적km2|면적등급|구내방위|인접행정동',
       ' *   좌표·면적·인접·방위는 실제 경계에서 계산한 값이다.',
       ' */', 'return [']
total = 0
for sidonm in ('서울특별시', '경기도', '인천광역시'):
    ss = SIDO_SLUG[sidonm]
    out.append(f"\n/* ════════ {sidonm} ════════ */")
    for sgg in sorted(dj[sidonm]):
        rows = dj[sidonm][sgg]
        total += len(rows)
        out.append(f"'{ss}|{sgg}' => [")
        for d in rows:
            nb = ','.join(d['nb'])
            out.append("  '{}|{}|{}|{}|{}|{}|{}|{}|{}',".format(
                d['name'], d['slug'], d['kind'], d['lat'], d['lng'],
                d['km2'], d['grade'], d['dir'], nb))
        out.append('],')
out.append('];')
(SEED / 'dongs.php').write_text('\n'.join(out) + '\n', encoding='utf-8')
print(f'  dongs.php : 행정동 {total}개')
