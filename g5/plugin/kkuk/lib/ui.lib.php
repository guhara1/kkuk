<?php
/**
 * 공통 UI 컴포넌트
 *
 * 정적 프리뷰(tools/build_preview.php)와 그누보드5 런타임이 같은 함수를 쓰므로
 * "프리뷰에서 본 화면 = 실제 화면"이 보장된다.
 * 내부 링크는 전부 kkuk_u() 를 통과한다(프리뷰에서는 평면 파일명으로 치환).
 */

/** 내부 링크 변환 훅 */
function kkuk_u($path) {
    if (function_exists('kkuk_url_filter')) return kkuk_url_filter($path);
    return $path;
}

/** 전화번호 하이픈 표기 */
function kkuk_tel_html() { return '<b>' . kkuk_e(KKUK_TEL_FMT) . '</b>'; }

/* ---------------------------------------------------------
   문서 머리 / 꼬리
   --------------------------------------------------------- */

function kkuk_doc_open(array $p) {
    $css = function_exists('kkuk_asset_filter') ? kkuk_asset_filter('kkuk.css') : KKUK_ASSET . '/kkuk.css';
    $js  = function_exists('kkuk_asset_filter') ? kkuk_asset_filter('kkuk.js')  : KKUK_ASSET . '/kkuk.js';
    ob_start(); ?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<meta name="format-detection" content="telephone=yes">
<meta name="theme-color" content="#0B6257" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#121110" media="(prefers-color-scheme: dark)">
<?= kkuk_head_tags($p) ?>
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/variable/pretendardvariable-dynamic-subset.min.css">
<link rel="stylesheet" href="<?= kkuk_e($css) ?>">
<script>
/* 다크모드 선택값을 CSS 적용 전에 반영해 깜빡임을 없앤다 */
try{var t=localStorage.getItem('kkuk-theme');if(t==='dark'||t==='light')
document.documentElement.setAttribute('data-theme',t);}catch(e){}
</script>
</head>
<body>
<a class="k-skip" href="#k-main">본문으로 바로가기</a>
<?php return ob_get_clean();
}

function kkuk_doc_close(array $p = []) {
    $js = function_exists('kkuk_asset_filter') ? kkuk_asset_filter('kkuk.js') : KKUK_ASSET . '/kkuk.js';
    return kkuk_callbar($p['area'] ?? '')
        . "\n" . kkuk_footer()
        . "\n" . '<script src="' . kkuk_e($js) . '" defer></script>' . "\n</body>\n</html>\n";
}

/* ---------------------------------------------------------
   헤더
   --------------------------------------------------------- */
function kkuk_header($activeSido = '') {
    $nav = '';
    foreach (kkuk_sido_all() as $s) {
        $cur = ($activeSido === $s['slug']) ? ' aria-current="page"' : '';
        $nav .= '<a href="' . kkuk_e(kkuk_u($s['url'])) . '"' . $cur . '>' . kkuk_e($s['name']) . '</a>';
    }
    ob_start(); ?>
<header class="k-head">
  <div class="k-wrap k-head__in">
    <a class="k-logo" href="<?= kkuk_e(kkuk_u('/')) ?>">
      <?= kkuk_logo_svg(38) ?>
      <span class="k-logo__txt"><?= kkuk_e(KKUK_BRAND) ?><small><?= kkuk_e(KKUK_BRAND_SUB) ?></small></span>
    </a>
    <nav class="k-head__nav" aria-label="지역 선택"><?= $nav ?></nav>
    <div class="k-head__act">
      <button class="k-iconbtn" type="button" data-kkuk-theme aria-label="화면 밝기 전환"><?= kkuk_icon('sun', 20) ?></button>
      <a class="k-head__tel" href="tel:<?= kkuk_e(KKUK_TEL) ?>"
         data-kkuk-label="<?= kkuk_e(KKUK_TEL_LABEL) ?> 전화연결" data-kkuk-place="header"
         aria-label="<?= kkuk_e(KKUK_TEL_LABEL) ?> 전화연결 <?= kkuk_e(KKUK_TEL_FMT) ?>">
        <?= kkuk_icon('phone', 18) ?><span><?= kkuk_e(KKUK_TEL_LABEL) ?></span><b><?= kkuk_e(KKUK_TEL_FMT) ?></b>
      </a>
    </div>
  </div>
</header>
<?php return ob_get_clean();
}

