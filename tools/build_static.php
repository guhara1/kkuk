<?php
/**
 * 정적 사이트 빌드 (Cloudflare Pages / Netlify / S3 등 정적 호스팅용)
 *
 *   php tools/build_static.php
 *
 * preview/ 와 다른 점
 *   - 주소를 그대로 쓴다 : /seoul/gangnam/yeoksam/index.html  (SEO 주소 유지)
 *   - sitemap.xml · rss.xml · robots.txt · 404.html · _headers 생성
 *   - 검색은 서버가 없으므로 search-index.json + 클라이언트 스크립트로 동작
 *
 * 환경 변수 (Cloudflare Pages → 설정 → 환경 변수)
 *   KKUK_BASE        사이트 절대주소. 미지정 시 CF_PAGES_URL 사용
 *   KKUK_DEMO_DATA   'false' 로 두면 색인 허용. 기본값 true(= noindex, robots 전체 차단)
 *   KKUK_BRAND       상호
 *   KKUK_BRAND_SUB   헤더 보조 문구
 *
 * PHP 7.4 이상이면 동작한다(빌드 이미지 PHP 버전에 민감하지 않도록 맞춤).
 */

$ROOT = dirname(__DIR__);

/** 환경 변수 읽기 */
function envv($k, $default = null) {
    $v = getenv($k);
    return ($v === false || $v === '') ? $default : $v;
}

$base = envv('KKUK_BASE', envv('CF_PAGES_URL', 'https://kkuk-ary.pages.dev'));
$base = rtrim($base, '/');
$demo = strtolower((string)envv('KKUK_DEMO_DATA', 'true')) !== 'false';

define('KKUK_BASE', $base);
define('KKUK_DEMO_DATA', $demo);
define('KKUK_SCHEMA_RATING', strtolower((string)envv('KKUK_SCHEMA_RATING', 'false')) === 'true');
if (envv('KKUK_BRAND'))     define('KKUK_BRAND', envv('KKUK_BRAND'));
if (envv('KKUK_BRAND_SUB')) define('KKUK_BRAND_SUB', envv('KKUK_BRAND_SUB'));

require $ROOT . '/g5/plugin/kkuk/_common.php';
require $ROOT . '/g5/plugin/kkuk/tpl/pages.php';

$OUT = $ROOT . '/dist';

/* ---------------------------------------------------------
   0. 출력 디렉터리 초기화
   --------------------------------------------------------- */
function rrmdir($dir) {
    if (!is_dir($dir)) return;
    foreach (scandir($dir) as $f) {
        if ($f === '.' || $f === '..') continue;
        $p = $dir . '/' . $f;
        is_dir($p) ? rrmdir($p) : @unlink($p);
    }
    @rmdir($dir);
}
rrmdir($OUT);
@mkdir($OUT, 0775, true);

/** 경로에 파일 쓰기 (디렉터리 자동 생성) */
function put($path, $content) {
    $dir = dirname($path);
    if (!is_dir($dir)) @mkdir($dir, 0775, true);
    file_put_contents($path, $content);
    return strlen($content);
}

/* ---------------------------------------------------------
   1. 에셋 (캐시 무효화를 위해 버전 쿼리를 붙인다)
   --------------------------------------------------------- */
@mkdir($OUT . '/asset', 0775, true);
$assetVer = [];
foreach (['kkuk.css', 'kkuk.js'] as $f) {
    $src = $ROOT . '/g5/plugin/kkuk/asset/' . $f;
    copy($src, $OUT . '/asset/' . $f);
    $assetVer[$f] = substr(md5_file($src), 0, 8);
}

/* 링크는 원래 주소를 그대로 쓴다(정적 호스팅이 디렉터리 index.html 을 찾아 준다) */
function kkuk_url_filter($path) { return $path; }
function kkuk_asset_filter($file) {
    global $assetVer;
    return '/asset/' . $file . (isset($assetVer[$file]) ? '?v=' . $assetVer[$file] : '');
}

/* ---------------------------------------------------------
   1-2. 업소 썸네일을 외부 .svg 로 추출
        같은 썸네일이 구/동/업소 페이지에 반복 등장하므로, 외부화하면
        HTML 용량이 줄고 브라우저 캐시가 걸린다(모바일 로딩에 유리).
   --------------------------------------------------------- */
