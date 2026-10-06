<?php
/**
 * 테마 메인 — 플러그인 홈 페이지를 그대로 출력한다.
 * (G5 기본 index.php 의 최신글 영역을 쓰고 싶다면 아래 대신 기본 테마 내용을 두면 된다)
 */
if (!defined('_GNUBOARD_')) exit;

require_once(G5_PLUGIN_PATH . '/kkuk/_common.php');
require_once(G5_PLUGIN_PATH . '/kkuk/tpl/pages.php');

echo kkuk_page_home();
