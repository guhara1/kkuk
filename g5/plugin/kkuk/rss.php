<?php
/** /plugin/kkuk/rss.php — 네이버 서치어드바이저 RSS 제출용 */
include_once('./_common.g5.php');
require_once(__DIR__ . '/_common.php');
header('Content-Type: application/rss+xml; charset=utf-8');
echo kkuk_rss_xml();
