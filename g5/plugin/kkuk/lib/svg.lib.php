<?php
/**
 * kkuk-care · 텍스트 기반 SVG 생성기
 *
 * - 래스터 이미지(JPG/PNG)를 전혀 쓰지 않는다. 히어로박스·업소 썸네일 모두 인라인 SVG.
 * - 모든 색/도형/패턴은 슬러그 해시로 결정되므로 지역마다 다른 그림이 나오고,
 *   같은 지역은 항상 같은 그림이 나온다(캐시·스냅샷 안정).
 * - 인라인 SVG이므로 내부 <style>의 미디어쿼리가 문서 뷰포트에 반응한다.
 */
if (!defined('_KKUK_')) define('_KKUK_', true);

/** SVG/HTML 텍스트 이스케이프 */
function kkuk_e($s) { return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); }

/** 문자열 → 0 이상의 정수 해시 */
function kkuk_hash($seed) { return (int)sprintf('%u', crc32('kkuk:' . $seed)); }

/** 해시에서 n개 중 하나를 고른다 (salt로 축을 분리) */
function kkuk_pick($seed, $n, $salt = '') { return kkuk_hash($seed . '|' . $salt) % max(1, $n); }

/** 한글 1 : 영문 0.52 비율로 텍스트 폭을 근사한다(SVG 레이아웃용) */
function kkuk_text_w($s, $fs) {
    $w = 0.0;
    $len = mb_strlen($s, 'UTF-8');
    for ($i = 0; $i < $len; $i++) {
        $c = mb_substr($s, $i, 1, 'UTF-8');
        $o = mb_ord($c, 'UTF-8');
        if ($o > 0x2000)      $w += 1.00;   // 한글·CJK·기호
        elseif ($o === 0x20)  $w += 0.30;   // 공백
        elseif ($o < 0x80)    $w += 0.54;   // 영문·숫자
        else                  $w += 0.80;
    }
    return $w * $fs;
}

/**
 * 14종 팔레트. 모두 어두운 배경 + 밝은 글자 조합으로,
 * 밝은 본문 지면과 대비되어 히어로가 확실히 분리된다. (본문 대비 7:1 이상)
 */
function kkuk_palettes() {
    return [
        ['bg'=>'#0B3B35','a'=>'#1D7A6B','b'=>'#4FC2AF','c'=>'#F2E7D5','tx'=>'#F4FBF8','name'=>'teal'],
        ['bg'=>'#1B2450','a'=>'#33407F','b'=>'#7D8FE0','c'=>'#EDE7D8','tx'=>'#F3F4FD','name'=>'indigo'],
        ['bg'=>'#3A1B33','a'=>'#70304F','b'=>'#C87BA0','c'=>'#F3E3DF','tx'=>'#FCF2F6','name'=>'plum'],
        ['bg'=>'#15301C','a'=>'#2F6134','b'=>'#7CB97A','c'=>'#EDEBD2','tx'=>'#F2FAF0','name'=>'forest'],
        ['bg'=>'#3C2014','a'=>'#7A3B1D','b'=>'#D98B52','c'=>'#F2E2CE','tx'=>'#FDF3E9','name'=>'clay'],
        ['bg'=>'#11253A','a'=>'#27496B','b'=>'#E0B457','c'=>'#E9E2D1','tx'=>'#F1F6FB','name'=>'navygold'],
        ['bg'=>'#2A1B3D','a'=>'#513A74','b'=>'#A48BD6','c'=>'#EDE4F2','tx'=>'#F7F2FC','name'=>'aubergine'],
        ['bg'=>'#17292E','a'=>'#2E575F','b'=>'#6FB3BC','c'=>'#E6E9DE','tx'=>'#F0F8F9','name'=>'slateteal'],
        ['bg'=>'#3A1620','a'=>'#75283A','b'=>'#C96A7C','c'=>'#F0DFE0','tx'=>'#FCF1F3','name'=>'burgundy'],
        ['bg'=>'#2B2E14','a'=>'#585E26','b'=>'#AEB667','c'=>'#EFEAD4','tx'=>'#F8F8EA','name'=>'olive'],
        ['bg'=>'#2B2430','a'=>'#5A4A5F','b'=>'#CBA3B5','c'=>'#EEE6E4','tx'=>'#F8F3F4','name'=>'steelrose'],
        ['bg'=>'#0E2A3F','a'=>'#1F5675','b'=>'#5EA8C7','c'=>'#E3EAE9','tx'=>'#EEF7FB','name'=>'ocean'],
        ['bg'=>'#2E2018','a'=>'#60422D','b'=>'#BE8E5E','c'=>'#EFE4D3','tx'=>'#FAF2E8','name'=>'cacao'],
        ['bg'=>'#1D2A22','a'=>'#3C5A45','b'=>'#C3A765','c'=>'#E8E7D8','tx'=>'#F3F7F1','name'=>'mossgold'],
    ];
}