$thumbBytes = 0;
foreach (kkuk_shop_all() as $slug => $x) {
    $d = kkuk_dong($x['dong']);
    $svg = kkuk_shop_svg(['name' => $x['name'], 'type' => $x['type_badge'],
                          'where' => $d ? $d['name'] : '', 'seed' => $slug]);
    $thumbBytes += put($OUT . '/img/shop/' . $slug . '.svg', $svg);
}
function kkuk_shop_img_filter($s) { return '/img/shop/' . $s['slug'] . '.svg'; }

/* ---------------------------------------------------------
   2. 페이지
   --------------------------------------------------------- */
$plan = [['/', 'home', null], ['/sitemap/', 'sitemap', null]];
foreach (kkuk_sido_all() as $s)      $plan[] = [$s['url'], 'sido', $s['slug']];
foreach (kkuk_gu_all()   as $k => $g) $plan[] = [$g['url'], 'gu',   $k];
foreach (kkuk_dong_all() as $k => $d) $plan[] = [$d['url'], 'dong', $k];
foreach (kkuk_shop_all() as $k => $x) $plan[] = [$x['url'], 'shop', $k];

$ok = 0; $fail = 0; $bytes = 0;
foreach ($plan as $row) {
    list($url, $type, $key) = $row;
    if      ($type === 'home')    $html = kkuk_page_home();
    elseif  ($type === 'sitemap') $html = kkuk_page_sitemap();
    elseif  ($type === 'sido')    $html = kkuk_page_sido($key);
    elseif  ($type === 'gu')   $html = kkuk_page_gu($key);
    elseif  ($type === 'dong') $html = kkuk_page_dong($key);
    else                       $html = kkuk_page_shop($key);

    if ($html === null) { $fail++; fwrite(STDERR, "  ! 렌더 실패 : {$type} {$key}\n"); continue; }
    $bytes += put($OUT . rtrim($url, '/') . '/index.html', $html);
    $ok++;
}

/* ---------------------------------------------------------
   3. 검색 (서버가 없으므로 색인 JSON + 클라이언트 필터)
   --------------------------------------------------------- */