/* ---------------------------------------------------------
   모바일 고정 전화연결 바  ★ 요청 핵심 사양
   - 860px 이하에서만 표시, body 하단 패딩으로 콘텐츠 가림 방지
   - 탭타깃 58px 이상, env(safe-area-inset-bottom) 반영 (아이폰 홈바 대응)
   - 버튼 문구에 '출장마사지' 고정 노출 + 번호 상시 노출
   - aria-label 로 스크린리더에도 동일하게 전달, 클릭은 JS 에서 전환 집계
   --------------------------------------------------------- */
function kkuk_callbar($place = '') {
    $l1 = KKUK_TEL_LABEL . ' · 홈타이 24시 상담';
    ob_start(); ?>
<nav class="k-callbar" aria-label="빠른 상담">
  <a class="k-callbar__tel" href="tel:<?= kkuk_e(KKUK_TEL) ?>"
     data-kkuk-label="<?= kkuk_e(KKUK_TEL_LABEL) ?> 전화연결" data-kkuk-place="<?= kkuk_e($place) ?>"
     aria-label="<?= kkuk_e(KKUK_TEL_LABEL) ?> 전화연결 <?= kkuk_e(KKUK_TEL_FMT) ?>">
    <span class="k-callbar__ic" aria-hidden="true"><?= kkuk_icon('phone', 18) ?></span>
    <span class="k-callbar__tx">
      <span class="k-callbar__l1"><?= kkuk_e($l1) ?></span>
      <span class="k-callbar__l2"><span class="k-callbar__pre">전화연결 </span><?= kkuk_e(KKUK_TEL_FMT) ?></span>
    </span>
  </a>
  <a class="k-callbar__sub" href="#k-faq" aria-label="이용 안내 보기">
    <?= kkuk_icon('chat', 18) ?><span>이용안내</span>
  </a>
</nav>
<?php return ob_get_clean();
}

/* ---------------------------------------------------------
   푸터
   --------------------------------------------------------- */
function kkuk_footer() {
    $sido = '';
    foreach (kkuk_sido_all() as $s) {
        $sido .= '<li><a href="' . kkuk_e(kkuk_u($s['url'])) . '">' . kkuk_e($s['name'])
               . ' 지역 전체 (' . (int)$s['gu_count'] . '개 구)</a></li>';
    }
    $demo = KKUK_DEMO_DATA
        ? '<b>데이터 안내</b> · 현재 노출되는 업소 정보는 화면·구조 검증용 <b>가상 데이터</b>입니다. '
        . '실제 업체 정보로 교체하기 전까지 검색엔진 색인은 차단(noindex)되어 있습니다.<br>'
        : '';
    ob_start(); ?>
<footer class="k-foot">
  <div class="k-wrap">
    <div class="k-foot__grid">
      <div>
        <div class="k-foot__t"><?= kkuk_e(KKUK_BRAND) ?></div>
        <p class="k-small">서울 · 경기 · 인천 행정구와 대표 행정동 기준으로 로드샵, 출장마사지, 홈타이 정보를 정리합니다.</p>
        <p class="k-small" style="margin-top:10px">
          <a href="tel:<?= kkuk_e(KKUK_TEL) ?>" data-kkuk-label="<?= kkuk_e(KKUK_TEL_LABEL) ?> 전화연결" data-kkuk-place="footer">
            <b><?= kkuk_e(KKUK_TEL_LABEL) ?> 상담 <?= kkuk_e(KKUK_TEL_FMT) ?></b></a>
        </p>
      </div>
      <div>
        <div class="k-foot__t">지역 바로가기</div>
        <ul class="k-foot__li"><?= $sido ?></ul>
      </div>
      <div>
        <div class="k-foot__t">이용 안내</div>
        <ul class="k-foot__li">
          <li>예약은 전화 상담으로 진행됩니다.</li>
          <li>코스·요금은 업소별로 다르며 총액 기준으로 안내받으시기 바랍니다.</li>
          <li>표기된 운영 시간은 변동될 수 있습니다.</li>
        </ul>
      </div>
    </div>
    <div class="k-foot__legal">
      <?= $demo ?>
      <b>서비스 성격</b> · 본 사이트가 안내하는 관리는 피로 회복과 근육 이완을 돕는 생활 서비스이며
      <b>의료 행위가 아닙니다</b>. 질병의 진단·치료 목적에는 사용할 수 없고, 통증의 원인 확인은 의료기관에서 받으셔야 합니다.
      임신 중, 급성 염증·고열, 최근 수술·골절 이력이 있는 경우에는 이용을 권하지 않습니다.<br>
      <b>건전 영업</b> · 본 사이트는 성인 유흥·불법 영업과 무관하며, 관련 문의는 안내하지 않습니다. 19세 미만 이용 불가.<br>
      <?= kkuk_e(KKUK_BIZ_NAME) ?> · 대표 <?= kkuk_e(KKUK_BIZ_OWNER) ?> ·
      사업자등록번호 <?= kkuk_e(KKUK_BIZ_NO) ?> · <?= kkuk_e(KKUK_BIZ_ADDR) ?><br>
      © <?= date('Y') ?> <?= kkuk_e(KKUK_BRAND) ?>. All rights reserved.
    </div>
  </div>
</footer>
<?php return ob_get_clean();
}

