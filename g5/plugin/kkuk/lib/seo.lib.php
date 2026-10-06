<?php
/**
 * SEO / GEO / AEO 레이어
 *
 * SEO : title·description·canonical·OG, 내부링크 그래프, sitemap/rss/robots
 * GEO : geo.region / geo.position / ICBM + areaServed + GeoCircle (지역 질의 대응)
 * AEO : FAQPage + speakable + "답을 첫 문장에 두는" 질문 블록 (음성·생성형 답변 대응)
 *
 * ■ 안전장치
 *   - KKUK_DEMO_DATA 가 true 인 동안에는 robots 에 noindex 를 넣는다.
 *     가상 업소 데이터가 색인되면 그 자체가 저품질·스팸 신호가 되기 때문이다.
 *     실제 업체 정보로 교체한 뒤 false 로 바꾼다.
 *   - 평점/후기 구조화 데이터(aggregateRating)는 KKUK_SCHEMA_RATING 이 true 일 때만
 *     출력한다. 실제 수집된 후기가 없는 상태의 평점 마크업은 구조화 데이터 위반이다.
 */

if (!defined('KKUK_DEMO_DATA'))     define('KKUK_DEMO_DATA', true);
if (!defined('KKUK_SCHEMA_RATING')) define('KKUK_SCHEMA_RATING', false);

/** 절대 URL */
function kkuk_abs($path) {
    if (preg_match('#^https?://#', (string)$path)) return $path;
    return rtrim(KKUK_URL, '/') . '/' . ltrim((string)$path, '/');
}

/** 시도명 → geo.region (ISO 3166-2:KR) */
function kkuk_iso_region($sidoSlug) {
    return ['seoul' => 'KR-11', 'incheon' => 'KR-28', 'gyeonggi' => 'KR-41'][$sidoSlug] ?? 'KR';
}

/** <head> 내부 전체 출력 */
function kkuk_head_tags(array $p) {
    $title = $p['title'] ?? KKUK_BRAND;
    $desc  = preg_replace('/\s+/u', ' ', (string)($p['desc'] ?? ''));
    $url   = kkuk_abs($p['url'] ?? '/');
    $h     = '';

    $h .= '<title>' . kkuk_e($title) . "</title>\n";
    $h .= '<meta name="description" content="' . kkuk_e($desc) . "\">\n";
    $h .= '<link rel="canonical" href="' . kkuk_e($url) . "\">\n";

    /* 색인 정책 */
    $robots = KKUK_DEMO_DATA
        ? 'noindex,nofollow'
        : 'index,follow,max-image-preview:large,max-snippet:-1';
    $h .= '<meta name="robots" content="' . $robots . "\">\n";
    $h .= '<meta name="NaverBot" content="' . $robots . "\">\n";
    $h .= '<meta name="Yeti" content="' . $robots . "\">\n";

    if (KKUK_NAVER_VERIFY !== '') $h .= '<meta name="naver-site-verification" content="' . kkuk_e(KKUK_NAVER_VERIFY) . "\">\n";
    if (KKUK_GSC_VERIFY   !== '') $h .= '<meta name="google-site-verification" content="' . kkuk_e(KKUK_GSC_VERIFY) . "\">\n";

    /* Open Graph / 트위터 — 네이버·카카오 공유 카드도 OG를 읽는다 */
    $h .= '<meta property="og:type" content="' . ($p['type'] === 'shop' ? 'article' : 'website') . "\">\n";
    $h .= '<meta property="og:site_name" content="' . kkuk_e(KKUK_BRAND) . "\">\n";
    $h .= '<meta property="og:title" content="' . kkuk_e($title) . "\">\n";
    $h .= '<meta property="og:description" content="' . kkuk_e($desc) . "\">\n";
    $h .= '<meta property="og:url" content="' . kkuk_e($url) . "\">\n";
    $h .= '<meta property="og:locale" content="ko_KR">' . "\n";
    $h .= '<meta name="twitter:card" content="summary_large_image">' . "\n";

    /* GEO */
    if (!empty($p['lat']) && !empty($p['lng'])) {
        $h .= '<meta name="geo.region" content="' . kkuk_e(kkuk_iso_region($p['sido_slug'] ?? '')) . "\">\n";
        $h .= '<meta name="geo.placename" content="' . kkuk_e($p['area'] ?? '') . "\">\n";
        $h .= '<meta name="geo.position" content="' . $p['lat'] . ';' . $p['lng'] . "\">\n";
        $h .= '<meta name="ICBM" content="' . $p['lat'] . ', ' . $p['lng'] . "\">\n";
    }

    $h .= '<link rel="alternate" type="application/rss+xml" title="' . kkuk_e(KKUK_BRAND)
        . '" href="' . kkuk_e(kkuk_abs('/rss.xml')) . "\">\n";

    $h .= kkuk_jsonld($p);
    return $h;
}

