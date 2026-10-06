<?php
/**
 * 데이터 빌더 — 시드(tools/seed/*) → 런타임 데이터(g5/plugin/kkuk/data/*)
 *
 *   php tools/gen_data.php
 *
 * 전부 해시 기반이라 몇 번 돌려도 같은 결과가 나온다(스냅샷·캐시 안정).
 * install.php 가 이 파일들을 읽어 그누보드5 테이블에 적재한다.
 */
declare(strict_types=1);

$ROOT = dirname(__DIR__);
require $ROOT . '/g5/plugin/kkuk/lib/svg.lib.php';      // kkuk_hash / kkuk_pick
require $ROOT . '/g5/plugin/kkuk/lib/content.lib.php';  // kkuk_render / kkuk_one

$W = require $ROOT . '/tools/seed/shop_words.php';

/* ---------------------------------------------------------
   1. 지역 트리 구성
   --------------------------------------------------------- */
$sido = []; $gus = []; $dongs = [];

foreach (['seoul', 'gyeonggi', 'incheon'] as $file) {
    $seed = require $ROOT . "/tools/seed/{$file}.php";

    [$sName, $sSlug, $sFull, $sLat, $sLng] = explode('|', $seed['sido']);
    $sido[$sSlug] = [
        'slug' => $sSlug, 'name' => $sName, 'full' => $sFull,
        'lat' => (float)$sLat, 'lng' => (float)$sLng,
        'url' => "/{$sSlug}/", 'gu' => [],
    ];

    foreach ($seed['gu'] as $row) {
        $meta = array_shift($row);
        $f = explode('|', $meta);
        $f = array_pad($f, 11, '');
        [$gName, $gSlug, $gLat, $gLng, $lines, $stations, $marks, $trait, $near, $blurb, $city] = $f;

        $gKey = "{$sSlug}/{$gSlug}";
        $label = $city !== '' ? "{$city} {$gName}" : $gName;

        $gus[$gKey] = [
            'key'      => $gKey,
            'sido'     => $sSlug,
            'sido_name'=> $sName,
            'name'     => $gName,
            'label'    => $label,                       // 화면 표기 (경기 일반구는 '수원시 영통구')
            'city'     => $city,
            'slug'     => $gSlug,
            'area'     => trim("{$sName} {$label}"),    // 콘텐츠용 전체 지역명
            'lat'      => (float)$gLat,
            'lng'      => (float)$gLng,
            'lines'    => array_values(array_filter(explode(',', $lines))),
            'stations' => array_values(array_filter(explode(',', $stations))),
            'marks'    => array_values(array_filter(explode(',', $marks))),
            'trait'    => $trait,
            'near'     => array_values(array_filter(explode(',', $near))),
            'blurb'    => $blurb,
            'url'      => "/{$sSlug}/{$gSlug}/",
            'dongs'    => [],
        ];
        $sido[$sSlug]['gu'][] = $gKey;

        // 대표 행정동
        $names = [];
        foreach ($row as $drow) {
            $d = array_pad(explode('|', $drow), 4, '');
            [$dName, $dSlug, $dKind, $anchors] = $d;
            $names[] = $dName;
            $dKey = "{$gKey}/{$dSlug}";

            // 동 좌표 : 구청 좌표에서 결정론적 미세 오프셋(±0.012°). 운영 전 실측값 교체 권장.
            $ox = (kkuk_hash($dKey . 'x') % 2401 - 1200) / 100000;
            $oy = (kkuk_hash($dKey . 'y') % 2401 - 1200) / 100000;

            $dongs[$dKey] = [
                'key'     => $dKey,
                'sido'    => $sSlug,
                'gu'      => $gKey,
                'name'    => $dName,
                'slug'    => $dSlug,
                'kind'    => $dKind,
                'anchors' => array_values(array_filter(explode(',', $anchors))),
                'area'    => trim("{$sName} {$label} {$dName}"),
                'lat'     => round((float)$gLat + $oy, 6),
                'lng'     => round((float)$gLng + $ox, 6),
                'url'     => "/{$sSlug}/{$gSlug}/{$dSlug}/",
                'shops'   => [],
            ];
            $gus[$gKey]['dongs'][] = $dKey;
        }
        // 형제 동(인접 동 내부링크용)
        foreach ($gus[$gKey]['dongs'] as $i => $dKey) {
            $sib = $names; unset($sib[$i]);
            $dongs[$dKey]['siblings'] = array_values($sib);
            $dongs[$dKey]['sibling_keys'] = array_values(array_diff($gus[$gKey]['dongs'], [$dKey]));
        }
    }
}

