<?php
/**
 * 그누보드5 공통 파일 로더.
 * 플러그인 위치가 /plugin/kkuk/ 이므로 두 단계 위가 그누보드 루트다.
 * 설치 경로가 다르면 이 파일만 고치면 된다.
 */
if (!defined('_GNUBOARD_')) {
    $g5_common = dirname(__DIR__, 2) . '/common.php';
    if (is_file($g5_common)) {
        include_once($g5_common);
    }
}
