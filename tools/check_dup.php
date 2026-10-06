<?php
/**
 * 중복·유사도 검사
 *
 *   php tools/check_dup.php            전체(구 77 + 동 231) 검사
 *   php tools/check_dup.php --top 20   상위 N쌍 출력
 *
 * 방법
 *   본문을 공백 제거 후 5글자 셰이클(문자 n-gram)로 쪼개고, 2개씩 샘플링해
 *   페이지 쌍마다 자카드 유사도를 구한다. 중복 콘텐츠 판정에서 실제로 쓰이는 방식이다.
 *
 * 판정 기준(실무 경험치)
 *   0.30 미만  안전        0.30~0.45 주의        0.45 이상  수정 필요
 */
declare(strict_types=1);

$ROOT = dirname(__DIR__);
$TOP  = 10;
foreach ($argv as $i => $a) if ($a === '--top' && isset($argv[$i + 1])) $TOP = (int)$argv[$i + 1];

define('KKUK_DEMO_DATA', true);
define('KKUK_BASE', 'https://example.com');
require $ROOT . '/g5/plugin/kkuk/_common.php';

/** 본문 생성 → 평문 */
function plain_text(array $blocks): string {
    $t = '';
    foreach ($blocks as $b) { $t .= $b['h'] . ' '; foreach ($b['ps'] as $p) $t .= $p . ' '; }
    return preg_replace('/\s+/u', '', $t);
}

/** 5글자 셰이클 집합(2칸 간격 샘플링) */
function shingles(string $t): array {
    $n = mb_strlen($t, 'UTF-8');
    $set = [];
    for ($i = 0; $i + 5 <= $n; $i += 2) $set[crc32(mb_substr($t, $i, 5, 'UTF-8'))] = 1;
    return $set;
}

$pages = [];
echo "본문 생성 중...\n";

foreach (kkuk_gu_all() as $key => $g) {
    $names = [];
    foreach ($g['dongs'] as $dk) $names[] = kkuk_dong($dk)['name'];
    $ctx = ['seed' => $key, 'sido' => $g['sido_name'], 'gu' => $g['label'], 'city' => $g['city'],
            'area' => $g['area'], 'stations' => $g['stations'], 'marks' => $g['marks'],
            'near' => $g['near'], 'lines' => $g['lines'], 'dongs' => $names,
            'trait' => $g['trait'], 'blurb' => $g['blurb'],
            'nshop' => $g['shop_count'], 'ndong' => $g['dong_count'], 'tel_fmt' => KKUK_TEL_FMT];
    $txt = plain_text(kkuk_build_content($ctx, 'gu', 1500));
    $pages[] = ['id' => '구 ' . $g['area'], 'len' => mb_strlen($txt, 'UTF-8'), 'sh' => shingles($txt)];
}

foreach (kkuk_dong_all() as $key => $d) {
    $g = kkuk_gu($d['gu']);
    $nbNames = [];
    foreach ($d['nb_keys'] as $nk) { $x = kkuk_dong($nk); if ($x) $nbNames[] = $x['name']; }
    $ctx = ['seed' => $key, 'sido' => $g['sido_name'], 'gu' => $g['label'], 'dong' => $d['name'],
            'area' => $d['area'], 'anchors' => $d['anchors'], 'kind' => $d['kind'],
            'trait' => $d['kind'], 'siblings' => $d['siblings'],
            'dir' => $d['dir'], 'km2' => $d['km2'], 'grade' => $d['grade'], 'neighbors' => $nbNames,
            'stations' => $g['stations'], 'marks' => $g['marks'], 'near' => $g['near'],
            'lines' => $g['lines'], 'dongs' => $d['siblings'], 'blurb' => $g['blurb'],
            'nshop' => count($d['shops']), 'ndong' => $g['dong_count'], 'tel_fmt' => KKUK_TEL_FMT];
    $txt = plain_text(kkuk_build_content($ctx, 'dong', 1500));
    $pages[] = ['id' => '동 ' . $d['area'], 'len' => mb_strlen($txt, 'UTF-8'), 'sh' => shingles($txt)];
}

$N = count($pages);
echo "페이지 {$N}개 · 쌍 비교 " . number_format($N * ($N - 1) / 2) . "건\n검사 중...\n";

$pairs = []; $sum = 0.0; $cnt = 0; $max = 0.0; $maxPair = '';
for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $a = $pages[$i]['sh']; $b = $pages[$j]['sh'];
        $inter = count(array_intersect_key($a, $b));
        if (!$inter) { $cnt++; continue; }
        $sim = $inter / (count($a) + count($b) - $inter);
        $sum += $sim; $cnt++;
        if ($sim > $max) { $max = $sim; $maxPair = $pages[$i]['id'] . '  ↔  ' . $pages[$j]['id']; }
        if ($sim >= 0.28) $pairs[] = [$sim, $pages[$i]['id'], $pages[$j]['id']];
    }
}
usort($pairs, fn($x, $y) => $y[0] <=> $x[0]);

$lens = array_column($pages, 'len');
sort($lens);
$short = array_filter($pages, fn($p) => $p['len'] < 1500);

echo "\n──────── 결과 ────────\n";
printf("본문 길이(공백 제외)  최소 %d / 중앙 %d / 최대 %d자\n", $lens[0], $lens[intdiv($N, 2)], $lens[$N - 1]);
printf("1,500자 미만 페이지    %d개\n", count($short));
printf("평균 유사도            %.4f\n", $sum / max(1, $cnt));
printf("최대 유사도            %.4f   (%s)\n", $max, $maxPair);
printf("0.30 이상 쌍           %d건\n", count(array_filter($pairs, fn($p) => $p[0] >= 0.30)));
printf("0.45 이상 쌍           %d건\n", count(array_filter($pairs, fn($p) => $p[0] >= 0.45)));

if ($pairs) {
    echo "\n상위 " . min($TOP, count($pairs)) . "쌍\n";
    foreach (array_slice($pairs, 0, $TOP) as $p) printf("  %.4f  %s  ↔  %s\n", $p[0], $p[1], $p[2]);
}
echo "\n판정 : " . ($max < 0.30 ? '안전 (0.30 미만)' : ($max < 0.45 ? '주의 — 상위 쌍 확인 권장' : '수정 필요')) . "\n";
foreach ($short as $s) echo "  ! 짧음 : {$s['id']} ({$s['len']}자)\n";