/* ---------------------------------------------------------
   2. 가상 업소 생성
   --------------------------------------------------------- */
const TEL      = '05082024749';
const TEL_FMT  = '050-8202-4749';

/** 구 성격 + 시도로 60분 기준 단가를 정한다 */
function base_price(string $trait, string $sido): int {
    if (in_array($trait, ['of', 'office', 'nt'], true))      $b = 90000;
    elseif (in_array($trait, ['st', 'mixed', 'ap'], true))    $b = 75000;
    elseif ($trait === 'tr')                                  $b = 70000;
    else                                                      $b = 65000;
    $m = ($sido === 'seoul') ? 1.10 : (($sido === 'incheon') ? 0.95 : 1.0);
    $b = (int)round($b * $m);
    return (int)(round($b / 1000) * 1000);
}

/** 동 성격에 따른 업소 수 */
function shop_count(string $kind, string $guSlug, string $key): int {
    if ($guSlug === 'ongjin') return 2;                       // 도서 지역 : 출장 전용 소수
    if (in_array($kind, ['st', 'of', 'ind', 'ap'], true))         $range = [4, 5];
    elseif (in_array($kind, ['md', 'uni', 'nt', 'mixed'], true))  $range = [3, 4];
    else                                                          $range = [2, 3];   // rs, tr
    return $range[0] + kkuk_pick($key, $range[1] - $range[0] + 1, 'cnt');
}

/** 가중치 기반 업종 추출 */
function pick_type(array $types, string $key, int $i, string $guSlug): string {
    if ($guSlug === 'ongjin') return $i === 0 ? 'visit' : 'home';   // 로드샵 없음
    if ($i === 0) return 'road';                                     // 동마다 로드샵 1곳 보장
    $bag = [];
    foreach ($types as $t => $m) for ($n = 0; $n < (int)$m['weight']; $n++) $bag[] = $t;
    return $bag[kkuk_pick($key . '#' . $i, count($bag), 'type')];
}

$shops = [];
$usedNames = [];