$idx = ['r' => [], 's' => []];
foreach (kkuk_gu_all() as $g) {
    $idx['r'][] = [$g['area'], $g['url'], (int)$g['shop_count'],
                   implode(' ', array_merge($g['stations'], $g['marks'], [$g['name']]))];
}
foreach (kkuk_dong_all() as $d) {
    $idx['r'][] = [$d['area'], $d['url'], count($d['shops']),
                   implode(' ', array_merge($d['anchors'], [$d['name']]))];
}
foreach (kkuk_shop_all() as $x) {
    $d = kkuk_dong($x['dong']);
    $idx['s'][] = [$x['name'], $d ? $d['area'] : '', $x['url'], $x['type_label']];
}
$bytes += put($OUT . '/search-index.json', json_encode($idx, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

/* 검색 페이지 : 서버 렌더 결과 대신 클라이언트 스크립트가 결과를 그린다 */
$searchJs = <<<'JS'
<script>
(function(){
  var box = document.getElementById('k-sresult');
  var inp = document.getElementById('kq');
  if(!box) return;
  var q = new URLSearchParams(location.search).get('q') || '';
  if(inp) inp.value = q;
  if(!q){ box.innerHTML = '<div class="k-empty">지역명, 역 이름 또는 업소명을 입력해 주세요.</div>'; return; }
  box.innerHTML = '<div class="k-empty">검색 중…</div>';
  fetch('/search-index.json').then(function(r){return r.json();}).then(function(d){
    var hitR = d.r.filter(function(x){ return (x[0]+' '+x[3]).indexOf(q) !== -1; }).slice(0,60);
    var hitS = d.s.filter(function(x){ return (x[0]+' '+x[1]+' '+x[3]).indexOf(q) !== -1; }).slice(0,40);
    var h = '';
    h += '<div class="k-shead"><span class="k-shead__bar"></span><h2 class="k-h2">지역 결과 '+hitR.length+'건</h2></div>';
    if(hitR.length){
      h += '<div class="k-links"><div class="k-links__list">';
      hitR.forEach(function(x){ h += '<a href="'+x[1]+'">'+x[0]+'</a>'; });
      h += '</div></div>';
    } else { h += '<div class="k-empty">일치하는 지역이 없습니다.</div>'; }
    h += '<div class="k-shead" style="margin-top:34px"><span class="k-shead__bar"></span><h2 class="k-h2">업소 결과 '+hitS.length+'건</h2></div>';
    if(hitS.length){
      h += '<div class="k-links"><div class="k-links__list">';
      hitS.forEach(function(x){ h += '<a href="'+x[2]+'">'+x[0]+' · '+x[1]+' · '+x[3]+'</a>'; });
      h += '</div></div>';
    } else { h += '<div class="k-empty">일치하는 업소가 없습니다.</div>'; }
    box.innerHTML = h;
    document.title = q + ' 검색 결과 - ' + document.title.split(' - ').pop();
  }).catch(function(){ box.innerHTML = '<div class="k-empty">검색 색인을 불러오지 못했습니다.</div>'; });
})();
</script>
JS;
$sHtml = kkuk_page_search('');
$sHtml = str_replace('</main>', '<div class="k-wrap"><section class="k-sect" id="k-sresult"></section></div></main>', $sHtml);
$sHtml = str_replace('</body>', $searchJs . "\n</body>", $sHtml);
$bytes += put($OUT . '/search/index.html', $sHtml);

/* ---------------------------------------------------------
   4. 404 / robots / sitemap / rss / _headers
   --------------------------------------------------------- */
$bytes += put($OUT . '/404.html',    kkuk_page_404(''));
$bytes += put($OUT . '/robots.txt',  kkuk_robots_txt());
$bytes += put($OUT . '/rss.xml',     kkuk_rss_xml());

/* 사이트맵 인덱스 + 분할 사이트맵 : 검색엔진이 구역별로 나눠 수집해 반영이 빨라진다 */
$bytes += put($OUT . '/sitemap.xml', kkuk_sitemap_index_xml());
foreach (array_keys(kkuk_sitemap_parts()) as $part) {
    $bytes += put($OUT . "/sitemap-{$part}.xml", kkuk_sitemap_xml($part));
}

/* IndexNow 키 파일 (빙·얀덱스 등 즉시 통보용. 네이버·구글은 미지원) */
$indexnowKey = substr(hash('sha256', KKUK_BASE . '|kkuk-indexnow'), 0, 32);
$bytes += put($OUT . "/{$indexnowKey}.txt", $indexnowKey . "\n");

$headers = <<<TXT
# 정적 자산 : 파일명에 버전 쿼리를 붙이므로 장기 캐시 가능
/asset/*
  Cache-Control: public, max-age=31536000, immutable

/img/shop/*
  Cache-Control: public, max-age=604800

/search-index.json
  Cache-Control: public, max-age=3600

/*
  X-Content-Type-Options: nosniff
  Referrer-Policy: strict-origin-when-cross-origin
  X-Frame-Options: SAMEORIGIN
  Permissions-Policy: geolocation=(), camera=(), microphone=()
  Cache-Control: public, max-age=0, must-revalidate
TXT;
$bytes += put($OUT . '/_headers', $headers . "\n");

/* ---------------------------------------------------------
   5. 리포트
   --------------------------------------------------------- */
$files = 0;
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($OUT, FilesystemIterator::SKIP_DOTS));
foreach ($it as $f) { if ($f->isFile()) $files++; }

echo "── 정적 빌드 완료 ──\n";
echo "출력        : dist/\n";
echo "사이트 주소 : " . KKUK_BASE . "\n";
echo "색인 정책   : " . (KKUK_DEMO_DATA
    ? '지역 페이지 index / 업소 상세 noindex (가상 데이터 보호)'
    : '전 페이지 index') . "\n";
printf("페이지      : %d개 (실패 %d)\n", $ok, $fail);
printf("업소 썸네일 : %d개 / %.1f MB (외부 .svg)\n", count(kkuk_shop_all()), $thumbBytes / 1048576);
printf("사이트맵    : 인덱스 + %s\n", implode(', ', array_map(fn($k) => "sitemap-{$k}.xml", array_keys(kkuk_sitemap_parts()))));
printf("IndexNow 키 : %s.txt\n", $indexnowKey);
printf("총 파일     : %d개 / %.1f MB\n", $files, ($bytes + $thumbBytes) / 1048576);
if (KKUK_DEMO_DATA) {
    echo "\n※ 업소 상세 " . count(kkuk_shop_all()) . "곳은 가상 데이터이므로 noindex 입니다.\n";
    echo "  (수집은 허용 / 검색 노출만 차단, sitemap-shop.xml 도 생성하지 않음)\n";
    echo "  실제 업체 정보로 교체한 뒤 KKUK_DEMO_DATA=false 로 두면 업소 페이지도 색인됩니다.\n";
}
