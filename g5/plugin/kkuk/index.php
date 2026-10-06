<?php
/**
 * 프런트 컨트롤러
 *
 * 그누보드5 루트의 .htaccess 가 지역 주소를 이 파일로 넘긴다.
 *   RewriteRule ^(.*)$ /plugin/kkuk/index.php?r=$1 [QSA,L]
 *
 * 리라이트를 쓰지 않는 환경에서는 /plugin/kkuk/index.php?r=seoul/gangnam 형태로 직접 호출해도 된다.
 */
include_once('./_common.g5.php');          // 그누보드5 common.php 로드
require_once(__DIR__ . '/_common.php');    // 플러그인 부트스트랩
require_once(__DIR__ . '/tpl/pages.php');
require_once(__DIR__ . '/router.php');

kkuk_route($_GET['r'] ?? ($_SERVER['PATH_INFO'] ?? ''));