function kkuk_palette($seed) {
    $p = kkuk_palettes();
    return $p[kkuk_pick($seed, count($p), 'pal')];
}

/** 생성된 SVG의 들여쓰기·줄바꿈을 줄인다(페이지 용량 절감). 텍스트 노드는 건드리지 않는다. */
function kkuk_svg_min($s) {
    return preg_replace('/>\s*\n\s*</', '><', preg_replace('/\n\s+/', ' ', $s));
}

/** SVG 내부에서 쓰는 공통 폰트 스택 */
function kkuk_svg_font() {
    return "'Pretendard Variable',Pretendard,-apple-system,'Apple SD Gothic Neo','Noto Sans KR',sans-serif";
}

/**
 * 장식 레이어 5종. 같은 팔레트라도 도형 구성이 달라 지역별 인상이 겹치지 않는다.
 * @param int $v 0~4
 */
function kkuk_hero_deco($v, $p, $uid) {
    $a = $p['a']; $b = $p['b'];
    switch ($v) {
        case 0: // 대형 원호 2개 + 우상단 점패턴
            return '
      <circle cx="1065" cy="78" r="250" fill="'.$a.'" opacity=".55"/>
      <circle cx="1180" cy="330" r="150" fill="'.$b.'" opacity=".22"/>
      <rect x="860" y="0" width="340" height="420" fill="url(#dot'.$uid.')" opacity=".5"/>
      <path d="M0 420 Q170 300 340 420Z" fill="'.$b.'" opacity=".16"/>';
        case 1: // 사선 스트라이프 밴드
            return '
      <rect x="0" y="0" width="1200" height="420" fill="url(#dia'.$uid.')" opacity=".42"/>
      <path d="M980 -40 L1240 -40 L1000 460 L740 460Z" fill="'.$a.'" opacity=".6"/>
      <path d="M1120 -40 L1260 -40 L1030 460 L890 460Z" fill="'.$b.'" opacity=".2"/>';
        case 2: // 겹친 라운드 사각(카드 쌓기)
            return '
      <rect x="905" y="-60" width="300" height="300" rx="52" fill="'.$a.'" opacity=".6" transform="rotate(14 1055 90)"/>
      <rect x="975" y="150" width="250" height="250" rx="44" fill="'.$b.'" opacity=".24" transform="rotate(-9 1100 275)"/>
      <rect x="0" y="0" width="330" height="420" fill="url(#dot'.$uid.')" opacity=".4"/>';
        case 3: // 동심 링
            return '
      <circle cx="1070" cy="210" r="232" fill="none" stroke="'.$a.'" stroke-width="56" opacity=".55"/>
      <circle cx="1070" cy="210" r="140" fill="none" stroke="'.$b.'" stroke-width="22" opacity=".34"/>
      <circle cx="1070" cy="210" r="62" fill="'.$b.'" opacity=".2"/>
      <rect x="0" y="330" width="1200" height="90" fill="url(#dia'.$uid.')" opacity=".3"/>';
        default: // 물결 2겹
            return '
      <path d="M0 300 C200 215 420 395 640 300 C860 205 1040 360 1200 275 L1200 420 L0 420Z" fill="'.$a.'" opacity=".58"/>
      <path d="M0 348 C210 268 430 436 650 348 C870 260 1050 404 1200 326 L1200 420 L0 420Z" fill="'.$b.'" opacity=".22"/>
      <rect x="820" y="0" width="380" height="200" fill="url(#dot'.$uid.')" opacity=".46"/>';
    }
}

