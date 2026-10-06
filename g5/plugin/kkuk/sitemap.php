<?php
/** /plugin/kkuk/sitemap.php — 리라이트를 쓰지 않는 환경용 직접 호출 엔드포인트 */
include_once('./_common.g5.php');
require_once(__DIR__ . '/_common.php');
header('Content-Type: application/xml; charset=utf-8');
echo kkuk_sitemap_xml();