/** JSON-LD @graph */
function kkuk_jsonld(array $p) {
    $url  = kkuk_abs($p['url'] ?? '/');
    $g    = [];
    $site = kkuk_abs('/');

    /* 1. WebSite + 사이트 내 검색 */
    $g[] = [
        '@type' => 'WebSite', '@id' => $site . '#website',
        'url' => $site, 'name' => KKUK_BRAND, 'inLanguage' => 'ko-KR',
        'potentialAction' => [[
            '@type' => 'SearchAction',
            'target' => ['@type' => 'EntryPoint', 'urlTemplate' => $site . 'search/?q={search_term_string}'],
            'query-input' => 'required name=search_term_string',
        ]],
    ];

    /* 2. 운영 주체 */
    $g[] = [
        '@type' => 'Organization', '@id' => $site . '#org',
        'name' => KKUK_BRAND, 'url' => $site,
        'telephone' => '+82-' . ltrim(KKUK_TEL, '0'),
        'areaServed' => [
            ['@type' => 'AdministrativeArea', 'name' => '서울특별시'],
            ['@type' => 'AdministrativeArea', 'name' => '경기도'],
            ['@type' => 'AdministrativeArea', 'name' => '인천광역시'],
        ],
        'contactPoint' => [[
            '@type' => 'ContactPoint', 'telephone' => '+82-' . ltrim(KKUK_TEL, '0'),
            'contactType' => '출장마사지 예약 상담', 'areaServed' => 'KR', 'availableLanguage' => ['ko'],
        ]],
    ];

    /* 3. 빵부스러기 */
    if (!empty($p['crumbs'])) {
        $items = [];
        foreach ($p['crumbs'] as $i => $c) {
            $items[] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0],
                        'item' => kkuk_abs($c[1])];
        }
        $g[] = ['@type' => 'BreadcrumbList', '@id' => $url . '#crumb', 'itemListElement' => $items];
    }

    /* 4. 페이지 본체 — AEO speakable 지정 */
    $g[] = [
        '@type' => $p['type'] === 'shop' ? 'ItemPage' : 'CollectionPage',
        '@id' => $url . '#page', 'url' => $url,
        'name' => $p['title'] ?? '', 'description' => $p['desc'] ?? '',
        'isPartOf' => ['@id' => $site . '#website'],
        'inLanguage' => 'ko-KR',
        'speakable' => [
            '@type' => 'SpeakableSpecification',
            'cssSelector' => ['.k-lead', '.k-faq__a', '.k-answer'],
        ],
    ];

    /* 5. 목록 페이지 : ItemList */
    if (!empty($p['items'])) {
        $li = [];
        foreach ($p['items'] as $i => $s) {
            $li[] = ['@type' => 'ListItem', 'position' => $i + 1,
                     'name' => $s['name'], 'url' => kkuk_abs($s['url'])];
        }
        $g[] = ['@type' => 'ItemList', '@id' => $url . '#list',
                'itemListOrder' => 'https://schema.org/ItemListOrderDescending',
                'numberOfItems' => count($li), 'itemListElement' => $li];
    }

    /* 6. 업소 상세 : LocalBusiness */
    if (!empty($p['shop'])) {
        $s = $p['shop'];
        $d = kkuk_dong($s['dong']);
        $gu = kkuk_gu($s['gu']);
        $biz = [
            '@type' => 'HealthAndBeautyBusiness',
            'additionalType' => 'https://schema.org/DaySpa',
            '@id' => $url . '#business',
            'name' => $s['name'],
            'description' => $s['desc'],
            'url' => $url,
            'telephone' => '+82-' . ltrim($s['tel'], '0'),
            'priceRange' => '₩' . number_format($s['price_from']) . '~',
            'currenciesAccepted' => 'KRW',
            'address' => [
                '@type' => 'PostalAddress', 'addressCountry' => 'KR',
                'addressRegion' => $gu['sido_name'] ?? '',
                'addressLocality' => $gu['label'] ?? '',
                'streetAddress' => ($d['name'] ?? '') . ' 일대',
            ],
            'areaServed' => [
                ['@type' => 'AdministrativeArea', 'name' => $d['area'] ?? ''],
                ['@type' => 'GeoCircle',
                 'geoMidpoint' => ['@type' => 'GeoCoordinates',
                                   'latitude' => $d['lat'] ?? null, 'longitude' => $d['lng'] ?? null],
                 'geoRadius' => 4000],
            ],
            'makesOffer' => array_map(function ($c) {
                return ['@type' => 'Offer',
                        'itemOffered' => ['@type' => 'Service', 'name' => $c['name'] . ' ' . $c['min'] . '분'],
                        'price' => $c['price'], 'priceCurrency' => 'KRW'];
            }, $s['courses']),
        ];
        if (!empty($d['lat'])) {
            $biz['geo'] = ['@type' => 'GeoCoordinates', 'latitude' => $d['lat'], 'longitude' => $d['lng']];
        }
        // 실제 후기가 쌓인 뒤에만 켠다 (가짜 평점 마크업 = 구조화 데이터 위반)
        if (KKUK_SCHEMA_RATING && !empty($s['reviews'])) {
            $biz['aggregateRating'] = ['@type' => 'AggregateRating',
                'ratingValue' => $s['rating'], 'reviewCount' => $s['reviews'],
                'bestRating' => 5, 'worstRating' => 1];
        }
        $g[] = $biz;
    }

    /* 7. AEO : FAQPage */
    if (!empty($p['faq'])) {
        $qa = [];
        foreach ($p['faq'] as $f) {
            $qa[] = ['@type' => 'Question', 'name' => $f['q'],
                     'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f['a']]];
        }
        $g[] = ['@type' => 'FAQPage', '@id' => $url . '#faq', 'mainEntity' => $qa];
    }

    $json = json_encode(['@context' => 'https://schema.org', '@graph' => $g],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    return '<script type="application/ld+json">' . $json . "</script>\n";
}

/** 빵부스러기 배열 만들기 */
function kkuk_crumbs($type, $ctx = []) {
    $c = [['홈', '/']];
    if (!empty($ctx['sido'])) $c[] = [$ctx['sido']['name'], $ctx['sido']['url']];
    if (!empty($ctx['gu']))   $c[] = [$ctx['gu']['label'],  $ctx['gu']['url']];
    if (!empty($ctx['dong'])) $c[] = [$ctx['dong']['name'], $ctx['dong']['url']];
    if (!empty($ctx['shop'])) $c[] = [$ctx['shop']['name'], $ctx['shop']['url']];
    return $c;
}

/** sitemap.xml 문자열 */
function kkuk_sitemap_xml() {
    $now = date('Y-m-d');
    $x = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
       . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach (kkuk_all_urls() as [$u, $pri, $freq]) {
        $x .= "  <url><loc>" . kkuk_e(kkuk_abs($u)) . "</loc><lastmod>{$now}</lastmod>"
            . "<changefreq>{$freq}</changefreq><priority>{$pri}</priority></url>\n";
    }
    return $x . "</urlset>\n";
}

/** robots.txt 문자열 */
function kkuk_robots_txt() {
    if (KKUK_DEMO_DATA) {
        return "# 가상 데이터 운영 중 — 실제 업체 정보로 교체 후 KKUK_DEMO_DATA=false 로 변경\n"
             . "User-agent: *\nDisallow: /\n";
    }
    return "User-agent: *\nAllow: /\n"
         . "User-agent: Yeti\nAllow: /\n"            // 네이버
         . "User-agent: Daumoa\nAllow: /\n"          // 다음
         . "Disallow: /bbs/\nDisallow: /adm/\nDisallow: /plugin/\nDisallow: /*?\n"
         . "Sitemap: " . kkuk_abs('/sitemap.xml') . "\n";
}

/** rss.xml 문자열 — 네이버 서치어드바이저 RSS 제출용 */
function kkuk_rss_xml($limit = 60) {
    $items = '';
    $n = 0;
    foreach (kkuk_gu_all() as $g) {
        if ($n++ >= $limit) break;
        $items .= "    <item>\n"
               . '      <title>' . kkuk_e($g['area'] . ' 마사지 · 출장마사지 · 홈타이 안내') . "</title>\n"
               . '      <link>' . kkuk_e(kkuk_abs($g['url'])) . "</link>\n"
               . '      <guid isPermaLink="true">' . kkuk_e(kkuk_abs($g['url'])) . "</guid>\n"
               . '      <description>' . kkuk_e($g['blurb']) . "</description>\n"
               . '      <pubDate>' . date('r') . "</pubDate>\n"
               . "    </item>\n";
    }
    return '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
         . '<rss version="2.0"><channel>' . "\n"
         . '    <title>' . kkuk_e(KKUK_BRAND) . "</title>\n"
         . '    <link>' . kkuk_e(kkuk_abs('/')) . "</link>\n"
         . '    <description>' . kkuk_e('서울 · 경기 · 인천 행정구/행정동별 마사지, 출장마사지, 홈타이 안내') . "</description>\n"
         . "    <language>ko</language>\n" . $items
         . "</channel></rss>\n";
}