foreach ($dongs as $dKey => $d) {
    $gu = $gus[$d['gu']];
    $n  = shop_count($d['kind'], $gu['slug'], $dKey);
    $bp = base_price($gu['trait'], $gu['sido']);

    for ($i = 0; $i < $n; $i++) {
        $k    = $dKey . '#' . $i;
        $type = pick_type($W['types'], $dKey, $i, $gu['slug']);
        $tm   = $W['types'][$type];

        /* -- 상호 --
           1차 : 어간 + 수식 + 업종 접미 조합으로 추출
           2차 : 전부 선점됐으면 실제 상호 관행대로 '○○점' 지점명을 붙여 유일성을 만든다 */
        $branch = mb_substr($d['name'], 0, -1, 'UTF-8') . '점';   // 역삼동 → 역삼점 / 강화읍 → 강화점
        $name = '';
        for ($try = 0; $try < 96; $try++) {
            $s  = $k . '|n' . $try;
            $nm = kkuk_one($W['name_pre'], $s, 'pre')
                . kkuk_one($W['name_mid'], $s, 'mid') . ' '
                . kkuk_one($W['name_suf'][$type], $s, 'suf');
            $nm = preg_replace('/\s+/u', ' ', trim($nm));
            if ($try >= 24) $nm .= ' ' . $branch;
            if ($try >= 72) $nm .= ' ' . ($i + 1);
            if (!isset($usedNames[$nm])) { $name = $nm; $usedNames[$nm] = true; break; }
        }
        if ($name === '') { $name = '온담 테라피 ' . $branch . ' ' . ($i + 1); $usedNames[$name] = true; }

        /* -- 코스 3종 -- */
        $ci = range(0, count($W['courses']) - 1);
        usort($ci, fn($a, $b) => kkuk_hash($k . 'c' . $a) <=> kkuk_hash($k . 'c' . $b));
        $ci = array_slice($ci, 0, 3);
        usort($ci, fn($a, $b) => $W['courses'][$a][2] <=> $W['courses'][$b][2]);

        $var = 1 + ((kkuk_hash($k . 'v') % 17) - 8) / 100;   // ±8%
        $courses = [];
        foreach ($ci as $j => $x) {
            [$cn1, $cn2, $min, $coef] = $W['courses'][$x];
            $courses[] = [
                'name'  => kkuk_pick($k, 2, 'cn' . $j) ? $cn2 : $cn1,
                'min'   => $min,
                'price' => (int)(round($bp * $coef * $var / 1000) * 1000),
            ];
        }
        $priceFrom = min(array_column($courses, 'price'));

        /* -- 태그 -- */
        $ti = range(0, count($W['tags']) - 1);
        usort($ti, fn($a, $b) => kkuk_hash($k . 't' . $a) <=> kkuk_hash($k . 't' . $b));
        $tags = [];
        foreach (array_slice($ti, 0, 3 + kkuk_pick($k, 2, 'tn')) as $x) $tags[] = $W['tags'][$x];
        if ($type === 'road' || $type === 'spa') $tags[] = '출장·홈타이 병행';

        $hours = kkuk_one($W['hours'], $k, 'hr');

        /* -- 치환 변수 -- */
        $vars = [
            'AREA' => $d['area'], 'DONG' => $d['name'], 'GU' => $gu['label'],
            'LABEL' => $tm['label'], 'HOURS' => $hours, 'TEL_FMT' => TEL_FMT,
            'A1' => $d['anchors'][0] ?? $d['name'],
            'A2' => $d['anchors'][1] ?? ($d['anchors'][0] ?? $d['name']),
            'A3' => $d['anchors'][2] ?? ($d['anchors'][0] ?? $d['name']),
            'C1' => $courses[0]['name'], 'C2' => $courses[1]['name'], 'C3' => $courses[2]['name'],
            'M1' => (string)$courses[0]['min'], 'M2' => (string)$courses[1]['min'], 'M3' => (string)$courses[2]['min'],
        ];

        $tagline = kkuk_render(kkuk_one($W['tagline'][$type], $k, 'tl'), $vars);

        /* -- 상세 디스크립션 --
           로드샵·스파 : loc → course → bridge(출장 마사지 + 홈타이 필수) → close
           출장·홈타이 : loc → course → policy → close                                */
        $parts = [
            kkuk_render(kkuk_one($W['desc']['loc'][$type], $k, 'dl'), $vars),
            kkuk_render(kkuk_one($W['desc']['course'],      $k, 'dc'), $vars),
            in_array($type, ['road', 'spa'], true)
                ? kkuk_render(kkuk_one($W['desc']['bridge'], $k, 'db'), $vars)
                : kkuk_render(kkuk_one($W['desc']['policy'], $k, 'dp'), $vars),
            kkuk_render(kkuk_one($W['desc']['close'],       $k, 'dz'), $vars),
        ];
        $desc = implode(' ', $parts);

        // 안전장치 : 로드샵/스파 디스크립션에 두 키워드가 반드시 있어야 한다
        if (in_array($type, ['road', 'spa'], true)) {
            if (mb_strpos($desc, '출장 마사지') === false || mb_strpos($desc, '홈타이') === false) {
                $desc .= ' 매장 방문 외 출장 마사지와 홈타이도 함께 운영합니다.';
            }
        }

        $slug = $d['slug'] . '-' . ($i + 1);
        $shops[$slug] = [
            'slug'       => $slug,
            'name'       => $name,
            'type'       => $type,
            'type_label' => $tm['label'],
            'type_badge' => $tm['badge'],
            'dong'       => $dKey,
            'gu'         => $d['gu'],
            'sido'       => $d['sido'],
            'tagline'    => $tagline,
            'desc'       => $desc,
            'courses'    => $courses,
            'price_from' => $priceFrom,
            'hours'      => $hours,
            'tags'       => array_values(array_unique($tags)),
            'rating'     => round(4.3 + (kkuk_hash($k . 'r') % 7) / 10, 1),
            'reviews'    => 18 + kkuk_hash($k . 'rv') % 390,
            'tel'        => TEL,
            'tel_fmt'    => TEL_FMT,
            'url'        => "/shop/{$slug}/",
        ];
        $dongs[$dKey]['shops'][] = $slug;
    }
}

