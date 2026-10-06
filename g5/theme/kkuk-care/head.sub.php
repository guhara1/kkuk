<?php
/**
 * 문서 머리 — 게시판 등 그누보드5 기본 페이지에도 같은 디자인을 입힌다.
 * 지역/업소 페이지는 플러그인이 자체적으로 전체 문서를 그리므로 이 파일을 타지 않는다.
 */
if (!defined('_GNUBOARD_')) exit;

require_once(G5_PLUGIN_PATH . '/kkuk/_common.php');

if (!isset($g5_head_title) || $g5_head_title == '') $g5_head_title = $config['cf_title'];
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<meta name="format-detection" content="telephone=yes">
<meta name="theme-color" content="#0B6257" media="(prefers-color-scheme: light)">
<meta name="theme-color" content="#121110" media="(prefers-color-scheme: dark)">
<link rel="icon" href="/favicon.ico" sizes="32x32">
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="manifest" href="/site.webmanifest">
<title><?php echo $g5_head_title; ?></title>
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/variable/pretendardvariable-dynamic-subset.min.css">
<link rel="stylesheet" href="<?php echo G5_URL; ?>/plugin/kkuk/asset/kkuk.css">
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/style.css">
<?php if (defined('G5_IS_MOBILE') && G5_IS_MOBILE) { ?>
<link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/mobile/style.css">
<?php } ?>
<script>
try{var t=localStorage.getItem('kkuk-theme');if(t==='dark'||t==='light')
document.documentElement.setAttribute('data-theme',t);}catch(e){}
</script>
<!--[if lt IE 9]><script src="<?php echo G5_JS_URL; ?>/html5.js"></script><![endif]-->
<script src="<?php echo G5_JS_URL; ?>/jquery-1.12.4.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/jquery.menu.js"></script>
<script src="<?php echo G5_JS_URL; ?>/common.js"></script>
<script src="<?php echo G5_JS_URL; ?>/wrest.js"></script>
<script>
var g5_url       = "<?php echo G5_URL; ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL; ?>";
var g5_is_member = "<?php echo isset($is_member) ? $is_member : ''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin) ? $is_admin : ''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN; ?>";
</script>
</head>
<body>
<a class="k-skip" href="#k-main">본문으로 바로가기</a>