/* ---------------------------------------------------------
   조각 컴포넌트
   --------------------------------------------------------- */

function kkuk_bc(array $crumbs) {
    $li = '';
    $last = count($crumbs) - 1;
    foreach ($crumbs as $i => $c) {
        $li .= $i === $last
            ? '<li><span aria-current="page">' . kkuk_e($c[0]) . '</span></li>'
            : '<li><a href="' . kkuk_e(kkuk_u($c[1])) . '">' . kkuk_e($c[0]) . '</a></li>';
    }
    return '<nav class="k-bc" aria-label="현재 위치"><ol>' . $li . '</ol></nav>';
}

function kkuk_shead($title, $sub = '') {
    return '<div class="k-shead"><span class="k-shead__bar" aria-hidden="true"></span><h2 class="k-h2">'
        . '<span class="k-shead__t">' . kkuk_e($title) . '</span>'
        . ($sub !== '' ? '<span class="k-shead__sub">' . kkuk_e($sub) . '</span>' : '')
        . '</h2></div>';
}

/** 지역 칩 목록 : items = [[라벨, url, 개수], ...] */
function kkuk_chips(array $items, $currentUrl = '', $scroll = false) {
    $h = '<div class="k-chips' . ($scroll ? ' k-chips--scroll' : '') . '">';
    foreach ($items as $it) {
        [$label, $url] = $it;
        $n   = $it[2] ?? null;
        $cur = ($currentUrl !== '' && $url === $currentUrl) ? ' aria-current="page"' : '';
        $h  .= '<a class="k-chip" href="' . kkuk_e(kkuk_u($url)) . '"' . $cur . '>'
             . kkuk_e($label)
             . ($n !== null ? '<span class="k-chip__n">' . (int)$n . '</span>' : '')
             . '</a>';
    }
    return $h . '</div>';
}

function kkuk_links_block($title, array $links) {
    if (!$links) return '';
    $h = '<div class="k-links"><div class="k-links__t">' . kkuk_e($title) . '</div><div class="k-links__list">';
    foreach ($links as $l) {
        $h .= '<a href="' . kkuk_e(kkuk_u($l[1])) . '">' . kkuk_e($l[0]) . '</a>';
    }
    return $h . '</div></div>';
}

/** 큰 전화 CTA */
function kkuk_cta_tel($place = '', $line1 = '') {
    if ($line1 === '') $line1 = KKUK_TEL_LABEL . ' · 홈타이 예약상담';
    return '<a class="k-cta-tel" href="tel:' . kkuk_e(KKUK_TEL) . '"'
        . ' data-kkuk-label="' . kkuk_e(KKUK_TEL_LABEL) . ' 전화연결" data-kkuk-place="' . kkuk_e($place) . '"'
        . ' aria-label="' . kkuk_e(KKUK_TEL_LABEL) . ' 전화연결 ' . kkuk_e(KKUK_TEL_FMT) . '">'
        . '<span class="k-cta-tel__ic" aria-hidden="true">' . kkuk_icon('phone', 20) . '</span>'
        . '<span class="k-cta-tel__tx"><span class="k-cta-tel__l1">' . kkuk_e($line1) . '</span>'
        . '<span class="k-cta-tel__l2">' . kkuk_e(KKUK_TEL_FMT) . '</span></span></a>';
}

