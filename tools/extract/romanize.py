# -*- coding: utf-8 -*-
"""
국어의 로마자 표기법(개정) 기반 변환기 — 슬러그 생성 전용.

PyPI 의 공개 변환기들이 자음동화를 처리하지 않아(신림→sinrim, 종로→jongro)
표기법에 맞는 결과가 나오도록 직접 구현한다.
  신림 → sillim / 종로 → jongno / 왕십리 → wangsimni / 선릉 → seolleung
"""
CHO = ['g','kk','n','d','tt','r','m','b','pp','s','ss','','j','jj','ch','k','t','p','h']
JUNG = ['a','ae','ya','yae','eo','e','yeo','ye','o','wa','wae','oe','yo','u',
        'wo','we','wi','yu','eu','ui','i']
# 종성의 대표음 (받침 발음 기준)
JONG_SOUND = ['', 'k','k','k','n','n','n','t','l','k','m','l','l','l','p','l',
              'm','p','p','t','t','ng','t','t','k','t','p','t']
# 종성이 다음 음절 초성 ㅇ 과 만날 때(연음) 쓰는 소리
JONG_LINK  = ['', 'g','kk','ks','n','nj','nh','d','r','lg','lm','lb','ls','lt','lp','lh',
              'm','b','bs','s','ss','ng','j','ch','k','t','p','h']

# (앞 받침 대표음, 뒤 초성) → (바뀐 받침, 바뀐 초성)
ASSIM = {
    ('k','n'): ('ng','n'), ('k','m'): ('ng','m'), ('k','r'): ('ng','n'),
    ('t','n'): ('n','n'),  ('t','m'): ('n','m'),  ('t','r'): ('n','n'),
    ('p','n'): ('m','n'),  ('p','m'): ('m','m'),  ('p','r'): ('m','n'),
    ('ng','r'): ('ng','n'),
    ('n','r'): ('l','l'),  ('l','n'): ('l','l'),
    ('m','r'): ('m','n'),
}
# 격음화 : 받침 + ㅎ
ASPIRATE = {('k','h'): ('', 'k'), ('t','h'): ('', 't'), ('p','h'): ('', 'p')}


def _decompose(ch):
    c = ord(ch) - 0xAC00
    return c // 588, (c % 588) // 28, c % 28


def romanize(text):
    syl = []            # [초성idx, 중성idx, 종성idx]
    for ch in text:
        if 0xAC00 <= ord(ch) <= 0xD7A3:
            syl.append(list(_decompose(ch)))
        else:
            syl.append(ch)      # 한글이 아닌 글자는 그대로

    out = []
    for i, s in enumerate(syl):
        if not isinstance(s, list):
            out.append(s if s.isalnum() else '-')
            continue
        cho, jung, jong = s
        nxt = syl[i + 1] if i + 1 < len(syl) and isinstance(syl[i + 1], list) else None

        onset = CHO[cho]
        # ㄹ 초성 : 모음 뒤에서는 r, 자음(ㄹ·ㄴ) 뒤에서는 l — 아래 동화 처리에서 확정
        prev = syl[i - 1] if i > 0 and isinstance(syl[i - 1], list) else None
        if cho == 5:  # ㄹ
            onset = 'r' if (prev is None or prev[2] == 0) else 'r'

        tail = ''
        if jong:
            if nxt and nxt[0] == 11:        # 다음 초성이 ㅇ → 연음
                tail = ''
                syl[i + 1] = [cho, nxt[1], nxt[2]]   # placeholder, 아래에서 교체
                syl[i + 1] = nxt
                nxt_onset_override = JONG_LINK[jong]
                out.append(onset + JUNG[jung])
                out.append(nxt_onset_override)
                syl[i + 1] = [11, nxt[1], nxt[2]]    # 초성을 ㅇ(무음)으로 두고 이미 붙였음
                continue
            tail = JONG_SOUND[jong]

        if tail and nxt:
            nxt_onset = CHO[nxt[0]]
            key = (tail, nxt_onset)
            if key in ASPIRATE:
                tail, new_onset = ASPIRATE[key]
                syl[i + 1] = [nxt[0], nxt[1], nxt[2]]
                out.append(onset + JUNG[jung] + tail)
                out.append(new_onset)
                syl[i + 1] = [11, nxt[1], nxt[2]]
                continue
            if key in ASSIM:
                tail, new_onset = ASSIM[key]
                out.append(onset + JUNG[jung] + tail)
                out.append(new_onset)
                syl[i + 1] = [11, nxt[1], nxt[2]]
                continue

        out.append(onset + JUNG[jung] + tail)
    return ''.join(out)


def slug(text):
    """행정동명 → URL 슬러그 (접미사 동/읍/면/가 제거)"""
    import re
    t = text
    for suf in ('동', '읍', '면', '가'):
        if t.endswith(suf) and len(t) > 1:
            t = t[:-1]
            break
    s = romanize(t)
    s = re.sub(r'[^a-z0-9]+', '-', s.lower()).strip('-')
    return s or 'area'


if __name__ == '__main__':
    tests = ['신림동','종로동','왕십리','선릉','역삼동','금호동','청량리','합정동','상계동',
             '공릉동','답십리동','중랑구','미추홀구','제물포구','서해구','검단구','동탄구',
             '효행구','만세구','병점구','원미구','소사구','오정구','상암동','목동','독립문']
    for t in tests:
        print(f'{t:8s} → {slug(t)}')
