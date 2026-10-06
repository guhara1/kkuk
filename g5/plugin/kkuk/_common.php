<?php
/**
 * kkuk-care 플러그인 공통 부트스트랩
 *
 * 그누보드5 환경에서는 /common.php 가 먼저 로드된 상태로 호출된다.
 * CLI(프리뷰 빌드·중복 검사)에서는 G5 상수가 없으므로 아래에서 안전하게 채운다.
 *
 * ──────────────────────────────────────────────────────────
 *  ■ 운영 전 반드시 바꿀 값 (도메인·상호 확정 후)
 *    KKUK_BRAND      : 상호
 *    KKUK_BRAND_SUB  : 헤더 보조 문구
 *    KKUK_BASE       : https://내도메인  (사이트맵·canonical 절대경로용)
 *    KKUK_BIZ_*      : 사업자 정보 (정보통신망법·전자상거래법 표기 의무)
 *    KKUK_NAVER_VERIFY / KKUK_GSC_VERIFY : 서치어드바이저·서치콘솔 소유확인
 *  ■ 전화번호는 요청 사양 그대로 고정되어 있다 (05082024749)
 * ──────────────────────────────────────────────────────────
 */

if (!defined('_KKUK_BOOT_')) {
    define('_KKUK_BOOT_', true);

    /* ---- 브랜드 (미확정 상태의 임시 표기 — 한 곳만 고치면 전체 반영) ---- */
    if (!defined('KKUK_BRAND'))     define('KKUK_BRAND',     '마사지 지역가이드');
    if (!defined('KKUK_BRAND_SUB')) define('KKUK_BRAND_SUB', '서울 · 경기 · 인천');
    if (!defined('KKUK_BASE'))      define('KKUK_BASE',      'https://example.com');

    /* ---- 전화 (고정) ---- */
    if (!defined('KKUK_TEL'))      define('KKUK_TEL',      '05082024749');
    if (!defined('KKUK_TEL_FMT'))  define('KKUK_TEL_FMT',  '050-8202-4749');
    /* 모바일 하단 바 · 모든 전화 CTA에 공통으로 붙는 문구 */
    if (!defined('KKUK_TEL_LABEL')) define('KKUK_TEL_LABEL', '출장마사지');

    /* ---- 사업자 정보 (운영 전 교체) ---- */
    if (!defined('KKUK_BIZ_NAME'))  define('KKUK_BIZ_NAME',  '(상호 미정)');
    if (!defined('KKUK_BIZ_OWNER')) define('KKUK_BIZ_OWNER', '(대표자명)');
    if (!defined('KKUK_BIZ_NO'))    define('KKUK_BIZ_NO',    '(사업자등록번호)');
    if (!defined('KKUK_BIZ_ADDR'))  define('KKUK_BIZ_ADDR',  '(사업장 주소)');

    /* ---- 검색엔진 소유확인 (값이 비면 메타를 출력하지 않는다) ---- */
    if (!defined('KKUK_NAVER_VERIFY')) define('KKUK_NAVER_VERIFY', '');
    if (!defined('KKUK_GSC_VERIFY'))   define('KKUK_GSC_VERIFY',   '');

    /* ---- 경로 ---- */
    define('KKUK_DIR', __DIR__);
    if (!defined('G5_URL')) {
        // CLI / 독립 실행 환경
        define('KKUK_URL', rtrim(KKUK_BASE, '/'));
        define('KKUK_ASSET', '/plugin/kkuk/asset');
    } else {
        define('KKUK_URL', rtrim(G5_URL, '/'));
        define('KKUK_ASSET', G5_URL . '/plugin/kkuk/asset');
    }

    require_once KKUK_DIR . '/lib/svg.lib.php';
    require_once KKUK_DIR . '/lib/content.lib.php';
    require_once KKUK_DIR . '/lib/region.lib.php';
    require_once KKUK_DIR . '/lib/seo.lib.php';
    require_once KKUK_DIR . '/lib/ui.lib.php';
}
