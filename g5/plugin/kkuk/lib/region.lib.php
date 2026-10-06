<?php
/**
 * 지역·업소 데이터 접근 계층
 *
 * 기본은 파일 기반(data/*.php)이다. 읽기 전용 색인 데이터여서 DB 왕복이 없고,
 * 그누보드5 캐시와도 충돌하지 않는다. install.php 로 DB에 적재해 관리자에서
 * 수정하는 운영 방식을 택한 경우, kkuk_db_mode() 가 true 를 반환하면
 * 같은 함수 시그니처로 DB를 읽는다(아래 주석 참고).
 */

function kkuk_data($which) {
    static $c = [];
    if (!isset($c[$which])) {
        $f = KKUK_DIR . "/data/{$which}.php";
        $c[$which] = is_file($f) ? (require $f) : [];
    }
    return $c[$which];
}

/** DB 적재 운영 모드 여부 — 테이블이 있고 행이 있으면 true */
function kkuk_db_mode() {
    static $m = null;
    if ($m !== null) return $m;
    $m = false;
    if (defined('G5_TABLE_PREFIX') && function_exists('sql_query')) {
        $t = G5_TABLE_PREFIX . 'kkuk_region';
        $r = @sql_fetch("SELECT COUNT(*) AS c FROM `{$t}`", false);
        $m = !empty($r['c']);
    }
    return $m;
}

function kkuk_sido_all()        { return kkuk_data('regions')['sido'] ?? []; }
function kkuk_gu_all()          { return kkuk_data('regions')['gu']   ?? []; }
function kkuk_dong_all()        { return kkuk_data('regions')['dong'] ?? []; }
function kkuk_shop_all()        { return kkuk_data('shops'); }

function kkuk_sido($slug)       { return kkuk_sido_all()[$slug] ?? null; }
function kkuk_gu($key)          { return kkuk_gu_all()[$key]   ?? null; }
function kkuk_dong($key)        { return kkuk_dong_all()[$key] ?? null; }
function kkuk_shop($slug)       { return kkuk_shop_all()[$slug] ?? null; }

/** 동 키 배열 → 업소 레코드 배열 */
function kkuk_shops_of_dong($dongKey) {
    $d = kkuk_dong($dongKey);
    if (!$d) return [];
    $all = kkuk_shop_all();
    $out = [];
    foreach ($d['shops'] as $s) if (isset($all[$s])) $out[] = $all[$s];
    return kkuk_shop_sort($out);
}

/** 구 전체 업소 (동 순서 유지) */
function kkuk_shops_of_gu($guKey, $limit = 0) {
    $g = kkuk_gu($guKey);
    if (!$g) return [];
    $out = [];
    foreach ($g['dongs'] as $dk) foreach (kkuk_shops_of_dong($dk) as $s) $out[] = $s;
    $out = kkuk_shop_sort($out);
    return $limit > 0 ? array_slice($out, 0, $limit) : $out;
}

/** 시도 대표 업소 (구마다 고르게 섞어 노출) */
function kkuk_shops_of_sido($sidoSlug, $limit = 12) {
    $s = kkuk_sido($sidoSlug);
    if (!$s) return [];
    $buckets = [];
    foreach ($s['gu'] as $gk) $buckets[] = kkuk_shops_of_gu($gk);
    $out = []; $i = 0;
    while (count($out) < $limit) {
        $moved = false;
        foreach ($buckets as $bi => $b) {
            if (isset($buckets[$bi][$i])) { $out[] = $buckets[$bi][$i]; $moved = true; }
            if (count($out) >= $limit) break 2;
        }
        if (!$moved) break;
        $i++;
    }
    return $out;
}

/** 정렬 : 평점 → 후기 수 (동일 조건에서 항상 같은 순서) */
function kkuk_shop_sort(array $list) {
    usort($list, function ($a, $b) {
        if ($a['rating'] !== $b['rating']) return $b['rating'] <=> $a['rating'];
        if ($a['reviews'] !== $b['reviews']) return $b['reviews'] <=> $a['reviews'];
        return strcmp($a['slug'], $b['slug']);
    });
    return $list;
}

/** 업소 → 전체 지역 라벨 */
function kkuk_shop_area($shop) {
    $d = kkuk_dong($shop['dong']);
    return $d ? $d['area'] : '';
}

/** 구 키로 인접 구 키 찾기 (이름 매칭 — 시드의 '인접구' 필드 기준) */
function kkuk_near_gu($guKey) {
    $g = kkuk_gu($guKey);
    if (!$g) return [];
    $all = kkuk_gu_all();
    $out = [];
    foreach ($g['near'] as $nm) {
        $nm = trim($nm);
        foreach ($all as $k => $x) {
            if ($k === $guKey) continue;
            // '서울 강남구' / '수원시 영통구' / '강남구' 표기를 모두 받는다
            if ($x['label'] === $nm || $x['name'] === $nm
                || $x['area'] === $nm || "{$x['sido_name']} {$x['name']}" === $nm) {
                $out[$k] = $x; break;
            }
        }
    }
    return $out;
}

/** 전체 페이지 URL 목록 (사이트맵·프리뷰 빌드용) */
function kkuk_all_urls() {
    $u = [['/', 1.0, 'daily']];
    foreach (kkuk_sido_all() as $s) $u[] = [$s['url'], 0.9, 'daily'];
    foreach (kkuk_gu_all()   as $g) $u[] = [$g['url'], 0.8, 'weekly'];
    foreach (kkuk_dong_all() as $d) $u[] = [$d['url'], 0.7, 'weekly'];
    foreach (kkuk_shop_all() as $p) $u[] = [$p['url'], 0.6, 'weekly'];
    return $u;
}