/**
 * 히어로박스 SVG
 *
 * @param array $o kicker, title, sub, chips(배열), note, seed, ratio('wide'|'tall')
 */
function kkuk_hero_svg(array $o) {
    $seed   = $o['seed'] ?? ($o['title'] ?? 'kkuk');
    $p      = kkuk_palette($seed);
    $v      = kkuk_pick($seed, 5, 'deco');
    $uid    = substr(md5($seed), 0, 7);
    $font   = kkuk_svg_font();
    $kicker = (string)($o['kicker'] ?? '');
    $title  = (string)($o['title'] ?? '');
    $sub    = (string)($o['sub'] ?? '');
    $note   = (string)($o['note'] ?? '');
    $chips  = array_values(array_filter((array)($o['chips'] ?? [])));

    // 제목 길이에 따라 본문 크기를 줄여 두 줄로 넘치지 않게 한다
    $tlen = mb_strlen($title, 'UTF-8');
    $tfs  = $tlen <= 9 ? 104 : ($tlen <= 13 ? 86 : ($tlen <= 17 ? 72 : 60));

    // 칩 레이아웃(중앙 정렬) — 폭을 미리 계산해 겹침을 방지
    $cfs = 25; $cpad = 21; $cgap = 12; $ch = 50;
    $ws = []; $tw = 0;
    foreach ($chips as $c) { $w = kkuk_text_w($c, $cfs) + $cpad * 2; $ws[] = $w; $tw += $w; }
    if ($chips) $tw += $cgap * (count($chips) - 1);
    $cx = 600 - $tw / 2;

    $chipSvg = '';
    foreach ($chips as $i => $c) {
        $w = $ws[$i];
        $chipSvg .= '
      <g>
        <rect x="'.round($cx,1).'" y="302" width="'.round($w,1).'" height="'.$ch.'" rx="25"
              fill="'.$p['bg'].'" fill-opacity=".42" stroke="'.$p['c'].'" stroke-opacity=".5" stroke-width="2"/>
        <text x="'.round($cx + $w/2,1).'" y="335" text-anchor="middle" font-size="'.$cfs.'"
              font-weight="700" fill="'.$p['c'].'">'.kkuk_e($c).'</text>
      </g>';
        $cx += $w + $cgap;
    }

    $deco = kkuk_hero_deco($v, $p, $uid);

    return kkuk_svg_min('<svg class="k-hero__svg" viewBox="0 0 1200 420" role="img" xmlns="http://www.w3.org/2000/svg"
     preserveAspectRatio="xMidYMid slice" aria-label="'.kkuk_e(trim($kicker.' '.$title.' '.$sub)).'">
  <defs>
    <pattern id="dot'.$uid.'" width="26" height="26" patternUnits="userSpaceOnUse">
      <circle cx="3" cy="3" r="2.6" fill="'.$p['c'].'" opacity=".34"/>
    </pattern>
    <pattern id="dia'.$uid.'" width="22" height="22" patternUnits="userSpaceOnUse" patternTransform="rotate(32)">
      <rect width="7" height="22" fill="'.$p['c'].'" opacity=".2"/>
    </pattern>
    <linearGradient id="vg'.$uid.'" x1="0" y1="0" x2="1" y2="0.4">
      <stop offset="0" stop-color="'.$p['bg'].'" stop-opacity=".1"/>
      <stop offset="1" stop-color="'.$p['bg'].'" stop-opacity=".82"/>
    </linearGradient>
    <style>
      .k-hs-t{font-family:'.$font.';font-weight:900;letter-spacing:-.045em}
      .k-hs-k{font-family:'.$font.';font-weight:800;letter-spacing:.14em}
      .k-hs-s{font-family:'.$font.';font-weight:700;letter-spacing:-.02em}
      .k-hs-n{font-family:'.$font.';font-weight:600;letter-spacing:0}
      @media (max-width:700px){ .k-hs-n{display:none} }
    </style>
  </defs>

  <rect width="1200" height="420" fill="'.$p['bg'].'"/>
  '.$deco.'
  <rect width="1200" height="420" fill="url(#vg'.$uid.')"/>

  <g text-anchor="middle">
    <rect x="'.round(600 - (kkuk_text_w($kicker,24)+70)/2,1).'" y="60"
          width="'.round(kkuk_text_w($kicker,24)+70,1).'" height="44" rx="22"
          fill="'.$p['b'].'" fill-opacity=".9"/>
    <text class="k-hs-k" x="600" y="89" font-size="24" fill="'.$p['bg'].'">'.kkuk_e($kicker).'</text>

    <text class="k-hs-t" x="600" y="'.(196 + ($tfs>=100?6:0)).'" font-size="'.$tfs.'" fill="'.$p['tx'].'">'.kkuk_e($title).'</text>

    <line x1="520" y1="226" x2="680" y2="226" stroke="'.$p['b'].'" stroke-width="5" stroke-linecap="round"/>

    <text class="k-hs-s" x="600" y="271" font-size="31" fill="'.$p['c'].'" fill-opacity=".94">'.kkuk_e($sub).'</text>
  </g>
  '.$chipSvg.'
  <text class="k-hs-n" x="600" y="391" text-anchor="middle" font-size="20"
        fill="'.$p['c'].'" fill-opacity=".66">'.kkuk_e($note).'</text>
</svg>');
}

/**
 * 업소 썸네일 SVG (모노그램 + 업체명 + 업종)
 *
 * @param array $o name, type, where, seed, lines(코스 2~3개)
 */
function kkuk_shop_svg(array $o) {
    $seed = $o['seed'] ?? ($o['name'] ?? 'shop');
    $p    = kkuk_palette($seed . '#s');
    $v    = kkuk_pick($seed, 4, 'sdeco');
    $uid  = substr(md5('s' . $seed), 0, 7);
    $font = kkuk_svg_font();

    $name  = (string)($o['name'] ?? '');
    $type  = (string)($o['type'] ?? '');
    $where = (string)($o['where'] ?? '');
    $mono  = mb_substr(preg_replace('/\s+/u', '', $name), 0, 2, 'UTF-8');

    $nlen = mb_strlen($name, 'UTF-8');
    $nfs  = $nlen <= 8 ? 54 : ($nlen <= 11 ? 46 : ($nlen <= 14 ? 39 : 33));

    switch ($v) {
        case 0: $deco = '<circle cx="690" cy="60" r="170" fill="'.$p['a'].'" opacity=".55"/>
                         <circle cx="760" cy="300" r="96" fill="'.$p['b'].'" opacity=".2"/>'; break;
        case 1: $deco = '<path d="M620 -30 L820 -30 L660 450 L460 450Z" fill="'.$p['a'].'" opacity=".5"/>
                         <path d="M740 -30 L830 -30 L690 450 L600 450Z" fill="'.$p['b'].'" opacity=".22"/>'; break;
        case 2: $deco = '<circle cx="700" cy="150" r="150" fill="none" stroke="'.$p['a'].'" stroke-width="44" opacity=".52"/>
                         <circle cx="700" cy="150" r="72" fill="'.$p['b'].'" opacity=".2"/>'; break;
        default: $deco = '<path d="M0 330 C140 270 300 390 460 330 C620 272 740 360 800 322 L800 450 L0 450Z" fill="'.$p['a'].'" opacity=".5"/>
                          <rect x="560" y="0" width="240" height="150" fill="url(#sd'.$uid.')" opacity=".4"/>'; break;
    }

    return kkuk_svg_min('<svg viewBox="0 0 800 450" role="img" xmlns="http://www.w3.org/2000/svg"
     preserveAspectRatio="xMidYMid slice" aria-label="'.kkuk_e($name.' '.$type.' 이미지').'">
  <defs>
    <pattern id="sd'.$uid.'" width="22" height="22" patternUnits="userSpaceOnUse">
      <circle cx="3" cy="3" r="2.3" fill="'.$p['c'].'" opacity=".34"/>
    </pattern>
    <style>
      .k-ss-m{font-family:'.$font.';font-weight:900;letter-spacing:-.06em}
      .k-ss-n{font-family:'.$font.';font-weight:850;letter-spacing:-.035em}
      .k-ss-s{font-family:'.$font.';font-weight:650;letter-spacing:-.01em}
    </style>
  </defs>
  <rect width="800" height="450" fill="'.$p['bg'].'"/>
  '.$deco.'
  <rect x="52" y="52" width="150" height="150" rx="38" fill="'.$p['b'].'"/>
  <text class="k-ss-m" x="127" y="151" text-anchor="middle" font-size="76" fill="'.$p['bg'].'">'.kkuk_e($mono).'</text>

  <text class="k-ss-n" x="52" y="322" font-size="'.$nfs.'" fill="'.$p['tx'].'">'.kkuk_e($name).'</text>
  <line x1="54" y1="352" x2="150" y2="352" stroke="'.$p['b'].'" stroke-width="5" stroke-linecap="round"/>
  <text class="k-ss-s" x="52" y="398" font-size="25" fill="'.$p['c'].'" fill-opacity=".72">'.kkuk_e($where).'</text>
</svg>');
}

/** 헤더 로고 마크 (상호 미확정 상태이므로 심볼만 고정, 워드마크는 설정값으로 교체) */
function kkuk_logo_svg($size = 38) {
    $s = (int)$size;
    return '<svg class="k-logo__mark" width="'.$s.'" height="'.$s.'" viewBox="0 0 48 48"
     xmlns="http://www.w3.org/2000/svg" role="img" aria-label="로고">
  <rect x="1.5" y="1.5" width="45" height="45" rx="13" fill="var(--brand)" stroke="var(--line-strong)" stroke-width="3"/>
  <path d="M14 31c0-7 4.5-11 10-11s10 4 10 11" fill="none" stroke="#fff" stroke-width="3.6" stroke-linecap="round"/>
  <circle cx="24" cy="15.5" r="4.2" fill="#fff"/>
  <path d="M15.5 36.5h17" stroke="#fff" stroke-width="3.2" stroke-linecap="round" opacity=".62"/>
</svg>';
}

/** 인터페이스 아이콘 (currentColor 상속) */
function kkuk_icon($name, $size = 20) {
    $s = (int)$size;
    $o = 'width="'.$s.'" height="'.$s.'" viewBox="0 0 24 24" fill="none" stroke="currentColor"
          stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
          xmlns="http://www.w3.org/2000/svg"';
    switch ($name) {
        case 'phone':
            return '<svg '.$o.'><path d="M21.5 16.9v2.6a2 2 0 0 1-2.2 2 19.3 19.3 0 0 1-8.4-3 19 19 0 0 1-5.8-5.8 19.3 19.3 0 0 1-3-8.5A2 2 0 0 1 4.1 2h2.6a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L7.8 9.8a15.5 15.5 0 0 0 5.8 5.8l1.2-1.1a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.8 2.2z" fill="currentColor" stroke="none"/></svg>';
        case 'pin':
            return '<svg '.$o.'><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><circle cx="12" cy="10" r="3"/></svg>';
        case 'clock':
            return '<svg '.$o.'><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>';
        case 'star':
            return '<svg '.$o.' stroke="none"><path d="M12 2.6l2.9 5.9 6.5.9-4.7 4.6 1.1 6.5L12 17.4 6.2 20.5l1.1-6.5L2.6 9.4l6.5-.9z" fill="currentColor"/></svg>';
        case 'chat':
            return '<svg '.$o.'><path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 9.6 9.6 0 0 1-2.7-.4L5 21l1.2-3.4A8.3 8.3 0 0 1 3 11.5 8.4 8.4 0 0 1 12 3a8.4 8.4 0 0 1 9 8.5z"/></svg>';
        case 'sun':
            return '<svg '.$o.'><circle cx="12" cy="12" r="4.2"/><path d="M12 2v2.2M12 19.8V22M2 12h2.2M19.8 12H22M4.9 4.9l1.6 1.6M17.5 17.5l1.6 1.6M19.1 4.9l-1.6 1.6M6.5 17.5l-1.6 1.6"/></svg>';
        case 'route':
            return '<svg '.$o.'><circle cx="6" cy="19" r="2.6"/><circle cx="18" cy="5" r="2.6"/><path d="M8.6 19H14a3.4 3.4 0 0 0 0-6.8h-4a3.4 3.4 0 0 1 0-6.8h5.4"/></svg>';
        case 'check':
            return '<svg '.$o.'><path d="M4 12.8l5.2 5.2L20 7.2"/></svg>';
        default:
            return '';
    }
}
