<?php
/**
 * 라우터 — 주소를 페이지 함수로 연결한다.
 *
 * 지원 주소
 *   /                         홈
 *   /{시도}/                  예) /seoul/
 *   /{시도}/{구}/             예) /seoul/gangnam/
 *   /{시도}/{구}/{동}/        예) /seoul/gangnam/yeoksam/
 *   /shop/{슬러그}/           예) /shop/yeoksam-1/
 *   /search/?q=              검색
 *   /sitemap.xml /rss.xml /robots.txt
 *
 * .htaccess 가 위 주소를 /plugin/kkuk/index.php?r=... 로 넘긴다(아래 index.php 참고).
 */

function kkuk_route($path) {
    $path = trim(parse_url((string)$path, PHP_URL_PATH) ?? '', '/');

    /* 정적 산출물 */
    if ($path === 'sitemap.xml') {
        header('Content-Type: application/xml; charset=utf-8'); echo kkuk_sitemap_index_xml(); return true;
    }
    if (preg_match('#^sitemap-(core|gu|dong|shop)\.xml$#', $path, $m)) {
        header('Content-Type: application/xml; charset=utf-8'); echo kkuk_sitemap_xml($m[1]); return true;
    }
    if ($path === 'rss.xml')     { header('Content-Type: application/rss+xml; charset=utf-8'); echo kkuk_rss_xml();  return true; }
    if ($path === 'robots.txt')  { header('Content-Type: text/plain; charset=utf-8'); echo kkuk_robots_txt(); return true; }

    $seg = $path === '' ? [] : explode('/', $path);
    $html = null;

    if (!$seg) {
        $html = kkuk_page_home();
    } elseif ($seg[0] === 'sitemap' && count($seg) === 1) {
        $html = kkuk_page_sitemap();
    } elseif ($seg[0] === 'search') {
        $html = kkuk_page_search($_GET['q'] ?? '');
    } elseif ($seg[0] === 'shop' && isset($seg[1])) {
        $html = kkuk_page_shop($seg[1]);
    } elseif (count($seg) === 1) {
        $html = kkuk_page_sido($seg[0]);
    } elseif (count($seg) === 2) {
        $html = kkuk_page_gu($seg[0] . '/' . $seg[1]);
    } elseif (count($seg) === 3) {
        $html = kkuk_page_dong($seg[0] . '/' . $seg[1] . '/' . $seg[2]);
    }

    if ($html === null) {
        http_response_code(404);
        $html = kkuk_page_404($path);
    }
    header('Content-Type: text/html; charset=utf-8');
    echo $html;
    return true;
}
