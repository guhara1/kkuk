<?php
/** /plugin/kkuk/robots.php — robots.txt 내용을 생성한다(리라이트로 /robots.txt 에 연결) */
include_once('./_common.g5.php');
require_once(__DIR__ . '/_common.php');
header('Content-Type: text/plain; charset=utf-8');
echo kkuk_robots_txt();
