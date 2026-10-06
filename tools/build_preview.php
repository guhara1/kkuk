<?php
/**
 * 정적 프리뷰 빌더
 *
 *   php tools/build_preview.php            샘플 빌드(기본, 약 70페이지)
 *   php tools/build_preview.php --all      전체 빌드(1,200여 페이지 / 수십 MB)
 *
 * 그누보드5 런타임과 완전히 같은 템플릿·라이브러리를 호출하므로
 * 여기서 보이는 화면이 실제 화면이다. 링크는 평면 파일명으로 치환해
 * 웹서버 없이 파일을 직접 열어도 이동이 된다.
 */
declare(strict_types=1);

$ROOT = dirname(__DIR__);
$ALL  = in_array('--all', $argv ?? [], true);

/* 데모 데이터 프리뷰이므로 noindex 유지, 평점 스키마는 꺼 둔다 */
define('KKUK_DEMO_DATA', true);
define('KKUK_SCHEMA_RATING', false);
define('KKUK_BASE', getenv('KKUK_BASE') ?: 'https://kkuk-ary.pages.dev');

require $ROOT . '/g5/plugin/kkuk/_common.php';
require $ROOT . '/g5/plugin/kkuk/tpl/pages.php';

$OUT = $ROOT . '/preview';

/* 이전 빌드 잔여 파일 제거 — 샘플 범위가 바뀌면 옛 페이지가 남아 혼동을 준다 */
if (is_dir($OUT)) {
    foreach (glob($OUT . '/*.html') as $f) @unlink($f);
}
@mkdir($OUT, 0775, true);
@mkdir($OUT . '/asset', 0775, true);
copy($ROOT . '/g5/plugin/kkuk/asset/kkuk.css', $OUT . '/asset/kkuk.css');
copy($ROOT . '/g5/plugin/kkuk/asset/kkuk.js',  $OUT . '/asset/kkuk.js');

/* ---------------------------------------------------------
   1. URL → 평면 파일명
   --------------------------------------------------------- */
function flat(string $path): string {
    $path = trim($path, '/');
    if ($path === '') return 'index.html';
    return str_replace('/', '-', $path) . '.html';
}

/* ---------------------------------------------------------
   2. 빌드 계획
   --------------------------------------------------------- */
$plan = [['/', 'home', null], ['/sitemap/', 'sitemap', null]];
foreach (kkuk_sido_all() as $s) $plan[] = [$s['url'], 'sido', $s['slug']];

if ($ALL) {
    foreach (kkuk_gu_all()   as $k => $g) $plan[] = [$g['url'], 'gu',   $k];
    foreach (kkuk_dong_all() as $k => $d) $plan[] = [$d['url'], 'dong', $k];
    foreach (kkuk_shop_all() as $k => $x) $plan[] = [$x['url'], 'shop', $k];
} else {
    /* 페이지 유형과 히어로 팔레트가 골고루 보이도록 네 지역을 고른다 */
    $sample = ['seoul/gangnam', 'seoul/mapo', 'gyeonggi/bundang', 'incheon/yeonsu'];
    foreach ($sample as $gk) {
        $g = kkuk_gu($gk);
        if (!$g) continue;
        $plan[] = [$g['url'], 'gu', $gk];
        foreach ($g['dongs'] as $dk) {
            $d = kkuk_dong($dk);
            $plan[] = [$d['url'], 'dong', $dk];
            foreach ($d['shops'] as $sl) $plan[] = [kkuk_shop($sl)['url'], 'shop', $sl];
        }
    }
}

/* 계획에 들어 있는 경로만 유효 링크로 취급한다 */
$BUILT = [];
foreach ($plan as [$u]) $BUILT[rtrim($u, '/') . '/'] = flat($u);
$BUILT['/'] = 'index.html';

/* ---------------------------------------------------------
   3. 링크·에셋 치환 훅 (ui.lib.php 가 호출)
   --------------------------------------------------------- */
function kkuk_url_filter($path) {
    global $BUILT, $ALL;
    $path = (string)$path;
    if ($path === '' || $path[0] === '#' || preg_match('#^(https?:|tel:|mailto:)#', $path)) return $path;
    // 해시(#t-visit 같은 업종 필터 앵커)는 떼어 두었다가 다시 붙인다
    $hash = '';
    if (($h = strpos($path, '#')) !== false) { $hash = substr($path, $h); $path = substr($path, 0, $h); }
    $key = rtrim($path, '/') . '/';
    if (isset($BUILT[$key])) return $BUILT[$key] . $hash;
    return ($ALL ? flat($path) : 'pending.html') . $hash;
}
function kkuk_asset_filter($file) { return 'asset/' . $file; }

/* ---------------------------------------------------------
   4. 렌더
   --------------------------------------------------------- */
$ok = $fail = 0;
$bytes = 0;
foreach ($plan as [$url, $type, $key]) {
    if      ($type === 'home')    $html = kkuk_page_home();
    elseif  ($type === 'sitemap') $html = kkuk_page_sitemap();
    elseif  ($type === 'sido')    $html = kkuk_page_sido($key);
    elseif  ($type === 'gu')   $html = kkuk_page_gu($key);
    elseif  ($type === 'dong') $html = kkuk_page_dong($key);
    else                       $html = kkuk_page_shop($key);
    if ($html === null) { $fail++; fwrite(STDERR, "  ! 렌더 실패 : {$type} {$key}\n"); continue; }
    $f = $OUT . '/' . flat($url);
    file_put_contents($f, $html);
    $bytes += strlen($html);
    $ok++;
}

/* 샘플 빌드에서 범위 밖 링크가 닿는 안내 페이지 */
if (!$ALL) {
    $p = ['type' => 'home', 'title' => '샘플 빌드 범위 밖 - ' . KKUK_BRAND,
          'desc' => '샘플 프리뷰에 포함되지 않은 페이지입니다.', 'url' => '/pending/',
          'area' => '', 'crumbs' => [['홈', '/']]];
    $h = kkuk_doc_open($p) . kkuk_header('')
       . '<main id="k-main" class="k-main"><div class="k-wrap"><section class="k-sect">'
       . '<div class="k-article"><h2>샘플 프리뷰 범위 밖 페이지입니다</h2>'
       . '<p>기본 프리뷰는 <b>서울 강남구 · 마포구, 경기 성남시 분당구, 인천 연수구</b>와 그 대표 행정동, '
       . '해당 업소만 생성합니다. 행정구 77곳 · 행정동 231곳 · 업소 908곳 전체를 보려면 아래 명령으로 다시 빌드하세요.</p>'
       . '<p><b>php tools/build_preview.php --all</b></p>'
       . '<p class="k-note">전체 빌드는 1,200여 개 파일이 생성되며 용량이 큽니다. 저장소에는 샘플만 포함돼 있습니다.</p>'
       . '</div><p class="k-mt"><a class="k-btn k-btn--brand" href="index.html">홈으로</a></p>'
       . '</section></div></main>' . kkuk_doc_close($p);
    file_put_contents($OUT . '/pending.html', $h);
    $ok++;
}

printf("── 프리뷰 빌드 완료 ──\n모드 : %s\n생성 : %d개 (실패 %d)\n용량 : %.1f MB\n경로 : preview/index.html\n",
    $ALL ? '전체' : '샘플', $ok, $fail, $bytes / 1048576);