/* 구/시도 집계 */
foreach ($gus as $k => $g) {
    $c = 0;
    foreach ($g['dongs'] as $dk) $c += count($dongs[$dk]['shops']);
    $gus[$k]['shop_count'] = $c;
    $gus[$k]['dong_count'] = count($g['dongs']);
}
foreach ($sido as $k => $s) {
    $c = 0;
    foreach ($s['gu'] as $gk) $c += $gus[$gk]['shop_count'];
    $sido[$k]['shop_count'] = $c;
    $sido[$k]['gu_count']   = count($s['gu']);
}

/* ---------------------------------------------------------
   3. 파일 출력
   --------------------------------------------------------- */
function dump_php(string $path, array $data, string $title): void {
    $head = "<?php\n/**\n * {$title}\n *\n * ⚠ 자동 생성 파일 — 직접 수정하지 말고 `php tools/gen_data.php` 로 다시 만든다.\n"
          . " *   생성 시각 : " . date('Y-m-d H:i') . "\n */\nreturn ";
    $body = var_export($data, true);
    file_put_contents($path, $head . $body . ";\n");
}

$out = dirname(__DIR__) . '/g5/plugin/kkuk/data';
@mkdir($out, 0775, true);
dump_php("$out/regions.php", ['sido' => $sido, 'gu' => $gus, 'dong' => $dongs], '지역 트리 (시도 / 행정구 / 대표 행정동)');
dump_php("$out/shops.php",   $shops, '가상 업소 데이터 (운영 전 실제 정보로 교체)');

/* ---------------------------------------------------------
   4. 리포트
   --------------------------------------------------------- */
$byType = [];
foreach ($shops as $s) $byType[$s['type_label']] = ($byType[$s['type_label']] ?? 0) + 1;

$road = array_filter($shops, fn($s) => in_array($s['type'], ['road', 'spa'], true));
$bad  = array_filter($road, function ($s) {
    return mb_strpos($s['desc'], '출장 마사지') === false || mb_strpos($s['desc'], '홈타이') === false;
});

echo "── 생성 완료 ──\n";
echo "시도 : " . count($sido) . " / 행정구 : " . count($gus) . " / 대표 행정동 : " . count($dongs) . "\n";
echo "업소 : " . count($shops) . "  (" . implode(', ', array_map(fn($k, $v) => "$k $v", array_keys($byType), $byType)) . ")\n";
echo "상호 중복 : " . (count($shops) - count(array_unique(array_column($shops, 'name')))) . "건\n";
echo "로드샵·스파 디스크립션 키워드(출장 마사지+홈타이) 누락 : " . count($bad) . "건\n";
foreach ($sido as $s) echo "  - {$s['name']} : 구 {$s['gu_count']} / 업소 {$s['shop_count']}\n";
