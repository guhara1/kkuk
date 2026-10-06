<?php
/**
 * 설치 / 데이터 적재
 *
 *   브라우저에서 /plugin/kkuk/install.php 접속 (최고관리자만 실행 가능)
 *
 * 하는 일
 *   1. g5_kkuk_region / g5_kkuk_shop 테이블 생성
 *   2. data/regions.php · data/shops.php 내용을 테이블에 적재(REPLACE)
 *
 * 파일 기반으로만 운영해도 사이트는 동작한다. 관리자 화면에서 업소를 추가·수정하려면
 * 이 설치를 실행해 DB 모드로 전환한 뒤 g5_kkuk_shop 을 관리하면 된다.
 * (region.lib.php 의 kkuk_db_mode() 가 테이블에 행이 있으면 true 를 반환한다)
 */
include_once('./_common.g5.php');
require_once(__DIR__ . '/_common.php');

if (!defined('_GNUBOARD_')) {
    exit('그누보드5 환경에서만 실행할 수 있습니다. (common.php 를 찾지 못했습니다)');
}
if (empty($is_admin) || $is_admin !== 'super') {
    exit('최고관리자만 실행할 수 있습니다.');
}

$pfx   = G5_TABLE_PREFIX;
$tReg  = $pfx . 'kkuk_region';
$tShop = $pfx . 'kkuk_shop';
$log   = [];