/** 업소 카드 */
function kkuk_shop_card(array $s, $showArea = true) {
    $d    = kkuk_dong($s['dong']);
    $gu   = kkuk_gu($s['gu']);
    $area = $showArea ? (($gu['label'] ?? '') . ' ' . ($d['name'] ?? '')) : ($d['name'] ?? '');
    // 썸네일에는 동 이름만 넣는다(카드 본문이 업종·지역을 이미 표기하므로 중복을 피한다)
    $svg  = kkuk_shop_svg(['name' => $s['name'], 'type' => $s['type_badge'],
                           'where' => $d['name'] ?? '', 'seed' => $s['slug']]);
    $tags = '';
    foreach (array_slice($s['tags'], 0, 3) as $t) $tags .= '<span class="k-tag">' . kkuk_e($t) . '</span>';

    ob_start(); ?>
<article class="k-card k-shop" data-shop-type="<?= kkuk_e($s['type']) ?>">
  <div class="k-shop__thumb">
    <?= $svg ?>
    <span class="k-shop__type"><?= kkuk_e($s['type_label']) ?></span>
  </div>
  <div class="k-shop__body">
    <h3 class="k-shop__name"><a href="<?= kkuk_e(kkuk_u($s['url'])) ?>"><?= kkuk_e($s['name']) ?></a></h3>
    <p class="k-shop__where"><?= kkuk_icon('pin', 15) ?><?= kkuk_e($area) ?></p>
    <p class="k-shop__desc"><?= kkuk_e($s['tagline']) ?></p>
    <div class="k-shop__tags"><?= $tags ?></div>
  </div>
  <div class="k-shop__foot">
    <span class="k-price"><?= (int)$s['courses'][0]['min'] ?>분 <b><?= number_format($s['price_from']) ?></b>원~</span>
    <span class="k-rate"><?= kkuk_icon('star', 14) ?><?= kkuk_e((string)$s['rating']) ?><span>(<?= (int)$s['reviews'] ?>)</span></span>
  </div>
</article>
<?php return ob_get_clean();
}

function kkuk_shop_grid(array $list, $showArea = true, $cols = 3) {
    if (!$list) return '<div class="k-empty">등록된 업소가 없습니다. 전화 상담으로 인근 지역을 안내받으실 수 있습니다.</div>';
    $h = '<div class="k-grid k-cols-' . (int)$cols . '">';
    foreach ($list as $s) $h .= kkuk_shop_card($s, $showArea);
    return $h . '</div>';
}

/** 업종 필터 바 */
function kkuk_filter_bar(array $list) {
    $cnt = ['*' => count($list)];
    foreach ($list as $s) $cnt[$s['type']] = ($cnt[$s['type']] ?? 0) + 1;
    $labels = ['*' => '전체', 'road' => '로드샵', 'visit' => '출장마사지', 'home' => '홈타이', 'spa' => '스파테라피'];
    $h = '<div class="k-chips" data-kkuk-filter role="group" aria-label="업종 필터">';
    foreach ($labels as $k => $v) {
        if (!isset($cnt[$k])) continue;
        $on = $k === '*' ? ' k-chip--on' : '';
        $h .= '<button type="button" class="k-chip' . $on . '" data-filter="' . kkuk_e($k) . '"'
            . ' aria-pressed="' . ($k === '*' ? 'true' : 'false') . '">' . kkuk_e($v)
            . '<span class="k-chip__n">' . (int)$cnt[$k] . '</span></button>';
    }
    return $h . '</div><p class="k-sr" aria-live="polite" data-kkuk-live></p>';
}

/** 본문 블록 → HTML */
function kkuk_article_html(array $blocks, $note = '') {
    $h = '<div class="k-article">';
    foreach ($blocks as $i => $b) {
        $h .= '<h2 id="sec-' . ($i + 1) . '">' . kkuk_e($b['h']) . '</h2>';
        foreach ($b['ps'] as $p) $h .= '<p>' . kkuk_e($p) . '</p>';
    }
    if ($note !== '') $h .= '<p class="k-note">' . $note . '</p>';
    return $h . '</div>';
}

/** AEO 질문 블록 — 첫 번째 항목은 펼친 상태로 두어 답이 바로 보이게 한다 */
function kkuk_faq_html(array $faq) {
    if (!$faq) return '';
    $h = '<div class="k-faq" id="k-faq">';
    foreach ($faq as $i => $f) {
        $open = $i === 0 ? ' open' : '';
        $h .= '<details' . $open . '><summary><span class="k-q" aria-hidden="true">Q</span>'
            . kkuk_e($f['q']) . '</summary><div class="k-faq__a k-answer">' . kkuk_e($f['a']) . '</div></details>';
    }
    return $h . '</div>';
}
