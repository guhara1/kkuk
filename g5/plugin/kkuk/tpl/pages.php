<?php
/**
 * 페이지 템플릿 (홈 / 시도 / 행정구 / 행정동 / 업소)
 *
 * 각 함수는 완성된 HTML 문자열을 돌려준다.
 * router.php(그누보드5)와 tools/build_preview.php(정적 빌드)가 같은 함수를 호출한다.
 */

/* =========================================================
   홈
   ========================================================= */
function kkuk_page_home() {
    $sidos = kkuk_sido_all();
    $totalGu = $totalShop = 0;
    foreach ($sidos as $s) { $totalGu += $s['gu_count']; $totalShop += $s['shop_count']; }
    $totalDong = count(kkuk_dong_all());

    // 타이틀에는 '출장마사지 · 홈타이' 키워드를 넣지 않는다(요청 사항).
    // 두 키워드는 메타 설명 · 본문 · 업소 디스크립션에서 계속 노출된다.
    $title = KKUK_BRAND . ' | 서울·경기·인천 지역별 마사지 안내';
    $desc  = '서울 25개 구, 경기 42개 시·구, 인천 10개 구·군과 대표 행정동 ' . $totalDong
           . '곳을 기준으로 로드샵과 출장마사지, 홈타이 정보를 지역별로 정리했습니다. 예약 상담 ' . KKUK_TEL_FMT . '.';

    $faqVars = ['AREA' => '서울·경기·인천', 'DONG' => '', 'TEL_FMT' => KKUK_TEL_FMT,
                'S_SHOP' => '업소', 'S_AREA' => '지역', 'A1' => '가까운 역'];
    $faq = kkuk_faq($faqVars, 'home', 5);

    $p = ['type' => 'home', 'title' => $title, 'desc' => $desc, 'url' => '/',
          'area' => '서울·경기·인천', 'crumbs' => [['홈', '/']], 'faq' => $faq];

    $hero = kkuk_hero_svg([
        'seed'   => 'kkuk-home',
        'kicker' => '서울 · 경기 · 인천',
        'title'  => '지역별 마사지 안내',
        'sub'    => '로드샵 · 출장마사지 · 홈타이를 행정동 단위로',
        'chips'  => [],
        'note'   => '머무는 동네를 고르면 접근 동선과 코스, 요금 기준이 함께 보입니다',
    ]);

    /* 시도 카드 */
    $cards = '';
    foreach ($sidos as $s) {
        $chips = [];
        foreach (array_slice($s['gu'], 0, 10) as $gk) {
            $g = kkuk_gu($gk);
            $chips[] = [$g['label'], $g['url']];
        }
        $cards .= '<article class="k-card k-card__pad k-card--stack">'
            . '<h3 class="k-h3" style="margin-bottom:6px">' . kkuk_e($s['full']) . '</h3>'
            . kkuk_chips($chips, '')
            . '<p class="k-card__foot"><a class="k-btn k-btn--brand k-btn--block" href="'
            . kkuk_e(kkuk_u($s['url'])) . '">' . kkuk_e($s['name']) . ' 전체 보기</a></p>'
            . '</article>';
    }

    /* 대표 업소 */
    $picks = [];
    foreach ($sidos as $s) foreach (kkuk_shops_of_sido($s['slug'], 2) as $x) $picks[] = $x;
    $picks = array_slice(kkuk_shop_sort($picks), 0, 6);
    $p['items'] = $picks;

    /* 롱테일 앵커용 : 시도 + 등록 수 상위 행정구 */
    $topicItems = [];
    foreach ($sidos as $s2) $topicItems[] = [$s2['name'], $s2['url']];
    $allGu = kkuk_gu_all();
    uasort($allGu, fn($a, $b) => $b['shop_count'] <=> $a['shop_count']);
    foreach (array_slice($allGu, 0, 18) as $g2) $topicItems[] = [$g2['label'], $g2['url']];

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header('');
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <section class="k-hero">
      <div class="k-hero__box"><?= $hero ?></div>
      <div class="k-hero__title">
        <h1 class="k-h1">서울 · 경기 · 인천 마사지, 출장마사지, 홈타이 지역 안내</h1>
        <p class="k-lead" style="margin-top:12px">
          행정구와 대표 행정동을 기준으로 정리했습니다.
          지역을 고르면 그 동네 기준의 접근 동선, 많이 찾는 코스, 요금 비교 기준, 출장 가능 범위를 한 화면에서 확인할 수 있습니다.
        </p>
      </div>
      <div class="k-hero__meta">
        <span class="k-badge k-badge--brand"><?= kkuk_icon('check', 14) ?> 행정동 단위 정리</span>
        <span class="k-badge k-badge--accent"><?= kkuk_icon('route', 14) ?> 출장 · 홈타이 범위 표기</span>
        <span class="k-badge k-badge--ink"><?= kkuk_icon('clock', 14) ?> 운영 시간 · 총액 기준 안내</span>
      </div>
      <div class="k-mt" style="max-width:520px"><?= kkuk_cta_tel('home') ?></div>
    </section>

    <section class="k-sect">
      <?= kkuk_shead('지역 선택', '시·도를 고른 뒤 행정구 → 대표 행정동 순서로 좁혀 보세요') ?>
      <div class="k-grid k-cols-3"><?= $cards ?></div>
    </section>

    <section class="k-sect">
      <?= kkuk_shead('주제별로 바로 가기', '지역과 주제를 함께 골라 이동하세요') ?>
      <?= kkuk_topic_links('서울 · 경기 · 인천 주요 지역', $topicItems, 'home-topic',
            '지역 페이지 안의 해당 업종 목록으로 바로 들어갑니다.') ?>
    </section>

    <section class="k-sect">
      <?= kkuk_shead('지역별 대표 등록 업소', '평점과 후기 수를 기준으로 정렬했습니다') ?>
      <?= kkuk_shop_grid($picks, true, 3) ?>
    </section>

    <section class="k-sect">
      <?= kkuk_shead('이용 안내', '가장 많이 묻는 내용을 답부터 정리했습니다') ?>
      <?= kkuk_faq_html($faq) ?>
    </section>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   시도
   ========================================================= */
function kkuk_sido_intro($slug, $s) {
    /* 시도는 3곳뿐이므로 템플릿이 아니라 지역별 고유 문장을 직접 둔다 */
    $T = [
    'seoul' => [
        '서울은 25개 자치구가 각각 다른 상권 리듬을 가진다. 테헤란로와 여의도처럼 업무 인구가 움직이는 축, 홍대·건대·신촌처럼 심야 유동이 큰 축, 목동·상계·길음처럼 주거가 중심인 축이 뚜렷하게 나뉜다. 같은 서울이라도 구를 바꾸면 요청이 몰리는 시간과 선호 코스가 달라지므로, 구 단위로 좁혀 보는 쪽이 정확하다.',
        '이 페이지에서는 25개 구를 등록 수와 함께 정리했고, 구마다 대표 행정동 3곳을 따로 열 수 있게 했다. 번호로 나뉘는 행정동은 대표 1곳만 올려 두었다. 로드샵 방문과 출장마사지·홈타이가 함께 묶여 있어 그날의 이동 여력에 맞춰 고를 수 있다.',
    ],
    'gyeonggi' => [
        '경기도는 면적이 넓고 생활권이 조각나 있어 "경기 전체" 기준이 거의 의미가 없다. 수원·성남·고양·용인·안산·안양은 일반구 단위로, 나머지 시·군은 시 단위로 나눠야 이동 시간이 맞아떨어진다. 판교·광교·동탄·미사처럼 신도시가 들어선 곳과 원도심의 수요 성격도 서로 다르다.',
        '이 페이지에서는 일반구 17곳과 구가 없는 시·군 25곳을 합쳐 42개 단위로 정리했다. 각 단위마다 대표 행정동 3곳을 두었고, 읍·면 지역은 출장마사지와 홈타이 중심으로 범위를 표기했다. 경계에 걸친 생활권이라면 인접 지역 목록을 함께 보는 편이 유리하다.',
    ],
    'incheon' => [
        '인천은 성격이 극명하게 갈린다. 송도·청라·영종처럼 계획도시로 조성된 구역과, 주안·동인천·부평처럼 원도심 상권이 남아 있는 구역의 수요가 다르다. 공항과 항만의 교대 근무 인구가 있어 새벽 시간대 요청 비중이 다른 지역보다 높은 것도 특징이다.',
        '이 페이지에서는 8개 구와 2개 군을 합쳐 10개 단위로 정리했다. 강화군과 옹진군은 철도가 닿지 않아 출장마사지·홈타이 중심으로 운영 범위를 표기했고, 도서 지역은 사전 예약을 전제로 안내한다. 구를 고르면 대표 행정동 3곳으로 다시 좁힐 수 있다.',
    ],
    ];
    return $T[$slug] ?? [];
}

function kkuk_page_sido($slug) {
    $s = kkuk_sido($slug);
    if (!$s) return null;

    $gus = [];
    foreach ($s['gu'] as $gk) $gus[] = kkuk_gu($gk);
    $dongN = 0;
    foreach ($gus as $g) $dongN += $g['dong_count'];

    $title = $s['name'] . ' 마사지 | ' . $s['gu_count'] . '개 구 지역별 안내 - ' . KKUK_BRAND;
    $desc  = $s['full'] . ' ' . $s['gu_count'] . '개 행정구와 대표 행정동 ' . $dongN
           . '곳 기준 로드샵·출장마사지·홈타이 ' . $s['shop_count'] . '곳 정리. 접근 동선과 요금 기준, 예약 전 확인 사항까지. 상담 ' . KKUK_TEL_FMT . '.';

    $faqVars = ['AREA' => $s['name'], 'TEL_FMT' => KKUK_TEL_FMT, 'S_SHOP' => '업소',
                'S_AREA' => '지역', 'A1' => '가까운 역', 'DONG' => ''];
    $faq = kkuk_faq($faqVars, 'sido:' . $slug, 5);
    $picks = kkuk_shops_of_sido($slug, 9);

    $p = ['type' => 'sido', 'title' => $title, 'desc' => $desc, 'url' => $s['url'],
          'area' => $s['full'], 'sido_slug' => $slug, 'lat' => $s['lat'], 'lng' => $s['lng'],
          'crumbs' => kkuk_crumbs('sido', ['sido' => $s]), 'faq' => $faq, 'items' => $picks,
          'place' => [
              'ptype' => 'AdministrativeArea', 'name' => $s['full'], 'region' => $s['full'],
              'lat' => $s['lat'], 'lng' => $s['lng'],
              'children' => array_map(fn($g) => ['name' => $g['label'], 'url' => $g['url']], $gus),
          ]];

    $hero = kkuk_hero_svg([
        'seed' => 'sido:' . $slug, 'kicker' => $s['full'],
        'title' => $s['name'] . ' 마사지',
        'sub'   => '출장마사지 · 홈타이 · 로드샵',
        'chips' => [],
        'note'  => '구를 고르면 대표 행정동까지 좁혀 볼 수 있습니다',
    ]);

    /* 구 카드 */
    $cards = '';
    foreach ($gus as $g) {
        $dchips = [];
        foreach ($g['dongs'] as $dk) { $d = kkuk_dong($dk); $dchips[] = [$d['name'], $d['url']]; }
        $cards .= '<article class="k-card k-card__pad">'
            . '<h3 class="k-h3"><a href="' . kkuk_e(kkuk_u($g['url'])) . '" style="color:inherit">'
            . kkuk_e($g['label']) . '</a></h3>'
            . '<p class="k-small" style="margin:5px 0 10px">' . kkuk_e($g['blurb']) . '</p>'
            . '<p class="k-small" style="margin-bottom:10px"><b>' . kkuk_e(implode(' · ', array_slice($g['stations'], 0, 3)))
            . '</b></p>'
            . kkuk_chips($dchips, '')
            . '</article>';
    }

    $intro = kkuk_sido_intro($slug, $s);

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header($slug);
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <?= kkuk_bc($p['crumbs']) ?>
    <section class="k-hero">
      <div class="k-hero__box"><?= $hero ?></div>
      <div class="k-hero__title">
        <h1 class="k-h1"><?= kkuk_e($s['full']) ?> 마사지 · 출장마사지 · 홈타이 지역 안내</h1>
        <p class="k-lead" style="margin-top:12px"><?= kkuk_e($intro[0] ?? '') ?></p>
      </div>
      <div class="k-mt" style="max-width:520px"><?= kkuk_cta_tel('sido:' . $slug) ?></div>
    </section>

    <section class="k-sect">
      <?= kkuk_shead($s['name'] . ' 행정구', '구를 고르면 대표 행정동으로 다시 좁혀집니다') ?>
      <div class="k-grid k-cols-3"><?= $cards ?></div>
      <p class="k-small" style="margin-top:16px"><?= kkuk_e($intro[1] ?? '') ?></p>
    </section>

    <section class="k-sect">
      <?= kkuk_shead($s['name'] . ' 주제별 바로가기', '행정구와 주제를 묶어 정리했습니다') ?>
      <?= kkuk_topic_links($s['name'] . ' 행정구',
            array_map(fn($g) => [$g['label'], $g['url']], $gus), 'sido:' . $slug) ?>
    </section>

    <section class="k-sect">
      <?= kkuk_shead($s['name'] . ' 대표 등록 업소', '구별로 고르게 추출했습니다') ?>
      <?= kkuk_shop_grid($picks, true, 3) ?>
    </section>

    <section class="k-sect">
      <?= kkuk_shead('이용 안내', '답을 먼저 적어 두었습니다') ?>
      <?= kkuk_faq_html($faq) ?>
    </section>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   행정구
   ========================================================= */
function kkuk_page_gu($key) {
    $g = kkuk_gu($key);
    if (!$g) return null;
    $s = kkuk_sido($g['sido']);

    $dongs = [];
    foreach ($g['dongs'] as $dk) $dongs[] = kkuk_dong($dk);
    $dongNames = array_column($dongs, 'name');

    $shops = kkuk_shops_of_gu($key);

    $ctx = [
        'seed' => $key, 'sido' => $g['sido_name'], 'gu' => $g['label'], 'city' => $g['city'],
        'area' => $g['area'], 'stations' => $g['stations'], 'marks' => $g['marks'],
        'near' => $g['near'], 'lines' => $g['lines'], 'dongs' => $dongNames,
        'trait' => $g['trait'], 'blurb' => $g['blurb'],
        'nshop' => $g['shop_count'], 'ndong' => $g['dong_count'], 'tel_fmt' => KKUK_TEL_FMT,
    ];
    $blocks = kkuk_build_content($ctx, 'gu', 1500);
    $faq    = kkuk_faq(kkuk_content_vars($ctx), $key, 5);

    $title = $g['label'] . ' 마사지 | 로드샵 ' . $g['shop_count'] . '곳 - ' . KKUK_BRAND;
    $desc  = kkuk_meta_desc($ctx, 'gu');

    $p = ['type' => 'gu', 'title' => $title, 'desc' => $desc, 'url' => $g['url'],
          'area' => $g['area'], 'sido_slug' => $g['sido'], 'lat' => $g['lat'], 'lng' => $g['lng'],
          'crumbs' => kkuk_crumbs('gu', ['sido' => $s, 'gu' => $g]),
          'faq' => $faq, 'items' => array_slice($shops, 0, 20),
          'place' => [
              'ptype' => 'AdministrativeArea', 'name' => $g['area'],
              'region' => $g['sido_name'], 'locality' => $g['label'],
              'lat' => $g['lat'], 'lng' => $g['lng'],
              'parent' => ['name' => $s['full'], 'url' => $s['url']],
              'children' => array_map(fn($d) => ['name' => $d['name'], 'url' => $d['url']], $dongs),
          ]];

    $hero = kkuk_hero_svg([
        'seed' => $key, 'kicker' => $g['sido_name'] . ' · ' . $g['label'],
        'title' => $g['name'] . ' 마사지',
        'sub'   => '출장마사지 · 홈타이 · 로드샵 안내',
        'chips' => array_slice($g['stations'], 0, 3),
        'note'  => implode(' · ', array_slice($g['lines'], 0, 3)),
    ]);

    /* 동 칩 + 동 카드 */
    $dchips = [];
    foreach ($dongs as $d) $dchips[] = [$d['name'], $d['url']];

    $dcards = '';
    foreach ($dongs as $d) {
        $dcards .= '<article class="k-card k-card__pad">'
            . '<h3 class="k-h3"><a href="' . kkuk_e(kkuk_u($d['url'])) . '" style="color:inherit">'
            . kkuk_e($d['name']) . '</a></h3>'
            . '<p class="k-small" style="margin:5px 0 9px"><span class="k-badge k-badge--brand">'
            . kkuk_e(kkuk_kind_label($d['kind'])) . '</span></p>'
            . '<p class="k-small">' . kkuk_e($d['anchors'] ? implode(' · ', $d['anchors'])
                                                             : $g['label'] . ' ' . $d['dir'] . ' · 약 ' . rtrim(rtrim(number_format($d['km2'], 1), '0'), '.') . '㎢') . '</p>'
            . '</article>';
    }

    /* 인접 구 내부링크 */
    $nearLinks = [];
    foreach (kkuk_near_gu($key) as $nk => $n) $nearLinks[] = [$n['label'], $n['url']];
    /* 같은 시도 다른 구 */
    $siblingLinks = [];
    foreach ($s['gu'] as $gk) {
        if ($gk === $key) continue;
        $x = kkuk_gu($gk);
        $siblingLinks[] = [$x['label'], $x['url']];
    }
    $siblingLinks = array_slice($siblingLinks, 0, 24);

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header($g['sido']);
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <?= kkuk_bc($p['crumbs']) ?>
    <section class="k-hero">
      <div class="k-hero__box"><?= $hero ?></div>
      <div class="k-hero__title">
        <h1 class="k-h1"><?= kkuk_e($g['area']) ?> 마사지 · 출장마사지 · 홈타이</h1>
        <p class="k-lead" style="margin-top:12px"><?= kkuk_e($g['blurb']) ?>.
          대표 행정동과 등록 업소를 접근 동선·코스·요금 기준과 함께 정리했습니다.</p>
      </div>
      <div class="k-hero__meta">
        <span class="k-badge k-badge--brand"><?= kkuk_icon('pin', 14) ?> <?= kkuk_e(implode(' · ', array_slice($g['stations'], 0, 3))) ?></span>
        <span class="k-badge k-badge--accent"><?= kkuk_icon('route', 14) ?> <?= kkuk_e(implode(' · ', array_slice($g['lines'], 0, 3))) ?></span>
      </div>
    </section>

    <section class="k-sect">
      <?= kkuk_shead($g['label'] . ' 행정동', '번호로 나뉘는 행정동(○○1동·2동)은 대표 1곳으로 묶었습니다') ?>
      <?= kkuk_chips($dchips, '', true) ?>
      <div class="k-grid k-cols-3 k-mt"><?= $dcards ?></div>
      <div class="k-mt"><?= kkuk_topic_facets($g['name'], $g['url'], 'gu:' . $key) ?></div>
    </section>

    <div class="k-split k-sect">
      <div>
        <section>
          <?= kkuk_shead($g['label'] . ' 등록 업소', '업종으로 걸러 보실 수 있습니다') ?>
          <?= kkuk_filter_bar($shops) ?>
          <div class="k-mt"><?= kkuk_shop_grid($shops, false, 2) ?></div>
          <div class="k-empty k-mt" data-kkuk-empty hidden>해당 업종으로 등록된 업소가 없습니다.</div>
        </section>

        <section class="k-sect">
          <?= kkuk_shead($g['label'] . ' 지역 가이드', '이 지역 기준으로만 정리한 내용입니다') ?>
          <?= kkuk_article_toc($blocks) ?>
          <?= kkuk_article_html($blocks,
                '<b>기준 안내</b> · 요금과 운영 시간은 업소별로 다르고 수시로 변동됩니다. 총액과 마지막 입장 시간은 전화 상담에서 확인하시는 편이 정확합니다. 출장마사지·홈타이 상담 ' . kkuk_tel_html() . '.') ?>
        </section>

        <section class="k-sect">
          <?= kkuk_shead($g['label'] . ' 자주 묻는 질문', '답을 첫 문장에 적어 두었습니다') ?>
          <?= kkuk_faq_html($faq) ?>
        </section>
      </div>

      <aside class="k-aside">
        <div class="k-panel">
          <div class="k-panel__h"><?= kkuk_e(KKUK_TEL_LABEL) ?> 예약 상담</div>
          <div class="k-panel__b">
            <?= kkuk_cta_tel('gu:' . $key, KKUK_TEL_LABEL . ' · 홈타이 24시 상담') ?>
            <dl class="k-dl" style="margin-top:16px">
              <div><dt>지역</dt><dd><?= kkuk_e($g['area']) ?></dd></div>
              <div><dt>대표역</dt><dd><?= kkuk_e(implode(', ', array_slice($g['stations'], 0, 3))) ?></dd></div>
              <div><dt>노선</dt><dd><?= kkuk_e(implode(', ', $g['lines'])) ?></dd></div>
              <div><dt>인접</dt><dd><?= kkuk_e(implode(', ', $g['near'])) ?></dd></div>
            </dl>
          </div>
        </div>
        <?= kkuk_links_block($g['label'] . ' 행정동', array_map(fn($d) => [$d['name'], $d['url']], $dongs)) ?>
        <?= kkuk_links_block('인접 지역', $nearLinks) ?>
      </aside>
    </div>

    <section class="k-sect">
      <?= kkuk_shead($g['sido_name'] . ' 다른 지역', '경계 생활권이라면 함께 확인해 보세요') ?>
      <?= kkuk_topic_links($g['sido_name'] . ' 다른 행정구', $siblingLinks, 'gu-sib:' . $key) ?>
      <div class="k-mt"><?= kkuk_topic_links($g['label'] . ' 행정동',
            array_map(fn($d) => [$d['name'], $d['url']], $dongs), 'gu-dong:' . $key,
            '동 이름과 주제를 묶어 해당 지역의 업종 목록으로 바로 이동합니다.') ?></div>
    </section>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   행정동
   ========================================================= */
function kkuk_page_dong($key) {
    $d = kkuk_dong($key);
    if (!$d) return null;
    $g = kkuk_gu($d['gu']);
    $s = kkuk_sido($d['sido']);

    $shops = kkuk_shops_of_dong($key);

    $nbNames = [];
    foreach ($d['nb_keys'] as $nk) { $x = kkuk_dong($nk); if ($x) $nbNames[] = $x['name']; }

    $ctx = [
        'seed' => $key, 'sido' => $g['sido_name'], 'gu' => $g['label'], 'dong' => $d['name'],
        'area' => $d['area'], 'anchors' => $d['anchors'], 'kind' => $d['kind'],
        'trait' => $d['kind'], 'siblings' => $d['siblings'],
        'dir' => $d['dir'], 'km2' => $d['km2'], 'grade' => $d['grade'], 'neighbors' => $nbNames,
        'stations' => $g['stations'], 'marks' => $g['marks'], 'near' => $g['near'],
        'lines' => $g['lines'], 'dongs' => $d['siblings'],
        'blurb' => $g['blurb'], 'nshop' => count($shops), 'ndong' => $g['dong_count'],
        'tel_fmt' => KKUK_TEL_FMT,
    ];
    $blocks = kkuk_build_content($ctx, 'dong', 1500);
    $faq    = kkuk_faq(kkuk_content_vars($ctx), $key, 5);

    $title = $d['name'] . ' 마사지 | ' . $g['label'] . ' 지역 안내 - ' . KKUK_BRAND;
    $desc  = kkuk_meta_desc($ctx, 'dong');

    $p = ['type' => 'dong', 'title' => $title, 'desc' => $desc, 'url' => $d['url'],
          'area' => $d['area'], 'sido_slug' => $d['sido'], 'lat' => $d['lat'], 'lng' => $d['lng'],
          'crumbs' => kkuk_crumbs('dong', ['sido' => $s, 'gu' => $g, 'dong' => $d]),
          'faq' => $faq, 'items' => $shops,
          'place' => [
              'ptype' => 'AdministrativeArea', 'name' => $d['area'],
              'region' => $g['sido_name'], 'locality' => $g['label'],
              'lat' => $d['lat'], 'lng' => $d['lng'],
              'parent' => ['name' => $g['area'], 'url' => $g['url']],
          ]];

    $hero = kkuk_hero_svg([
        'seed' => $key, 'kicker' => $g['label'] . ' · ' . kkuk_kind_label($d['kind']),
        'title' => $d['name'] . ' 마사지',
        'sub'   => '출장마사지 · 홈타이 · 로드샵',
        'chips' => $d['anchors'] ? array_slice($d['anchors'], 0, 3)
                                 : array_filter([kkuk_kind_label($d['kind']), $g['label'] . ' ' . $d['dir']]),
        'note'  => $d['area'],
    ]);

    // 경계가 맞닿은 실제 인접 행정동을 먼저 두고, 같은 구의 다른 동으로 채운다
    $sibLinks = []; $seen = [];
    foreach (array_merge($d['nb_keys'], $d['sibling_keys']) as $sk) {
        if (isset($seen[$sk]) || $sk === $key) continue;
        $x = kkuk_dong($sk);
        if (!$x) continue;
        $seen[$sk] = 1;
        $label = $x['gu'] === $d['gu'] ? $x['name'] : (kkuk_gu($x['gu'])['label'] . ' ' . $x['name']);
        $sibLinks[] = [$label, $x['url']];
        if (count($sibLinks) >= 8) break;
    }
    $nearLinks = [];
    foreach (kkuk_near_gu($d['gu']) as $n) $nearLinks[] = [$n['label'], $n['url']];

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header($d['sido']);
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <?= kkuk_bc($p['crumbs']) ?>
    <section class="k-hero">
      <div class="k-hero__box"><?= $hero ?></div>
      <div class="k-hero__title">
        <h1 class="k-h1"><?= kkuk_e($d['area']) ?> 마사지 · 출장마사지 · 홈타이</h1>
        <p class="k-lead" style="margin-top:12px">
          <?php if ($d['anchors']): ?>
            <?= kkuk_e(implode(' · ', $d['anchors'])) ?> 기준으로 정리한
          <?php else: ?>
            <?= kkuk_e($g['label']) ?> <?= kkuk_e($d['dir']) ?>에 자리한
          <?php endif; ?>
          <?= kkuk_e($d['name']) ?> <?= kkuk_e(kkuk_kind_label($d['kind'])) ?> 생활권 안내입니다.
          등록 업소의 접근 동선과 코스, 출장 가능 범위를 함께 확인하실 수 있습니다.</p>
      </div>
      <div class="k-hero__meta">
        <span class="k-badge k-badge--brand"><?= kkuk_icon('pin', 14) ?> <?= kkuk_e($d['anchors'][0] ?? ($g['label'] . ' ' . $d['dir'])) ?></span>
        <span class="k-badge k-badge--gold"><?= kkuk_icon('check', 14) ?> <?= kkuk_e(kkuk_kind_label($d['kind'])) ?></span>
      </div>
    </section>

    <div class="k-split k-sect">
      <div>
        <section>
          <?= kkuk_shead($d['name'] . ' 등록 업소', '업종으로 걸러 보실 수 있습니다') ?>
          <?= kkuk_filter_bar($shops) ?>
          <div class="k-mt"><?= kkuk_shop_grid($shops, false, 2) ?></div>
          <div class="k-empty k-mt" data-kkuk-empty hidden>해당 업종으로 등록된 업소가 없습니다.</div>
          <div class="k-mt"><?= kkuk_topic_facets($d['name'], $d['url'], 'dong:' . $key) ?></div>
        </section>

        <section class="k-sect">
          <?= kkuk_shead($d['name'] . ' 지역 가이드', '이 동네 기준으로만 정리한 내용입니다') ?>
          <?= kkuk_article_toc($blocks) ?>
          <?= kkuk_article_html($blocks,
                '<b>기준 안내</b> · 출장마사지와 홈타이는 이동이 포함되므로 도착 예상 시각을 먼저 확인하시는 편이 좋습니다. 상담 ' . kkuk_tel_html() . '.') ?>
        </section>

        <section class="k-sect">
          <?= kkuk_shead($d['name'] . ' 자주 묻는 질문', '답을 첫 문장에 적어 두었습니다') ?>
          <?= kkuk_faq_html($faq) ?>
        </section>
      </div>

      <aside class="k-aside">
        <div class="k-panel">
          <div class="k-panel__h"><?= kkuk_e(KKUK_TEL_LABEL) ?> 예약 상담</div>
          <div class="k-panel__b">
            <?= kkuk_cta_tel('dong:' . $key, KKUK_TEL_LABEL . ' · 홈타이 24시 상담') ?>
            <dl class="k-dl" style="margin-top:16px">
              <div><dt>지역</dt><dd><?= kkuk_e($d['area']) ?></dd></div>
              <div><dt>성격</dt><dd><?= kkuk_e(kkuk_kind_label($d['kind'])) ?></dd></div>
              <?php if ($d['anchors']): ?>
              <div><dt>기준점</dt><dd><?= kkuk_e(implode(', ', $d['anchors'])) ?></dd></div>
              <?php endif; ?>
              <div><dt>위치</dt><dd><?= kkuk_e($g['label']) ?> <?= kkuk_e($d['dir']) ?></dd></div>
              <div><dt>면적</dt><dd>약 <?= kkuk_e(rtrim(rtrim(number_format($d['km2'], 1), '0'), '.')) ?>㎢</dd></div>
            </dl>
          </div>
        </div>
        <?= kkuk_links_block($g['label'] . ' 인접·주변 행정동', $sibLinks) ?>
        <?= kkuk_links_block('인접 지역', $nearLinks) ?>
      </aside>
    </div>

    <section class="k-sect">
      <?= kkuk_topic_links('주변 지역 바로가기', $sibLinks, 'dong-near:' . $key,
            '경계가 맞닿은 행정동부터 가까운 순으로 정리했습니다.') ?>
      <div class="k-mt"><?= kkuk_links_block($g['label'] . ' 전체 보기',
            [[$g['label'] . ' 지역 안내', $g['url']], [$g['sido_name'] . ' 전체', $s['url']],
             ['전체 지역 목록', '/sitemap/']]) ?></div>
    </section>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   업소 상세
   ========================================================= */
function kkuk_page_shop($slug) {
    $x = kkuk_shop($slug);
    if (!$x) return null;
    $d = kkuk_dong($x['dong']);
    $g = kkuk_gu($x['gu']);
    $s = kkuk_sido($x['sido']);

    $others = [];
    foreach (kkuk_shops_of_dong($x['dong']) as $o) if ($o['slug'] !== $slug) $others[] = $o;
    $others = array_slice($others, 0, 3);

    $faqVars = ['AREA' => $d['area'], 'DONG' => $d['name'], 'TEL_FMT' => KKUK_TEL_FMT,
                'S_SHOP' => '업소', 'S_AREA' => '지역', 'A1' => $d['anchors'][0] ?? $d['name']];
    $faq = kkuk_faq($faqVars, 'shop:' . $slug, 4);

    // 업종 라벨이 '출장마사지'·'홈타이' 인 업소는 타이틀에서 라벨을 생략한다(로드샵·스파는 유지).
    $tl = in_array($x['type'], ['visit', 'home'], true) ? '' : ' ' . $x['type_label'];
    $title = $x['name'] . ' | ' . $d['area'] . $tl . ' - ' . KKUK_BRAND;
    $desc  = mb_substr(preg_replace('/\s+/u', ' ', $x['desc']), 0, 155, 'UTF-8');

    $p = ['type' => 'shop', 'title' => $title, 'desc' => $desc, 'url' => $x['url'],
          'area' => $d['area'], 'sido_slug' => $x['sido'], 'lat' => $d['lat'], 'lng' => $d['lng'],
          'crumbs' => kkuk_crumbs('shop', ['sido' => $s, 'gu' => $g, 'dong' => $d, 'shop' => $x]),
          'faq' => $faq, 'shop' => $x,
          'place' => [
              'ptype' => 'AdministrativeArea', 'name' => $d['area'],
              'region' => $g['sido_name'], 'locality' => $g['label'],
              'lat' => $d['lat'], 'lng' => $d['lng'],
              'parent' => ['name' => $g['area'], 'url' => $g['url']],
          ]];

    $hero = kkuk_hero_svg([
        'seed' => 'shop:' . $slug, 'kicker' => $d['area'],
        'title' => $x['name'], 'sub' => $x['type_badge'],
        'chips' => array_slice($x['tags'], 0, 3),
        'note'  => $x['hours'] . ' · ' . number_format($x['price_from']) . '원부터',
    ]);

    $rows = '';
    foreach ($x['courses'] as $c) {
        $rows .= '<tr><th scope="row">' . kkuk_e($c['name']) . '</th><td>' . (int)$c['min']
              . '분</td><td><b>' . number_format($c['price']) . '</b>원</td></tr>';
    }
    $tags = '';
    foreach ($x['tags'] as $t) $tags .= '<span class="k-tag">' . kkuk_e($t) . '</span>';

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header($x['sido']);
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <?= kkuk_bc($p['crumbs']) ?>
    <section class="k-hero">
      <div class="k-hero__box"><?= $hero ?></div>
      <div class="k-hero__title">
        <h1 class="k-h1"><?= kkuk_e($x['name']) ?></h1>
        <p class="k-lead" style="margin-top:10px"><?= kkuk_e($x['tagline']) ?></p>
      </div>
      <div class="k-hero__meta">
        <span class="k-badge k-badge--accent"><?= kkuk_e($x['type_label']) ?></span>
        <span class="k-badge k-badge--brand"><?= kkuk_icon('pin', 14) ?> <?= kkuk_e($d['area']) ?></span>
        <span class="k-badge k-badge--ink"><?= kkuk_icon('clock', 14) ?> <?= kkuk_e($x['hours']) ?></span>
        <span class="k-badge k-badge--gold"><?= kkuk_icon('star', 14) ?> <?= kkuk_e((string)$x['rating']) ?> (<?= (int)$x['reviews'] ?>)</span>
      </div>
    </section>

    <div class="k-split k-sect">
      <div>
        <section class="k-article">
          <h2>업소 소개</h2>
          <p><?= kkuk_e($x['desc']) ?></p>
          <div class="k-shop__tags" style="margin:18px 0"><?= $tags ?></div>

          <h2>코스 및 요금</h2>
          <table class="k-table">
            <caption class="k-sr"><?= kkuk_e($x['name']) ?> 코스별 시간과 요금</caption>
            <thead><tr><th scope="col">코스</th><th scope="col">시간</th><th scope="col">요금</th></tr></thead>
            <tbody><?= $rows ?></tbody>
          </table>
          <p class="k-small">표기 요금은 기준 금액입니다. 심야 시간대 기준, 이동비 포함 여부, 추가 요금 조건은
            예약 통화에서 <b>총액</b>으로 확인하시기 바랍니다.</p>

          <h2>이용 안내</h2>
          <ul>
            <li>운영 시간 <b><?= kkuk_e($x['hours']) ?></b> — 마지막 입장 시간은 통화에서 확인해 주세요.</li>
            <li>예약제로 운영되며, 희망 시간을 두 개 정도 함께 알려 주시면 조율이 빠릅니다.</li>
            <li>압의 세기와 집중 부위는 진행 중에도 조절이 가능합니다. 불편하면 바로 말씀하시면 됩니다.</li>
            <li>기저 질환, 복용 중인 약, 최근 수술·골절 이력이 있으면 예약 단계에서 알려 주세요.</li>
          </ul>
          <p class="k-note">본 업소가 제공하는 관리는 피로 회복과 근육 이완을 돕는 생활 서비스이며 의료 행위가 아닙니다.
            출장마사지·홈타이 예약 상담 <?= kkuk_tel_html() ?>.</p>
        </section>

        <section class="k-sect">
          <?= kkuk_shead('자주 묻는 질문', $d['area'] . ' 기준 안내') ?>
          <?= kkuk_faq_html($faq) ?>
        </section>

        <?php if ($others): ?>
        <section class="k-sect">
          <?= kkuk_shead($d['name'] . ' 다른 업소', '같은 동네에서 비교해 보세요') ?>
          <?= kkuk_shop_grid($others, false, 3) ?>
        </section>
        <?php endif; ?>
      </div>

      <aside class="k-aside">
        <div class="k-panel">
          <div class="k-panel__h"><?= kkuk_e(KKUK_TEL_LABEL) ?> 예약 상담</div>
          <div class="k-panel__b">
            <?= kkuk_cta_tel('shop:' . $slug, KKUK_TEL_LABEL . ' · 홈타이 24시 상담') ?>
            <dl class="k-dl" style="margin-top:16px">
              <div><dt>업종</dt><dd><?= kkuk_e($x['type_label']) ?></dd></div>
              <div><dt>지역</dt><dd><?= kkuk_e($d['area']) ?></dd></div>
              <?php if ($d['anchors']): ?>
              <div><dt>기준점</dt><dd><?= kkuk_e(implode(', ', $d['anchors'])) ?></dd></div>
              <?php endif; ?>
              <div><dt>위치</dt><dd><?= kkuk_e($g['label']) ?> <?= kkuk_e($d['dir']) ?></dd></div>
              <div><dt>면적</dt><dd>약 <?= kkuk_e(rtrim(rtrim(number_format($d['km2'], 1), '0'), '.')) ?>㎢</dd></div>
              <div><dt>운영</dt><dd><?= kkuk_e($x['hours']) ?></dd></div>
              <div><dt>최저</dt><dd><?= number_format($x['price_from']) ?>원 (<?= (int)$x['courses'][0]['min'] ?>분)</dd></div>
            </dl>
          </div>
        </div>
        <?= kkuk_links_block('지역 안내', [
              [$d['name'] . ' 전체', $d['url']],
              [$g['label'] . ' 전체', $g['url']],
              [$g['sido_name'] . ' 전체', $s['url']]]) ?>
      </aside>
    </div>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   검색 (JSON-LD SearchAction 대상 / 체류시간 개선용)
   ========================================================= */
function kkuk_page_search($q) {
    $q = trim((string)$q);
    $regions = []; $shops = [];
    if ($q !== '') {
        foreach (kkuk_gu_all() as $g) {
            if (mb_strpos($g['area'], $q) !== false || mb_strpos($g['name'], $q) !== false) {
                $regions[] = [$g['area'], $g['url'], $g['shop_count']];
            }
        }
        foreach (kkuk_dong_all() as $d) {
            if (mb_strpos($d['area'], $q) !== false || mb_strpos($d['name'], $q) !== false) {
                $regions[] = [$d['area'], $d['url'], count($d['shops'])];
            }
            foreach ($d['anchors'] as $a) {
                if (mb_strpos($a, $q) !== false) { $regions[] = [$d['area'] . ' (' . $a . ')', $d['url'], count($d['shops'])]; break; }
            }
        }
        foreach (kkuk_shop_all() as $s) {
            if (mb_strpos($s['name'], $q) !== false) $shops[] = $s;
        }
        $regions = array_slice($regions, 0, 40);
        $shops   = array_slice(kkuk_shop_sort($shops), 0, 12);
    }

    $title = ($q !== '' ? $q . ' 검색 결과' : '지역 검색') . ' - ' . KKUK_BRAND;
    $p = ['type' => 'search', 'title' => $title,
          'desc' => '지역명, 역명, 업소명으로 서울·경기·인천 마사지와 출장마사지·홈타이 정보를 찾습니다.',
          'url' => '/search/' . ($q !== '' ? '?q=' . rawurlencode($q) : ''),
          'area' => '', 'crumbs' => [['홈', '/'], ['검색', '/search/']]];

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header('');
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <?= kkuk_bc($p['crumbs']) ?>
    <section class="k-sect">
      <?= kkuk_shead('지역 · 업소 검색', '구, 동, 역 이름 또는 업소명을 입력하세요') ?>
      <form class="k-card k-card__pad" action="<?= kkuk_e(kkuk_u('/search/')) ?>" method="get" role="search">
        <label class="k-sr" for="kq">검색어</label>
        <div style="display:flex;gap:10px;flex-wrap:wrap">
          <input id="kq" name="q" type="search" value="<?= kkuk_e($q) ?>" placeholder="예: 강남구, 역삼동, 판교역"
                 style="flex:1 1 220px;min-height:50px;padding:10px 14px;font-size:16px;border:2px solid var(--line-strong);border-radius:var(--r);background:var(--surface);color:var(--ink)">
          <button class="k-btn k-btn--brand" type="submit">검색</button>
        </div>
      </form>
    </section>

    <?php if ($q !== ''): ?>
    <section class="k-sect">
      <?= kkuk_shead('지역 결과 ' . count($regions) . '건') ?>
      <?= $regions ? kkuk_links_block('일치하는 지역', array_map(fn($r) => [$r[0], $r[1]], $regions))
                   : '<div class="k-empty">일치하는 지역이 없습니다. 구 또는 동 이름으로 다시 검색해 보세요.</div>' ?>
    </section>
    <section class="k-sect">
      <?= kkuk_shead('업소 결과 ' . count($shops) . '건') ?>
      <?= kkuk_shop_grid($shops, true, 3) ?>
    </section>
    <?php endif; ?>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   404
   ========================================================= */
function kkuk_page_404($path = '') {
    $p = ['type' => '404', 'title' => '페이지를 찾을 수 없습니다 - ' . KKUK_BRAND,
          'desc' => '요청하신 주소를 찾을 수 없습니다.', 'url' => '/', 'area' => '',
          'crumbs' => [['홈', '/']]];
    $sido = [];
    foreach (kkuk_sido_all() as $s) $sido[] = [$s['name'] . ' 전체', $s['url']];

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header('');
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <section class="k-sect">
      <div class="k-article">
        <h2>요청하신 페이지를 찾을 수 없습니다</h2>
        <p>주소가 바뀌었거나 삭제된 페이지일 수 있습니다. 아래에서 지역을 다시 선택해 주세요.
          급하시면 전화 상담으로 가까운 지역을 바로 안내받으실 수 있습니다.</p>
      </div>
      <div class="k-mt"><?= kkuk_links_block('지역 바로가기', $sido) ?></div>
      <div class="k-mt" style="max-width:520px"><?= kkuk_cta_tel('404') ?></div>
    </section>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}

/* =========================================================
   HTML 사이트맵 — 모든 지역 페이지를 홈에서 2단계 안에 두어 수집을 가속한다
   ========================================================= */
function kkuk_page_sitemap() {
    $sidos = kkuk_sido_all();
    $nGu = count(kkuk_gu_all());
    $nDong = count(kkuk_dong_all());

    $title = '전체 지역 목록 | 서울·경기·인천 행정구·행정동 - ' . KKUK_BRAND;
    $desc  = '서울·경기·인천 행정구 ' . $nGu . '곳과 행정동 ' . $nDong
           . '곳의 마사지·출장마사지·홈타이 안내 페이지를 한 화면에 모았습니다.';

    $p = ['type' => 'sitemap', 'title' => $title, 'desc' => $desc, 'url' => '/sitemap/',
          'area' => '서울·경기·인천',
          'crumbs' => [['홈', '/'], ['전체 지역 목록', '/sitemap/']]];

    ob_start();
    echo kkuk_doc_open($p);
    echo kkuk_header('');
    ?>
<main id="k-main" class="k-main">
  <div class="k-wrap">
    <?= kkuk_bc($p['crumbs']) ?>
    <section class="k-sect">
      <h1 class="k-h1">전체 지역 목록</h1>
      <p class="k-lead" style="margin-top:12px">
        행정구 <?= $nGu ?>곳과 행정동 <?= $nDong ?>곳을 한 화면에 모았습니다.
        구 이름을 누르면 구 전체 안내로, 동 이름을 누르면 그 동네 기준 안내로 이동합니다.</p>
    </section>

    <?php foreach ($sidos as $s): ?>
    <section class="k-sect">
      <?= kkuk_shead($s['full'], '행정구 ' . count($s['gu']) . '곳') ?>
      <div class="k-smap">
        <?php foreach ($s['gu'] as $gk):
            $g = kkuk_gu($gk);
            $dongs = array_map('kkuk_dong', $g['dongs']); ?>
        <div class="k-smap__gu">
          <h3><a href="<?= kkuk_e(kkuk_u($g['url'])) ?>"><?= kkuk_e($g['label']) ?> 마사지</a>
            <?php if ($g['former'] !== ''): ?><span class="k-small">(옛 <?= kkuk_e($g['former']) ?>)</span><?php endif; ?>
          </h3>
          <div class="k-smap__dongs">
            <?php foreach ($dongs as $d): if (!$d) continue; ?>
            <a href="<?= kkuk_e(kkuk_u($d['url'])) ?>"><?= kkuk_e($d['name']) ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endforeach; ?>
  </div>
</main>
<?php
    echo kkuk_doc_close($p);
    return ob_get_clean();
}