/* 1. 테이블 ------------------------------------------------ */
sql_query("CREATE TABLE IF NOT EXISTS `{$tReg}` (
  `rg_id`     int(11) NOT NULL AUTO_INCREMENT,
  `rg_key`    varchar(100) NOT NULL DEFAULT '',
  `rg_type`   varchar(10)  NOT NULL DEFAULT '',
  `rg_parent` varchar(100) NOT NULL DEFAULT '',
  `rg_sido`   varchar(30)  NOT NULL DEFAULT '',
  `rg_name`   varchar(60)  NOT NULL DEFAULT '',
  `rg_label`  varchar(90)  NOT NULL DEFAULT '',
  `rg_slug`   varchar(60)  NOT NULL DEFAULT '',
  `rg_lat`    decimal(10,6) NOT NULL DEFAULT 0,
  `rg_lng`    decimal(10,6) NOT NULL DEFAULT 0,
  `rg_kind`   varchar(10)  NOT NULL DEFAULT '',
  `rg_trait`  varchar(10)  NOT NULL DEFAULT '',
  `rg_blurb`  varchar(255) NOT NULL DEFAULT '',
  `rg_json`   mediumtext   NOT NULL,
  `rg_order`  int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`rg_id`),
  UNIQUE KEY `rg_key` (`rg_key`),
  KEY `rg_type` (`rg_type`), KEY `rg_parent` (`rg_parent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;", true);

sql_query("CREATE TABLE IF NOT EXISTS `{$tShop}` (
  `sh_id`      int(11) NOT NULL AUTO_INCREMENT,
  `sh_slug`    varchar(80)  NOT NULL DEFAULT '',
  `sh_name`    varchar(120) NOT NULL DEFAULT '',
  `sh_type`    varchar(10)  NOT NULL DEFAULT '',
  `sh_dong`    varchar(100) NOT NULL DEFAULT '',
  `sh_gu`      varchar(100) NOT NULL DEFAULT '',
  `sh_sido`    varchar(30)  NOT NULL DEFAULT '',
  `sh_tagline` varchar(255) NOT NULL DEFAULT '',
  `sh_desc`    text         NOT NULL,
  `sh_price`   int(11) NOT NULL DEFAULT 0,
  `sh_hours`   varchar(60)  NOT NULL DEFAULT '',
  `sh_rating`  decimal(2,1) NOT NULL DEFAULT 0,
  `sh_reviews` int(11) NOT NULL DEFAULT 0,
  `sh_tel`     varchar(20)  NOT NULL DEFAULT '',
  `sh_json`    mediumtext   NOT NULL,
  `sh_order`   int(11) NOT NULL DEFAULT 0,
  `sh_use`     tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`sh_id`),
  UNIQUE KEY `sh_slug` (`sh_slug`),
  KEY `sh_dong` (`sh_dong`), KEY `sh_gu` (`sh_gu`), KEY `sh_type` (`sh_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;", true);
$log[] = '테이블 확인/생성 완료';

/* 2. 지역 적재 --------------------------------------------- */
$R = kkuk_data('regions');
$n = 0; $i = 0;
foreach (['sido', 'gu', 'dong'] as $type) {
    foreach ($R[$type] as $key => $row) {
        $k = $type === 'sido' ? $row['slug'] : $key;
        $parent = $type === 'gu' ? $row['sido'] : ($type === 'dong' ? $row['gu'] : '');
        sql_query("REPLACE INTO `{$tReg}` SET
            rg_key='"    . sql_escape_string($k) . "',
            rg_type='"   . sql_escape_string($type) . "',
            rg_parent='" . sql_escape_string($parent) . "',
            rg_sido='"   . sql_escape_string($row['sido'] ?? $row['slug']) . "',
            rg_name='"   . sql_escape_string($row['name']) . "',
            rg_label='"  . sql_escape_string($row['label'] ?? $row['name']) . "',
            rg_slug='"   . sql_escape_string($row['slug']) . "',
            rg_lat="     . (float)($row['lat'] ?? 0) . ",
            rg_lng="     . (float)($row['lng'] ?? 0) . ",
            rg_kind='"   . sql_escape_string($row['kind'] ?? '') . "',
            rg_trait='"  . sql_escape_string($row['trait'] ?? '') . "',
            rg_blurb='"  . sql_escape_string($row['blurb'] ?? '') . "',
            rg_json='"   . sql_escape_string(json_encode($row, JSON_UNESCAPED_UNICODE)) . "',
            rg_order="   . (++$i), true);
        $n++;
    }
}
$log[] = "지역 {$n}건 적재";

/* 3. 업소 적재 --------------------------------------------- */
$S = kkuk_shop_all();
$i = 0;
foreach ($S as $slug => $s) {
    sql_query("REPLACE INTO `{$tShop}` SET
        sh_slug='"    . sql_escape_string($slug) . "',
        sh_name='"    . sql_escape_string($s['name']) . "',
        sh_type='"    . sql_escape_string($s['type']) . "',
        sh_dong='"    . sql_escape_string($s['dong']) . "',
        sh_gu='"      . sql_escape_string($s['gu']) . "',
        sh_sido='"    . sql_escape_string($s['sido']) . "',
        sh_tagline='" . sql_escape_string($s['tagline']) . "',
        sh_desc='"    . sql_escape_string($s['desc']) . "',
        sh_price="    . (int)$s['price_from'] . ",
        sh_hours='"   . sql_escape_string($s['hours']) . "',
        sh_rating="   . (float)$s['rating'] . ",
        sh_reviews="  . (int)$s['reviews'] . ",
        sh_tel='"     . sql_escape_string($s['tel']) . "',
        sh_json='"    . sql_escape_string(json_encode($s, JSON_UNESCAPED_UNICODE)) . "',
        sh_order="    . (++$i) . ",
        sh_use=1", true);
}
$log[] = '업소 ' . count($S) . '건 적재';

header('Content-Type: text/html; charset=utf-8');
echo '<meta name="viewport" content="width=device-width,initial-scale=1">';
echo '<div style="font:16px/1.8 system-ui;padding:28px;max-width:680px;margin:auto">';
echo '<h1 style="font-size:22px">kkuk-care 설치 결과</h1><ul>';
foreach ($log as $l) echo '<li>' . htmlspecialchars($l) . '</li>';
echo '</ul><p>이제 관리자에서 <code>' . htmlspecialchars($tShop) . '</code> 테이블의 업소 정보를 실제 데이터로 교체하세요.</p>';
echo '<p><b>교체가 끝나면</b> <code>_common.php</code> 에서 <code>KKUK_DEMO_DATA</code> 를 false 로 바꿔야 검색엔진 색인이 열립니다.</p>';
echo '<p style="color:#b00"><b>보안</b> · 설치가 끝나면 이 파일(install.php)은 삭제하거나 접근을 막으세요.</p></div>';
