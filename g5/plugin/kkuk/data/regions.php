<?php
/**
 * 지역 트리 (시도 / 행정구 / 대표 행정동)
 *
 * ⚠ 자동 생성 파일 — 직접 수정하지 말고 `php tools/gen_data.php` 로 다시 만든다.
 *   생성 시각 : 2026-10-06 01:50
 */
return array (
  'sido' => 
  array (
    'seoul' => 
    array (
      'slug' => 'seoul',
      'name' => '서울',
      'full' => '서울특별시',
      'lat' => 37.5665,
      'lng' => 126.978,
      'url' => '/seoul/',
      'gu' => 
      array (
        0 => 'seoul/gangnam',
        1 => 'seoul/gangdong',
        2 => 'seoul/gangbuk',
        3 => 'seoul/gangseo',
        4 => 'seoul/gwanak',
        5 => 'seoul/gwangjin',
        6 => 'seoul/guro',
        7 => 'seoul/geumcheon',
        8 => 'seoul/nowon',
        9 => 'seoul/dobong',
        10 => 'seoul/dongdaemun',
        11 => 'seoul/dongjak',
        12 => 'seoul/mapo',
        13 => 'seoul/seodaemun',
        14 => 'seoul/seocho',
        15 => 'seoul/seongdong',
        16 => 'seoul/seongbuk',
        17 => 'seoul/songpa',
        18 => 'seoul/yangcheon',
        19 => 'seoul/yeongdeungpo',
        20 => 'seoul/yongsan',
        21 => 'seoul/eunpyeong',
        22 => 'seoul/jongno',
        23 => 'seoul/junggu',
        24 => 'seoul/jungnang',
      ),
      'shop_count' => 303,
      'gu_count' => 25,
    ),
    'gyeonggi' => 
    array (
      'slug' => 'gyeonggi',
      'name' => '경기',
      'full' => '경기도',
      'lat' => 37.4138,
      'lng' => 127.5183,
      'url' => '/gyeonggi/',
      'gu' => 
      array (
        0 => 'gyeonggi/jangan',
        1 => 'gyeonggi/gwonseon',
        2 => 'gyeonggi/paldal',
        3 => 'gyeonggi/yeongtong',
        4 => 'gyeonggi/sujeong',
        5 => 'gyeonggi/jungwon',
        6 => 'gyeonggi/bundang',
        7 => 'gyeonggi/deogyang',
        8 => 'gyeonggi/ilsandong',
        9 => 'gyeonggi/ilsanseo',
        10 => 'gyeonggi/cheoin',
        11 => 'gyeonggi/giheung',
        12 => 'gyeonggi/suji',
        13 => 'gyeonggi/sangnok',
        14 => 'gyeonggi/danwon',
        15 => 'gyeonggi/manan',
        16 => 'gyeonggi/dongan',
        17 => 'gyeonggi/bucheon',
        18 => 'gyeonggi/namyangju',
        19 => 'gyeonggi/hwaseong',
        20 => 'gyeonggi/pyeongtaek',
        21 => 'gyeonggi/uijeongbu',
        22 => 'gyeonggi/siheung',
        23 => 'gyeonggi/paju',
        24 => 'gyeonggi/gwangmyeong',
        25 => 'gyeonggi/gimpo',
        26 => 'gyeonggi/gunpo',
        27 => 'gyeonggi/hanam',
        28 => 'gyeonggi/gwangju-gg',
        29 => 'gyeonggi/icheon',
        30 => 'gyeonggi/yangju',
        31 => 'gyeonggi/osan',
        32 => 'gyeonggi/guri',
        33 => 'gyeonggi/anseong',
        34 => 'gyeonggi/pocheon',
        35 => 'gyeonggi/uiwang',
        36 => 'gyeonggi/yeoju',
        37 => 'gyeonggi/dongducheon',
        38 => 'gyeonggi/gwacheon',
        39 => 'gyeonggi/gapyeong',
        40 => 'gyeonggi/yangpyeong',
        41 => 'gyeonggi/yeoncheon',
      ),
      'shop_count' => 498,
      'gu_count' => 42,
    ),
    'incheon' => 
    array (
      'slug' => 'incheon',
      'name' => '인천',
      'full' => '인천광역시',
      'lat' => 37.4563,
      'lng' => 126.7052,
      'url' => '/incheon/',
      'gu' => 
      array (
        0 => 'incheon/jung',
        1 => 'incheon/dong',
        2 => 'incheon/michuhol',
        3 => 'incheon/yeonsu',
        4 => 'incheon/namdong',
        5 => 'incheon/bupyeong',
        6 => 'incheon/gyeyang',
        7 => 'incheon/seo',
        8 => 'incheon/ganghwa',
        9 => 'incheon/ongjin',
      ),
      'shop_count' => 107,
      'gu_count' => 10,
    ),
  ),
  'gu' => 
  array (
    'seoul/gangnam' => 
    array (
      'key' => 'seoul/gangnam',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '강남구',
      'label' => '강남구',
      'city' => '',
      'slug' => 'gangnam',
      'area' => '서울 강남구',
      'lat' => 37.5173,
      'lng' => 127.0473,
      'lines' => 
      array (
        0 => '2호선',
        1 => '9호선',
        2 => '신분당선',
        3 => '수인분당선',
      ),
      'stations' => 
      array (
        0 => '강남역',
        1 => '역삼역',
        2 => '선릉역',
        3 => '삼성중앙역',
      ),
      'marks' => 
      array (
        0 => '코엑스',
        1 => '봉은사',
        2 => '테헤란로',
        3 => '가로수길',
      ),
      'trait' => 'office',
      'near' => 
      array (
        0 => '서초구',
        1 => '송파구',
        2 => '성동구',
      ),
      'blurb' => '테헤란로 업무지구와 압구정·청담 생활권이 맞물린 서울 최대 야간 수요 지역',
      'url' => '/seoul/gangnam/',
      'dongs' => 
      array (
        0 => 'seoul/gangnam/yeoksam',
        1 => 'seoul/gangnam/samseong',
        2 => 'seoul/gangnam/nonhyeon',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/gangdong' => 
    array (
      'key' => 'seoul/gangdong',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '강동구',
      'label' => '강동구',
      'city' => '',
      'slug' => 'gangdong',
      'area' => '서울 강동구',
      'lat' => 37.5301,
      'lng' => 127.1238,
      'lines' => 
      array (
        0 => '5호선',
        1 => '8호선',
        2 => '9호선',
      ),
      'stations' => 
      array (
        0 => '천호역',
        1 => '강동역',
        2 => '둔촌동역',
      ),
      'marks' => 
      array (
        0 => '올림픽공원',
        1 => '일자산',
        2 => '광나루한강공원',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '송파구',
        1 => '광진구',
        2 => '하남시',
      ),
      'blurb' => '천호 상권과 둔촌·고덕 대단지가 공존해 가족 단위 수요가 두터운 생활권',
      'url' => '/seoul/gangdong/',
      'dongs' => 
      array (
        0 => 'seoul/gangdong/cheonho',
        1 => 'seoul/gangdong/gildong',
        2 => 'seoul/gangdong/dunchon',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'seoul/gangbuk' => 
    array (
      'key' => 'seoul/gangbuk',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '강북구',
      'label' => '강북구',
      'city' => '',
      'slug' => 'gangbuk',
      'area' => '서울 강북구',
      'lat' => 37.6396,
      'lng' => 127.0257,
      'lines' => 
      array (
        0 => '4호선',
        1 => '우이신설선',
      ),
      'stations' => 
      array (
        0 => '수유역',
        1 => '미아사거리역',
        2 => '미아역',
      ),
      'marks' => 
      array (
        0 => '북한산',
        1 => '우이천',
        2 => '북서울꿈의숲',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '도봉구',
        1 => '성북구',
        2 => '노원구',
      ),
      'blurb' => '수유 번화가를 축으로 북한산 자락 주거지가 넓게 퍼진 구도심형 생활권',
      'url' => '/seoul/gangbuk/',
      'dongs' => 
      array (
        0 => 'seoul/gangbuk/suyu',
        1 => 'seoul/gangbuk/mia',
        2 => 'seoul/gangbuk/beon',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/gangseo' => 
    array (
      'key' => 'seoul/gangseo',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '강서구',
      'label' => '강서구',
      'city' => '',
      'slug' => 'gangseo',
      'area' => '서울 강서구',
      'lat' => 37.5509,
      'lng' => 126.8495,
      'lines' => 
      array (
        0 => '5호선',
        1 => '9호선',
        2 => '공항철도',
      ),
      'stations' => 
      array (
        0 => '마곡나루역',
        1 => '발산역',
        2 => '까치산역',
      ),
      'marks' => 
      array (
        0 => '서울식물원',
        1 => '김포공항',
        2 => '개화산',
      ),
      'trait' => 'mixed',
      'near' => 
      array (
        0 => '양천구',
        1 => '영등포구',
        2 => '구로구',
      ),
      'blurb' => '마곡 업무지구와 화곡·등촌 구주거지가 한 구 안에서 성격을 달리하는 지역',
      'url' => '/seoul/gangseo/',
      'dongs' => 
      array (
        0 => 'seoul/gangseo/hwagok',
        1 => 'seoul/gangseo/deungchon',
        2 => 'seoul/gangseo/magok',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'seoul/gwanak' => 
    array (
      'key' => 'seoul/gwanak',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '관악구',
      'label' => '관악구',
      'city' => '',
      'slug' => 'gwanak',
      'area' => '서울 관악구',
      'lat' => 37.4784,
      'lng' => 126.9516,
      'lines' => 
      array (
        0 => '2호선',
        1 => '신림선',
      ),
      'stations' => 
      array (
        0 => '신림역',
        1 => '서울대입구역',
        2 => '봉천역',
      ),
      'marks' => 
      array (
        0 => '관악산',
        1 => '서울대학교',
        2 => '도림천',
      ),
      'trait' => 'uni',
      'near' => 
      array (
        0 => '동작구',
        1 => '서초구',
        2 => '금천구',
      ),
      'blurb' => '서울대 배후 원룸 밀집지와 신림 번화가가 맞붙어 1인 가구 비중이 매우 높은 지역',
      'url' => '/seoul/gwanak/',
      'dongs' => 
      array (
        0 => 'seoul/gwanak/sillim',
        1 => 'seoul/gwanak/bongcheon',
        2 => 'seoul/gwanak/namhyeon',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'seoul/gwangjin' => 
    array (
      'key' => 'seoul/gwangjin',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '광진구',
      'label' => '광진구',
      'city' => '',
      'slug' => 'gwangjin',
      'area' => '서울 광진구',
      'lat' => 37.5385,
      'lng' => 127.0823,
      'lines' => 
      array (
        0 => '2호선',
        1 => '5호선',
        2 => '7호선',
      ),
      'stations' => 
      array (
        0 => '건대입구역',
        1 => '구의역',
        2 => '강변역',
      ),
      'marks' => 
      array (
        0 => '어린이대공원',
        1 => '뚝섬한강공원',
        2 => '아차산',
      ),
      'trait' => 'uni',
      'near' => 
      array (
        0 => '성동구',
        1 => '중랑구',
        2 => '강동구',
      ),
      'blurb' => '건대 상권의 심야 유동과 구의·자양 주거지가 겹쳐 수요 시간대가 넓은 생활권',
      'url' => '/seoul/gwangjin/',
      'dongs' => 
      array (
        0 => 'seoul/gwangjin/guui',
        1 => 'seoul/gwangjin/jayang',
        2 => 'seoul/gwangjin/hwayang',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/guro' => 
    array (
      'key' => 'seoul/guro',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '구로구',
      'label' => '구로구',
      'city' => '',
      'slug' => 'guro',
      'area' => '서울 구로구',
      'lat' => 37.4954,
      'lng' => 126.8874,
      'lines' => 
      array (
        0 => '1호선',
        1 => '2호선',
        2 => '7호선',
      ),
      'stations' => 
      array (
        0 => '구로디지털단지역',
        1 => '신도림역',
        2 => '구로역',
      ),
      'marks' => 
      array (
        0 => '고척스카이돔',
        1 => '안양천',
        2 => '도림천',
      ),
      'trait' => 'mixed',
      'near' => 
      array (
        0 => '영등포구',
        1 => '금천구',
        2 => '양천구',
      ),
      'blurb' => 'G밸리 출퇴근 인구와 신도림 주거 수요가 교차해 평일 저녁 집중도가 높은 지역',
      'url' => '/seoul/guro/',
      'dongs' => 
      array (
        0 => 'seoul/guro/guro-dong',
        1 => 'seoul/guro/sindorim',
        2 => 'seoul/guro/gaebong',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/geumcheon' => 
    array (
      'key' => 'seoul/geumcheon',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '금천구',
      'label' => '금천구',
      'city' => '',
      'slug' => 'geumcheon',
      'area' => '서울 금천구',
      'lat' => 37.4569,
      'lng' => 126.8956,
      'lines' => 
      array (
        0 => '1호선',
        1 => '7호선',
      ),
      'stations' => 
      array (
        0 => '가산디지털단지역',
        1 => '독산역',
        2 => '금천구청역',
      ),
      'marks' => 
      array (
        0 => '마리오아울렛',
        1 => '호암산',
        2 => '안양천',
      ),
      'trait' => 'ind',
      'near' => 
      array (
        0 => '구로구',
        1 => '관악구',
        2 => '광명시',
      ),
      'blurb' => '가산디지털단지 근로 인구가 상권을 지탱하는, 평일 야간 수요가 뚜렷한 산업형 생활권',
      'url' => '/seoul/geumcheon/',
      'dongs' => 
      array (
        0 => 'seoul/geumcheon/gasan',
        1 => 'seoul/geumcheon/doksan',
        2 => 'seoul/geumcheon/siheung-dong',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'seoul/nowon' => 
    array (
      'key' => 'seoul/nowon',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '노원구',
      'label' => '노원구',
      'city' => '',
      'slug' => 'nowon',
      'area' => '서울 노원구',
      'lat' => 37.6542,
      'lng' => 127.0568,
      'lines' => 
      array (
        0 => '4호선',
        1 => '7호선',
        2 => '우이신설선',
      ),
      'stations' => 
      array (
        0 => '노원역',
        1 => '중계역',
        2 => '하계역',
      ),
      'marks' => 
      array (
        0 => '수락산',
        1 => '불암산',
        2 => '경춘선숲길',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '도봉구',
        1 => '강북구',
        2 => '중랑구',
      ),
      'blurb' => '상계·중계 대단지와 은행사거리 학원가가 중심인 서울 동북권 최대 주거 밀집지',
      'url' => '/seoul/nowon/',
      'dongs' => 
      array (
        0 => 'seoul/nowon/sanggye',
        1 => 'seoul/nowon/junggye',
        2 => 'seoul/nowon/gongneung',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/dobong' => 
    array (
      'key' => 'seoul/dobong',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '도봉구',
      'label' => '도봉구',
      'city' => '',
      'slug' => 'dobong',
      'area' => '서울 도봉구',
      'lat' => 37.6688,
      'lng' => 127.0471,
      'lines' => 
      array (
        0 => '1호선',
        1 => '4호선',
        2 => '7호선',
      ),
      'stations' => 
      array (
        0 => '창동역',
        1 => '쌍문역',
        2 => '도봉산역',
      ),
      'marks' => 
      array (
        0 => '도봉산',
        1 => '서울창포원',
        2 => '중랑천',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '노원구',
        1 => '강북구',
        2 => '의정부시',
      ),
      'blurb' => '창동 역세권 재편과 도봉산 자락 주거지가 함께 묶인 조용한 주거 중심 생활권',
      'url' => '/seoul/dobong/',
      'dongs' => 
      array (
        0 => 'seoul/dobong/chang',
        1 => 'seoul/dobong/banghak',
        2 => 'seoul/dobong/dobong-dong',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'seoul/dongdaemun' => 
    array (
      'key' => 'seoul/dongdaemun',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '동대문구',
      'label' => '동대문구',
      'city' => '',
      'slug' => 'dongdaemun',
      'area' => '서울 동대문구',
      'lat' => 37.5744,
      'lng' => 127.0396,
      'lines' => 
      array (
        0 => '1호선',
        1 => '2호선',
        2 => '5호선',
      ),
      'stations' => 
      array (
        0 => '회기역',
        1 => '장한평역',
        2 => '답십리역',
      ),
      'marks' => 
      array (
        0 => '경희대학교',
        1 => '청계천',
        2 => '배봉산',
      ),
      'trait' => 'uni',
      'near' => 
      array (
        0 => '성동구',
        1 => '중랑구',
        2 => '성북구',
      ),
      'blurb' => '회기 대학가와 장안동 간선도로 상권이 서로 다른 시간대 수요를 만드는 지역',
      'url' => '/seoul/dongdaemun/',
      'dongs' => 
      array (
        0 => 'seoul/dongdaemun/jangan',
        1 => 'seoul/dongdaemun/dapsimni',
        2 => 'seoul/dongdaemun/hoegi',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'seoul/dongjak' => 
    array (
      'key' => 'seoul/dongjak',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '동작구',
      'label' => '동작구',
      'city' => '',
      'slug' => 'dongjak',
      'area' => '서울 동작구',
      'lat' => 37.5124,
      'lng' => 126.9393,
      'lines' => 
      array (
        0 => '2호선',
        1 => '4호선',
        2 => '7호선',
        3 => '9호선',
      ),
      'stations' => 
      array (
        0 => '사당역',
        1 => '노량진역',
        2 => '상도역',
      ),
      'marks' => 
      array (
        0 => '보라매공원',
        1 => '노량진수산시장',
        2 => '국사봉',
      ),
      'trait' => 'resi',
      'near' => 
      array (
        0 => '관악구',
        1 => '영등포구',
        2 => '서초구',
      ),
      'blurb' => '사당 환승 수요와 노량진 학원가가 겹쳐 1인 가구·직장인 비중이 모두 높은 생활권',
      'url' => '/seoul/dongjak/',
      'dongs' => 
      array (
        0 => 'seoul/dongjak/sadang',
        1 => 'seoul/dongjak/sangdo',
        2 => 'seoul/dongjak/noryangjin',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/mapo' => 
    array (
      'key' => 'seoul/mapo',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '마포구',
      'label' => '마포구',
      'city' => '',
      'slug' => 'mapo',
      'area' => '서울 마포구',
      'lat' => 37.5663,
      'lng' => 126.9019,
      'lines' => 
      array (
        0 => '2호선',
        1 => '5호선',
        2 => '6호선',
        3 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '홍대입구역',
        1 => '합정역',
        2 => '공덕역',
      ),
      'marks' => 
      array (
        0 => '경의선숲길',
        1 => '월드컵공원',
        2 => '망원시장',
      ),
      'trait' => 'mixed',
      'near' => 
      array (
        0 => '서대문구',
        1 => '용산구',
        2 => '영등포구',
      ),
      'blurb' => '홍대·합정 심야 상권과 공덕 업무지구가 맞물려 24시 수요가 끊이지 않는 지역',
      'url' => '/seoul/mapo/',
      'dongs' => 
      array (
        0 => 'seoul/mapo/hapjeong',
        1 => 'seoul/mapo/yeonnam',
        2 => 'seoul/mapo/gongdeok',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'seoul/seodaemun' => 
    array (
      'key' => 'seoul/seodaemun',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '서대문구',
      'label' => '서대문구',
      'city' => '',
      'slug' => 'seodaemun',
      'area' => '서울 서대문구',
      'lat' => 37.5791,
      'lng' => 126.9368,
      'lines' => 
      array (
        0 => '2호선',
        1 => '3호선',
        2 => '6호선',
        3 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '신촌역',
        1 => '홍제역',
        2 => '가좌역',
      ),
      'marks' => 
      array (
        0 => '연세대학교',
        1 => '인왕산',
        2 => '홍제천',
      ),
      'trait' => 'uni',
      'near' => 
      array (
        0 => '마포구',
        1 => '종로구',
        2 => '은평구',
      ),
      'blurb' => '신촌 대학 상권과 가재울·홍제 주거지가 남북으로 나뉘어 수요 성격이 분명한 생활권',
      'url' => '/seoul/seodaemun/',
      'dongs' => 
      array (
        0 => 'seoul/seodaemun/sinchon',
        1 => 'seoul/seodaemun/hongje',
        2 => 'seoul/seodaemun/namgajwa',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'seoul/seocho' => 
    array (
      'key' => 'seoul/seocho',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '서초구',
      'label' => '서초구',
      'city' => '',
      'slug' => 'seocho',
      'area' => '서울 서초구',
      'lat' => 37.4836,
      'lng' => 127.0327,
      'lines' => 
      array (
        0 => '2호선',
        1 => '3호선',
        2 => '7호선',
        3 => '9호선',
        4 => '신분당선',
      ),
      'stations' => 
      array (
        0 => '교대역',
        1 => '고속터미널역',
        2 => '방배역',
      ),
      'marks' => 
      array (
        0 => '예술의전당',
        1 => '반포한강공원',
        2 => '서리풀공원',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '강남구',
        1 => '동작구',
        2 => '관악구',
      ),
      'blurb' => '법조·업무 인구와 반포 대단지가 함께 있어 평일 야간과 주말 수요가 모두 안정적인 지역',
      'url' => '/seoul/seocho/',
      'dongs' => 
      array (
        0 => 'seoul/seocho/seocho-dong',
        1 => 'seoul/seocho/banpo',
        2 => 'seoul/seocho/bangbae',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'seoul/seongdong' => 
    array (
      'key' => 'seoul/seongdong',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '성동구',
      'label' => '성동구',
      'city' => '',
      'slug' => 'seongdong',
      'area' => '서울 성동구',
      'lat' => 37.5634,
      'lng' => 127.0371,
      'lines' => 
      array (
        0 => '2호선',
        1 => '5호선',
        2 => '분당선',
      ),
      'stations' => 
      array (
        0 => '왕십리역',
        1 => '성수역',
        2 => '금호역',
      ),
      'marks' => 
      array (
        0 => '서울숲',
        1 => '응봉산',
        2 => '살곶이공원',
      ),
      'trait' => 'mixed',
      'near' => 
      array (
        0 => '광진구',
        1 => '중구',
        2 => '동대문구',
      ),
      'blurb' => '성수 신흥 상권과 왕십리 환승 수요가 겹쳐 최근 체감 수요 증가가 가장 빠른 생활권',
      'url' => '/seoul/seongdong/',
      'dongs' => 
      array (
        0 => 'seoul/seongdong/seongsu',
        1 => 'seoul/seongdong/haengdang',
        2 => 'seoul/seongdong/geumho',
      ),
      'shop_count' => 15,
      'dong_count' => 3,
    ),
    'seoul/seongbuk' => 
    array (
      'key' => 'seoul/seongbuk',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '성북구',
      'label' => '성북구',
      'city' => '',
      'slug' => 'seongbuk',
      'area' => '서울 성북구',
      'lat' => 37.5894,
      'lng' => 127.0167,
      'lines' => 
      array (
        0 => '4호선',
        1 => '6호선',
        2 => '우이신설선',
      ),
      'stations' => 
      array (
        0 => '길음역',
        1 => '고려대역',
        2 => '돌곶이역',
      ),
      'marks' => 
      array (
        0 => '북서울꿈의숲',
        1 => '개운산',
        2 => '정릉천',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '강북구',
        1 => '동대문구',
        2 => '종로구',
      ),
      'blurb' => '길음·장위 뉴타운 입주 수요와 고려대 배후 상권이 함께 있는 동북권 주거 중심지',
      'url' => '/seoul/seongbuk/',
      'dongs' => 
      array (
        0 => 'seoul/seongbuk/gireum',
        1 => 'seoul/seongbuk/jangwi',
        2 => 'seoul/seongbuk/jongam',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'seoul/songpa' => 
    array (
      'key' => 'seoul/songpa',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '송파구',
      'label' => '송파구',
      'city' => '',
      'slug' => 'songpa',
      'area' => '서울 송파구',
      'lat' => 37.5145,
      'lng' => 127.1059,
      'lines' => 
      array (
        0 => '2호선',
        1 => '3호선',
        2 => '5호선',
        3 => '8호선',
        4 => '9호선',
      ),
      'stations' => 
      array (
        0 => '잠실역',
        1 => '가락시장역',
        2 => '문정역',
      ),
      'marks' => 
      array (
        0 => '롯데월드타워',
        1 => '석촌호수',
        2 => '올림픽공원',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '강남구',
        1 => '강동구',
        2 => '성남시',
      ),
      'blurb' => '잠실 광역 상권과 문정 법조타운, 가락 대단지가 삼각으로 묶인 수요 최상위 생활권',
      'url' => '/seoul/songpa/',
      'dongs' => 
      array (
        0 => 'seoul/songpa/jamsil',
        1 => 'seoul/songpa/garak',
        2 => 'seoul/songpa/munjeong',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'seoul/yangcheon' => 
    array (
      'key' => 'seoul/yangcheon',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '양천구',
      'label' => '양천구',
      'city' => '',
      'slug' => 'yangcheon',
      'area' => '서울 양천구',
      'lat' => 37.5169,
      'lng' => 126.8666,
      'lines' => 
      array (
        0 => '2호선',
        1 => '5호선',
      ),
      'stations' => 
      array (
        0 => '오목교역',
        1 => '신정역',
        2 => '신정네거리역',
      ),
      'marks' => 
      array (
        0 => '목동운동장',
        1 => '서서울호수공원',
        2 => '안양천',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '강서구',
        1 => '구로구',
        2 => '영등포구',
      ),
      'blurb' => '목동 학원가를 중심으로 가족 단위 수요가 뚜렷하고 재방문율이 높은 주거형 생활권',
      'url' => '/seoul/yangcheon/',
      'dongs' => 
      array (
        0 => 'seoul/yangcheon/mok',
        1 => 'seoul/yangcheon/sinjeong',
        2 => 'seoul/yangcheon/sinwol',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'seoul/yeongdeungpo' => 
    array (
      'key' => 'seoul/yeongdeungpo',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '영등포구',
      'label' => '영등포구',
      'city' => '',
      'slug' => 'yeongdeungpo',
      'area' => '서울 영등포구',
      'lat' => 37.5264,
      'lng' => 126.8962,
      'lines' => 
      array (
        0 => '1호선',
        1 => '2호선',
        2 => '5호선',
        3 => '9호선',
      ),
      'stations' => 
      array (
        0 => '여의도역',
        1 => '당산역',
        2 => '대림역',
      ),
      'marks' => 
      array (
        0 => '여의도공원',
        1 => '선유도공원',
        2 => '타임스퀘어',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '마포구',
        1 => '동작구',
        2 => '구로구',
      ),
      'blurb' => '여의도 금융 업무지구와 영등포 구도심 상권이 한 구 안에 공존하는 수요 이중 구조 지역',
      'url' => '/seoul/yeongdeungpo/',
      'dongs' => 
      array (
        0 => 'seoul/yeongdeungpo/yeoui',
        1 => 'seoul/yeongdeungpo/dangsan',
        2 => 'seoul/yeongdeungpo/daerim',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/yongsan' => 
    array (
      'key' => 'seoul/yongsan',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '용산구',
      'label' => '용산구',
      'city' => '',
      'slug' => 'yongsan',
      'area' => '서울 용산구',
      'lat' => 37.5324,
      'lng' => 126.99,
      'lines' => 
      array (
        0 => '1호선',
        1 => '4호선',
        2 => '6호선',
        3 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '용산역',
        1 => '이태원역',
        2 => '한강진역',
      ),
      'marks' => 
      array (
        0 => '남산',
        1 => '국립중앙박물관',
        2 => '용산가족공원',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '중구',
        1 => '마포구',
        2 => '성동구',
      ),
      'blurb' => '이태원·한남 외국인 수요와 용산 신축 업무지구가 겹쳐 프리미엄 가격대가 통하는 지역',
      'url' => '/seoul/yongsan/',
      'dongs' => 
      array (
        0 => 'seoul/yongsan/itaewon',
        1 => 'seoul/yongsan/hannam',
        2 => 'seoul/yongsan/hyochang',
      ),
      'shop_count' => 8,
      'dong_count' => 3,
    ),
    'seoul/eunpyeong' => 
    array (
      'key' => 'seoul/eunpyeong',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '은평구',
      'label' => '은평구',
      'city' => '',
      'slug' => 'eunpyeong',
      'area' => '서울 은평구',
      'lat' => 37.6027,
      'lng' => 126.9291,
      'lines' => 
      array (
        0 => '3호선',
        1 => '6호선',
        2 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '연신내역',
        1 => '불광역',
        2 => '수색역',
      ),
      'marks' => 
      array (
        0 => '북한산',
        1 => '불광천',
        2 => '서울혁신파크',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '서대문구',
        1 => '종로구',
        2 => '고양시',
      ),
      'blurb' => '연신내 번화가와 북한산 자락 주거지, 상암 인접 수색권이 세 갈래로 나뉜 생활권',
      'url' => '/seoul/eunpyeong/',
      'dongs' => 
      array (
        0 => 'seoul/eunpyeong/eungam',
        1 => 'seoul/eunpyeong/bulgwang',
        2 => 'seoul/eunpyeong/susaek',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'seoul/jongno' => 
    array (
      'key' => 'seoul/jongno',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '종로구',
      'label' => '종로구',
      'city' => '',
      'slug' => 'jongno',
      'area' => '서울 종로구',
      'lat' => 37.5735,
      'lng' => 126.979,
      'lines' => 
      array (
        0 => '1호선',
        1 => '3호선',
        2 => '5호선',
      ),
      'stations' => 
      array (
        0 => '종각역',
        1 => '광화문역',
        2 => '경복궁역',
      ),
      'marks' => 
      array (
        0 => '경복궁',
        1 => '청계천',
        2 => '북한산',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '중구',
        1 => '서대문구',
        2 => '성북구',
      ),
      'blurb' => '도심 업무·관광 수요가 동시에 몰려 출장 요청 시간대가 가장 넓게 분포하는 지역',
      'url' => '/seoul/jongno/',
      'dongs' => 
      array (
        0 => 'seoul/jongno/jongno-ga',
        1 => 'seoul/jongno/sajik',
        2 => 'seoul/jongno/pyeongchang',
      ),
      'shop_count' => 10,
      'dong_count' => 3,
    ),
    'seoul/junggu' => 
    array (
      'key' => 'seoul/junggu',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '중구',
      'label' => '중구',
      'city' => '',
      'slug' => 'junggu',
      'area' => '서울 중구',
      'lat' => 37.5636,
      'lng' => 126.9976,
      'lines' => 
      array (
        0 => '1호선',
        1 => '2호선',
        2 => '3호선',
        3 => '4호선',
        4 => '5호선',
      ),
      'stations' => 
      array (
        0 => '을지로입구역',
        1 => '명동역',
        2 => '신당역',
      ),
      'marks' => 
      array (
        0 => '남산서울타워',
        1 => '청계천',
        2 => '동대문디자인플라자',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '종로구',
        1 => '용산구',
        2 => '성동구',
      ),
      'blurb' => '호텔·업무·관광 수요가 겹치는 도심 핵심부로 심야 출장 요청 비중이 가장 높은 지역',
      'url' => '/seoul/junggu/',
      'dongs' => 
      array (
        0 => 'seoul/junggu/myeongdong',
        1 => 'seoul/junggu/euljiro',
        2 => 'seoul/junggu/sindang',
      ),
      'shop_count' => 9,
      'dong_count' => 3,
    ),
    'seoul/jungnang' => 
    array (
      'key' => 'seoul/jungnang',
      'sido' => 'seoul',
      'sido_name' => '서울',
      'name' => '중랑구',
      'label' => '중랑구',
      'city' => '',
      'slug' => 'jungnang',
      'area' => '서울 중랑구',
      'lat' => 37.6063,
      'lng' => 127.0927,
      'lines' => 
      array (
        0 => '6호선',
        1 => '7호선',
        2 => '경춘선',
      ),
      'stations' => 
      array (
        0 => '상봉역',
        1 => '사가정역',
        2 => '먹골역',
      ),
      'marks' => 
      array (
        0 => '용마산',
        1 => '망우산',
        2 => '중랑천',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '동대문구',
        1 => '노원구',
        2 => '광진구',
      ),
      'blurb' => '상봉 광역 환승 거점과 면목·묵동 주거지가 결합된 동북권 실수요 중심 생활권',
      'url' => '/seoul/jungnang/',
      'dongs' => 
      array (
        0 => 'seoul/jungnang/sangbong',
        1 => 'seoul/jungnang/myeonmok',
        2 => 'seoul/jungnang/muk',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/jangan' => 
    array (
      'key' => 'gyeonggi/jangan',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '장안구',
      'label' => '수원시 장안구',
      'city' => '수원시',
      'slug' => 'jangan',
      'area' => '경기 수원시 장안구',
      'lat' => 37.3049,
      'lng' => 127.0103,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '성균관대역',
        1 => '화서역',
      ),
      'marks' => 
      array (
        0 => '광교산',
        1 => '만석공원',
        2 => '일월수목원',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '권선구',
        1 => '팔달구',
        2 => '의왕시',
      ),
      'blurb' => '광교산 자락 주거지와 수원종합운동장 일대가 중심인 조용한 주거형 생활권',
      'url' => '/gyeonggi/jangan/',
      'dongs' => 
      array (
        0 => 'gyeonggi/jangan/jangan-jeongja',
        1 => 'gyeonggi/jangan/jowon',
        2 => 'gyeonggi/jangan/pajang',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/gwonseon' => 
    array (
      'key' => 'gyeonggi/gwonseon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '권선구',
      'label' => '수원시 권선구',
      'city' => '수원시',
      'slug' => 'gwonseon',
      'area' => '경기 수원시 권선구',
      'lat' => 37.2607,
      'lng' => 127.0011,
      'lines' => 
      array (
        0 => '1호선',
        1 => '수인분당선',
      ),
      'stations' => 
      array (
        0 => '세류역',
        1 => '고색역',
        2 => '매탄권선역',
      ),
      'marks' => 
      array (
        0 => '칠보산',
        1 => '호매실지구',
        2 => '수원 서부',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '팔달구',
        1 => '영통구',
        2 => '화성시',
      ),
      'blurb' => '호매실·금곡 택지 입주로 가족 단위 신규 수요가 꾸준히 늘고 있는 지역',
      'url' => '/gyeonggi/gwonseon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gwonseon/geumgok',
        1 => 'gyeonggi/gwonseon/gwonseon-dong',
        2 => 'gyeonggi/gwonseon/seryu',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'gyeonggi/paldal' => 
    array (
      'key' => 'gyeonggi/paldal',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '팔달구',
      'label' => '수원시 팔달구',
      'city' => '수원시',
      'slug' => 'paldal',
      'area' => '경기 수원시 팔달구',
      'lat' => 37.2825,
      'lng' => 127.0191,
      'lines' => 
      array (
        0 => '1호선',
        1 => '수인분당선',
      ),
      'stations' => 
      array (
        0 => '수원역',
        1 => '매교역',
        2 => '수원시청역',
      ),
      'marks' => 
      array (
        0 => '수원화성',
        1 => '행궁동',
        2 => '수원월드컵경기장',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '장안구',
        1 => '권선구',
        2 => '영통구',
      ),
      'blurb' => '수원역·시청 상권이 겹쳐 유동량이 가장 많고 심야 요청 비중이 높은 지역',
      'url' => '/gyeonggi/paldal/',
      'dongs' => 
      array (
        0 => 'gyeonggi/paldal/ingye',
        1 => 'gyeonggi/paldal/maegyo',
        2 => 'gyeonggi/paldal/uman',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/yeongtong' => 
    array (
      'key' => 'gyeonggi/yeongtong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '영통구',
      'label' => '수원시 영통구',
      'city' => '수원시',
      'slug' => 'yeongtong',
      'area' => '경기 수원시 영통구',
      'lat' => 37.2595,
      'lng' => 127.0463,
      'lines' => 
      array (
        0 => '수인분당선',
        1 => '신분당선',
      ),
      'stations' => 
      array (
        0 => '영통역',
        1 => '망포역',
        2 => '광교중앙역',
      ),
      'marks' => 
      array (
        0 => '광교호수공원',
        1 => '경기도청',
        2 => '삼성전자 수원사업장',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '팔달구',
        1 => '용인시',
        2 => '화성시',
      ),
      'blurb' => '대기업 사업장과 광교 신도시가 맞물려 경기 남부에서 단가가 가장 높게 형성되는 지역',
      'url' => '/gyeonggi/yeongtong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/yeongtong/yeongtong-dong',
        1 => 'gyeonggi/yeongtong/gwanggyo',
        2 => 'gyeonggi/yeongtong/maetan',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/sujeong' => 
    array (
      'key' => 'gyeonggi/sujeong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '수정구',
      'label' => '성남시 수정구',
      'city' => '성남시',
      'slug' => 'sujeong',
      'area' => '경기 성남시 수정구',
      'lat' => 37.4502,
      'lng' => 127.1467,
      'lines' => 
      array (
        0 => '8호선',
      ),
      'stations' => 
      array (
        0 => '가천대역',
        1 => '신흥역',
        2 => '수진역',
      ),
      'marks' => 
      array (
        0 => '남한산성 서측',
        1 => '위례신도시',
        2 => '탄천',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '중원구',
        1 => '분당구',
        2 => '서울 송파구',
      ),
      'blurb' => '구시가 재개발과 위례 신도시가 공존해 수요 성격이 빠르게 바뀌는 지역',
      'url' => '/gyeonggi/sujeong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/sujeong/sinheung',
        1 => 'gyeonggi/sujeong/taepyeong',
        2 => 'gyeonggi/sujeong/sinchon-sn',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/jungwon' => 
    array (
      'key' => 'gyeonggi/jungwon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '중원구',
      'label' => '성남시 중원구',
      'city' => '성남시',
      'slug' => 'jungwon',
      'area' => '경기 성남시 중원구',
      'lat' => 37.4307,
      'lng' => 127.1375,
      'lines' => 
      array (
        0 => '8호선',
      ),
      'stations' => 
      array (
        0 => '모란역',
        1 => '단대오거리역',
      ),
      'marks' => 
      array (
        0 => '모란민속장',
        1 => '성남종합운동장',
        2 => '영장산',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '수정구',
        1 => '분당구',
        2 => '광주시',
      ),
      'blurb' => '모란 상권과 상대원 산업단지 근로 수요가 결합된 실속 가격대 중심 지역',
      'url' => '/gyeonggi/jungwon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/jungwon/seongnam-dong',
        1 => 'gyeonggi/jungwon/geumgwang',
        2 => 'gyeonggi/jungwon/sangdaewon',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/bundang' => 
    array (
      'key' => 'gyeonggi/bundang',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '분당구',
      'label' => '성남시 분당구',
      'city' => '성남시',
      'slug' => 'bundang',
      'area' => '경기 성남시 분당구',
      'lat' => 37.3827,
      'lng' => 127.1189,
      'lines' => 
      array (
        0 => '수인분당선',
        1 => '신분당선',
      ),
      'stations' => 
      array (
        0 => '서현역',
        1 => '정자역',
        2 => '판교역',
      ),
      'marks' => 
      array (
        0 => '판교테크노밸리',
        1 => '율동공원',
        2 => '분당중앙공원',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '수정구',
        1 => '중원구',
        2 => '용인시 수지구',
      ),
      'blurb' => '판교 IT 인력과 분당 고소득 주거 수요가 겹쳐 프리미엄 코스 선호가 뚜렷한 지역',
      'url' => '/gyeonggi/bundang/',
      'dongs' => 
      array (
        0 => 'gyeonggi/bundang/bundang-jeongja',
        1 => 'gyeonggi/bundang/seohyeon',
        2 => 'gyeonggi/bundang/pangyo',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/deogyang' => 
    array (
      'key' => 'gyeonggi/deogyang',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '덕양구',
      'label' => '고양시 덕양구',
      'city' => '고양시',
      'slug' => 'deogyang',
      'area' => '경기 고양시 덕양구',
      'lat' => 37.6373,
      'lng' => 126.8323,
      'lines' => 
      array (
        0 => '3호선',
        1 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '화정역',
        1 => '원당역',
        2 => '삼송역',
      ),
      'marks' => 
      array (
        0 => '북한산',
        1 => '서오릉',
        2 => '스타필드 고양',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '일산동구',
        1 => '서울 은평구',
        2 => '파주시',
      ),
      'blurb' => '화정 상권과 삼송·원흥 신규 택지가 나뉘어 이동 동선 안내가 중요한 지역',
      'url' => '/gyeonggi/deogyang/',
      'dongs' => 
      array (
        0 => 'gyeonggi/deogyang/hwajeong',
        1 => 'gyeonggi/deogyang/haengsin',
        2 => 'gyeonggi/deogyang/samsong',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/ilsandong' => 
    array (
      'key' => 'gyeonggi/ilsandong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '일산동구',
      'label' => '고양시 일산동구',
      'city' => '고양시',
      'slug' => 'ilsandong',
      'area' => '경기 고양시 일산동구',
      'lat' => 37.6587,
      'lng' => 126.7749,
      'lines' => 
      array (
        0 => '3호선',
      ),
      'stations' => 
      array (
        0 => '정발산역',
        1 => '마두역',
        2 => '백석역',
      ),
      'marks' => 
      array (
        0 => '일산호수공원',
        1 => '고양아람누리',
        2 => '웨스턴돔',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '일산서구',
        1 => '덕양구',
        2 => '파주시',
      ),
      'blurb' => '웨스턴돔·라페스타 심야 상권과 백석 업무지구가 붙어 있어 야간 수요가 안정적인 지역',
      'url' => '/gyeonggi/ilsandong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/ilsandong/janghang',
        1 => 'gyeonggi/ilsandong/madu',
        2 => 'gyeonggi/ilsandong/baekseok',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/ilsanseo' => 
    array (
      'key' => 'gyeonggi/ilsanseo',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '일산서구',
      'label' => '고양시 일산서구',
      'city' => '고양시',
      'slug' => 'ilsanseo',
      'area' => '경기 고양시 일산서구',
      'lat' => 37.6757,
      'lng' => 126.7503,
      'lines' => 
      array (
        0 => '3호선',
        1 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '주엽역',
        1 => '대화역',
        2 => '탄현역',
      ),
      'marks' => 
      array (
        0 => '킨텍스',
        1 => '한류월드',
        2 => '일산호수공원 서측',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '일산동구',
        1 => '파주시',
        2 => '김포시',
      ),
      'blurb' => '킨텍스 행사 수요와 주엽·탄현 대단지 주거 수요가 교차하는 지역',
      'url' => '/gyeonggi/ilsanseo/',
      'dongs' => 
      array (
        0 => 'gyeonggi/ilsanseo/juyeop',
        1 => 'gyeonggi/ilsanseo/daehwa',
        2 => 'gyeonggi/ilsanseo/tanhyeon',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/cheoin' => 
    array (
      'key' => 'gyeonggi/cheoin',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '처인구',
      'label' => '용인시 처인구',
      'city' => '용인시',
      'slug' => 'cheoin',
      'area' => '경기 용인시 처인구',
      'lat' => 37.2341,
      'lng' => 127.2017,
      'lines' => 
      array (
        0 => '용인경전철',
      ),
      'stations' => 
      array (
        0 => '김량장역',
        1 => '명지대역',
      ),
      'marks' => 
      array (
        0 => '에버랜드',
        1 => '용인중앙시장',
        2 => '경안천',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '기흥구',
        1 => '이천시',
        2 => '안성시',
      ),
      'blurb' => '에버랜드 관광 수요와 용인 원도심 생활 수요가 함께 있는 광역 면적 지역',
      'url' => '/gyeonggi/cheoin/',
      'dongs' => 
      array (
        0 => 'gyeonggi/cheoin/gimnyangjang',
        1 => 'gyeonggi/cheoin/yeokbuk',
        2 => 'gyeonggi/cheoin/pogok',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/giheung' => 
    array (
      'key' => 'gyeonggi/giheung',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '기흥구',
      'label' => '용인시 기흥구',
      'city' => '용인시',
      'slug' => 'giheung',
      'area' => '경기 용인시 기흥구',
      'lat' => 37.2803,
      'lng' => 127.1147,
      'lines' => 
      array (
        0 => '수인분당선',
        1 => '용인경전철',
      ),
      'stations' => 
      array (
        0 => '기흥역',
        1 => '신갈역',
        2 => '상갈역',
      ),
      'marks' => 
      array (
        0 => '한국민속촌',
        1 => '삼성전자 기흥캠퍼스',
        2 => '경희대 국제캠퍼스',
      ),
      'trait' => 'ind',
      'near' => 
      array (
        0 => '수지구',
        1 => '처인구',
        2 => '수원시 영통구',
      ),
      'blurb' => '반도체 사업장 교대 근무 인구가 많아 심야·새벽 요청 비율이 높은 지역',
      'url' => '/gyeonggi/giheung/',
      'dongs' => 
      array (
        0 => 'gyeonggi/giheung/gugal',
        1 => 'gyeonggi/giheung/bora',
        2 => 'gyeonggi/giheung/yeongdeok',
      ),
      'shop_count' => 10,
      'dong_count' => 3,
    ),
    'gyeonggi/suji' => 
    array (
      'key' => 'gyeonggi/suji',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '수지구',
      'label' => '용인시 수지구',
      'city' => '용인시',
      'slug' => 'suji',
      'area' => '경기 용인시 수지구',
      'lat' => 37.3221,
      'lng' => 127.0978,
      'lines' => 
      array (
        0 => '신분당선',
      ),
      'stations' => 
      array (
        0 => '수지구청역',
        1 => '성복역',
        2 => '동천역',
      ),
      'marks' => 
      array (
        0 => '광교산 북측',
        1 => '수지체육공원',
        2 => '동천동 카페거리',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '분당구',
        1 => '기흥구',
        2 => '의왕시',
      ),
      'blurb' => '분당 생활권을 공유하는 고밀 주거지로 재방문·단골 비중이 특히 높은 지역',
      'url' => '/gyeonggi/suji/',
      'dongs' => 
      array (
        0 => 'gyeonggi/suji/pungdeokcheon',
        1 => 'gyeonggi/suji/jukjeon',
        2 => 'gyeonggi/suji/sanghyeon',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/sangnok' => 
    array (
      'key' => 'gyeonggi/sangnok',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '상록구',
      'label' => '안산시 상록구',
      'city' => '안산시',
      'slug' => 'sangnok',
      'area' => '경기 안산시 상록구',
      'lat' => 37.3005,
      'lng' => 126.8479,
      'lines' => 
      array (
        0 => '4호선',
        1 => '수인분당선',
      ),
      'stations' => 
      array (
        0 => '한대앞역',
        1 => '상록수역',
        2 => '사리역',
      ),
      'marks' => 
      array (
        0 => '한양대 에리카캠퍼스',
        1 => '수암봉',
        2 => '안산천',
      ),
      'trait' => 'uni',
      'near' => 
      array (
        0 => '단원구',
        1 => '군포시',
        2 => '수원시',
      ),
      'blurb' => '대학가 배후 원룸촌과 본오동 대단지가 공존해 수요 연령대가 넓은 지역',
      'url' => '/gyeonggi/sangnok/',
      'dongs' => 
      array (
        0 => 'gyeonggi/sangnok/sa-dong',
        1 => 'gyeonggi/sangnok/bono',
        2 => 'gyeonggi/sangnok/wolpi',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/danwon' => 
    array (
      'key' => 'gyeonggi/danwon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '단원구',
      'label' => '안산시 단원구',
      'city' => '안산시',
      'slug' => 'danwon',
      'area' => '경기 안산시 단원구',
      'lat' => 37.3195,
      'lng' => 126.8094,
      'lines' => 
      array (
        0 => '4호선',
        1 => '서해선',
      ),
      'stations' => 
      array (
        0 => '중앙역',
        1 => '고잔역',
        2 => '초지역',
      ),
      'marks' => 
      array (
        0 => '안산호수공원',
        1 => '화랑유원지',
        2 => '대부도',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '상록구',
        1 => '시흥시',
        2 => '화성시',
      ),
      'blurb' => '중앙역 번화가와 반월·시화 공단 수요가 맞물려 교대 시간대 요청이 뚜렷한 지역',
      'url' => '/gyeonggi/danwon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/danwon/gojan',
        1 => 'gyeonggi/danwon/choji',
        2 => 'gyeonggi/danwon/daebu',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/manan' => 
    array (
      'key' => 'gyeonggi/manan',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '만안구',
      'label' => '안양시 만안구',
      'city' => '안양시',
      'slug' => 'manan',
      'area' => '경기 안양시 만안구',
      'lat' => 37.3866,
      'lng' => 126.9326,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '안양역',
        1 => '명학역',
        2 => '석수역',
      ),
      'marks' => 
      array (
        0 => '안양일번가',
        1 => '안양예술공원',
        2 => '삼성산',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '동안구',
        1 => '광명시',
        2 => '군포시',
      ),
      'blurb' => '안양일번가 유흥·상업 밀집으로 평일 야간과 주말 수요가 모두 높은 지역',
      'url' => '/gyeonggi/manan/',
      'dongs' => 
      array (
        0 => 'gyeonggi/manan/anyang-dong',
        1 => 'gyeonggi/manan/seoksu',
        2 => 'gyeonggi/manan/bakdal',
      ),
      'shop_count' => 10,
      'dong_count' => 3,
    ),
    'gyeonggi/dongan' => 
    array (
      'key' => 'gyeonggi/dongan',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '동안구',
      'label' => '안양시 동안구',
      'city' => '안양시',
      'slug' => 'dongan',
      'area' => '경기 안양시 동안구',
      'lat' => 37.3925,
      'lng' => 126.9568,
      'lines' => 
      array (
        0 => '1호선',
        1 => '4호선',
      ),
      'stations' => 
      array (
        0 => '평촌역',
        1 => '범계역',
        2 => '인덕원역',
      ),
      'marks' => 
      array (
        0 => '평촌 학원가',
        1 => '범계 로데오거리',
        2 => '평촌중앙공원',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '만안구',
        1 => '과천시',
        2 => '의왕시',
      ),
      'blurb' => '평촌 학원가를 축으로 30~40대 가족 수요가 두텁고 주말 예약이 빠르게 차는 지역',
      'url' => '/gyeonggi/dongan/',
      'dongs' => 
      array (
        0 => 'gyeonggi/dongan/pyeongchon',
        1 => 'gyeonggi/dongan/beomgye',
        2 => 'gyeonggi/dongan/hogye',
      ),
      'shop_count' => 15,
      'dong_count' => 3,
    ),
    'gyeonggi/bucheon' => 
    array (
      'key' => 'gyeonggi/bucheon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '부천시',
      'label' => '부천시',
      'city' => '',
      'slug' => 'bucheon',
      'area' => '경기 부천시',
      'lat' => 37.5035,
      'lng' => 126.766,
      'lines' => 
      array (
        0 => '1호선',
        1 => '7호선',
      ),
      'stations' => 
      array (
        0 => '부천역',
        1 => '신중동역',
        2 => '상동역',
      ),
      'marks' => 
      array (
        0 => '상동호수공원',
        1 => '한국만화박물관',
        2 => '부천 중동 상권',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '서울 강서구',
        1 => '인천 부평구',
        2 => '광명시',
      ),
      'blurb' => '서울·인천 양방향 접근성이 좋아 출장 이동 반경을 가장 넓게 잡을 수 있는 지역',
      'url' => '/gyeonggi/bucheon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/bucheon/jungdong',
        1 => 'gyeonggi/bucheon/sangdong',
        2 => 'gyeonggi/bucheon/simgok',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/namyangju' => 
    array (
      'key' => 'gyeonggi/namyangju',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '남양주시',
      'label' => '남양주시',
      'city' => '',
      'slug' => 'namyangju',
      'area' => '경기 남양주시',
      'lat' => 37.636,
      'lng' => 127.2165,
      'lines' => 
      array (
        0 => '경춘선',
        1 => '경의중앙선',
        2 => '8호선',
      ),
      'stations' => 
      array (
        0 => '평내호평역',
        1 => '도농역',
        2 => '별내역',
      ),
      'marks' => 
      array (
        0 => '다산신도시',
        1 => '별내신도시',
        2 => '북한강',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '구리시',
        1 => '서울 중랑구',
        2 => '가평군',
      ),
      'blurb' => '다산·별내 신도시 입주 수요가 집중돼 신규 고객 유입 속도가 가장 빠른 지역',
      'url' => '/gyeonggi/namyangju/',
      'dongs' => 
      array (
        0 => 'gyeonggi/namyangju/dasan',
        1 => 'gyeonggi/namyangju/byeollae',
        2 => 'gyeonggi/namyangju/pyeongnae',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/hwaseong' => 
    array (
      'key' => 'gyeonggi/hwaseong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '화성시',
      'label' => '화성시',
      'city' => '',
      'slug' => 'hwaseong',
      'area' => '경기 화성시',
      'lat' => 37.1996,
      'lng' => 126.831,
      'lines' => 
      array (
        0 => '수인분당선',
        1 => 'SRT',
        2 => '서해선',
      ),
      'stations' => 
      array (
        0 => '동탄역',
        1 => '병점역',
        2 => '향남',
      ),
      'marks' => 
      array (
        0 => '동탄호수공원',
        1 => '융건릉',
        2 => '궁평항',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '수원시',
        1 => '오산시',
        2 => '평택시',
      ),
      'blurb' => '동탄 신도시 중심으로 20~40대 비중이 높고 야간 출장 요청이 꾸준한 지역',
      'url' => '/gyeonggi/hwaseong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/hwaseong/dongtan',
        1 => 'gyeonggi/hwaseong/bongdam',
        2 => 'gyeonggi/hwaseong/hyangnam',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/pyeongtaek' => 
    array (
      'key' => 'gyeonggi/pyeongtaek',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '평택시',
      'label' => '평택시',
      'city' => '',
      'slug' => 'pyeongtaek',
      'area' => '경기 평택시',
      'lat' => 36.9921,
      'lng' => 127.1128,
      'lines' => 
      array (
        0 => '1호선',
        1 => 'SRT',
      ),
      'stations' => 
      array (
        0 => '평택역',
        1 => '지제역',
        2 => '서정리역',
      ),
      'marks' => 
      array (
        0 => '평택항',
        1 => '고덕국제신도시',
        2 => '평택호관광지',
      ),
      'trait' => 'ind',
      'near' => 
      array (
        0 => '화성시',
        1 => '안성시',
        2 => '오산시',
      ),
      'blurb' => '대규모 산업단지와 외국인 수요가 함께 있어 24시 운영 업소 비중이 높은 지역',
      'url' => '/gyeonggi/pyeongtaek/',
      'dongs' => 
      array (
        0 => 'gyeonggi/pyeongtaek/bijeon',
        1 => 'gyeonggi/pyeongtaek/godeok',
        2 => 'gyeonggi/pyeongtaek/songtan',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/uijeongbu' => 
    array (
      'key' => 'gyeonggi/uijeongbu',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '의정부시',
      'label' => '의정부시',
      'city' => '',
      'slug' => 'uijeongbu',
      'area' => '경기 의정부시',
      'lat' => 37.7381,
      'lng' => 127.0337,
      'lines' => 
      array (
        0 => '1호선',
        1 => '의정부경전철',
      ),
      'stations' => 
      array (
        0 => '의정부역',
        1 => '회룡역',
        2 => '탑석역',
      ),
      'marks' => 
      array (
        0 => '의정부 로데오거리',
        1 => '수락산',
        2 => '부용산',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '서울 도봉구',
        1 => '양주시',
        2 => '포천시',
      ),
      'blurb' => '경기 북부 교통 결절점으로 로드샵 밀집도와 출장 커버리지가 모두 높은 지역',
      'url' => '/gyeonggi/uijeongbu/',
      'dongs' => 
      array (
        0 => 'gyeonggi/uijeongbu/uijeongbu-dong',
        1 => 'gyeonggi/uijeongbu/howon',
        2 => 'gyeonggi/uijeongbu/songsan',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/siheung' => 
    array (
      'key' => 'gyeonggi/siheung',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '시흥시',
      'label' => '시흥시',
      'city' => '',
      'slug' => 'siheung',
      'area' => '경기 시흥시',
      'lat' => 37.38,
      'lng' => 126.8029,
      'lines' => 
      array (
        0 => '4호선',
        1 => '서해선',
      ),
      'stations' => 
      array (
        0 => '정왕역',
        1 => '시흥시청역',
        2 => '신천역',
      ),
      'marks' => 
      array (
        0 => '배곧신도시',
        1 => '오이도',
        2 => '시흥프리미엄아울렛',
      ),
      'trait' => 'ind',
      'near' => 
      array (
        0 => '안산시',
        1 => '광명시',
        2 => '인천 남동구',
      ),
      'blurb' => '시화공단 교대 근무와 배곧 신도시 주거 수요가 극명하게 나뉘는 지역',
      'url' => '/gyeonggi/siheung/',
      'dongs' => 
      array (
        0 => 'gyeonggi/siheung/jeongwang',
        1 => 'gyeonggi/siheung/baegot',
        2 => 'gyeonggi/siheung/daeya',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'gyeonggi/paju' => 
    array (
      'key' => 'gyeonggi/paju',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '파주시',
      'label' => '파주시',
      'city' => '',
      'slug' => 'paju',
      'area' => '경기 파주시',
      'lat' => 37.7599,
      'lng' => 126.78,
      'lines' => 
      array (
        0 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '운정역',
        1 => '금촌역',
      ),
      'marks' => 
      array (
        0 => '운정신도시',
        1 => '헤이리 예술마을',
        2 => '임진각',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '고양시',
        1 => '김포시',
        2 => '양주시',
      ),
      'blurb' => '운정 신도시와 교하지구 입주가 이어져 가족 단위 신규 수요가 많은 지역',
      'url' => '/gyeonggi/paju/',
      'dongs' => 
      array (
        0 => 'gyeonggi/paju/unjeong',
        1 => 'gyeonggi/paju/geumchon',
        2 => 'gyeonggi/paju/gyoha',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/gwangmyeong' => 
    array (
      'key' => 'gyeonggi/gwangmyeong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '광명시',
      'label' => '광명시',
      'city' => '',
      'slug' => 'gwangmyeong',
      'area' => '경기 광명시',
      'lat' => 37.4786,
      'lng' => 126.8646,
      'lines' => 
      array (
        0 => '1호선',
        1 => '7호선',
      ),
      'stations' => 
      array (
        0 => '철산역',
        1 => '광명사거리역',
        2 => '광명역',
      ),
      'marks' => 
      array (
        0 => '광명동굴',
        1 => '이케아 광명점',
        2 => '구름산',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '서울 구로구',
        1 => '서울 금천구',
        2 => '안양시',
      ),
      'blurb' => '서울 서남권 생활권을 공유해 서울 출장 요청까지 함께 소화되는 지역',
      'url' => '/gyeonggi/gwangmyeong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gwangmyeong/cheolsan',
        1 => 'gyeonggi/gwangmyeong/haan',
        2 => 'gyeonggi/gwangmyeong/soha',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/gimpo' => 
    array (
      'key' => 'gyeonggi/gimpo',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '김포시',
      'label' => '김포시',
      'city' => '',
      'slug' => 'gimpo',
      'area' => '경기 김포시',
      'lat' => 37.6152,
      'lng' => 126.7156,
      'lines' => 
      array (
        0 => '김포골드라인',
      ),
      'stations' => 
      array (
        0 => '사우역',
        1 => '구래역',
        2 => '장기역',
      ),
      'marks' => 
      array (
        0 => '김포한강신도시',
        1 => '라베니체',
        2 => '애기봉',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '인천 서구',
        1 => '고양시',
        2 => '파주시',
      ),
      'blurb' => '한강신도시 대단지 입주로 홈 케어 수요 증가가 두드러지는 지역',
      'url' => '/gyeonggi/gimpo/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gimpo/gurae',
        1 => 'gyeonggi/gimpo/sau',
        2 => 'gyeonggi/gimpo/janggi',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/gunpo' => 
    array (
      'key' => 'gyeonggi/gunpo',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '군포시',
      'label' => '군포시',
      'city' => '',
      'slug' => 'gunpo',
      'area' => '경기 군포시',
      'lat' => 37.3617,
      'lng' => 126.9352,
      'lines' => 
      array (
        0 => '1호선',
        1 => '4호선',
      ),
      'stations' => 
      array (
        0 => '산본역',
        1 => '금정역',
        2 => '군포역',
      ),
      'marks' => 
      array (
        0 => '산본 로데오',
        1 => '수리산',
        2 => '철도박물관',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '안양시',
        1 => '안산시',
        2 => '의왕시',
      ),
      'blurb' => '산본 역세권에 수요가 집약돼 도보권 로드샵 선택이 많은 소형 생활권',
      'url' => '/gyeonggi/gunpo/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gunpo/sanbon',
        1 => 'gyeonggi/gunpo/geumjeong',
        2 => 'gyeonggi/gunpo/dang',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'gyeonggi/hanam' => 
    array (
      'key' => 'gyeonggi/hanam',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '하남시',
      'label' => '하남시',
      'city' => '',
      'slug' => 'hanam',
      'area' => '경기 하남시',
      'lat' => 37.5393,
      'lng' => 127.2148,
      'lines' => 
      array (
        0 => '5호선',
        1 => '9호선',
      ),
      'stations' => 
      array (
        0 => '미사역',
        1 => '하남시청역',
        2 => '하남검단산역',
      ),
      'marks' => 
      array (
        0 => '스타필드 하남',
        1 => '미사강변도시',
        2 => '검단산',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '서울 강동구',
        1 => '남양주시',
        2 => '광주시',
      ),
      'blurb' => '미사·감일 신도시 입주와 서울 강동 생활권 공유로 수요가 급증한 지역',
      'url' => '/gyeonggi/hanam/',
      'dongs' => 
      array (
        0 => 'gyeonggi/hanam/misa',
        1 => 'gyeonggi/hanam/sinjang-hn',
        2 => 'gyeonggi/hanam/deokpung',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'gyeonggi/gwangju-gg' => 
    array (
      'key' => 'gyeonggi/gwangju-gg',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '광주시',
      'label' => '광주시',
      'city' => '',
      'slug' => 'gwangju-gg',
      'area' => '경기 광주시',
      'lat' => 37.4292,
      'lng' => 127.255,
      'lines' => 
      array (
        0 => '경강선',
      ),
      'stations' => 
      array (
        0 => '경기광주역',
        1 => '삼동역',
        2 => '곤지암역',
      ),
      'marks' => 
      array (
        0 => '남한산성',
        1 => '팔당호',
        2 => '화담숲',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '성남시',
        1 => '하남시',
        2 => '용인시',
      ),
      'blurb' => '전원 주택과 신규 아파트가 섞여 출장 이동 거리 안내가 특히 중요한 지역',
      'url' => '/gyeonggi/gwangju-gg/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gwangju-gg/gyeongan',
        1 => 'gyeonggi/gwangju-gg/opo',
        2 => 'gyeonggi/gwangju-gg/chowol',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/icheon' => 
    array (
      'key' => 'gyeonggi/icheon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '이천시',
      'label' => '이천시',
      'city' => '',
      'slug' => 'icheon',
      'area' => '경기 이천시',
      'lat' => 37.2721,
      'lng' => 127.435,
      'lines' => 
      array (
        0 => '경강선',
      ),
      'stations' => 
      array (
        0 => '이천역',
        1 => '부발역',
      ),
      'marks' => 
      array (
        0 => 'SK하이닉스 이천캠퍼스',
        1 => '설봉공원',
        2 => '이천 도자예술마을',
      ),
      'trait' => 'ind',
      'near' => 
      array (
        0 => '광주시',
        1 => '여주시',
        2 => '용인시',
      ),
      'blurb' => '대형 사업장 교대 인력과 온천·관광 수요가 함께 있는 경기 동남부 거점',
      'url' => '/gyeonggi/icheon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/icheon/changjeon',
        1 => 'gyeonggi/icheon/bubal',
        2 => 'gyeonggi/icheon/jeungpo',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/yangju' => 
    array (
      'key' => 'gyeonggi/yangju',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '양주시',
      'label' => '양주시',
      'city' => '',
      'slug' => 'yangju',
      'area' => '경기 양주시',
      'lat' => 37.7852,
      'lng' => 127.0458,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '양주역',
        1 => '덕정역',
      ),
      'marks' => 
      array (
        0 => '옥정신도시',
        1 => '회암사지',
        2 => '불곡산',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '의정부시',
        1 => '동두천시',
        2 => '포천시',
      ),
      'blurb' => '옥정 신도시 대규모 입주로 신규 업소 진입이 활발한 경기 북부 성장 지역',
      'url' => '/gyeonggi/yangju/',
      'dongs' => 
      array (
        0 => 'gyeonggi/yangju/okjeong',
        1 => 'gyeonggi/yangju/hoecheon',
        2 => 'gyeonggi/yangju/baekseok-yj',
      ),
      'shop_count' => 9,
      'dong_count' => 3,
    ),
    'gyeonggi/osan' => 
    array (
      'key' => 'gyeonggi/osan',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '오산시',
      'label' => '오산시',
      'city' => '',
      'slug' => 'osan',
      'area' => '경기 오산시',
      'lat' => 37.1499,
      'lng' => 127.0773,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '오산역',
        1 => '오산대역',
        2 => '세마역',
      ),
      'marks' => 
      array (
        0 => '물향기수목원',
        1 => '오색시장',
        2 => '독산성',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '화성시',
        1 => '평택시',
        2 => '용인시',
      ),
      'blurb' => '면적이 작아 시 전역이 단일 출장 권역으로 묶이는 접근성 중심 지역',
      'url' => '/gyeonggi/osan/',
      'dongs' => 
      array (
        0 => 'gyeonggi/osan/osan-jungang',
        1 => 'gyeonggi/osan/sinjang-os',
        2 => 'gyeonggi/osan/sema',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'gyeonggi/guri' => 
    array (
      'key' => 'gyeonggi/guri',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '구리시',
      'label' => '구리시',
      'city' => '',
      'slug' => 'guri',
      'area' => '경기 구리시',
      'lat' => 37.5943,
      'lng' => 127.1296,
      'lines' => 
      array (
        0 => '경의중앙선',
        1 => '8호선',
      ),
      'stations' => 
      array (
        0 => '구리역',
        1 => '돌다리',
      ),
      'marks' => 
      array (
        0 => '동구릉',
        1 => '아차산',
        2 => '구리 농수산물도매시장',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '서울 중랑구',
        1 => '남양주시',
        2 => '하남시',
      ),
      'blurb' => '서울 동북권과 사실상 같은 생활권으로 심야 출장 이동이 쉬운 소형 지역',
      'url' => '/gyeonggi/guri/',
      'dongs' => 
      array (
        0 => 'gyeonggi/guri/sutaek',
        1 => 'gyeonggi/guri/gyomun',
        2 => 'gyeonggi/guri/inchang',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/anseong' => 
    array (
      'key' => 'gyeonggi/anseong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '안성시',
      'label' => '안성시',
      'city' => '',
      'slug' => 'anseong',
      'area' => '경기 안성시',
      'lat' => 37.008,
      'lng' => 127.2797,
      'lines' => 
      array (
        0 => '철도 미연결(고속버스)',
      ),
      'stations' => 
      array (
        0 => '안성버스터미널',
      ),
      'marks' => 
      array (
        0 => '안성맞춤랜드',
        1 => '안성팜랜드',
        2 => '서운산',
      ),
      'trait' => 'rs',
      'near' => 
      array (
        0 => '평택시',
        1 => '이천시',
        2 => '용인시',
      ),
      'blurb' => '읍·면 면적이 넓어 출장 권역을 사전에 구분해 안내해야 하는 지역',
      'url' => '/gyeonggi/anseong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/anseong/anseong-1',
        1 => 'gyeonggi/anseong/gongdo',
        2 => 'gyeonggi/anseong/bogae',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/pocheon' => 
    array (
      'key' => 'gyeonggi/pocheon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '포천시',
      'label' => '포천시',
      'city' => '',
      'slug' => 'pocheon',
      'area' => '경기 포천시',
      'lat' => 37.8949,
      'lng' => 127.2003,
      'lines' => 
      array (
        0 => '철도 미연결(광역버스)',
      ),
      'stations' => 
      array (
        0 => '포천시청',
        1 => '송우리',
      ),
      'marks' => 
      array (
        0 => '산정호수',
        1 => '포천 아트밸리',
        2 => '허브아일랜드',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '의정부시',
        1 => '양주시',
        2 => '가평군',
      ),
      'blurb' => '관광·펜션 수요와 소흘읍 주거 수요가 분리돼 권역별 운영이 필요한 지역',
      'url' => '/gyeonggi/pocheon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/pocheon/soheul',
        1 => 'gyeonggi/pocheon/pocheon-dong',
        2 => 'gyeonggi/pocheon/yeongbuk',
      ),
      'shop_count' => 9,
      'dong_count' => 3,
    ),
    'gyeonggi/uiwang' => 
    array (
      'key' => 'gyeonggi/uiwang',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '의왕시',
      'label' => '의왕시',
      'city' => '',
      'slug' => 'uiwang',
      'area' => '경기 의왕시',
      'lat' => 37.3448,
      'lng' => 126.9683,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '의왕역',
        1 => '청계',
      ),
      'marks' => 
      array (
        0 => '백운호수',
        1 => '왕송호수',
        2 => '모락산',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '안양시',
        1 => '군포시',
        2 => '수원시',
      ),
      'blurb' => '백운호수 상권과 내손 대단지가 중심인 조용한 중산층 주거 지역',
      'url' => '/gyeonggi/uiwang/',
      'dongs' => 
      array (
        0 => 'gyeonggi/uiwang/naeson',
        1 => 'gyeonggi/uiwang/gocheon',
        2 => 'gyeonggi/uiwang/cheonggye-uw',
      ),
      'shop_count' => 14,
      'dong_count' => 3,
    ),
    'gyeonggi/yeoju' => 
    array (
      'key' => 'gyeonggi/yeoju',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '여주시',
      'label' => '여주시',
      'city' => '',
      'slug' => 'yeoju',
      'area' => '경기 여주시',
      'lat' => 37.2982,
      'lng' => 127.6372,
      'lines' => 
      array (
        0 => '경강선',
      ),
      'stations' => 
      array (
        0 => '여주역',
      ),
      'marks' => 
      array (
        0 => '세종대왕릉',
        1 => '신륵사',
        2 => '여주 프리미엄 아울렛',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '이천시',
        1 => '양평군',
        2 => '광주시',
      ),
      'blurb' => '주말 관광 유입이 수요의 큰 축이어서 예약 선행 비중이 높은 지역',
      'url' => '/gyeonggi/yeoju/',
      'dongs' => 
      array (
        0 => 'gyeonggi/yeoju/yeoheung',
        1 => 'gyeonggi/yeoju/ohak',
        2 => 'gyeonggi/yeoju/ganam',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'gyeonggi/dongducheon' => 
    array (
      'key' => 'gyeonggi/dongducheon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '동두천시',
      'label' => '동두천시',
      'city' => '',
      'slug' => 'dongducheon',
      'area' => '경기 동두천시',
      'lat' => 37.9036,
      'lng' => 127.0606,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '동두천중앙역',
        1 => '지행역',
        2 => '보산역',
      ),
      'marks' => 
      array (
        0 => '소요산',
        1 => '동두천 자유시장',
        2 => '왕방산',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '의정부시',
        1 => '양주시',
        2 => '포천시',
      ),
      'blurb' => '외국인 수요와 내국인 수요가 공존해 영문 안내를 함께 준비하면 유리한 지역',
      'url' => '/gyeonggi/dongducheon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/dongducheon/saengyeon',
        1 => 'gyeonggi/dongducheon/songnae-ddc',
        2 => 'gyeonggi/dongducheon/bosan',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'gyeonggi/gwacheon' => 
    array (
      'key' => 'gyeonggi/gwacheon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '과천시',
      'label' => '과천시',
      'city' => '',
      'slug' => 'gwacheon',
      'area' => '경기 과천시',
      'lat' => 37.4292,
      'lng' => 126.9877,
      'lines' => 
      array (
        0 => '4호선',
      ),
      'stations' => 
      array (
        0 => '과천역',
        1 => '정부과천청사역',
      ),
      'marks' => 
      array (
        0 => '서울대공원',
        1 => '국립현대미술관 과천',
        2 => '관악산',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '서울 서초구',
        1 => '안양시',
        2 => '의왕시',
      ),
      'blurb' => '공공기관 종사자 비중이 높고 조용한 응대를 선호하는 수요가 많은 소형 지역',
      'url' => '/gyeonggi/gwacheon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gwacheon/byeoryang',
        1 => 'gyeonggi/gwacheon/munwon',
        2 => 'gyeonggi/gwacheon/gwacheon-dong',
      ),
      'shop_count' => 10,
      'dong_count' => 3,
    ),
    'gyeonggi/gapyeong' => 
    array (
      'key' => 'gyeonggi/gapyeong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '가평군',
      'label' => '가평군',
      'city' => '',
      'slug' => 'gapyeong',
      'area' => '경기 가평군',
      'lat' => 37.8315,
      'lng' => 127.5095,
      'lines' => 
      array (
        0 => '경춘선',
      ),
      'stations' => 
      array (
        0 => '가평역',
        1 => '청평역',
      ),
      'marks' => 
      array (
        0 => '아침고요수목원',
        1 => '자라섬',
        2 => '청평호',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '남양주시',
        1 => '포천시',
        2 => '양평군',
      ),
      'blurb' => '펜션·리조트 중심 관광 수요가 절대적이어서 출장 케어 비중이 가장 높은 지역',
      'url' => '/gyeonggi/gapyeong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/gapyeong/gapyeong-eup',
        1 => 'gyeonggi/gapyeong/cheongpyeong',
        2 => 'gyeonggi/gapyeong/sangmyeon',
      ),
      'shop_count' => 9,
      'dong_count' => 3,
    ),
    'gyeonggi/yangpyeong' => 
    array (
      'key' => 'gyeonggi/yangpyeong',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '양평군',
      'label' => '양평군',
      'city' => '',
      'slug' => 'yangpyeong',
      'area' => '경기 양평군',
      'lat' => 37.4917,
      'lng' => 127.4876,
      'lines' => 
      array (
        0 => '경의중앙선',
      ),
      'stations' => 
      array (
        0 => '양평역',
        1 => '용문역',
        2 => '양수역',
      ),
      'marks' => 
      array (
        0 => '두물머리',
        1 => '세미원',
        2 => '용문사',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '여주시',
        1 => '광주시',
        2 => '가평군',
      ),
      'blurb' => '전원주택·펜션 수요와 주말 나들이 유입이 결합된 남한강 관광 지역',
      'url' => '/gyeonggi/yangpyeong/',
      'dongs' => 
      array (
        0 => 'gyeonggi/yangpyeong/yangpyeong-eup',
        1 => 'gyeonggi/yangpyeong/yongmun',
        2 => 'gyeonggi/yangpyeong/yangseo',
      ),
      'shop_count' => 9,
      'dong_count' => 3,
    ),
    'gyeonggi/yeoncheon' => 
    array (
      'key' => 'gyeonggi/yeoncheon',
      'sido' => 'gyeonggi',
      'sido_name' => '경기',
      'name' => '연천군',
      'label' => '연천군',
      'city' => '',
      'slug' => 'yeoncheon',
      'area' => '경기 연천군',
      'lat' => 38.0966,
      'lng' => 127.0748,
      'lines' => 
      array (
        0 => '1호선',
      ),
      'stations' => 
      array (
        0 => '연천역',
        1 => '전곡역',
        2 => '청산역',
      ),
      'marks' => 
      array (
        0 => '재인폭포',
        1 => '한탄강',
        2 => '전곡리 유적',
      ),
      'trait' => 'rs',
      'near' => 
      array (
        0 => '동두천시',
        1 => '포천시',
        2 => '파주시',
      ),
      'blurb' => '경기 최북단 저밀도 지역으로 출장 전용 운영과 사전 예약 안내가 필수인 지역',
      'url' => '/gyeonggi/yeoncheon/',
      'dongs' => 
      array (
        0 => 'gyeonggi/yeoncheon/jeongok',
        1 => 'gyeonggi/yeoncheon/yeoncheon-eup',
        2 => 'gyeonggi/yeoncheon/cheongsan',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'incheon/jung' => 
    array (
      'key' => 'incheon/jung',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '중구',
      'label' => '중구',
      'city' => '',
      'slug' => 'jung',
      'area' => '인천 중구',
      'lat' => 37.4737,
      'lng' => 126.6216,
      'lines' => 
      array (
        0 => '1호선',
        1 => '공항철도',
      ),
      'stations' => 
      array (
        0 => '인천역',
        1 => '동인천역',
        2 => '운서역',
      ),
      'marks' => 
      array (
        0 => '인천국제공항',
        1 => '차이나타운',
        2 => '월미도',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '동구',
        1 => '미추홀구',
        2 => '서구',
      ),
      'blurb' => '공항·항만 교대 근무와 원도심 관광 수요가 겹쳐 새벽 시간대 요청이 많은 지역',
      'url' => '/incheon/jung/',
      'dongs' => 
      array (
        0 => 'incheon/jung/sinpo',
        1 => 'incheon/jung/yeongjong',
        2 => 'incheon/jung/unseo',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'incheon/dong' => 
    array (
      'key' => 'incheon/dong',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '동구',
      'label' => '동구',
      'city' => '',
      'slug' => 'dong',
      'area' => '인천 동구',
      'lat' => 37.4738,
      'lng' => 126.6433,
      'lines' => 
      array (
        0 => '1호선',
        1 => '수인분당선',
      ),
      'stations' => 
      array (
        0 => '동인천역',
        1 => '도원역',
      ),
      'marks' => 
      array (
        0 => '화도진공원',
        1 => '배다리 헌책방거리',
        2 => '수도국산달빛마을',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '중구',
        1 => '미추홀구',
        2 => '부평구',
      ),
      'blurb' => '인천 원도심 특유의 좁은 생활권으로 단골 중심 운영이 효과적인 지역',
      'url' => '/incheon/dong/',
      'dongs' => 
      array (
        0 => 'incheon/dong/songhyeon',
        1 => 'incheon/dong/hwasu',
        2 => 'incheon/dong/manseok',
      ),
      'shop_count' => 10,
      'dong_count' => 3,
    ),
    'incheon/michuhol' => 
    array (
      'key' => 'incheon/michuhol',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '미추홀구',
      'label' => '미추홀구',
      'city' => '',
      'slug' => 'michuhol',
      'area' => '인천 미추홀구',
      'lat' => 37.4635,
      'lng' => 126.6503,
      'lines' => 
      array (
        0 => '1호선',
        1 => '수인분당선',
        2 => '인천1호선',
      ),
      'stations' => 
      array (
        0 => '주안역',
        1 => '제물포역',
        2 => '도화역',
      ),
      'marks' => 
      array (
        0 => '수봉공원',
        1 => '주안역 지하상가',
        2 => '문학산',
      ),
      'trait' => 'md',
      'near' => 
      array (
        0 => '동구',
        1 => '남동구',
        2 => '연수구',
      ),
      'blurb' => '주안 지하상가 상권과 인하대 배후 주거지가 결합된 인천 전통 중심 생활권',
      'url' => '/incheon/michuhol/',
      'dongs' => 
      array (
        0 => 'incheon/michuhol/juan',
        1 => 'incheon/michuhol/yonghyeon',
        2 => 'incheon/michuhol/hagik',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'incheon/yeonsu' => 
    array (
      'key' => 'incheon/yeonsu',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '연수구',
      'label' => '연수구',
      'city' => '',
      'slug' => 'yeonsu',
      'area' => '인천 연수구',
      'lat' => 37.41,
      'lng' => 126.6783,
      'lines' => 
      array (
        0 => '수인분당선',
        1 => '인천1호선',
      ),
      'stations' => 
      array (
        0 => '캠퍼스타운역',
        1 => '원인재역',
        2 => '동춘역',
      ),
      'marks' => 
      array (
        0 => '송도센트럴파크',
        1 => '트리플스트리트',
        2 => '문학경기장',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '미추홀구',
        1 => '남동구',
        2 => '중구',
      ),
      'blurb' => '송도 신도시 고소득 수요와 연수·동춘 기존 주거지가 가격대를 양분하는 지역',
      'url' => '/incheon/yeonsu/',
      'dongs' => 
      array (
        0 => 'incheon/yeonsu/songdo',
        1 => 'incheon/yeonsu/yeonsu-dong',
        2 => 'incheon/yeonsu/dongchun',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'incheon/namdong' => 
    array (
      'key' => 'incheon/namdong',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '남동구',
      'label' => '남동구',
      'city' => '',
      'slug' => 'namdong',
      'area' => '인천 남동구',
      'lat' => 37.4473,
      'lng' => 126.7314,
      'lines' => 
      array (
        0 => '수인분당선',
        1 => '인천1호선',
      ),
      'stations' => 
      array (
        0 => '인천시청역',
        1 => '예술회관역',
        2 => '소래포구역',
      ),
      'marks' => 
      array (
        0 => '인천시청',
        1 => '구월동 로데오거리',
        2 => '소래포구',
      ),
      'trait' => 'of',
      'near' => 
      array (
        0 => '미추홀구',
        1 => '연수구',
        2 => '부평구',
      ),
      'blurb' => '인천시청·구월 로데오 상권이 중심이어서 평일 야간 수요가 가장 두터운 지역',
      'url' => '/incheon/namdong/',
      'dongs' => 
      array (
        0 => 'incheon/namdong/guwol',
        1 => 'incheon/namdong/nonhyeon-ic',
        2 => 'incheon/namdong/mansu',
      ),
      'shop_count' => 13,
      'dong_count' => 3,
    ),
    'incheon/bupyeong' => 
    array (
      'key' => 'incheon/bupyeong',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '부평구',
      'label' => '부평구',
      'city' => '',
      'slug' => 'bupyeong',
      'area' => '인천 부평구',
      'lat' => 37.507,
      'lng' => 126.7219,
      'lines' => 
      array (
        0 => '1호선',
        1 => '7호선',
        2 => '인천1호선',
      ),
      'stations' => 
      array (
        0 => '부평역',
        1 => '부평구청역',
        2 => '동수역',
      ),
      'marks' => 
      array (
        0 => '부평역 지하상가',
        1 => '부평문화의거리',
        2 => '원적산',
      ),
      'trait' => 'st',
      'near' => 
      array (
        0 => '계양구',
        1 => '서구',
        2 => '남동구',
      ),
      'blurb' => '부평역 환승 유동과 지하상가 상권이 맞물려 접근성 중심 선택이 뚜렷한 지역',
      'url' => '/incheon/bupyeong/',
      'dongs' => 
      array (
        0 => 'incheon/bupyeong/bupyeong-dong',
        1 => 'incheon/bupyeong/sangok',
        2 => 'incheon/bupyeong/sipjeong',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'incheon/gyeyang' => 
    array (
      'key' => 'incheon/gyeyang',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '계양구',
      'label' => '계양구',
      'city' => '',
      'slug' => 'gyeyang',
      'area' => '인천 계양구',
      'lat' => 37.5373,
      'lng' => 126.7377,
      'lines' => 
      array (
        0 => '인천1호선',
        1 => '공항철도',
      ),
      'stations' => 
      array (
        0 => '계산역',
        1 => '작전역',
        2 => '귤현역',
      ),
      'marks' => 
      array (
        0 => '계양산',
        1 => '서운체육공원',
        2 => '굴포천',
      ),
      'trait' => 'ap',
      'near' => 
      array (
        0 => '부평구',
        1 => '서구',
        2 => '김포시',
      ),
      'blurb' => '계산·작전 택지 주거 수요가 안정적이고 심야보다 초저녁 요청이 많은 생활권',
      'url' => '/incheon/gyeyang/',
      'dongs' => 
      array (
        0 => 'incheon/gyeyang/gyesan',
        1 => 'incheon/gyeyang/jakjeon',
        2 => 'incheon/gyeyang/hyoseong',
      ),
      'shop_count' => 11,
      'dong_count' => 3,
    ),
    'incheon/seo' => 
    array (
      'key' => 'incheon/seo',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '서구',
      'label' => '서구',
      'city' => '',
      'slug' => 'seo',
      'area' => '인천 서구',
      'lat' => 37.5456,
      'lng' => 126.6759,
      'lines' => 
      array (
        0 => '공항철도',
        1 => '인천2호선',
      ),
      'stations' => 
      array (
        0 => '검암역',
        1 => '청라국제도시역',
        2 => '가정역',
      ),
      'marks' => 
      array (
        0 => '청라호수공원',
        1 => '아라뱃길',
        2 => '루원시티',
      ),
      'trait' => 'nt',
      'near' => 
      array (
        0 => '계양구',
        1 => '부평구',
        2 => '중구',
      ),
      'blurb' => '청라 신도시와 검암·가정 역세권 개발이 동시에 진행돼 신규 수요 유입이 빠른 지역',
      'url' => '/incheon/seo/',
      'dongs' => 
      array (
        0 => 'incheon/seo/cheongna',
        1 => 'incheon/seo/geomam',
        2 => 'incheon/seo/gajeong',
      ),
      'shop_count' => 12,
      'dong_count' => 3,
    ),
    'incheon/ganghwa' => 
    array (
      'key' => 'incheon/ganghwa',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '강화군',
      'label' => '강화군',
      'city' => '',
      'slug' => 'ganghwa',
      'area' => '인천 강화군',
      'lat' => 37.747,
      'lng' => 126.4878,
      'lines' => 
      array (
        0 => '광역버스(철도 미연결)',
      ),
      'stations' => 
      array (
        0 => '강화버스터미널',
      ),
      'marks' => 
      array (
        0 => '전등사',
        1 => '동막해변',
        2 => '고려산',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '인천 서구',
        1 => '김포시',
        2 => '옹진군',
      ),
      'blurb' => '주말 관광·펜션 수요가 중심이라 예약 선행과 출장 이동 시간 안내가 특히 중요한 지역',
      'url' => '/incheon/ganghwa/',
      'dongs' => 
      array (
        0 => 'incheon/ganghwa/ganghwa-eup',
        1 => 'incheon/ganghwa/gilsang',
        2 => 'incheon/ganghwa/hwado',
      ),
      'shop_count' => 8,
      'dong_count' => 3,
    ),
    'incheon/ongjin' => 
    array (
      'key' => 'incheon/ongjin',
      'sido' => 'incheon',
      'sido_name' => '인천',
      'name' => '옹진군',
      'label' => '옹진군',
      'city' => '',
      'slug' => 'ongjin',
      'area' => '인천 옹진군',
      'lat' => 37.4463,
      'lng' => 126.637,
      'lines' => 
      array (
        0 => '여객선(철도 미연결)',
      ),
      'stations' => 
      array (
        0 => '인천항 연안여객터미널',
      ),
      'marks' => 
      array (
        0 => '백령도',
        1 => '영흥도',
        2 => '덕적도',
      ),
      'trait' => 'tr',
      'near' => 
      array (
        0 => '인천 중구',
        1 => '연수구',
        2 => '강화군',
      ),
      'blurb' => '도서 지역 특성상 로드샵 대신 출장·방문 케어만 운영되는 지역',
      'url' => '/incheon/ongjin/',
      'dongs' => 
      array (
        0 => 'incheon/ongjin/yeongheung',
        1 => 'incheon/ongjin/baengnyeong',
        2 => 'incheon/ongjin/deokjeok',
      ),
      'shop_count' => 6,
      'dong_count' => 3,
    ),
  ),
  'dong' => 
  array (
    'seoul/gangnam/yeoksam' => 
    array (
      'key' => 'seoul/gangnam/yeoksam',
      'sido' => 'seoul',
      'gu' => 'seoul/gangnam',
      'name' => '역삼동',
      'slug' => 'yeoksam',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '역삼역',
        1 => '테헤란로',
        2 => '국기원',
      ),
      'area' => '서울 강남구 역삼동',
      'lat' => 37.51405,
      'lng' => 127.04838,
      'url' => '/seoul/gangnam/yeoksam/',
      'shops' => 
      array (
        0 => 'yeoksam-1',
        1 => 'yeoksam-2',
        2 => 'yeoksam-3',
        3 => 'yeoksam-4',
      ),
      'siblings' => 
      array (
        0 => '삼성동',
        1 => '논현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangnam/samseong',
        1 => 'seoul/gangnam/nonhyeon',
      ),
    ),
    'seoul/gangnam/samseong' => 
    array (
      'key' => 'seoul/gangnam/samseong',
      'sido' => 'seoul',
      'gu' => 'seoul/gangnam',
      'name' => '삼성동',
      'slug' => 'samseong',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '코엑스',
        1 => '봉은사',
        2 => '삼성중앙역',
      ),
      'area' => '서울 강남구 삼성동',
      'lat' => 37.51994,
      'lng' => 127.03696,
      'url' => '/seoul/gangnam/samseong/',
      'shops' => 
      array (
        0 => 'samseong-1',
        1 => 'samseong-2',
        2 => 'samseong-3',
        3 => 'samseong-4',
        4 => 'samseong-5',
      ),
      'siblings' => 
      array (
        0 => '역삼동',
        1 => '논현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangnam/yeoksam',
        1 => 'seoul/gangnam/nonhyeon',
      ),
    ),
    'seoul/gangnam/nonhyeon' => 
    array (
      'key' => 'seoul/gangnam/nonhyeon',
      'sido' => 'seoul',
      'gu' => 'seoul/gangnam',
      'name' => '논현동',
      'slug' => 'nonhyeon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '학동역',
        1 => '논현역',
        2 => '영동전통시장',
      ),
      'area' => '서울 강남구 논현동',
      'lat' => 37.50706,
      'lng' => 127.04324,
      'url' => '/seoul/gangnam/nonhyeon/',
      'shops' => 
      array (
        0 => 'nonhyeon-1',
        1 => 'nonhyeon-2',
        2 => 'nonhyeon-3',
        3 => 'nonhyeon-4',
      ),
      'siblings' => 
      array (
        0 => '역삼동',
        1 => '삼성동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangnam/yeoksam',
        1 => 'seoul/gangnam/samseong',
      ),
    ),
    'seoul/gangdong/cheonho' => 
    array (
      'key' => 'seoul/gangdong/cheonho',
      'sido' => 'seoul',
      'gu' => 'seoul/gangdong',
      'name' => '천호동',
      'slug' => 'cheonho',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '천호역',
        1 => '천호시장',
        2 => '현대백화점 천호점',
      ),
      'area' => '서울 강동구 천호동',
      'lat' => 37.53445,
      'lng' => 127.11852,
      'url' => '/seoul/gangdong/cheonho/',
      'shops' => 
      array (
        0 => 'cheonho-1',
        1 => 'cheonho-2',
        2 => 'cheonho-3',
        3 => 'cheonho-4',
      ),
      'siblings' => 
      array (
        0 => '길동',
        1 => '둔촌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangdong/gildong',
        1 => 'seoul/gangdong/dunchon',
      ),
    ),
    'seoul/gangdong/gildong' => 
    array (
      'key' => 'seoul/gangdong/gildong',
      'sido' => 'seoul',
      'gu' => 'seoul/gangdong',
      'name' => '길동',
      'slug' => 'gildong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '길동역',
        1 => '길동복조리시장',
        2 => '일자산',
      ),
      'area' => '서울 강동구 길동',
      'lat' => 37.5304,
      'lng' => 127.1223,
      'url' => '/seoul/gangdong/gildong/',
      'shops' => 
      array (
        0 => 'gildong-1',
        1 => 'gildong-2',
        2 => 'gildong-3',
        3 => 'gildong-4',
        4 => 'gildong-5',
      ),
      'siblings' => 
      array (
        0 => '천호동',
        1 => '둔촌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangdong/cheonho',
        1 => 'seoul/gangdong/dunchon',
      ),
    ),
    'seoul/gangdong/dunchon' => 
    array (
      'key' => 'seoul/gangdong/dunchon',
      'sido' => 'seoul',
      'gu' => 'seoul/gangdong',
      'name' => '둔촌동',
      'slug' => 'dunchon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '둔촌동역',
        1 => '올림픽공원',
        2 => '둔촌역 상가',
      ),
      'area' => '서울 강동구 둔촌동',
      'lat' => 37.54056,
      'lng' => 127.11803,
      'url' => '/seoul/gangdong/dunchon/',
      'shops' => 
      array (
        0 => 'dunchon-1',
        1 => 'dunchon-2',
        2 => 'dunchon-3',
        3 => 'dunchon-4',
        4 => 'dunchon-5',
      ),
      'siblings' => 
      array (
        0 => '천호동',
        1 => '길동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangdong/cheonho',
        1 => 'seoul/gangdong/gildong',
      ),
    ),
    'seoul/gangbuk/suyu' => 
    array (
      'key' => 'seoul/gangbuk/suyu',
      'sido' => 'seoul',
      'gu' => 'seoul/gangbuk',
      'name' => '수유동',
      'slug' => 'suyu',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '수유역',
        1 => '수유시장',
        2 => '강북구청',
      ),
      'area' => '서울 강북구 수유동',
      'lat' => 37.62968,
      'lng' => 127.01602,
      'url' => '/seoul/gangbuk/suyu/',
      'shops' => 
      array (
        0 => 'suyu-1',
        1 => 'suyu-2',
        2 => 'suyu-3',
        3 => 'suyu-4',
      ),
      'siblings' => 
      array (
        0 => '미아동',
        1 => '번동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangbuk/mia',
        1 => 'seoul/gangbuk/beon',
      ),
    ),
    'seoul/gangbuk/mia' => 
    array (
      'key' => 'seoul/gangbuk/mia',
      'sido' => 'seoul',
      'gu' => 'seoul/gangbuk',
      'name' => '미아동',
      'slug' => 'mia',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '미아사거리역',
        1 => '미아역',
        2 => '숭인시장',
      ),
      'area' => '서울 강북구 미아동',
      'lat' => 37.65153,
      'lng' => 127.02138,
      'url' => '/seoul/gangbuk/mia/',
      'shops' => 
      array (
        0 => 'mia-1',
        1 => 'mia-2',
        2 => 'mia-3',
        3 => 'mia-4',
        4 => 'mia-5',
      ),
      'siblings' => 
      array (
        0 => '수유동',
        1 => '번동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangbuk/suyu',
        1 => 'seoul/gangbuk/beon',
      ),
    ),
    'seoul/gangbuk/beon' => 
    array (
      'key' => 'seoul/gangbuk/beon',
      'sido' => 'seoul',
      'gu' => 'seoul/gangbuk',
      'name' => '번동',
      'slug' => 'beon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '번동 주택가',
        1 => '오패산',
        2 => '북서울꿈의숲',
      ),
      'area' => '서울 강북구 번동',
      'lat' => 37.64334,
      'lng' => 127.01477,
      'url' => '/seoul/gangbuk/beon/',
      'shops' => 
      array (
        0 => 'beon-1',
        1 => 'beon-2',
        2 => 'beon-3',
        3 => 'beon-4',
      ),
      'siblings' => 
      array (
        0 => '수유동',
        1 => '미아동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangbuk/suyu',
        1 => 'seoul/gangbuk/mia',
      ),
    ),
    'seoul/gangseo/hwagok' => 
    array (
      'key' => 'seoul/gangseo/hwagok',
      'sido' => 'seoul',
      'gu' => 'seoul/gangseo',
      'name' => '화곡동',
      'slug' => 'hwagok',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '까치산역',
        1 => '화곡본동시장',
        2 => '화곡로',
      ),
      'area' => '서울 강서구 화곡동',
      'lat' => 37.54472,
      'lng' => 126.8605,
      'url' => '/seoul/gangseo/hwagok/',
      'shops' => 
      array (
        0 => 'hwagok-1',
        1 => 'hwagok-2',
        2 => 'hwagok-3',
        3 => 'hwagok-4',
      ),
      'siblings' => 
      array (
        0 => '등촌동',
        1 => '마곡동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangseo/deungchon',
        1 => 'seoul/gangseo/magok',
      ),
    ),
    'seoul/gangseo/deungchon' => 
    array (
      'key' => 'seoul/gangseo/deungchon',
      'sido' => 'seoul',
      'gu' => 'seoul/gangseo',
      'name' => '등촌동',
      'slug' => 'deungchon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '등촌역',
        1 => '강서체육공원',
        2 => '염창천',
      ),
      'area' => '서울 강서구 등촌동',
      'lat' => 37.55537,
      'lng' => 126.85086,
      'url' => '/seoul/gangseo/deungchon/',
      'shops' => 
      array (
        0 => 'deungchon-1',
        1 => 'deungchon-2',
        2 => 'deungchon-3',
        3 => 'deungchon-4',
      ),
      'siblings' => 
      array (
        0 => '화곡동',
        1 => '마곡동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangseo/hwagok',
        1 => 'seoul/gangseo/magok',
      ),
    ),
    'seoul/gangseo/magok' => 
    array (
      'key' => 'seoul/gangseo/magok',
      'sido' => 'seoul',
      'gu' => 'seoul/gangseo',
      'name' => '마곡동',
      'slug' => 'magok',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '마곡나루역',
        1 => '서울식물원',
        2 => '마곡 업무지구',
      ),
      'area' => '서울 강서구 마곡동',
      'lat' => 37.55418,
      'lng' => 126.8403,
      'url' => '/seoul/gangseo/magok/',
      'shops' => 
      array (
        0 => 'magok-1',
        1 => 'magok-2',
        2 => 'magok-3',
      ),
      'siblings' => 
      array (
        0 => '화곡동',
        1 => '등촌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gangseo/hwagok',
        1 => 'seoul/gangseo/deungchon',
      ),
    ),
    'seoul/gwanak/sillim' => 
    array (
      'key' => 'seoul/gwanak/sillim',
      'sido' => 'seoul',
      'gu' => 'seoul/gwanak',
      'name' => '신림동',
      'slug' => 'sillim',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '신림역',
        1 => '신원시장',
        2 => '도림천',
      ),
      'area' => '서울 관악구 신림동',
      'lat' => 37.49005,
      'lng' => 126.9514,
      'url' => '/seoul/gwanak/sillim/',
      'shops' => 
      array (
        0 => 'sillim-1',
        1 => 'sillim-2',
        2 => 'sillim-3',
        3 => 'sillim-4',
        4 => 'sillim-5',
      ),
      'siblings' => 
      array (
        0 => '봉천동',
        1 => '남현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gwanak/bongcheon',
        1 => 'seoul/gwanak/namhyeon',
      ),
    ),
    'seoul/gwanak/bongcheon' => 
    array (
      'key' => 'seoul/gwanak/bongcheon',
      'sido' => 'seoul',
      'gu' => 'seoul/gwanak',
      'name' => '봉천동',
      'slug' => 'bongcheon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '서울대입구역',
        1 => '낙성대',
        2 => '봉천중앙시장',
      ),
      'area' => '서울 관악구 봉천동',
      'lat' => 37.46697,
      'lng' => 126.95673,
      'url' => '/seoul/gwanak/bongcheon/',
      'shops' => 
      array (
        0 => 'bongcheon-1',
        1 => 'bongcheon-2',
        2 => 'bongcheon-3',
        3 => 'bongcheon-4',
      ),
      'siblings' => 
      array (
        0 => '신림동',
        1 => '남현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gwanak/sillim',
        1 => 'seoul/gwanak/namhyeon',
      ),
    ),
    'seoul/gwanak/namhyeon' => 
    array (
      'key' => 'seoul/gwanak/namhyeon',
      'sido' => 'seoul',
      'gu' => 'seoul/gwanak',
      'name' => '남현동',
      'slug' => 'namhyeon',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '사당역',
        1 => '관악산',
        2 => '남현동 주택가',
      ),
      'area' => '서울 관악구 남현동',
      'lat' => 37.47134,
      'lng' => 126.95856,
      'url' => '/seoul/gwanak/namhyeon/',
      'shops' => 
      array (
        0 => 'namhyeon-1',
        1 => 'namhyeon-2',
      ),
      'siblings' => 
      array (
        0 => '신림동',
        1 => '봉천동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gwanak/sillim',
        1 => 'seoul/gwanak/bongcheon',
      ),
    ),
    'seoul/gwangjin/guui' => 
    array (
      'key' => 'seoul/gwangjin/guui',
      'sido' => 'seoul',
      'gu' => 'seoul/gwangjin',
      'name' => '구의동',
      'slug' => 'guui',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '구의역',
        1 => '동서울터미널',
        2 => '광진구청',
      ),
      'area' => '서울 광진구 구의동',
      'lat' => 37.54539,
      'lng' => 127.07103,
      'url' => '/seoul/gwangjin/guui/',
      'shops' => 
      array (
        0 => 'guui-1',
        1 => 'guui-2',
        2 => 'guui-3',
        3 => 'guui-4',
        4 => 'guui-5',
      ),
      'siblings' => 
      array (
        0 => '자양동',
        1 => '화양동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gwangjin/jayang',
        1 => 'seoul/gwangjin/hwayang',
      ),
    ),
    'seoul/gwangjin/jayang' => 
    array (
      'key' => 'seoul/gwangjin/jayang',
      'sido' => 'seoul',
      'gu' => 'seoul/gwangjin',
      'name' => '자양동',
      'slug' => 'jayang',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '건대입구역',
        1 => '뚝섬한강공원',
        2 => '자양전통시장',
      ),
      'area' => '서울 광진구 자양동',
      'lat' => 37.53841,
      'lng' => 127.08428,
      'url' => '/seoul/gwangjin/jayang/',
      'shops' => 
      array (
        0 => 'jayang-1',
        1 => 'jayang-2',
        2 => 'jayang-3',
        3 => 'jayang-4',
      ),
      'siblings' => 
      array (
        0 => '구의동',
        1 => '화양동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gwangjin/guui',
        1 => 'seoul/gwangjin/hwayang',
      ),
    ),
    'seoul/gwangjin/hwayang' => 
    array (
      'key' => 'seoul/gwangjin/hwayang',
      'sido' => 'seoul',
      'gu' => 'seoul/gwangjin',
      'name' => '화양동',
      'slug' => 'hwayang',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '건국대학교',
        1 => '어린이대공원',
        2 => '화양동 먹자골목',
      ),
      'area' => '서울 광진구 화양동',
      'lat' => 37.54565,
      'lng' => 127.08295,
      'url' => '/seoul/gwangjin/hwayang/',
      'shops' => 
      array (
        0 => 'hwayang-1',
        1 => 'hwayang-2',
        2 => 'hwayang-3',
        3 => 'hwayang-4',
      ),
      'siblings' => 
      array (
        0 => '구의동',
        1 => '자양동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/gwangjin/guui',
        1 => 'seoul/gwangjin/jayang',
      ),
    ),
    'seoul/guro/guro-dong' => 
    array (
      'key' => 'seoul/guro/guro-dong',
      'sido' => 'seoul',
      'gu' => 'seoul/guro',
      'name' => '구로동',
      'slug' => 'guro-dong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '구로디지털단지역',
        1 => '남구로시장',
        2 => '구로역',
      ),
      'area' => '서울 구로구 구로동',
      'lat' => 37.50699,
      'lng' => 126.87577,
      'url' => '/seoul/guro/guro-dong/',
      'shops' => 
      array (
        0 => 'guro-dong-1',
        1 => 'guro-dong-2',
        2 => 'guro-dong-3',
        3 => 'guro-dong-4',
        4 => 'guro-dong-5',
      ),
      'siblings' => 
      array (
        0 => '신도림동',
        1 => '개봉동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/guro/sindorim',
        1 => 'seoul/guro/gaebong',
      ),
    ),
    'seoul/guro/sindorim' => 
    array (
      'key' => 'seoul/guro/sindorim',
      'sido' => 'seoul',
      'gu' => 'seoul/guro',
      'name' => '신도림동',
      'slug' => 'sindorim',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '신도림역',
        1 => '디큐브시티',
        2 => '도림천',
      ),
      'area' => '서울 구로구 신도림동',
      'lat' => 37.5001,
      'lng' => 126.88822,
      'url' => '/seoul/guro/sindorim/',
      'shops' => 
      array (
        0 => 'sindorim-1',
        1 => 'sindorim-2',
        2 => 'sindorim-3',
        3 => 'sindorim-4',
      ),
      'siblings' => 
      array (
        0 => '구로동',
        1 => '개봉동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/guro/guro-dong',
        1 => 'seoul/guro/gaebong',
      ),
    ),
    'seoul/guro/gaebong' => 
    array (
      'key' => 'seoul/guro/gaebong',
      'sido' => 'seoul',
      'gu' => 'seoul/guro',
      'name' => '개봉동',
      'slug' => 'gaebong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '개봉역',
        1 => '개봉중앙시장',
        2 => '안양천',
      ),
      'area' => '서울 구로구 개봉동',
      'lat' => 37.48866,
      'lng' => 126.88479,
      'url' => '/seoul/guro/gaebong/',
      'shops' => 
      array (
        0 => 'gaebong-1',
        1 => 'gaebong-2',
        2 => 'gaebong-3',
        3 => 'gaebong-4',
      ),
      'siblings' => 
      array (
        0 => '구로동',
        1 => '신도림동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/guro/guro-dong',
        1 => 'seoul/guro/sindorim',
      ),
    ),
    'seoul/geumcheon/gasan' => 
    array (
      'key' => 'seoul/geumcheon/gasan',
      'sido' => 'seoul',
      'gu' => 'seoul/geumcheon',
      'name' => '가산동',
      'slug' => 'gasan',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '가산디지털단지역',
        1 => '마리오아울렛',
        2 => '가산 패션타운',
      ),
      'area' => '서울 금천구 가산동',
      'lat' => 37.45076,
      'lng' => 126.88408,
      'url' => '/seoul/geumcheon/gasan/',
      'shops' => 
      array (
        0 => 'gasan-1',
        1 => 'gasan-2',
        2 => 'gasan-3',
        3 => 'gasan-4',
        4 => 'gasan-5',
      ),
      'siblings' => 
      array (
        0 => '독산동',
        1 => '시흥동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/geumcheon/doksan',
        1 => 'seoul/geumcheon/siheung-dong',
      ),
    ),
    'seoul/geumcheon/doksan' => 
    array (
      'key' => 'seoul/geumcheon/doksan',
      'sido' => 'seoul',
      'gu' => 'seoul/geumcheon',
      'name' => '독산동',
      'slug' => 'doksan',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '독산역',
        1 => '독산동 우시장',
        2 => '시흥대로',
      ),
      'area' => '서울 금천구 독산동',
      'lat' => 37.46043,
      'lng' => 126.89132,
      'url' => '/seoul/geumcheon/doksan/',
      'shops' => 
      array (
        0 => 'doksan-1',
        1 => 'doksan-2',
        2 => 'doksan-3',
        3 => 'doksan-4',
      ),
      'siblings' => 
      array (
        0 => '가산동',
        1 => '시흥동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/geumcheon/gasan',
        1 => 'seoul/geumcheon/siheung-dong',
      ),
    ),
    'seoul/geumcheon/siheung-dong' => 
    array (
      'key' => 'seoul/geumcheon/siheung-dong',
      'sido' => 'seoul',
      'gu' => 'seoul/geumcheon',
      'name' => '시흥동',
      'slug' => 'siheung-dong',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '금천구청역',
        1 => '호암산',
        2 => '시흥대로',
      ),
      'area' => '서울 금천구 시흥동',
      'lat' => 37.45115,
      'lng' => 126.90279,
      'url' => '/seoul/geumcheon/siheung-dong/',
      'shops' => 
      array (
        0 => 'siheung-dong-1',
        1 => 'siheung-dong-2',
      ),
      'siblings' => 
      array (
        0 => '가산동',
        1 => '독산동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/geumcheon/gasan',
        1 => 'seoul/geumcheon/doksan',
      ),
    ),
    'seoul/nowon/sanggye' => 
    array (
      'key' => 'seoul/nowon/sanggye',
      'sido' => 'seoul',
      'gu' => 'seoul/nowon',
      'name' => '상계동',
      'slug' => 'sanggye',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '노원역',
        1 => '수락산',
        2 => '상계 백병원',
      ),
      'area' => '서울 노원구 상계동',
      'lat' => 37.6534,
      'lng' => 127.06698,
      'url' => '/seoul/nowon/sanggye/',
      'shops' => 
      array (
        0 => 'sanggye-1',
        1 => 'sanggye-2',
        2 => 'sanggye-3',
        3 => 'sanggye-4',
        4 => 'sanggye-5',
      ),
      'siblings' => 
      array (
        0 => '중계동',
        1 => '공릉동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/nowon/junggye',
        1 => 'seoul/nowon/gongneung',
      ),
    ),
    'seoul/nowon/junggye' => 
    array (
      'key' => 'seoul/nowon/junggye',
      'sido' => 'seoul',
      'gu' => 'seoul/nowon',
      'name' => '중계동',
      'slug' => 'junggye',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '중계역',
        1 => '은행사거리 학원가',
        2 => '등나무근린공원',
      ),
      'area' => '서울 노원구 중계동',
      'lat' => 37.65436,
      'lng' => 127.06258,
      'url' => '/seoul/nowon/junggye/',
      'shops' => 
      array (
        0 => 'junggye-1',
        1 => 'junggye-2',
        2 => 'junggye-3',
        3 => 'junggye-4',
        4 => 'junggye-5',
      ),
      'siblings' => 
      array (
        0 => '상계동',
        1 => '공릉동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/nowon/sanggye',
        1 => 'seoul/nowon/gongneung',
      ),
    ),
    'seoul/nowon/gongneung' => 
    array (
      'key' => 'seoul/nowon/gongneung',
      'sido' => 'seoul',
      'gu' => 'seoul/nowon',
      'name' => '공릉동',
      'slug' => 'gongneung',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '공릉역',
        1 => '서울과학기술대학교',
        2 => '경춘선숲길',
      ),
      'area' => '서울 노원구 공릉동',
      'lat' => 37.65075,
      'lng' => 127.06615,
      'url' => '/seoul/nowon/gongneung/',
      'shops' => 
      array (
        0 => 'gongneung-1',
        1 => 'gongneung-2',
        2 => 'gongneung-3',
      ),
      'siblings' => 
      array (
        0 => '상계동',
        1 => '중계동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/nowon/sanggye',
        1 => 'seoul/nowon/junggye',
      ),
    ),
    'seoul/dobong/chang' => 
    array (
      'key' => 'seoul/dobong/chang',
      'sido' => 'seoul',
      'gu' => 'seoul/dobong',
      'name' => '창동',
      'slug' => 'chang',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '창동역',
        1 => '창동 역세권',
        2 => '중랑천',
      ),
      'area' => '서울 도봉구 창동',
      'lat' => 37.66074,
      'lng' => 127.04849,
      'url' => '/seoul/dobong/chang/',
      'shops' => 
      array (
        0 => 'chang-1',
        1 => 'chang-2',
        2 => 'chang-3',
        3 => 'chang-4',
      ),
      'siblings' => 
      array (
        0 => '방학동',
        1 => '도봉동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dobong/banghak',
        1 => 'seoul/dobong/dobong-dong',
      ),
    ),
    'seoul/dobong/banghak' => 
    array (
      'key' => 'seoul/dobong/banghak',
      'sido' => 'seoul',
      'gu' => 'seoul/dobong',
      'name' => '방학동',
      'slug' => 'banghak',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '방학역',
        1 => '방학동 신동아',
        2 => '도봉산 둘레길',
      ),
      'area' => '서울 도봉구 방학동',
      'lat' => 37.67437,
      'lng' => 127.03755,
      'url' => '/seoul/dobong/banghak/',
      'shops' => 
      array (
        0 => 'banghak-1',
        1 => 'banghak-2',
        2 => 'banghak-3',
        3 => 'banghak-4',
      ),
      'siblings' => 
      array (
        0 => '창동',
        1 => '도봉동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dobong/chang',
        1 => 'seoul/dobong/dobong-dong',
      ),
    ),
    'seoul/dobong/dobong-dong' => 
    array (
      'key' => 'seoul/dobong/dobong-dong',
      'sido' => 'seoul',
      'gu' => 'seoul/dobong',
      'name' => '도봉동',
      'slug' => 'dobong-dong',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '도봉산역',
        1 => '도봉산',
        2 => '서울창포원',
      ),
      'area' => '서울 도봉구 도봉동',
      'lat' => 37.67119,
      'lng' => 127.04816,
      'url' => '/seoul/dobong/dobong-dong/',
      'shops' => 
      array (
        0 => 'dobong-dong-1',
        1 => 'dobong-dong-2',
        2 => 'dobong-dong-3',
      ),
      'siblings' => 
      array (
        0 => '창동',
        1 => '방학동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dobong/chang',
        1 => 'seoul/dobong/banghak',
      ),
    ),
    'seoul/dongdaemun/jangan' => 
    array (
      'key' => 'seoul/dongdaemun/jangan',
      'sido' => 'seoul',
      'gu' => 'seoul/dongdaemun',
      'name' => '장안동',
      'slug' => 'jangan',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '장한평역',
        1 => '장안동 먹자골목',
        2 => '장안평 중고차시장',
      ),
      'area' => '서울 동대문구 장안동',
      'lat' => 37.58474,
      'lng' => 127.03633,
      'url' => '/seoul/dongdaemun/jangan/',
      'shops' => 
      array (
        0 => 'jangan-1',
        1 => 'jangan-2',
        2 => 'jangan-3',
        3 => 'jangan-4',
      ),
      'siblings' => 
      array (
        0 => '답십리동',
        1 => '회기동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dongdaemun/dapsimni',
        1 => 'seoul/dongdaemun/hoegi',
      ),
    ),
    'seoul/dongdaemun/dapsimni' => 
    array (
      'key' => 'seoul/dongdaemun/dapsimni',
      'sido' => 'seoul',
      'gu' => 'seoul/dongdaemun',
      'name' => '답십리동',
      'slug' => 'dapsimni',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '답십리역',
        1 => '답십리 고미술상가',
        2 => '청계천',
      ),
      'area' => '서울 동대문구 답십리동',
      'lat' => 37.56648,
      'lng' => 127.03722,
      'url' => '/seoul/dongdaemun/dapsimni/',
      'shops' => 
      array (
        0 => 'dapsimni-1',
        1 => 'dapsimni-2',
        2 => 'dapsimni-3',
        3 => 'dapsimni-4',
      ),
      'siblings' => 
      array (
        0 => '장안동',
        1 => '회기동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dongdaemun/jangan',
        1 => 'seoul/dongdaemun/hoegi',
      ),
    ),
    'seoul/dongdaemun/hoegi' => 
    array (
      'key' => 'seoul/dongdaemun/hoegi',
      'sido' => 'seoul',
      'gu' => 'seoul/dongdaemun',
      'name' => '회기동',
      'slug' => 'hoegi',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '회기역',
        1 => '경희대학교',
        2 => '회기동 먹거리골목',
      ),
      'area' => '서울 동대문구 회기동',
      'lat' => 37.57209,
      'lng' => 127.04824,
      'url' => '/seoul/dongdaemun/hoegi/',
      'shops' => 
      array (
        0 => 'hoegi-1',
        1 => 'hoegi-2',
        2 => 'hoegi-3',
        3 => 'hoegi-4',
      ),
      'siblings' => 
      array (
        0 => '장안동',
        1 => '답십리동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dongdaemun/jangan',
        1 => 'seoul/dongdaemun/dapsimni',
      ),
    ),
    'seoul/dongjak/sadang' => 
    array (
      'key' => 'seoul/dongjak/sadang',
      'sido' => 'seoul',
      'gu' => 'seoul/dongjak',
      'name' => '사당동',
      'slug' => 'sadang',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '사당역',
        1 => '남성사계시장',
        2 => '관악산 입구',
      ),
      'area' => '서울 동작구 사당동',
      'lat' => 37.50043,
      'lng' => 126.9348,
      'url' => '/seoul/dongjak/sadang/',
      'shops' => 
      array (
        0 => 'sadang-1',
        1 => 'sadang-2',
        2 => 'sadang-3',
        3 => 'sadang-4',
      ),
      'siblings' => 
      array (
        0 => '상도동',
        1 => '노량진동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dongjak/sangdo',
        1 => 'seoul/dongjak/noryangjin',
      ),
    ),
    'seoul/dongjak/sangdo' => 
    array (
      'key' => 'seoul/dongjak/sangdo',
      'sido' => 'seoul',
      'gu' => 'seoul/dongjak',
      'name' => '상도동',
      'slug' => 'sangdo',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '상도역',
        1 => '숭실대학교',
        2 => '국사봉',
      ),
      'area' => '서울 동작구 상도동',
      'lat' => 37.5013,
      'lng' => 126.94689,
      'url' => '/seoul/dongjak/sangdo/',
      'shops' => 
      array (
        0 => 'sangdo-1',
        1 => 'sangdo-2',
        2 => 'sangdo-3',
        3 => 'sangdo-4',
        4 => 'sangdo-5',
      ),
      'siblings' => 
      array (
        0 => '사당동',
        1 => '노량진동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dongjak/sadang',
        1 => 'seoul/dongjak/noryangjin',
      ),
    ),
    'seoul/dongjak/noryangjin' => 
    array (
      'key' => 'seoul/dongjak/noryangjin',
      'sido' => 'seoul',
      'gu' => 'seoul/dongjak',
      'name' => '노량진동',
      'slug' => 'noryangjin',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '노량진역',
        1 => '노량진수산시장',
        2 => '노량진 학원가',
      ),
      'area' => '서울 동작구 노량진동',
      'lat' => 37.5178,
      'lng' => 126.93259,
      'url' => '/seoul/dongjak/noryangjin/',
      'shops' => 
      array (
        0 => 'noryangjin-1',
        1 => 'noryangjin-2',
        2 => 'noryangjin-3',
        3 => 'noryangjin-4',
      ),
      'siblings' => 
      array (
        0 => '사당동',
        1 => '상도동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/dongjak/sadang',
        1 => 'seoul/dongjak/sangdo',
      ),
    ),
    'seoul/mapo/hapjeong' => 
    array (
      'key' => 'seoul/mapo/hapjeong',
      'sido' => 'seoul',
      'gu' => 'seoul/mapo',
      'name' => '합정동',
      'slug' => 'hapjeong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '합정역',
        1 => '메세나폴리스',
        2 => '양화진',
      ),
      'area' => '서울 마포구 합정동',
      'lat' => 37.57299,
      'lng' => 126.90053,
      'url' => '/seoul/mapo/hapjeong/',
      'shops' => 
      array (
        0 => 'hapjeong-1',
        1 => 'hapjeong-2',
        2 => 'hapjeong-3',
        3 => 'hapjeong-4',
      ),
      'siblings' => 
      array (
        0 => '연남동',
        1 => '공덕동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/mapo/yeonnam',
        1 => 'seoul/mapo/gongdeok',
      ),
    ),
    'seoul/mapo/yeonnam' => 
    array (
      'key' => 'seoul/mapo/yeonnam',
      'sido' => 'seoul',
      'gu' => 'seoul/mapo',
      'name' => '연남동',
      'slug' => 'yeonnam',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '홍대입구역',
        1 => '경의선숲길',
        2 => '연남동 카페거리',
      ),
      'area' => '서울 마포구 연남동',
      'lat' => 37.57791,
      'lng' => 126.91239,
      'url' => '/seoul/mapo/yeonnam/',
      'shops' => 
      array (
        0 => 'yeonnam-1',
        1 => 'yeonnam-2',
        2 => 'yeonnam-3',
        3 => 'yeonnam-4',
        4 => 'yeonnam-5',
      ),
      'siblings' => 
      array (
        0 => '합정동',
        1 => '공덕동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/mapo/hapjeong',
        1 => 'seoul/mapo/gongdeok',
      ),
    ),
    'seoul/mapo/gongdeok' => 
    array (
      'key' => 'seoul/mapo/gongdeok',
      'sido' => 'seoul',
      'gu' => 'seoul/mapo',
      'name' => '공덕동',
      'slug' => 'gongdeok',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '공덕역',
        1 => '마포역',
        2 => '아현 재정비촉진지구',
      ),
      'area' => '서울 마포구 공덕동',
      'lat' => 37.56536,
      'lng' => 126.90154,
      'url' => '/seoul/mapo/gongdeok/',
      'shops' => 
      array (
        0 => 'gongdeok-1',
        1 => 'gongdeok-2',
        2 => 'gongdeok-3',
        3 => 'gongdeok-4',
        4 => 'gongdeok-5',
      ),
      'siblings' => 
      array (
        0 => '합정동',
        1 => '연남동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/mapo/hapjeong',
        1 => 'seoul/mapo/yeonnam',
      ),
    ),
    'seoul/seodaemun/sinchon' => 
    array (
      'key' => 'seoul/seodaemun/sinchon',
      'sido' => 'seoul',
      'gu' => 'seoul/seodaemun',
      'name' => '신촌동',
      'slug' => 'sinchon',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '신촌역',
        1 => '연세대학교',
        2 => '이화여자대학교',
      ),
      'area' => '서울 서대문구 신촌동',
      'lat' => 37.57361,
      'lng' => 126.94856,
      'url' => '/seoul/seodaemun/sinchon/',
      'shops' => 
      array (
        0 => 'sinchon-1',
        1 => 'sinchon-2',
        2 => 'sinchon-3',
        3 => 'sinchon-4',
      ),
      'siblings' => 
      array (
        0 => '홍제동',
        1 => '남가좌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seodaemun/hongje',
        1 => 'seoul/seodaemun/namgajwa',
      ),
    ),
    'seoul/seodaemun/hongje' => 
    array (
      'key' => 'seoul/seodaemun/hongje',
      'sido' => 'seoul',
      'gu' => 'seoul/seodaemun',
      'name' => '홍제동',
      'slug' => 'hongje',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '홍제역',
        1 => '홍제천',
        2 => '인왕산 자락길',
      ),
      'area' => '서울 서대문구 홍제동',
      'lat' => 37.57312,
      'lng' => 126.94389,
      'url' => '/seoul/seodaemun/hongje/',
      'shops' => 
      array (
        0 => 'hongje-1',
        1 => 'hongje-2',
        2 => 'hongje-3',
        3 => 'hongje-4',
        4 => 'hongje-5',
      ),
      'siblings' => 
      array (
        0 => '신촌동',
        1 => '남가좌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seodaemun/sinchon',
        1 => 'seoul/seodaemun/namgajwa',
      ),
    ),
    'seoul/seodaemun/namgajwa' => 
    array (
      'key' => 'seoul/seodaemun/namgajwa',
      'sido' => 'seoul',
      'gu' => 'seoul/seodaemun',
      'name' => '남가좌동',
      'slug' => 'namgajwa',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '가재울뉴타운',
        1 => '모래내시장',
        2 => '디지털미디어시티역',
      ),
      'area' => '서울 서대문구 남가좌동',
      'lat' => 37.58918,
      'lng' => 126.94335,
      'url' => '/seoul/seodaemun/namgajwa/',
      'shops' => 
      array (
        0 => 'namgajwa-1',
        1 => 'namgajwa-2',
        2 => 'namgajwa-3',
        3 => 'namgajwa-4',
        4 => 'namgajwa-5',
      ),
      'siblings' => 
      array (
        0 => '신촌동',
        1 => '홍제동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seodaemun/sinchon',
        1 => 'seoul/seodaemun/hongje',
      ),
    ),
    'seoul/seocho/seocho-dong' => 
    array (
      'key' => 'seoul/seocho/seocho-dong',
      'sido' => 'seoul',
      'gu' => 'seoul/seocho',
      'name' => '서초동',
      'slug' => 'seocho-dong',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '교대역',
        1 => '예술의전당',
        2 => '서울중앙지방법원',
      ),
      'area' => '서울 서초구 서초동',
      'lat' => 37.48074,
      'lng' => 127.03146,
      'url' => '/seoul/seocho/seocho-dong/',
      'shops' => 
      array (
        0 => 'seocho-dong-1',
        1 => 'seocho-dong-2',
        2 => 'seocho-dong-3',
        3 => 'seocho-dong-4',
      ),
      'siblings' => 
      array (
        0 => '반포동',
        1 => '방배동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seocho/banpo',
        1 => 'seoul/seocho/bangbae',
      ),
    ),
    'seoul/seocho/banpo' => 
    array (
      'key' => 'seoul/seocho/banpo',
      'sido' => 'seoul',
      'gu' => 'seoul/seocho',
      'name' => '반포동',
      'slug' => 'banpo',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '고속터미널역',
        1 => '반포한강공원',
        2 => '세빛섬',
      ),
      'area' => '서울 서초구 반포동',
      'lat' => 37.48959,
      'lng' => 127.03494,
      'url' => '/seoul/seocho/banpo/',
      'shops' => 
      array (
        0 => 'banpo-1',
        1 => 'banpo-2',
        2 => 'banpo-3',
        3 => 'banpo-4',
        4 => 'banpo-5',
      ),
      'siblings' => 
      array (
        0 => '서초동',
        1 => '방배동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seocho/seocho-dong',
        1 => 'seoul/seocho/bangbae',
      ),
    ),
    'seoul/seocho/bangbae' => 
    array (
      'key' => 'seoul/seocho/bangbae',
      'sido' => 'seoul',
      'gu' => 'seoul/seocho',
      'name' => '방배동',
      'slug' => 'bangbae',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '방배역',
        1 => '방배 카페골목',
        2 => '서리풀공원',
      ),
      'area' => '서울 서초구 방배동',
      'lat' => 37.48974,
      'lng' => 127.03579,
      'url' => '/seoul/seocho/bangbae/',
      'shops' => 
      array (
        0 => 'bangbae-1',
        1 => 'bangbae-2',
      ),
      'siblings' => 
      array (
        0 => '서초동',
        1 => '반포동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seocho/seocho-dong',
        1 => 'seoul/seocho/banpo',
      ),
    ),
    'seoul/seongdong/seongsu' => 
    array (
      'key' => 'seoul/seongdong/seongsu',
      'sido' => 'seoul',
      'gu' => 'seoul/seongdong',
      'name' => '성수동',
      'slug' => 'seongsu',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '성수역',
        1 => '서울숲',
        2 => '뚝섬역',
      ),
      'area' => '서울 성동구 성수동',
      'lat' => 37.55997,
      'lng' => 127.03182,
      'url' => '/seoul/seongdong/seongsu/',
      'shops' => 
      array (
        0 => 'seongsu-1',
        1 => 'seongsu-2',
        2 => 'seongsu-3',
        3 => 'seongsu-4',
        4 => 'seongsu-5',
      ),
      'siblings' => 
      array (
        0 => '행당동',
        1 => '금호동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seongdong/haengdang',
        1 => 'seoul/seongdong/geumho',
      ),
    ),
    'seoul/seongdong/haengdang' => 
    array (
      'key' => 'seoul/seongdong/haengdang',
      'sido' => 'seoul',
      'gu' => 'seoul/seongdong',
      'name' => '행당동',
      'slug' => 'haengdang',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '왕십리역',
        1 => '행당동 아파트 단지',
        2 => '살곶이공원',
      ),
      'area' => '서울 성동구 행당동',
      'lat' => 37.57137,
      'lng' => 127.03505,
      'url' => '/seoul/seongdong/haengdang/',
      'shops' => 
      array (
        0 => 'haengdang-1',
        1 => 'haengdang-2',
        2 => 'haengdang-3',
        3 => 'haengdang-4',
        4 => 'haengdang-5',
      ),
      'siblings' => 
      array (
        0 => '성수동',
        1 => '금호동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seongdong/seongsu',
        1 => 'seoul/seongdong/geumho',
      ),
    ),
    'seoul/seongdong/geumho' => 
    array (
      'key' => 'seoul/seongdong/geumho',
      'sido' => 'seoul',
      'gu' => 'seoul/seongdong',
      'name' => '금호동',
      'slug' => 'geumho',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '금호역',
        1 => '매봉산',
        2 => '응봉산',
      ),
      'area' => '서울 성동구 금호동',
      'lat' => 37.56945,
      'lng' => 127.03659,
      'url' => '/seoul/seongdong/geumho/',
      'shops' => 
      array (
        0 => 'geumho-1',
        1 => 'geumho-2',
        2 => 'geumho-3',
        3 => 'geumho-4',
        4 => 'geumho-5',
      ),
      'siblings' => 
      array (
        0 => '성수동',
        1 => '행당동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seongdong/seongsu',
        1 => 'seoul/seongdong/haengdang',
      ),
    ),
    'seoul/seongbuk/gireum' => 
    array (
      'key' => 'seoul/seongbuk/gireum',
      'sido' => 'seoul',
      'gu' => 'seoul/seongbuk',
      'name' => '길음동',
      'slug' => 'gireum',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '길음역',
        1 => '길음뉴타운',
        2 => '정릉천',
      ),
      'area' => '서울 성북구 길음동',
      'lat' => 37.59984,
      'lng' => 127.02272,
      'url' => '/seoul/seongbuk/gireum/',
      'shops' => 
      array (
        0 => 'gireum-1',
        1 => 'gireum-2',
        2 => 'gireum-3',
        3 => 'gireum-4',
      ),
      'siblings' => 
      array (
        0 => '장위동',
        1 => '종암동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seongbuk/jangwi',
        1 => 'seoul/seongbuk/jongam',
      ),
    ),
    'seoul/seongbuk/jangwi' => 
    array (
      'key' => 'seoul/seongbuk/jangwi',
      'sido' => 'seoul',
      'gu' => 'seoul/seongbuk',
      'name' => '장위동',
      'slug' => 'jangwi',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '돌곶이역',
        1 => '장위뉴타운',
        2 => '장위전통시장',
      ),
      'area' => '서울 성북구 장위동',
      'lat' => 37.59843,
      'lng' => 127.01474,
      'url' => '/seoul/seongbuk/jangwi/',
      'shops' => 
      array (
        0 => 'jangwi-1',
        1 => 'jangwi-2',
        2 => 'jangwi-3',
        3 => 'jangwi-4',
      ),
      'siblings' => 
      array (
        0 => '길음동',
        1 => '종암동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seongbuk/gireum',
        1 => 'seoul/seongbuk/jongam',
      ),
    ),
    'seoul/seongbuk/jongam' => 
    array (
      'key' => 'seoul/seongbuk/jongam',
      'sido' => 'seoul',
      'gu' => 'seoul/seongbuk',
      'name' => '종암동',
      'slug' => 'jongam',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '고려대역',
        1 => '개운산',
        2 => '북서울꿈의숲',
      ),
      'area' => '서울 성북구 종암동',
      'lat' => 37.5908,
      'lng' => 127.02778,
      'url' => '/seoul/seongbuk/jongam/',
      'shops' => 
      array (
        0 => 'jongam-1',
        1 => 'jongam-2',
        2 => 'jongam-3',
        3 => 'jongam-4',
      ),
      'siblings' => 
      array (
        0 => '길음동',
        1 => '장위동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/seongbuk/gireum',
        1 => 'seoul/seongbuk/jangwi',
      ),
    ),
    'seoul/songpa/jamsil' => 
    array (
      'key' => 'seoul/songpa/jamsil',
      'sido' => 'seoul',
      'gu' => 'seoul/songpa',
      'name' => '잠실동',
      'slug' => 'jamsil',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '잠실역',
        1 => '롯데월드타워',
        2 => '석촌호수',
      ),
      'area' => '서울 송파구 잠실동',
      'lat' => 37.51247,
      'lng' => 127.10311,
      'url' => '/seoul/songpa/jamsil/',
      'shops' => 
      array (
        0 => 'jamsil-1',
        1 => 'jamsil-2',
        2 => 'jamsil-3',
        3 => 'jamsil-4',
      ),
      'siblings' => 
      array (
        0 => '가락동',
        1 => '문정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/songpa/garak',
        1 => 'seoul/songpa/munjeong',
      ),
    ),
    'seoul/songpa/garak' => 
    array (
      'key' => 'seoul/songpa/garak',
      'sido' => 'seoul',
      'gu' => 'seoul/songpa',
      'name' => '가락동',
      'slug' => 'garak',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '가락시장역',
        1 => '가락농수산물종합도매시장',
        2 => '송파구청',
      ),
      'area' => '서울 송파구 가락동',
      'lat' => 37.50445,
      'lng' => 127.1129,
      'url' => '/seoul/songpa/garak/',
      'shops' => 
      array (
        0 => 'garak-1',
        1 => 'garak-2',
        2 => 'garak-3',
      ),
      'siblings' => 
      array (
        0 => '잠실동',
        1 => '문정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/songpa/jamsil',
        1 => 'seoul/songpa/munjeong',
      ),
    ),
    'seoul/songpa/munjeong' => 
    array (
      'key' => 'seoul/songpa/munjeong',
      'sido' => 'seoul',
      'gu' => 'seoul/songpa',
      'name' => '문정동',
      'slug' => 'munjeong',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '문정역',
        1 => '문정 법조타운',
        2 => '가든파이브',
      ),
      'area' => '서울 송파구 문정동',
      'lat' => 37.52139,
      'lng' => 127.10828,
      'url' => '/seoul/songpa/munjeong/',
      'shops' => 
      array (
        0 => 'munjeong-1',
        1 => 'munjeong-2',
        2 => 'munjeong-3',
        3 => 'munjeong-4',
        4 => 'munjeong-5',
      ),
      'siblings' => 
      array (
        0 => '잠실동',
        1 => '가락동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/songpa/jamsil',
        1 => 'seoul/songpa/garak',
      ),
    ),
    'seoul/yangcheon/mok' => 
    array (
      'key' => 'seoul/yangcheon/mok',
      'sido' => 'seoul',
      'gu' => 'seoul/yangcheon',
      'name' => '목동',
      'slug' => 'mok',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '오목교역',
        1 => '목동운동장',
        2 => '목동 학원가',
      ),
      'area' => '서울 양천구 목동',
      'lat' => 37.50749,
      'lng' => 126.87096,
      'url' => '/seoul/yangcheon/mok/',
      'shops' => 
      array (
        0 => 'mok-1',
        1 => 'mok-2',
        2 => 'mok-3',
        3 => 'mok-4',
        4 => 'mok-5',
      ),
      'siblings' => 
      array (
        0 => '신정동',
        1 => '신월동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yangcheon/sinjeong',
        1 => 'seoul/yangcheon/sinwol',
      ),
    ),
    'seoul/yangcheon/sinjeong' => 
    array (
      'key' => 'seoul/yangcheon/sinjeong',
      'sido' => 'seoul',
      'gu' => 'seoul/yangcheon',
      'name' => '신정동',
      'slug' => 'sinjeong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '신정역',
        1 => '양천구청',
        2 => '계남근린공원',
      ),
      'area' => '서울 양천구 신정동',
      'lat' => 37.51691,
      'lng' => 126.86426,
      'url' => '/seoul/yangcheon/sinjeong/',
      'shops' => 
      array (
        0 => 'sinjeong-1',
        1 => 'sinjeong-2',
        2 => 'sinjeong-3',
        3 => 'sinjeong-4',
        4 => 'sinjeong-5',
      ),
      'siblings' => 
      array (
        0 => '목동',
        1 => '신월동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yangcheon/mok',
        1 => 'seoul/yangcheon/sinwol',
      ),
    ),
    'seoul/yangcheon/sinwol' => 
    array (
      'key' => 'seoul/yangcheon/sinwol',
      'sido' => 'seoul',
      'gu' => 'seoul/yangcheon',
      'name' => '신월동',
      'slug' => 'sinwol',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '신정네거리역',
        1 => '서서울호수공원',
        2 => '화곡로',
      ),
      'area' => '서울 양천구 신월동',
      'lat' => 37.52583,
      'lng' => 126.86584,
      'url' => '/seoul/yangcheon/sinwol/',
      'shops' => 
      array (
        0 => 'sinwol-1',
        1 => 'sinwol-2',
      ),
      'siblings' => 
      array (
        0 => '목동',
        1 => '신정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yangcheon/mok',
        1 => 'seoul/yangcheon/sinjeong',
      ),
    ),
    'seoul/yeongdeungpo/yeoui' => 
    array (
      'key' => 'seoul/yeongdeungpo/yeoui',
      'sido' => 'seoul',
      'gu' => 'seoul/yeongdeungpo',
      'name' => '여의동',
      'slug' => 'yeoui',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '여의도역',
        1 => '여의도공원',
        2 => 'IFC몰',
      ),
      'area' => '서울 영등포구 여의동',
      'lat' => 37.51641,
      'lng' => 126.90647,
      'url' => '/seoul/yeongdeungpo/yeoui/',
      'shops' => 
      array (
        0 => 'yeoui-1',
        1 => 'yeoui-2',
        2 => 'yeoui-3',
        3 => 'yeoui-4',
        4 => 'yeoui-5',
      ),
      'siblings' => 
      array (
        0 => '당산동',
        1 => '대림동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yeongdeungpo/dangsan',
        1 => 'seoul/yeongdeungpo/daerim',
      ),
    ),
    'seoul/yeongdeungpo/dangsan' => 
    array (
      'key' => 'seoul/yeongdeungpo/dangsan',
      'sido' => 'seoul',
      'gu' => 'seoul/yeongdeungpo',
      'name' => '당산동',
      'slug' => 'dangsan',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '당산역',
        1 => '영등포구청역',
        2 => '선유도공원',
      ),
      'area' => '서울 영등포구 당산동',
      'lat' => 37.53692,
      'lng' => 126.88633,
      'url' => '/seoul/yeongdeungpo/dangsan/',
      'shops' => 
      array (
        0 => 'dangsan-1',
        1 => 'dangsan-2',
        2 => 'dangsan-3',
        3 => 'dangsan-4',
      ),
      'siblings' => 
      array (
        0 => '여의동',
        1 => '대림동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yeongdeungpo/yeoui',
        1 => 'seoul/yeongdeungpo/daerim',
      ),
    ),
    'seoul/yeongdeungpo/daerim' => 
    array (
      'key' => 'seoul/yeongdeungpo/daerim',
      'sido' => 'seoul',
      'gu' => 'seoul/yeongdeungpo',
      'name' => '대림동',
      'slug' => 'daerim',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '대림역',
        1 => '대림중앙시장',
        2 => '도림천',
      ),
      'area' => '서울 영등포구 대림동',
      'lat' => 37.51979,
      'lng' => 126.89131,
      'url' => '/seoul/yeongdeungpo/daerim/',
      'shops' => 
      array (
        0 => 'daerim-1',
        1 => 'daerim-2',
        2 => 'daerim-3',
        3 => 'daerim-4',
      ),
      'siblings' => 
      array (
        0 => '여의동',
        1 => '당산동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yeongdeungpo/yeoui',
        1 => 'seoul/yeongdeungpo/dangsan',
      ),
    ),
    'seoul/yongsan/itaewon' => 
    array (
      'key' => 'seoul/yongsan/itaewon',
      'sido' => 'seoul',
      'gu' => 'seoul/yongsan',
      'name' => '이태원동',
      'slug' => 'itaewon',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '이태원역',
        1 => '경리단길',
        2 => '남산 둘레길',
      ),
      'area' => '서울 용산구 이태원동',
      'lat' => 37.52544,
      'lng' => 126.9996,
      'url' => '/seoul/yongsan/itaewon/',
      'shops' => 
      array (
        0 => 'itaewon-1',
        1 => 'itaewon-2',
      ),
      'siblings' => 
      array (
        0 => '한남동',
        1 => '효창동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yongsan/hannam',
        1 => 'seoul/yongsan/hyochang',
      ),
    ),
    'seoul/yongsan/hannam' => 
    array (
      'key' => 'seoul/yongsan/hannam',
      'sido' => 'seoul',
      'gu' => 'seoul/yongsan',
      'name' => '한남동',
      'slug' => 'hannam',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '한강진역',
        1 => '리움미술관',
        2 => '한남대로',
      ),
      'area' => '서울 용산구 한남동',
      'lat' => 37.53276,
      'lng' => 126.99481,
      'url' => '/seoul/yongsan/hannam/',
      'shops' => 
      array (
        0 => 'hannam-1',
        1 => 'hannam-2',
        2 => 'hannam-3',
      ),
      'siblings' => 
      array (
        0 => '이태원동',
        1 => '효창동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yongsan/itaewon',
        1 => 'seoul/yongsan/hyochang',
      ),
    ),
    'seoul/yongsan/hyochang' => 
    array (
      'key' => 'seoul/yongsan/hyochang',
      'sido' => 'seoul',
      'gu' => 'seoul/yongsan',
      'name' => '효창동',
      'slug' => 'hyochang',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '효창공원앞역',
        1 => '효창공원',
        2 => '숙명여자대학교',
      ),
      'area' => '서울 용산구 효창동',
      'lat' => 37.53513,
      'lng' => 126.99301,
      'url' => '/seoul/yongsan/hyochang/',
      'shops' => 
      array (
        0 => 'hyochang-1',
        1 => 'hyochang-2',
        2 => 'hyochang-3',
      ),
      'siblings' => 
      array (
        0 => '이태원동',
        1 => '한남동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/yongsan/itaewon',
        1 => 'seoul/yongsan/hannam',
      ),
    ),
    'seoul/eunpyeong/eungam' => 
    array (
      'key' => 'seoul/eunpyeong/eungam',
      'sido' => 'seoul',
      'gu' => 'seoul/eunpyeong',
      'name' => '응암동',
      'slug' => 'eungam',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '응암역',
        1 => '대조시장',
        2 => '불광천',
      ),
      'area' => '서울 은평구 응암동',
      'lat' => 37.60218,
      'lng' => 126.93708,
      'url' => '/seoul/eunpyeong/eungam/',
      'shops' => 
      array (
        0 => 'eungam-1',
        1 => 'eungam-2',
        2 => 'eungam-3',
        3 => 'eungam-4',
      ),
      'siblings' => 
      array (
        0 => '불광동',
        1 => '수색동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/eunpyeong/bulgwang',
        1 => 'seoul/eunpyeong/susaek',
      ),
    ),
    'seoul/eunpyeong/bulgwang' => 
    array (
      'key' => 'seoul/eunpyeong/bulgwang',
      'sido' => 'seoul',
      'gu' => 'seoul/eunpyeong',
      'name' => '불광동',
      'slug' => 'bulgwang',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '불광역',
        1 => '북한산 입구',
        2 => '서울혁신파크',
      ),
      'area' => '서울 은평구 불광동',
      'lat' => 37.61127,
      'lng' => 126.92295,
      'url' => '/seoul/eunpyeong/bulgwang/',
      'shops' => 
      array (
        0 => 'bulgwang-1',
        1 => 'bulgwang-2',
        2 => 'bulgwang-3',
        3 => 'bulgwang-4',
        4 => 'bulgwang-5',
      ),
      'siblings' => 
      array (
        0 => '응암동',
        1 => '수색동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/eunpyeong/eungam',
        1 => 'seoul/eunpyeong/susaek',
      ),
    ),
    'seoul/eunpyeong/susaek' => 
    array (
      'key' => 'seoul/eunpyeong/susaek',
      'sido' => 'seoul',
      'gu' => 'seoul/eunpyeong',
      'name' => '수색동',
      'slug' => 'susaek',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '수색역',
        1 => '디지털미디어시티역',
        2 => '상암 DMC',
      ),
      'area' => '서울 은평구 수색동',
      'lat' => 37.59303,
      'lng' => 126.92999,
      'url' => '/seoul/eunpyeong/susaek/',
      'shops' => 
      array (
        0 => 'susaek-1',
        1 => 'susaek-2',
        2 => 'susaek-3',
        3 => 'susaek-4',
      ),
      'siblings' => 
      array (
        0 => '응암동',
        1 => '불광동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/eunpyeong/eungam',
        1 => 'seoul/eunpyeong/bulgwang',
      ),
    ),
    'seoul/jongno/jongno-ga' => 
    array (
      'key' => 'seoul/jongno/jongno-ga',
      'sido' => 'seoul',
      'gu' => 'seoul/jongno',
      'name' => '종로1·2·3·4가동',
      'slug' => 'jongno-ga',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '종각역',
        1 => '광화문',
        2 => '청계천',
      ),
      'area' => '서울 종로구 종로1·2·3·4가동',
      'lat' => 37.58305,
      'lng' => 126.97313,
      'url' => '/seoul/jongno/jongno-ga/',
      'shops' => 
      array (
        0 => 'jongno-ga-1',
        1 => 'jongno-ga-2',
        2 => 'jongno-ga-3',
        3 => 'jongno-ga-4',
        4 => 'jongno-ga-5',
      ),
      'siblings' => 
      array (
        0 => '사직동',
        1 => '평창동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/jongno/sajik',
        1 => 'seoul/jongno/pyeongchang',
      ),
    ),
    'seoul/jongno/sajik' => 
    array (
      'key' => 'seoul/jongno/sajik',
      'sido' => 'seoul',
      'gu' => 'seoul/jongno',
      'name' => '사직동',
      'slug' => 'sajik',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '경복궁역',
        1 => '사직공원',
        2 => '서울역사박물관',
      ),
      'area' => '서울 종로구 사직동',
      'lat' => 37.57084,
      'lng' => 126.98997,
      'url' => '/seoul/jongno/sajik/',
      'shops' => 
      array (
        0 => 'sajik-1',
        1 => 'sajik-2',
        2 => 'sajik-3',
      ),
      'siblings' => 
      array (
        0 => '종로1·2·3·4가동',
        1 => '평창동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/jongno/jongno-ga',
        1 => 'seoul/jongno/pyeongchang',
      ),
    ),
    'seoul/jongno/pyeongchang' => 
    array (
      'key' => 'seoul/jongno/pyeongchang',
      'sido' => 'seoul',
      'gu' => 'seoul/jongno',
      'name' => '평창동',
      'slug' => 'pyeongchang',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '북한산 자락',
        1 => '평창동 주택가',
        2 => '세검정',
      ),
      'area' => '서울 종로구 평창동',
      'lat' => 37.56751,
      'lng' => 126.97391,
      'url' => '/seoul/jongno/pyeongchang/',
      'shops' => 
      array (
        0 => 'pyeongchang-1',
        1 => 'pyeongchang-2',
      ),
      'siblings' => 
      array (
        0 => '종로1·2·3·4가동',
        1 => '사직동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/jongno/jongno-ga',
        1 => 'seoul/jongno/sajik',
      ),
    ),
    'seoul/junggu/myeongdong' => 
    array (
      'key' => 'seoul/junggu/myeongdong',
      'sido' => 'seoul',
      'gu' => 'seoul/junggu',
      'name' => '명동',
      'slug' => 'myeongdong',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '명동역',
        1 => '명동예술극장',
        2 => '남산서울타워',
      ),
      'area' => '서울 중구 명동',
      'lat' => 37.55822,
      'lng' => 126.99616,
      'url' => '/seoul/junggu/myeongdong/',
      'shops' => 
      array (
        0 => 'myeongdong-1',
        1 => 'myeongdong-2',
      ),
      'siblings' => 
      array (
        0 => '을지로동',
        1 => '신당동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/junggu/euljiro',
        1 => 'seoul/junggu/sindang',
      ),
    ),
    'seoul/junggu/euljiro' => 
    array (
      'key' => 'seoul/junggu/euljiro',
      'sido' => 'seoul',
      'gu' => 'seoul/junggu',
      'name' => '을지로동',
      'slug' => 'euljiro',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '을지로3가역',
        1 => '을지로 노포 골목',
        2 => '청계천',
      ),
      'area' => '서울 중구 을지로동',
      'lat' => 37.55705,
      'lng' => 126.99516,
      'url' => '/seoul/junggu/euljiro/',
      'shops' => 
      array (
        0 => 'euljiro-1',
        1 => 'euljiro-2',
        2 => 'euljiro-3',
        3 => 'euljiro-4',
      ),
      'siblings' => 
      array (
        0 => '명동',
        1 => '신당동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/junggu/myeongdong',
        1 => 'seoul/junggu/sindang',
      ),
    ),
    'seoul/junggu/sindang' => 
    array (
      'key' => 'seoul/junggu/sindang',
      'sido' => 'seoul',
      'gu' => 'seoul/junggu',
      'name' => '신당동',
      'slug' => 'sindang',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '신당역',
        1 => '신당동 떡볶이타운',
        2 => '서울중앙시장',
      ),
      'area' => '서울 중구 신당동',
      'lat' => 37.56983,
      'lng' => 127.00342,
      'url' => '/seoul/junggu/sindang/',
      'shops' => 
      array (
        0 => 'sindang-1',
        1 => 'sindang-2',
        2 => 'sindang-3',
      ),
      'siblings' => 
      array (
        0 => '명동',
        1 => '을지로동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/junggu/myeongdong',
        1 => 'seoul/junggu/euljiro',
      ),
    ),
    'seoul/jungnang/sangbong' => 
    array (
      'key' => 'seoul/jungnang/sangbong',
      'sido' => 'seoul',
      'gu' => 'seoul/jungnang',
      'name' => '상봉동',
      'slug' => 'sangbong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '상봉역',
        1 => '상봉터미널',
        2 => '중랑구청',
      ),
      'area' => '서울 중랑구 상봉동',
      'lat' => 37.60016,
      'lng' => 127.09609,
      'url' => '/seoul/jungnang/sangbong/',
      'shops' => 
      array (
        0 => 'sangbong-1',
        1 => 'sangbong-2',
        2 => 'sangbong-3',
        3 => 'sangbong-4',
        4 => 'sangbong-5',
      ),
      'siblings' => 
      array (
        0 => '면목동',
        1 => '묵동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/jungnang/myeonmok',
        1 => 'seoul/jungnang/muk',
      ),
    ),
    'seoul/jungnang/myeonmok' => 
    array (
      'key' => 'seoul/jungnang/myeonmok',
      'sido' => 'seoul',
      'gu' => 'seoul/jungnang',
      'name' => '면목동',
      'slug' => 'myeonmok',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '사가정역',
        1 => '면목전통시장',
        2 => '용마산',
      ),
      'area' => '서울 중랑구 면목동',
      'lat' => 37.59868,
      'lng' => 127.08341,
      'url' => '/seoul/jungnang/myeonmok/',
      'shops' => 
      array (
        0 => 'myeonmok-1',
        1 => 'myeonmok-2',
        2 => 'myeonmok-3',
      ),
      'siblings' => 
      array (
        0 => '상봉동',
        1 => '묵동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/jungnang/sangbong',
        1 => 'seoul/jungnang/muk',
      ),
    ),
    'seoul/jungnang/muk' => 
    array (
      'key' => 'seoul/jungnang/muk',
      'sido' => 'seoul',
      'gu' => 'seoul/jungnang',
      'name' => '묵동',
      'slug' => 'muk',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '먹골역',
        1 => '묵동천',
        2 => '중랑캠핑숲',
      ),
      'area' => '서울 중랑구 묵동',
      'lat' => 37.61407,
      'lng' => 127.08964,
      'url' => '/seoul/jungnang/muk/',
      'shops' => 
      array (
        0 => 'muk-1',
        1 => 'muk-2',
        2 => 'muk-3',
        3 => 'muk-4',
      ),
      'siblings' => 
      array (
        0 => '상봉동',
        1 => '면목동',
      ),
      'sibling_keys' => 
      array (
        0 => 'seoul/jungnang/sangbong',
        1 => 'seoul/jungnang/myeonmok',
      ),
    ),
    'gyeonggi/jangan/jangan-jeongja' => 
    array (
      'key' => 'gyeonggi/jangan/jangan-jeongja',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/jangan',
      'name' => '정자동',
      'slug' => 'jangan-jeongja',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '수원종합운동장',
        1 => '만석공원',
        2 => '정자동 아파트 단지',
      ),
      'area' => '경기 수원시 장안구 정자동',
      'lat' => 37.31638,
      'lng' => 126.99837,
      'url' => '/gyeonggi/jangan/jangan-jeongja/',
      'shops' => 
      array (
        0 => 'jangan-jeongja-1',
        1 => 'jangan-jeongja-2',
        2 => 'jangan-jeongja-3',
        3 => 'jangan-jeongja-4',
      ),
      'siblings' => 
      array (
        0 => '조원동',
        1 => '파장동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/jangan/jowon',
        1 => 'gyeonggi/jangan/pajang',
      ),
    ),
    'gyeonggi/jangan/jowon' => 
    array (
      'key' => 'gyeonggi/jangan/jowon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/jangan',
      'name' => '조원동',
      'slug' => 'jowon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '수원 KT위즈파크',
        1 => '광교산 입구',
        2 => '조원동 아파트 단지',
      ),
      'area' => '경기 수원시 장안구 조원동',
      'lat' => 37.30062,
      'lng' => 127.00706,
      'url' => '/gyeonggi/jangan/jowon/',
      'shops' => 
      array (
        0 => 'jowon-1',
        1 => 'jowon-2',
        2 => 'jowon-3',
        3 => 'jowon-4',
      ),
      'siblings' => 
      array (
        0 => '정자동',
        1 => '파장동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/jangan/jangan-jeongja',
        1 => 'gyeonggi/jangan/pajang',
      ),
    ),
    'gyeonggi/jangan/pajang' => 
    array (
      'key' => 'gyeonggi/jangan/pajang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/jangan',
      'name' => '파장동',
      'slug' => 'pajang',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '성균관대역',
        1 => '일월수목원',
        2 => '파장천',
      ),
      'area' => '경기 수원시 장안구 파장동',
      'lat' => 37.31319,
      'lng' => 127.0113,
      'url' => '/gyeonggi/jangan/pajang/',
      'shops' => 
      array (
        0 => 'pajang-1',
        1 => 'pajang-2',
        2 => 'pajang-3',
        3 => 'pajang-4',
      ),
      'siblings' => 
      array (
        0 => '정자동',
        1 => '조원동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/jangan/jangan-jeongja',
        1 => 'gyeonggi/jangan/jowon',
      ),
    ),
    'gyeonggi/gwonseon/geumgok' => 
    array (
      'key' => 'gyeonggi/gwonseon/geumgok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwonseon',
      'name' => '금곡동',
      'slug' => 'geumgok',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '호매실지구',
        1 => '칠보산',
        2 => '금곡동 아파트 단지',
      ),
      'area' => '경기 수원시 권선구 금곡동',
      'lat' => 37.25589,
      'lng' => 127.01058,
      'url' => '/gyeonggi/gwonseon/geumgok/',
      'shops' => 
      array (
        0 => 'geumgok-1',
        1 => 'geumgok-2',
        2 => 'geumgok-3',
        3 => 'geumgok-4',
      ),
      'siblings' => 
      array (
        0 => '권선동',
        1 => '세류동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwonseon/gwonseon-dong',
        1 => 'gyeonggi/gwonseon/seryu',
      ),
    ),
    'gyeonggi/gwonseon/gwonseon-dong' => 
    array (
      'key' => 'gyeonggi/gwonseon/gwonseon-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwonseon',
      'name' => '권선동',
      'slug' => 'gwonseon-dong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '매탄권선역',
        1 => '권선동 아파트 단지',
        2 => '수원 남부',
      ),
      'area' => '경기 수원시 권선구 권선동',
      'lat' => 37.26958,
      'lng' => 126.99351,
      'url' => '/gyeonggi/gwonseon/gwonseon-dong/',
      'shops' => 
      array (
        0 => 'gwonseon-dong-1',
        1 => 'gwonseon-dong-2',
        2 => 'gwonseon-dong-3',
        3 => 'gwonseon-dong-4',
        4 => 'gwonseon-dong-5',
      ),
      'siblings' => 
      array (
        0 => '금곡동',
        1 => '세류동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwonseon/geumgok',
        1 => 'gyeonggi/gwonseon/seryu',
      ),
    ),
    'gyeonggi/gwonseon/seryu' => 
    array (
      'key' => 'gyeonggi/gwonseon/seryu',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwonseon',
      'name' => '세류동',
      'slug' => 'seryu',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '세류역',
        1 => '수원천 상류',
        2 => '권선로',
      ),
      'area' => '경기 수원시 권선구 세류동',
      'lat' => 37.26922,
      'lng' => 127.00641,
      'url' => '/gyeonggi/gwonseon/seryu/',
      'shops' => 
      array (
        0 => 'seryu-1',
        1 => 'seryu-2',
        2 => 'seryu-3',
        3 => 'seryu-4',
      ),
      'siblings' => 
      array (
        0 => '금곡동',
        1 => '권선동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwonseon/geumgok',
        1 => 'gyeonggi/gwonseon/gwonseon-dong',
      ),
    ),
    'gyeonggi/paldal/ingye' => 
    array (
      'key' => 'gyeonggi/paldal/ingye',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/paldal',
      'name' => '인계동',
      'slug' => 'ingye',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '수원시청역',
        1 => '나혜석거리',
        2 => '효원공원',
      ),
      'area' => '경기 수원시 팔달구 인계동',
      'lat' => 37.29198,
      'lng' => 127.02897,
      'url' => '/gyeonggi/paldal/ingye/',
      'shops' => 
      array (
        0 => 'ingye-1',
        1 => 'ingye-2',
        2 => 'ingye-3',
        3 => 'ingye-4',
      ),
      'siblings' => 
      array (
        0 => '매교동',
        1 => '우만동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/paldal/maegyo',
        1 => 'gyeonggi/paldal/uman',
      ),
    ),
    'gyeonggi/paldal/maegyo' => 
    array (
      'key' => 'gyeonggi/paldal/maegyo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/paldal',
      'name' => '매교동',
      'slug' => 'maegyo',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '매교역',
        1 => '수원천',
        2 => '매교 역세권',
      ),
      'area' => '경기 수원시 팔달구 매교동',
      'lat' => 37.29184,
      'lng' => 127.03061,
      'url' => '/gyeonggi/paldal/maegyo/',
      'shops' => 
      array (
        0 => 'maegyo-1',
        1 => 'maegyo-2',
        2 => 'maegyo-3',
        3 => 'maegyo-4',
        4 => 'maegyo-5',
      ),
      'siblings' => 
      array (
        0 => '인계동',
        1 => '우만동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/paldal/ingye',
        1 => 'gyeonggi/paldal/uman',
      ),
    ),
    'gyeonggi/paldal/uman' => 
    array (
      'key' => 'gyeonggi/paldal/uman',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/paldal',
      'name' => '우만동',
      'slug' => 'uman',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '수원월드컵경기장',
        1 => '우만동 아파트 단지',
        2 => '광교산 남측',
      ),
      'area' => '경기 수원시 팔달구 우만동',
      'lat' => 37.2897,
      'lng' => 127.01699,
      'url' => '/gyeonggi/paldal/uman/',
      'shops' => 
      array (
        0 => 'uman-1',
        1 => 'uman-2',
        2 => 'uman-3',
        3 => 'uman-4',
        4 => 'uman-5',
      ),
      'siblings' => 
      array (
        0 => '인계동',
        1 => '매교동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/paldal/ingye',
        1 => 'gyeonggi/paldal/maegyo',
      ),
    ),
    'gyeonggi/yeongtong/yeongtong-dong' => 
    array (
      'key' => 'gyeonggi/yeongtong/yeongtong-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeongtong',
      'name' => '영통동',
      'slug' => 'yeongtong-dong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '영통역',
        1 => '영통 중심상가',
        2 => '청명산',
      ),
      'area' => '경기 수원시 영통구 영통동',
      'lat' => 37.25024,
      'lng' => 127.05716,
      'url' => '/gyeonggi/yeongtong/yeongtong-dong/',
      'shops' => 
      array (
        0 => 'yeongtong-dong-1',
        1 => 'yeongtong-dong-2',
        2 => 'yeongtong-dong-3',
        3 => 'yeongtong-dong-4',
        4 => 'yeongtong-dong-5',
      ),
      'siblings' => 
      array (
        0 => '광교동',
        1 => '매탄동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeongtong/gwanggyo',
        1 => 'gyeonggi/yeongtong/maetan',
      ),
    ),
    'gyeonggi/yeongtong/gwanggyo' => 
    array (
      'key' => 'gyeonggi/yeongtong/gwanggyo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeongtong',
      'name' => '광교동',
      'slug' => 'gwanggyo',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '광교중앙역',
        1 => '광교호수공원',
        2 => '경기도청',
      ),
      'area' => '경기 수원시 영통구 광교동',
      'lat' => 37.25449,
      'lng' => 127.04695,
      'url' => '/gyeonggi/yeongtong/gwanggyo/',
      'shops' => 
      array (
        0 => 'gwanggyo-1',
        1 => 'gwanggyo-2',
        2 => 'gwanggyo-3',
        3 => 'gwanggyo-4',
      ),
      'siblings' => 
      array (
        0 => '영통동',
        1 => '매탄동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeongtong/yeongtong-dong',
        1 => 'gyeonggi/yeongtong/maetan',
      ),
    ),
    'gyeonggi/yeongtong/maetan' => 
    array (
      'key' => 'gyeonggi/yeongtong/maetan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeongtong',
      'name' => '매탄동',
      'slug' => 'maetan',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '매탄권선역',
        1 => '삼성전자 수원사업장',
        2 => '원천리천',
      ),
      'area' => '경기 수원시 영통구 매탄동',
      'lat' => 37.2669,
      'lng' => 127.05155,
      'url' => '/gyeonggi/yeongtong/maetan/',
      'shops' => 
      array (
        0 => 'maetan-1',
        1 => 'maetan-2',
        2 => 'maetan-3',
        3 => 'maetan-4',
        4 => 'maetan-5',
      ),
      'siblings' => 
      array (
        0 => '영통동',
        1 => '광교동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeongtong/yeongtong-dong',
        1 => 'gyeonggi/yeongtong/gwanggyo',
      ),
    ),
    'gyeonggi/sujeong/sinheung' => 
    array (
      'key' => 'gyeonggi/sujeong/sinheung',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/sujeong',
      'name' => '신흥동',
      'slug' => 'sinheung',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '신흥역',
        1 => '수정구청',
        2 => '탄천',
      ),
      'area' => '경기 성남시 수정구 신흥동',
      'lat' => 37.45211,
      'lng' => 127.15431,
      'url' => '/gyeonggi/sujeong/sinheung/',
      'shops' => 
      array (
        0 => 'sinheung-1',
        1 => 'sinheung-2',
        2 => 'sinheung-3',
        3 => 'sinheung-4',
      ),
      'siblings' => 
      array (
        0 => '태평동',
        1 => '신촌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/sujeong/taepyeong',
        1 => 'gyeonggi/sujeong/sinchon-sn',
      ),
    ),
    'gyeonggi/sujeong/taepyeong' => 
    array (
      'key' => 'gyeonggi/sujeong/taepyeong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/sujeong',
      'name' => '태평동',
      'slug' => 'taepyeong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '가천대역',
        1 => '태평동 주택가',
        2 => '탄천',
      ),
      'area' => '경기 성남시 수정구 태평동',
      'lat' => 37.44856,
      'lng' => 127.13489,
      'url' => '/gyeonggi/sujeong/taepyeong/',
      'shops' => 
      array (
        0 => 'taepyeong-1',
        1 => 'taepyeong-2',
        2 => 'taepyeong-3',
        3 => 'taepyeong-4',
      ),
      'siblings' => 
      array (
        0 => '신흥동',
        1 => '신촌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/sujeong/sinheung',
        1 => 'gyeonggi/sujeong/sinchon-sn',
      ),
    ),
    'gyeonggi/sujeong/sinchon-sn' => 
    array (
      'key' => 'gyeonggi/sujeong/sinchon-sn',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/sujeong',
      'name' => '신촌동',
      'slug' => 'sinchon-sn',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '위례신도시',
        1 => '창곡천',
        2 => '남한산성 입구',
      ),
      'area' => '경기 성남시 수정구 신촌동',
      'lat' => 37.43856,
      'lng' => 127.13561,
      'url' => '/gyeonggi/sujeong/sinchon-sn/',
      'shops' => 
      array (
        0 => 'sinchon-sn-1',
        1 => 'sinchon-sn-2',
        2 => 'sinchon-sn-3',
      ),
      'siblings' => 
      array (
        0 => '신흥동',
        1 => '태평동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/sujeong/sinheung',
        1 => 'gyeonggi/sujeong/taepyeong',
      ),
    ),
    'gyeonggi/jungwon/seongnam-dong' => 
    array (
      'key' => 'gyeonggi/jungwon/seongnam-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/jungwon',
      'name' => '성남동',
      'slug' => 'seongnam-dong',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '모란역',
        1 => '모란민속장',
        2 => '성남종합운동장',
      ),
      'area' => '경기 성남시 중원구 성남동',
      'lat' => 37.43875,
      'lng' => 127.13735,
      'url' => '/gyeonggi/jungwon/seongnam-dong/',
      'shops' => 
      array (
        0 => 'seongnam-dong-1',
        1 => 'seongnam-dong-2',
        2 => 'seongnam-dong-3',
        3 => 'seongnam-dong-4',
      ),
      'siblings' => 
      array (
        0 => '금광동',
        1 => '상대원동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/jungwon/geumgwang',
        1 => 'gyeonggi/jungwon/sangdaewon',
      ),
    ),
    'gyeonggi/jungwon/geumgwang' => 
    array (
      'key' => 'gyeonggi/jungwon/geumgwang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/jungwon',
      'name' => '금광동',
      'slug' => 'geumgwang',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '단대오거리역',
        1 => '금광동 재정비구역',
        2 => '영장산',
      ),
      'area' => '경기 성남시 중원구 금광동',
      'lat' => 37.43324,
      'lng' => 127.13152,
      'url' => '/gyeonggi/jungwon/geumgwang/',
      'shops' => 
      array (
        0 => 'geumgwang-1',
        1 => 'geumgwang-2',
        2 => 'geumgwang-3',
        3 => 'geumgwang-4',
      ),
      'siblings' => 
      array (
        0 => '성남동',
        1 => '상대원동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/jungwon/seongnam-dong',
        1 => 'gyeonggi/jungwon/sangdaewon',
      ),
    ),
    'gyeonggi/jungwon/sangdaewon' => 
    array (
      'key' => 'gyeonggi/jungwon/sangdaewon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/jungwon',
      'name' => '상대원동',
      'slug' => 'sangdaewon',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '성남일반산업단지',
        1 => '상대원 공단',
        2 => '영장산',
      ),
      'area' => '경기 성남시 중원구 상대원동',
      'lat' => 37.42509,
      'lng' => 127.14818,
      'url' => '/gyeonggi/jungwon/sangdaewon/',
      'shops' => 
      array (
        0 => 'sangdaewon-1',
        1 => 'sangdaewon-2',
        2 => 'sangdaewon-3',
        3 => 'sangdaewon-4',
      ),
      'siblings' => 
      array (
        0 => '성남동',
        1 => '금광동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/jungwon/seongnam-dong',
        1 => 'gyeonggi/jungwon/geumgwang',
      ),
    ),
    'gyeonggi/bundang/bundang-jeongja' => 
    array (
      'key' => 'gyeonggi/bundang/bundang-jeongja',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/bundang',
      'name' => '정자동',
      'slug' => 'bundang-jeongja',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '정자역',
        1 => '정자동 카페거리',
        2 => '탄천',
      ),
      'area' => '경기 성남시 분당구 정자동',
      'lat' => 37.38038,
      'lng' => 127.11482,
      'url' => '/gyeonggi/bundang/bundang-jeongja/',
      'shops' => 
      array (
        0 => 'bundang-jeongja-1',
        1 => 'bundang-jeongja-2',
        2 => 'bundang-jeongja-3',
        3 => 'bundang-jeongja-4',
        4 => 'bundang-jeongja-5',
      ),
      'siblings' => 
      array (
        0 => '서현동',
        1 => '판교동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/bundang/seohyeon',
        1 => 'gyeonggi/bundang/pangyo',
      ),
    ),
    'gyeonggi/bundang/seohyeon' => 
    array (
      'key' => 'gyeonggi/bundang/seohyeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/bundang',
      'name' => '서현동',
      'slug' => 'seohyeon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '서현역',
        1 => 'AK플라자 분당점',
        2 => '분당중앙공원',
      ),
      'area' => '경기 성남시 분당구 서현동',
      'lat' => 37.37108,
      'lng' => 127.12828,
      'url' => '/gyeonggi/bundang/seohyeon/',
      'shops' => 
      array (
        0 => 'seohyeon-1',
        1 => 'seohyeon-2',
        2 => 'seohyeon-3',
        3 => 'seohyeon-4',
        4 => 'seohyeon-5',
      ),
      'siblings' => 
      array (
        0 => '정자동',
        1 => '판교동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/bundang/bundang-jeongja',
        1 => 'gyeonggi/bundang/pangyo',
      ),
    ),
    'gyeonggi/bundang/pangyo' => 
    array (
      'key' => 'gyeonggi/bundang/pangyo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/bundang',
      'name' => '판교동',
      'slug' => 'pangyo',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '판교역',
        1 => '판교테크노밸리',
        2 => '화랑공원',
      ),
      'area' => '경기 성남시 분당구 판교동',
      'lat' => 37.39392,
      'lng' => 127.11787,
      'url' => '/gyeonggi/bundang/pangyo/',
      'shops' => 
      array (
        0 => 'pangyo-1',
        1 => 'pangyo-2',
        2 => 'pangyo-3',
        3 => 'pangyo-4',
      ),
      'siblings' => 
      array (
        0 => '정자동',
        1 => '서현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/bundang/bundang-jeongja',
        1 => 'gyeonggi/bundang/seohyeon',
      ),
    ),
    'gyeonggi/deogyang/hwajeong' => 
    array (
      'key' => 'gyeonggi/deogyang/hwajeong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/deogyang',
      'name' => '화정동',
      'slug' => 'hwajeong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '화정역',
        1 => '화정 로데오',
        2 => '화정중앙공원',
      ),
      'area' => '경기 고양시 덕양구 화정동',
      'lat' => 37.63214,
      'lng' => 126.83675,
      'url' => '/gyeonggi/deogyang/hwajeong/',
      'shops' => 
      array (
        0 => 'hwajeong-1',
        1 => 'hwajeong-2',
        2 => 'hwajeong-3',
        3 => 'hwajeong-4',
      ),
      'siblings' => 
      array (
        0 => '행신동',
        1 => '삼송동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/deogyang/haengsin',
        1 => 'gyeonggi/deogyang/samsong',
      ),
    ),
    'gyeonggi/deogyang/haengsin' => 
    array (
      'key' => 'gyeonggi/deogyang/haengsin',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/deogyang',
      'name' => '행신동',
      'slug' => 'haengsin',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '행신역',
        1 => '행신동 아파트 단지',
        2 => '소만마을',
      ),
      'area' => '경기 고양시 덕양구 행신동',
      'lat' => 37.64736,
      'lng' => 126.82997,
      'url' => '/gyeonggi/deogyang/haengsin/',
      'shops' => 
      array (
        0 => 'haengsin-1',
        1 => 'haengsin-2',
        2 => 'haengsin-3',
        3 => 'haengsin-4',
      ),
      'siblings' => 
      array (
        0 => '화정동',
        1 => '삼송동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/deogyang/hwajeong',
        1 => 'gyeonggi/deogyang/samsong',
      ),
    ),
    'gyeonggi/deogyang/samsong' => 
    array (
      'key' => 'gyeonggi/deogyang/samsong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/deogyang',
      'name' => '삼송동',
      'slug' => 'samsong',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '삼송역',
        1 => '스타필드 고양',
        2 => '삼송지구',
      ),
      'area' => '경기 고양시 덕양구 삼송동',
      'lat' => 37.63588,
      'lng' => 126.82974,
      'url' => '/gyeonggi/deogyang/samsong/',
      'shops' => 
      array (
        0 => 'samsong-1',
        1 => 'samsong-2',
        2 => 'samsong-3',
      ),
      'siblings' => 
      array (
        0 => '화정동',
        1 => '행신동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/deogyang/hwajeong',
        1 => 'gyeonggi/deogyang/haengsin',
      ),
    ),
    'gyeonggi/ilsandong/janghang' => 
    array (
      'key' => 'gyeonggi/ilsandong/janghang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/ilsandong',
      'name' => '장항동',
      'slug' => 'janghang',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '정발산역',
        1 => '웨스턴돔',
        2 => '일산호수공원',
      ),
      'area' => '경기 고양시 일산동구 장항동',
      'lat' => 37.66334,
      'lng' => 126.77692,
      'url' => '/gyeonggi/ilsandong/janghang/',
      'shops' => 
      array (
        0 => 'janghang-1',
        1 => 'janghang-2',
        2 => 'janghang-3',
        3 => 'janghang-4',
      ),
      'siblings' => 
      array (
        0 => '마두동',
        1 => '백석동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/ilsandong/madu',
        1 => 'gyeonggi/ilsandong/baekseok',
      ),
    ),
    'gyeonggi/ilsandong/madu' => 
    array (
      'key' => 'gyeonggi/ilsandong/madu',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/ilsandong',
      'name' => '마두동',
      'slug' => 'madu',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '마두역',
        1 => '고양아람누리',
        2 => '정발산',
      ),
      'area' => '경기 고양시 일산동구 마두동',
      'lat' => 37.66314,
      'lng' => 126.77695,
      'url' => '/gyeonggi/ilsandong/madu/',
      'shops' => 
      array (
        0 => 'madu-1',
        1 => 'madu-2',
        2 => 'madu-3',
        3 => 'madu-4',
        4 => 'madu-5',
      ),
      'siblings' => 
      array (
        0 => '장항동',
        1 => '백석동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/ilsandong/janghang',
        1 => 'gyeonggi/ilsandong/baekseok',
      ),
    ),
    'gyeonggi/ilsandong/baekseok' => 
    array (
      'key' => 'gyeonggi/ilsandong/baekseok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/ilsandong',
      'name' => '백석동',
      'slug' => 'baekseok',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '백석역',
        1 => '고양종합터미널',
        2 => '요진와이시티',
      ),
      'area' => '경기 고양시 일산동구 백석동',
      'lat' => 37.66125,
      'lng' => 126.77651,
      'url' => '/gyeonggi/ilsandong/baekseok/',
      'shops' => 
      array (
        0 => 'baekseok-1',
        1 => 'baekseok-2',
        2 => 'baekseok-3',
        3 => 'baekseok-4',
        4 => 'baekseok-5',
      ),
      'siblings' => 
      array (
        0 => '장항동',
        1 => '마두동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/ilsandong/janghang',
        1 => 'gyeonggi/ilsandong/madu',
      ),
    ),
    'gyeonggi/ilsanseo/juyeop' => 
    array (
      'key' => 'gyeonggi/ilsanseo/juyeop',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/ilsanseo',
      'name' => '주엽동',
      'slug' => 'juyeop',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '주엽역',
        1 => '문촌마을',
        2 => '일산호수공원',
      ),
      'area' => '경기 고양시 일산서구 주엽동',
      'lat' => 37.67039,
      'lng' => 126.74831,
      'url' => '/gyeonggi/ilsanseo/juyeop/',
      'shops' => 
      array (
        0 => 'juyeop-1',
        1 => 'juyeop-2',
        2 => 'juyeop-3',
        3 => 'juyeop-4',
      ),
      'siblings' => 
      array (
        0 => '대화동',
        1 => '탄현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/ilsanseo/daehwa',
        1 => 'gyeonggi/ilsanseo/tanhyeon',
      ),
    ),
    'gyeonggi/ilsanseo/daehwa' => 
    array (
      'key' => 'gyeonggi/ilsanseo/daehwa',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/ilsanseo',
      'name' => '대화동',
      'slug' => 'daehwa',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '대화역',
        1 => '킨텍스',
        2 => '한류월드',
      ),
      'area' => '경기 고양시 일산서구 대화동',
      'lat' => 37.68354,
      'lng' => 126.761,
      'url' => '/gyeonggi/ilsanseo/daehwa/',
      'shops' => 
      array (
        0 => 'daehwa-1',
        1 => 'daehwa-2',
        2 => 'daehwa-3',
      ),
      'siblings' => 
      array (
        0 => '주엽동',
        1 => '탄현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/ilsanseo/juyeop',
        1 => 'gyeonggi/ilsanseo/tanhyeon',
      ),
    ),
    'gyeonggi/ilsanseo/tanhyeon' => 
    array (
      'key' => 'gyeonggi/ilsanseo/tanhyeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/ilsanseo',
      'name' => '탄현동',
      'slug' => 'tanhyeon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '탄현역',
        1 => '탄현 큰마을',
        2 => '황룡산',
      ),
      'area' => '경기 고양시 일산서구 탄현동',
      'lat' => 37.6812,
      'lng' => 126.75942,
      'url' => '/gyeonggi/ilsanseo/tanhyeon/',
      'shops' => 
      array (
        0 => 'tanhyeon-1',
        1 => 'tanhyeon-2',
        2 => 'tanhyeon-3',
        3 => 'tanhyeon-4',
      ),
      'siblings' => 
      array (
        0 => '주엽동',
        1 => '대화동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/ilsanseo/juyeop',
        1 => 'gyeonggi/ilsanseo/daehwa',
      ),
    ),
    'gyeonggi/cheoin/gimnyangjang' => 
    array (
      'key' => 'gyeonggi/cheoin/gimnyangjang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/cheoin',
      'name' => '김량장동',
      'slug' => 'gimnyangjang',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '김량장역',
        1 => '용인중앙시장',
        2 => '처인구청',
      ),
      'area' => '경기 용인시 처인구 김량장동',
      'lat' => 37.23679,
      'lng' => 127.21248,
      'url' => '/gyeonggi/cheoin/gimnyangjang/',
      'shops' => 
      array (
        0 => 'gimnyangjang-1',
        1 => 'gimnyangjang-2',
        2 => 'gimnyangjang-3',
        3 => 'gimnyangjang-4',
      ),
      'siblings' => 
      array (
        0 => '역북동',
        1 => '포곡읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/cheoin/yeokbuk',
        1 => 'gyeonggi/cheoin/pogok',
      ),
    ),
    'gyeonggi/cheoin/yeokbuk' => 
    array (
      'key' => 'gyeonggi/cheoin/yeokbuk',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/cheoin',
      'name' => '역북동',
      'slug' => 'yeokbuk',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '명지대역',
        1 => '역북지구',
        2 => '용인시청',
      ),
      'area' => '경기 용인시 처인구 역북동',
      'lat' => 37.23113,
      'lng' => 127.20964,
      'url' => '/gyeonggi/cheoin/yeokbuk/',
      'shops' => 
      array (
        0 => 'yeokbuk-1',
        1 => 'yeokbuk-2',
        2 => 'yeokbuk-3',
        3 => 'yeokbuk-4',
        4 => 'yeokbuk-5',
      ),
      'siblings' => 
      array (
        0 => '김량장동',
        1 => '포곡읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/cheoin/gimnyangjang',
        1 => 'gyeonggi/cheoin/pogok',
      ),
    ),
    'gyeonggi/cheoin/pogok' => 
    array (
      'key' => 'gyeonggi/cheoin/pogok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/cheoin',
      'name' => '포곡읍',
      'slug' => 'pogok',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '에버랜드',
        1 => '포곡읍',
        2 => '경안천',
      ),
      'area' => '경기 용인시 처인구 포곡읍',
      'lat' => 37.23031,
      'lng' => 127.20967,
      'url' => '/gyeonggi/cheoin/pogok/',
      'shops' => 
      array (
        0 => 'pogok-1',
        1 => 'pogok-2',
      ),
      'siblings' => 
      array (
        0 => '김량장동',
        1 => '역북동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/cheoin/gimnyangjang',
        1 => 'gyeonggi/cheoin/yeokbuk',
      ),
    ),
    'gyeonggi/giheung/gugal' => 
    array (
      'key' => 'gyeonggi/giheung/gugal',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/giheung',
      'name' => '구갈동',
      'slug' => 'gugal',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '기흥역',
        1 => '구갈동 아파트 단지',
        2 => '신갈천',
      ),
      'area' => '경기 용인시 기흥구 구갈동',
      'lat' => 37.2717,
      'lng' => 127.12298,
      'url' => '/gyeonggi/giheung/gugal/',
      'shops' => 
      array (
        0 => 'gugal-1',
        1 => 'gugal-2',
        2 => 'gugal-3',
        3 => 'gugal-4',
      ),
      'siblings' => 
      array (
        0 => '보라동',
        1 => '영덕동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/giheung/bora',
        1 => 'gyeonggi/giheung/yeongdeok',
      ),
    ),
    'gyeonggi/giheung/bora' => 
    array (
      'key' => 'gyeonggi/giheung/bora',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/giheung',
      'name' => '보라동',
      'slug' => 'bora',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '한국민속촌',
        1 => '보라지구',
        2 => '민속촌로',
      ),
      'area' => '경기 용인시 기흥구 보라동',
      'lat' => 37.27174,
      'lng' => 127.12502,
      'url' => '/gyeonggi/giheung/bora/',
      'shops' => 
      array (
        0 => 'bora-1',
        1 => 'bora-2',
      ),
      'siblings' => 
      array (
        0 => '구갈동',
        1 => '영덕동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/giheung/gugal',
        1 => 'gyeonggi/giheung/yeongdeok',
      ),
    ),
    'gyeonggi/giheung/yeongdeok' => 
    array (
      'key' => 'gyeonggi/giheung/yeongdeok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/giheung',
      'name' => '영덕동',
      'slug' => 'yeongdeok',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '흥덕지구',
        1 => '영덕동 아파트 단지',
        2 => '신갈천',
      ),
      'area' => '경기 용인시 기흥구 영덕동',
      'lat' => 37.29097,
      'lng' => 127.11371,
      'url' => '/gyeonggi/giheung/yeongdeok/',
      'shops' => 
      array (
        0 => 'yeongdeok-1',
        1 => 'yeongdeok-2',
        2 => 'yeongdeok-3',
        3 => 'yeongdeok-4',
      ),
      'siblings' => 
      array (
        0 => '구갈동',
        1 => '보라동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/giheung/gugal',
        1 => 'gyeonggi/giheung/bora',
      ),
    ),
    'gyeonggi/suji/pungdeokcheon' => 
    array (
      'key' => 'gyeonggi/suji/pungdeokcheon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/suji',
      'name' => '풍덕천동',
      'slug' => 'pungdeokcheon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '수지구청역',
        1 => '풍덕천 상권',
        2 => '수지체육공원',
      ),
      'area' => '경기 용인시 수지구 풍덕천동',
      'lat' => 37.3242,
      'lng' => 127.1072,
      'url' => '/gyeonggi/suji/pungdeokcheon/',
      'shops' => 
      array (
        0 => 'pungdeokcheon-1',
        1 => 'pungdeokcheon-2',
        2 => 'pungdeokcheon-3',
        3 => 'pungdeokcheon-4',
      ),
      'siblings' => 
      array (
        0 => '죽전동',
        1 => '상현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/suji/jukjeon',
        1 => 'gyeonggi/suji/sanghyeon',
      ),
    ),
    'gyeonggi/suji/jukjeon' => 
    array (
      'key' => 'gyeonggi/suji/jukjeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/suji',
      'name' => '죽전동',
      'slug' => 'jukjeon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '죽전역',
        1 => '죽전 카페거리',
        2 => '대지산',
      ),
      'area' => '경기 용인시 수지구 죽전동',
      'lat' => 37.31037,
      'lng' => 127.1087,
      'url' => '/gyeonggi/suji/jukjeon/',
      'shops' => 
      array (
        0 => 'jukjeon-1',
        1 => 'jukjeon-2',
        2 => 'jukjeon-3',
        3 => 'jukjeon-4',
      ),
      'siblings' => 
      array (
        0 => '풍덕천동',
        1 => '상현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/suji/pungdeokcheon',
        1 => 'gyeonggi/suji/sanghyeon',
      ),
    ),
    'gyeonggi/suji/sanghyeon' => 
    array (
      'key' => 'gyeonggi/suji/sanghyeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/suji',
      'name' => '상현동',
      'slug' => 'sanghyeon',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '상현역',
        1 => '광교산',
        2 => '상현지구',
      ),
      'area' => '경기 용인시 수지구 상현동',
      'lat' => 37.32366,
      'lng' => 127.08948,
      'url' => '/gyeonggi/suji/sanghyeon/',
      'shops' => 
      array (
        0 => 'sanghyeon-1',
        1 => 'sanghyeon-2',
        2 => 'sanghyeon-3',
      ),
      'siblings' => 
      array (
        0 => '풍덕천동',
        1 => '죽전동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/suji/pungdeokcheon',
        1 => 'gyeonggi/suji/jukjeon',
      ),
    ),
    'gyeonggi/sangnok/sa-dong' => 
    array (
      'key' => 'gyeonggi/sangnok/sa-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/sangnok',
      'name' => '사동',
      'slug' => 'sa-dong',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '한대앞역',
        1 => '한양대 에리카캠퍼스',
        2 => '안산천',
      ),
      'area' => '경기 안산시 상록구 사동',
      'lat' => 37.30967,
      'lng' => 126.8511,
      'url' => '/gyeonggi/sangnok/sa-dong/',
      'shops' => 
      array (
        0 => 'sa-dong-1',
        1 => 'sa-dong-2',
        2 => 'sa-dong-3',
      ),
      'siblings' => 
      array (
        0 => '본오동',
        1 => '월피동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/sangnok/bono',
        1 => 'gyeonggi/sangnok/wolpi',
      ),
    ),
    'gyeonggi/sangnok/bono' => 
    array (
      'key' => 'gyeonggi/sangnok/bono',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/sangnok',
      'name' => '본오동',
      'slug' => 'bono',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '상록수역',
        1 => '본오동 아파트 단지',
        2 => '반월천',
      ),
      'area' => '경기 안산시 상록구 본오동',
      'lat' => 37.29184,
      'lng' => 126.85877,
      'url' => '/gyeonggi/sangnok/bono/',
      'shops' => 
      array (
        0 => 'bono-1',
        1 => 'bono-2',
        2 => 'bono-3',
        3 => 'bono-4',
      ),
      'siblings' => 
      array (
        0 => '사동',
        1 => '월피동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/sangnok/sa-dong',
        1 => 'gyeonggi/sangnok/wolpi',
      ),
    ),
    'gyeonggi/sangnok/wolpi' => 
    array (
      'key' => 'gyeonggi/sangnok/wolpi',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/sangnok',
      'name' => '월피동',
      'slug' => 'wolpi',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '월피동 주택가',
        1 => '수암봉',
        2 => '안산문화광장',
      ),
      'area' => '경기 안산시 상록구 월피동',
      'lat' => 37.29196,
      'lng' => 126.83595,
      'url' => '/gyeonggi/sangnok/wolpi/',
      'shops' => 
      array (
        0 => 'wolpi-1',
        1 => 'wolpi-2',
        2 => 'wolpi-3',
        3 => 'wolpi-4',
        4 => 'wolpi-5',
      ),
      'siblings' => 
      array (
        0 => '사동',
        1 => '본오동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/sangnok/sa-dong',
        1 => 'gyeonggi/sangnok/bono',
      ),
    ),
    'gyeonggi/danwon/gojan' => 
    array (
      'key' => 'gyeonggi/danwon/gojan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/danwon',
      'name' => '고잔동',
      'slug' => 'gojan',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '중앙역',
        1 => '안산 중앙동 상권',
        2 => '안산호수공원',
      ),
      'area' => '경기 안산시 단원구 고잔동',
      'lat' => 37.32144,
      'lng' => 126.79814,
      'url' => '/gyeonggi/danwon/gojan/',
      'shops' => 
      array (
        0 => 'gojan-1',
        1 => 'gojan-2',
        2 => 'gojan-3',
        3 => 'gojan-4',
      ),
      'siblings' => 
      array (
        0 => '초지동',
        1 => '대부동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/danwon/choji',
        1 => 'gyeonggi/danwon/daebu',
      ),
    ),
    'gyeonggi/danwon/choji' => 
    array (
      'key' => 'gyeonggi/danwon/choji',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/danwon',
      'name' => '초지동',
      'slug' => 'choji',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '초지역',
        1 => '초지동 아파트 단지',
        2 => '화랑유원지',
      ),
      'area' => '경기 안산시 단원구 초지동',
      'lat' => 37.3121,
      'lng' => 126.81744,
      'url' => '/gyeonggi/danwon/choji/',
      'shops' => 
      array (
        0 => 'choji-1',
        1 => 'choji-2',
        2 => 'choji-3',
        3 => 'choji-4',
        4 => 'choji-5',
      ),
      'siblings' => 
      array (
        0 => '고잔동',
        1 => '대부동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/danwon/gojan',
        1 => 'gyeonggi/danwon/daebu',
      ),
    ),
    'gyeonggi/danwon/daebu' => 
    array (
      'key' => 'gyeonggi/danwon/daebu',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/danwon',
      'name' => '대부동',
      'slug' => 'daebu',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '대부도',
        1 => '방아머리해변',
        2 => '시화나래휴게소',
      ),
      'area' => '경기 안산시 단원구 대부동',
      'lat' => 37.30821,
      'lng' => 126.79742,
      'url' => '/gyeonggi/danwon/daebu/',
      'shops' => 
      array (
        0 => 'daebu-1',
        1 => 'daebu-2',
        2 => 'daebu-3',
      ),
      'siblings' => 
      array (
        0 => '고잔동',
        1 => '초지동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/danwon/gojan',
        1 => 'gyeonggi/danwon/choji',
      ),
    ),
    'gyeonggi/manan/anyang-dong' => 
    array (
      'key' => 'gyeonggi/manan/anyang-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/manan',
      'name' => '안양동',
      'slug' => 'anyang-dong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '안양역',
        1 => '안양일번가',
        2 => '안양중앙시장',
      ),
      'area' => '경기 안양시 만안구 안양동',
      'lat' => 37.37515,
      'lng' => 126.93413,
      'url' => '/gyeonggi/manan/anyang-dong/',
      'shops' => 
      array (
        0 => 'anyang-dong-1',
        1 => 'anyang-dong-2',
        2 => 'anyang-dong-3',
        3 => 'anyang-dong-4',
      ),
      'siblings' => 
      array (
        0 => '석수동',
        1 => '박달동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/manan/seoksu',
        1 => 'gyeonggi/manan/bakdal',
      ),
    ),
    'gyeonggi/manan/seoksu' => 
    array (
      'key' => 'gyeonggi/manan/seoksu',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/manan',
      'name' => '석수동',
      'slug' => 'seoksu',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '석수역',
        1 => '안양예술공원',
        2 => '삼성산',
      ),
      'area' => '경기 안양시 만안구 석수동',
      'lat' => 37.37884,
      'lng' => 126.93155,
      'url' => '/gyeonggi/manan/seoksu/',
      'shops' => 
      array (
        0 => 'seoksu-1',
        1 => 'seoksu-2',
      ),
      'siblings' => 
      array (
        0 => '안양동',
        1 => '박달동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/manan/anyang-dong',
        1 => 'gyeonggi/manan/bakdal',
      ),
    ),
    'gyeonggi/manan/bakdal' => 
    array (
      'key' => 'gyeonggi/manan/bakdal',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/manan',
      'name' => '박달동',
      'slug' => 'bakdal',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '박달동 공단',
        1 => '안양천',
        2 => '박달로',
      ),
      'area' => '경기 안양시 만안구 박달동',
      'lat' => 37.38794,
      'lng' => 126.92581,
      'url' => '/gyeonggi/manan/bakdal/',
      'shops' => 
      array (
        0 => 'bakdal-1',
        1 => 'bakdal-2',
        2 => 'bakdal-3',
        3 => 'bakdal-4',
      ),
      'siblings' => 
      array (
        0 => '안양동',
        1 => '석수동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/manan/anyang-dong',
        1 => 'gyeonggi/manan/seoksu',
      ),
    ),
    'gyeonggi/dongan/pyeongchon' => 
    array (
      'key' => 'gyeonggi/dongan/pyeongchon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/dongan',
      'name' => '평촌동',
      'slug' => 'pyeongchon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '평촌역',
        1 => '평촌 학원가',
        2 => '자유공원',
      ),
      'area' => '경기 안양시 동안구 평촌동',
      'lat' => 37.38157,
      'lng' => 126.95415,
      'url' => '/gyeonggi/dongan/pyeongchon/',
      'shops' => 
      array (
        0 => 'pyeongchon-1',
        1 => 'pyeongchon-2',
        2 => 'pyeongchon-3',
        3 => 'pyeongchon-4',
        4 => 'pyeongchon-5',
      ),
      'siblings' => 
      array (
        0 => '범계동',
        1 => '호계동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/dongan/beomgye',
        1 => 'gyeonggi/dongan/hogye',
      ),
    ),
    'gyeonggi/dongan/beomgye' => 
    array (
      'key' => 'gyeonggi/dongan/beomgye',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/dongan',
      'name' => '범계동',
      'slug' => 'beomgye',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '범계역',
        1 => '범계 로데오거리',
        2 => '평촌중앙공원',
      ),
      'area' => '경기 안양시 동안구 범계동',
      'lat' => 37.39424,
      'lng' => 126.94493,
      'url' => '/gyeonggi/dongan/beomgye/',
      'shops' => 
      array (
        0 => 'beomgye-1',
        1 => 'beomgye-2',
        2 => 'beomgye-3',
        3 => 'beomgye-4',
        4 => 'beomgye-5',
      ),
      'siblings' => 
      array (
        0 => '평촌동',
        1 => '호계동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/dongan/pyeongchon',
        1 => 'gyeonggi/dongan/hogye',
      ),
    ),
    'gyeonggi/dongan/hogye' => 
    array (
      'key' => 'gyeonggi/dongan/hogye',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/dongan',
      'name' => '호계동',
      'slug' => 'hogye',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '호계사거리',
        1 => '호계동 아파트 단지',
        2 => '학의천',
      ),
      'area' => '경기 안양시 동안구 호계동',
      'lat' => 37.39303,
      'lng' => 126.94663,
      'url' => '/gyeonggi/dongan/hogye/',
      'shops' => 
      array (
        0 => 'hogye-1',
        1 => 'hogye-2',
        2 => 'hogye-3',
        3 => 'hogye-4',
        4 => 'hogye-5',
      ),
      'siblings' => 
      array (
        0 => '평촌동',
        1 => '범계동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/dongan/pyeongchon',
        1 => 'gyeonggi/dongan/beomgye',
      ),
    ),
    'gyeonggi/bucheon/jungdong' => 
    array (
      'key' => 'gyeonggi/bucheon/jungdong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/bucheon',
      'name' => '중동',
      'slug' => 'jungdong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '신중동역',
        1 => '부천시청역',
        2 => '중동 상권',
      ),
      'area' => '경기 부천시 중동',
      'lat' => 37.5002,
      'lng' => 126.77778,
      'url' => '/gyeonggi/bucheon/jungdong/',
      'shops' => 
      array (
        0 => 'jungdong-1',
        1 => 'jungdong-2',
        2 => 'jungdong-3',
        3 => 'jungdong-4',
        4 => 'jungdong-5',
      ),
      'siblings' => 
      array (
        0 => '상동',
        1 => '심곡동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/bucheon/sangdong',
        1 => 'gyeonggi/bucheon/simgok',
      ),
    ),
    'gyeonggi/bucheon/sangdong' => 
    array (
      'key' => 'gyeonggi/bucheon/sangdong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/bucheon',
      'name' => '상동',
      'slug' => 'sangdong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '상동역',
        1 => '상동호수공원',
        2 => '현대백화점 중동점',
      ),
      'area' => '경기 부천시 상동',
      'lat' => 37.51107,
      'lng' => 126.7751,
      'url' => '/gyeonggi/bucheon/sangdong/',
      'shops' => 
      array (
        0 => 'sangdong-1',
        1 => 'sangdong-2',
        2 => 'sangdong-3',
        3 => 'sangdong-4',
        4 => 'sangdong-5',
      ),
      'siblings' => 
      array (
        0 => '중동',
        1 => '심곡동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/bucheon/jungdong',
        1 => 'gyeonggi/bucheon/simgok',
      ),
    ),
    'gyeonggi/bucheon/simgok' => 
    array (
      'key' => 'gyeonggi/bucheon/simgok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/bucheon',
      'name' => '심곡동',
      'slug' => 'simgok',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '부천역',
        1 => '부천자유시장',
        2 => '심곡천',
      ),
      'area' => '경기 부천시 심곡동',
      'lat' => 37.51426,
      'lng' => 126.76169,
      'url' => '/gyeonggi/bucheon/simgok/',
      'shops' => 
      array (
        0 => 'simgok-1',
        1 => 'simgok-2',
        2 => 'simgok-3',
        3 => 'simgok-4',
      ),
      'siblings' => 
      array (
        0 => '중동',
        1 => '상동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/bucheon/jungdong',
        1 => 'gyeonggi/bucheon/sangdong',
      ),
    ),
    'gyeonggi/namyangju/dasan' => 
    array (
      'key' => 'gyeonggi/namyangju/dasan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/namyangju',
      'name' => '다산동',
      'slug' => 'dasan',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '다산신도시',
        1 => '도농역',
        2 => '왕숙천',
      ),
      'area' => '경기 남양주시 다산동',
      'lat' => 37.62733,
      'lng' => 127.21115,
      'url' => '/gyeonggi/namyangju/dasan/',
      'shops' => 
      array (
        0 => 'dasan-1',
        1 => 'dasan-2',
        2 => 'dasan-3',
      ),
      'siblings' => 
      array (
        0 => '별내동',
        1 => '평내동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/namyangju/byeollae',
        1 => 'gyeonggi/namyangju/pyeongnae',
      ),
    ),
    'gyeonggi/namyangju/byeollae' => 
    array (
      'key' => 'gyeonggi/namyangju/byeollae',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/namyangju',
      'name' => '별내동',
      'slug' => 'byeollae',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '별내역',
        1 => '별내신도시',
        2 => '불암산',
      ),
      'area' => '경기 남양주시 별내동',
      'lat' => 37.62771,
      'lng' => 127.22157,
      'url' => '/gyeonggi/namyangju/byeollae/',
      'shops' => 
      array (
        0 => 'byeollae-1',
        1 => 'byeollae-2',
        2 => 'byeollae-3',
      ),
      'siblings' => 
      array (
        0 => '다산동',
        1 => '평내동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/namyangju/dasan',
        1 => 'gyeonggi/namyangju/pyeongnae',
      ),
    ),
    'gyeonggi/namyangju/pyeongnae' => 
    array (
      'key' => 'gyeonggi/namyangju/pyeongnae',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/namyangju',
      'name' => '평내동',
      'slug' => 'pyeongnae',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '평내호평역',
        1 => '천마산',
        2 => '평내 아파트 단지',
      ),
      'area' => '경기 남양주시 평내동',
      'lat' => 37.63073,
      'lng' => 127.2188,
      'url' => '/gyeonggi/namyangju/pyeongnae/',
      'shops' => 
      array (
        0 => 'pyeongnae-1',
        1 => 'pyeongnae-2',
        2 => 'pyeongnae-3',
        3 => 'pyeongnae-4',
        4 => 'pyeongnae-5',
      ),
      'siblings' => 
      array (
        0 => '다산동',
        1 => '별내동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/namyangju/dasan',
        1 => 'gyeonggi/namyangju/byeollae',
      ),
    ),
    'gyeonggi/hwaseong/dongtan' => 
    array (
      'key' => 'gyeonggi/hwaseong/dongtan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/hwaseong',
      'name' => '동탄동',
      'slug' => 'dongtan',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '동탄역',
        1 => '동탄호수공원',
        2 => '롯데백화점 동탄점',
      ),
      'area' => '경기 화성시 동탄동',
      'lat' => 37.20737,
      'lng' => 126.82471,
      'url' => '/gyeonggi/hwaseong/dongtan/',
      'shops' => 
      array (
        0 => 'dongtan-1',
        1 => 'dongtan-2',
        2 => 'dongtan-3',
        3 => 'dongtan-4',
      ),
      'siblings' => 
      array (
        0 => '봉담읍',
        1 => '향남읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/hwaseong/bongdam',
        1 => 'gyeonggi/hwaseong/hyangnam',
      ),
    ),
    'gyeonggi/hwaseong/bongdam' => 
    array (
      'key' => 'gyeonggi/hwaseong/bongdam',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/hwaseong',
      'name' => '봉담읍',
      'slug' => 'bongdam',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '봉담 택지',
        1 => '수원대학교',
        2 => '봉담 IC',
      ),
      'area' => '경기 화성시 봉담읍',
      'lat' => 37.19592,
      'lng' => 126.82088,
      'url' => '/gyeonggi/hwaseong/bongdam/',
      'shops' => 
      array (
        0 => 'bongdam-1',
        1 => 'bongdam-2',
        2 => 'bongdam-3',
        3 => 'bongdam-4',
      ),
      'siblings' => 
      array (
        0 => '동탄동',
        1 => '향남읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/hwaseong/dongtan',
        1 => 'gyeonggi/hwaseong/hyangnam',
      ),
    ),
    'gyeonggi/hwaseong/hyangnam' => 
    array (
      'key' => 'gyeonggi/hwaseong/hyangnam',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/hwaseong',
      'name' => '향남읍',
      'slug' => 'hyangnam',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '향남 택지',
        1 => '향남 제약단지',
        2 => '발안시장',
      ),
      'area' => '경기 화성시 향남읍',
      'lat' => 37.20653,
      'lng' => 126.84067,
      'url' => '/gyeonggi/hwaseong/hyangnam/',
      'shops' => 
      array (
        0 => 'hyangnam-1',
        1 => 'hyangnam-2',
        2 => 'hyangnam-3',
      ),
      'siblings' => 
      array (
        0 => '동탄동',
        1 => '봉담읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/hwaseong/dongtan',
        1 => 'gyeonggi/hwaseong/bongdam',
      ),
    ),
    'gyeonggi/pyeongtaek/bijeon' => 
    array (
      'key' => 'gyeonggi/pyeongtaek/bijeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/pyeongtaek',
      'name' => '비전동',
      'slug' => 'bijeon',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '평택역',
        1 => '비전동 상권',
        2 => '배다리생태공원',
      ),
      'area' => '경기 평택시 비전동',
      'lat' => 37.00028,
      'lng' => 127.10693,
      'url' => '/gyeonggi/pyeongtaek/bijeon/',
      'shops' => 
      array (
        0 => 'bijeon-1',
        1 => 'bijeon-2',
        2 => 'bijeon-3',
        3 => 'bijeon-4',
      ),
      'siblings' => 
      array (
        0 => '고덕동',
        1 => '송탄동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/pyeongtaek/godeok',
        1 => 'gyeonggi/pyeongtaek/songtan',
      ),
    ),
    'gyeonggi/pyeongtaek/godeok' => 
    array (
      'key' => 'gyeonggi/pyeongtaek/godeok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/pyeongtaek',
      'name' => '고덕동',
      'slug' => 'godeok',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '고덕국제신도시',
        1 => '삼성전자 평택캠퍼스',
        2 => '지제역',
      ),
      'area' => '경기 평택시 고덕동',
      'lat' => 37.00386,
      'lng' => 127.10247,
      'url' => '/gyeonggi/pyeongtaek/godeok/',
      'shops' => 
      array (
        0 => 'godeok-1',
        1 => 'godeok-2',
        2 => 'godeok-3',
      ),
      'siblings' => 
      array (
        0 => '비전동',
        1 => '송탄동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/pyeongtaek/bijeon',
        1 => 'gyeonggi/pyeongtaek/songtan',
      ),
    ),
    'gyeonggi/pyeongtaek/songtan' => 
    array (
      'key' => 'gyeonggi/pyeongtaek/songtan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/pyeongtaek',
      'name' => '송탄동',
      'slug' => 'songtan',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '서정리역',
        1 => '송탄관광특구',
        2 => '부락산',
      ),
      'area' => '경기 평택시 송탄동',
      'lat' => 36.99902,
      'lng' => 127.1028,
      'url' => '/gyeonggi/pyeongtaek/songtan/',
      'shops' => 
      array (
        0 => 'songtan-1',
        1 => 'songtan-2',
        2 => 'songtan-3',
        3 => 'songtan-4',
      ),
      'siblings' => 
      array (
        0 => '비전동',
        1 => '고덕동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/pyeongtaek/bijeon',
        1 => 'gyeonggi/pyeongtaek/godeok',
      ),
    ),
    'gyeonggi/uijeongbu/uijeongbu-dong' => 
    array (
      'key' => 'gyeonggi/uijeongbu/uijeongbu-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/uijeongbu',
      'name' => '의정부동',
      'slug' => 'uijeongbu-dong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '의정부역',
        1 => '의정부 로데오거리',
        2 => '제일시장',
      ),
      'area' => '경기 의정부시 의정부동',
      'lat' => 37.73926,
      'lng' => 127.02699,
      'url' => '/gyeonggi/uijeongbu/uijeongbu-dong/',
      'shops' => 
      array (
        0 => 'uijeongbu-dong-1',
        1 => 'uijeongbu-dong-2',
        2 => 'uijeongbu-dong-3',
        3 => 'uijeongbu-dong-4',
        4 => 'uijeongbu-dong-5',
      ),
      'siblings' => 
      array (
        0 => '호원동',
        1 => '송산동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/uijeongbu/howon',
        1 => 'gyeonggi/uijeongbu/songsan',
      ),
    ),
    'gyeonggi/uijeongbu/howon' => 
    array (
      'key' => 'gyeonggi/uijeongbu/howon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/uijeongbu',
      'name' => '호원동',
      'slug' => 'howon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '회룡역',
        1 => '호원동 아파트 단지',
        2 => '도봉산',
      ),
      'area' => '경기 의정부시 호원동',
      'lat' => 37.73779,
      'lng' => 127.03282,
      'url' => '/gyeonggi/uijeongbu/howon/',
      'shops' => 
      array (
        0 => 'howon-1',
        1 => 'howon-2',
        2 => 'howon-3',
        3 => 'howon-4',
        4 => 'howon-5',
      ),
      'siblings' => 
      array (
        0 => '의정부동',
        1 => '송산동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/uijeongbu/uijeongbu-dong',
        1 => 'gyeonggi/uijeongbu/songsan',
      ),
    ),
    'gyeonggi/uijeongbu/songsan' => 
    array (
      'key' => 'gyeonggi/uijeongbu/songsan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/uijeongbu',
      'name' => '송산동',
      'slug' => 'songsan',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '민락2지구',
        1 => '부용천',
        2 => '탑석역',
      ),
      'area' => '경기 의정부시 송산동',
      'lat' => 37.74724,
      'lng' => 127.02461,
      'url' => '/gyeonggi/uijeongbu/songsan/',
      'shops' => 
      array (
        0 => 'songsan-1',
        1 => 'songsan-2',
        2 => 'songsan-3',
        3 => 'songsan-4',
      ),
      'siblings' => 
      array (
        0 => '의정부동',
        1 => '호원동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/uijeongbu/uijeongbu-dong',
        1 => 'gyeonggi/uijeongbu/howon',
      ),
    ),
    'gyeonggi/siheung/jeongwang' => 
    array (
      'key' => 'gyeonggi/siheung/jeongwang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/siheung',
      'name' => '정왕동',
      'slug' => 'jeongwang',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '정왕역',
        1 => '시화공단',
        2 => '오이도',
      ),
      'area' => '경기 시흥시 정왕동',
      'lat' => 37.38953,
      'lng' => 126.799,
      'url' => '/gyeonggi/siheung/jeongwang/',
      'shops' => 
      array (
        0 => 'jeongwang-1',
        1 => 'jeongwang-2',
        2 => 'jeongwang-3',
        3 => 'jeongwang-4',
        4 => 'jeongwang-5',
      ),
      'siblings' => 
      array (
        0 => '배곧동',
        1 => '대야동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/siheung/baegot',
        1 => 'gyeonggi/siheung/daeya',
      ),
    ),
    'gyeonggi/siheung/baegot' => 
    array (
      'key' => 'gyeonggi/siheung/baegot',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/siheung',
      'name' => '배곧동',
      'slug' => 'baegot',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '배곧신도시',
        1 => '서울대 시흥캠퍼스',
        2 => '배곧한울공원',
      ),
      'area' => '경기 시흥시 배곧동',
      'lat' => 37.39174,
      'lng' => 126.80363,
      'url' => '/gyeonggi/siheung/baegot/',
      'shops' => 
      array (
        0 => 'baegot-1',
        1 => 'baegot-2',
        2 => 'baegot-3',
        3 => 'baegot-4',
      ),
      'siblings' => 
      array (
        0 => '정왕동',
        1 => '대야동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/siheung/jeongwang',
        1 => 'gyeonggi/siheung/daeya',
      ),
    ),
    'gyeonggi/siheung/daeya' => 
    array (
      'key' => 'gyeonggi/siheung/daeya',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/siheung',
      'name' => '대야동',
      'slug' => 'daeya',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '신천역',
        1 => '대야동 아파트 단지',
        2 => '은계지구',
      ),
      'area' => '경기 시흥시 대야동',
      'lat' => 37.38975,
      'lng' => 126.79236,
      'url' => '/gyeonggi/siheung/daeya/',
      'shops' => 
      array (
        0 => 'daeya-1',
        1 => 'daeya-2',
        2 => 'daeya-3',
        3 => 'daeya-4',
      ),
      'siblings' => 
      array (
        0 => '정왕동',
        1 => '배곧동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/siheung/jeongwang',
        1 => 'gyeonggi/siheung/baegot',
      ),
    ),
    'gyeonggi/paju/unjeong' => 
    array (
      'key' => 'gyeonggi/paju/unjeong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/paju',
      'name' => '운정동',
      'slug' => 'unjeong',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '운정역',
        1 => '운정호수공원',
        2 => '운정신도시',
      ),
      'area' => '경기 파주시 운정동',
      'lat' => 37.76967,
      'lng' => 126.77634,
      'url' => '/gyeonggi/paju/unjeong/',
      'shops' => 
      array (
        0 => 'unjeong-1',
        1 => 'unjeong-2',
        2 => 'unjeong-3',
      ),
      'siblings' => 
      array (
        0 => '금촌동',
        1 => '교하동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/paju/geumchon',
        1 => 'gyeonggi/paju/gyoha',
      ),
    ),
    'gyeonggi/paju/geumchon' => 
    array (
      'key' => 'gyeonggi/paju/geumchon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/paju',
      'name' => '금촌동',
      'slug' => 'geumchon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '금촌역',
        1 => '금촌 상권',
        2 => '파주시청',
      ),
      'area' => '경기 파주시 금촌동',
      'lat' => 37.75185,
      'lng' => 126.79178,
      'url' => '/gyeonggi/paju/geumchon/',
      'shops' => 
      array (
        0 => 'geumchon-1',
        1 => 'geumchon-2',
        2 => 'geumchon-3',
        3 => 'geumchon-4',
        4 => 'geumchon-5',
      ),
      'siblings' => 
      array (
        0 => '운정동',
        1 => '교하동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/paju/unjeong',
        1 => 'gyeonggi/paju/gyoha',
      ),
    ),
    'gyeonggi/paju/gyoha' => 
    array (
      'key' => 'gyeonggi/paju/gyoha',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/paju',
      'name' => '교하동',
      'slug' => 'gyoha',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '교하지구',
        1 => '심학산',
        2 => '운정 중앙공원',
      ),
      'area' => '경기 파주시 교하동',
      'lat' => 37.76317,
      'lng' => 126.77353,
      'url' => '/gyeonggi/paju/gyoha/',
      'shops' => 
      array (
        0 => 'gyoha-1',
        1 => 'gyoha-2',
        2 => 'gyoha-3',
        3 => 'gyoha-4',
      ),
      'siblings' => 
      array (
        0 => '운정동',
        1 => '금촌동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/paju/unjeong',
        1 => 'gyeonggi/paju/geumchon',
      ),
    ),
    'gyeonggi/gwangmyeong/cheolsan' => 
    array (
      'key' => 'gyeonggi/gwangmyeong/cheolsan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwangmyeong',
      'name' => '철산동',
      'slug' => 'cheolsan',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '철산역',
        1 => '철산 로데오',
        2 => '광명시청',
      ),
      'area' => '경기 광명시 철산동',
      'lat' => 37.46867,
      'lng' => 126.85731,
      'url' => '/gyeonggi/gwangmyeong/cheolsan/',
      'shops' => 
      array (
        0 => 'cheolsan-1',
        1 => 'cheolsan-2',
        2 => 'cheolsan-3',
        3 => 'cheolsan-4',
      ),
      'siblings' => 
      array (
        0 => '하안동',
        1 => '소하동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwangmyeong/haan',
        1 => 'gyeonggi/gwangmyeong/soha',
      ),
    ),
    'gyeonggi/gwangmyeong/haan' => 
    array (
      'key' => 'gyeonggi/gwangmyeong/haan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwangmyeong',
      'name' => '하안동',
      'slug' => 'haan',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '하안동 아파트 단지',
        1 => '안양천',
        2 => '구름산',
      ),
      'area' => '경기 광명시 하안동',
      'lat' => 37.47631,
      'lng' => 126.85973,
      'url' => '/gyeonggi/gwangmyeong/haan/',
      'shops' => 
      array (
        0 => 'haan-1',
        1 => 'haan-2',
        2 => 'haan-3',
        3 => 'haan-4',
        4 => 'haan-5',
      ),
      'siblings' => 
      array (
        0 => '철산동',
        1 => '소하동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwangmyeong/cheolsan',
        1 => 'gyeonggi/gwangmyeong/soha',
      ),
    ),
    'gyeonggi/gwangmyeong/soha' => 
    array (
      'key' => 'gyeonggi/gwangmyeong/soha',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwangmyeong',
      'name' => '소하동',
      'slug' => 'soha',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '광명역',
        1 => '이케아 광명점',
        2 => '가학산',
      ),
      'area' => '경기 광명시 소하동',
      'lat' => 37.47467,
      'lng' => 126.85378,
      'url' => '/gyeonggi/gwangmyeong/soha/',
      'shops' => 
      array (
        0 => 'soha-1',
        1 => 'soha-2',
        2 => 'soha-3',
      ),
      'siblings' => 
      array (
        0 => '철산동',
        1 => '하안동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwangmyeong/cheolsan',
        1 => 'gyeonggi/gwangmyeong/haan',
      ),
    ),
    'gyeonggi/gimpo/gurae' => 
    array (
      'key' => 'gyeonggi/gimpo/gurae',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gimpo',
      'name' => '구래동',
      'slug' => 'gurae',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '구래역',
        1 => '라베니체',
        2 => '김포한강신도시',
      ),
      'area' => '경기 김포시 구래동',
      'lat' => 37.62632,
      'lng' => 126.71391,
      'url' => '/gyeonggi/gimpo/gurae/',
      'shops' => 
      array (
        0 => 'gurae-1',
        1 => 'gurae-2',
        2 => 'gurae-3',
      ),
      'siblings' => 
      array (
        0 => '사우동',
        1 => '장기동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gimpo/sau',
        1 => 'gyeonggi/gimpo/janggi',
      ),
    ),
    'gyeonggi/gimpo/sau' => 
    array (
      'key' => 'gyeonggi/gimpo/sau',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gimpo',
      'name' => '사우동',
      'slug' => 'sau',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '사우역',
        1 => '김포시청',
        2 => '걸포중앙공원',
      ),
      'area' => '경기 김포시 사우동',
      'lat' => 37.61814,
      'lng' => 126.72415,
      'url' => '/gyeonggi/gimpo/sau/',
      'shops' => 
      array (
        0 => 'sau-1',
        1 => 'sau-2',
        2 => 'sau-3',
        3 => 'sau-4',
      ),
      'siblings' => 
      array (
        0 => '구래동',
        1 => '장기동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gimpo/gurae',
        1 => 'gyeonggi/gimpo/janggi',
      ),
    ),
    'gyeonggi/gimpo/janggi' => 
    array (
      'key' => 'gyeonggi/gimpo/janggi',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gimpo',
      'name' => '장기동',
      'slug' => 'janggi',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '장기역',
        1 => '장기동 아파트 단지',
        2 => '김포한강신도시 호수공원',
      ),
      'area' => '경기 김포시 장기동',
      'lat' => 37.61358,
      'lng' => 126.71,
      'url' => '/gyeonggi/gimpo/janggi/',
      'shops' => 
      array (
        0 => 'janggi-1',
        1 => 'janggi-2',
        2 => 'janggi-3',
        3 => 'janggi-4',
      ),
      'siblings' => 
      array (
        0 => '구래동',
        1 => '사우동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gimpo/gurae',
        1 => 'gyeonggi/gimpo/sau',
      ),
    ),
    'gyeonggi/gunpo/sanbon' => 
    array (
      'key' => 'gyeonggi/gunpo/sanbon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gunpo',
      'name' => '산본동',
      'slug' => 'sanbon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '산본역',
        1 => '산본 로데오거리',
        2 => '수리산',
      ),
      'area' => '경기 군포시 산본동',
      'lat' => 37.35946,
      'lng' => 126.93358,
      'url' => '/gyeonggi/gunpo/sanbon/',
      'shops' => 
      array (
        0 => 'sanbon-1',
        1 => 'sanbon-2',
        2 => 'sanbon-3',
        3 => 'sanbon-4',
      ),
      'siblings' => 
      array (
        0 => '금정동',
        1 => '당동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gunpo/geumjeong',
        1 => 'gyeonggi/gunpo/dang',
      ),
    ),
    'gyeonggi/gunpo/geumjeong' => 
    array (
      'key' => 'gyeonggi/gunpo/geumjeong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gunpo',
      'name' => '금정동',
      'slug' => 'geumjeong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '금정역',
        1 => '금정 상권',
        2 => '군포시청',
      ),
      'area' => '경기 군포시 금정동',
      'lat' => 37.35501,
      'lng' => 126.93458,
      'url' => '/gyeonggi/gunpo/geumjeong/',
      'shops' => 
      array (
        0 => 'geumjeong-1',
        1 => 'geumjeong-2',
        2 => 'geumjeong-3',
        3 => 'geumjeong-4',
        4 => 'geumjeong-5',
      ),
      'siblings' => 
      array (
        0 => '산본동',
        1 => '당동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gunpo/sanbon',
        1 => 'gyeonggi/gunpo/dang',
      ),
    ),
    'gyeonggi/gunpo/dang' => 
    array (
      'key' => 'gyeonggi/gunpo/dang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gunpo',
      'name' => '당동',
      'slug' => 'dang',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '군포역',
        1 => '당동 아파트 단지',
        2 => '당정근린공원',
      ),
      'area' => '경기 군포시 당동',
      'lat' => 37.37269,
      'lng' => 126.93678,
      'url' => '/gyeonggi/gunpo/dang/',
      'shops' => 
      array (
        0 => 'dang-1',
        1 => 'dang-2',
        2 => 'dang-3',
        3 => 'dang-4',
      ),
      'siblings' => 
      array (
        0 => '산본동',
        1 => '금정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gunpo/sanbon',
        1 => 'gyeonggi/gunpo/geumjeong',
      ),
    ),
    'gyeonggi/hanam/misa' => 
    array (
      'key' => 'gyeonggi/hanam/misa',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/hanam',
      'name' => '미사동',
      'slug' => 'misa',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '미사역',
        1 => '미사강변도시',
        2 => '미사리 조정경기장',
      ),
      'area' => '경기 하남시 미사동',
      'lat' => 37.54904,
      'lng' => 127.21571,
      'url' => '/gyeonggi/hanam/misa/',
      'shops' => 
      array (
        0 => 'misa-1',
        1 => 'misa-2',
        2 => 'misa-3',
        3 => 'misa-4',
      ),
      'siblings' => 
      array (
        0 => '신장동',
        1 => '덕풍동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/hanam/sinjang-hn',
        1 => 'gyeonggi/hanam/deokpung',
      ),
    ),
    'gyeonggi/hanam/sinjang-hn' => 
    array (
      'key' => 'gyeonggi/hanam/sinjang-hn',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/hanam',
      'name' => '신장동',
      'slug' => 'sinjang-hn',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '하남시청역',
        1 => '신장시장',
        2 => '덕풍천',
      ),
      'area' => '경기 하남시 신장동',
      'lat' => 37.535,
      'lng' => 127.21573,
      'url' => '/gyeonggi/hanam/sinjang-hn/',
      'shops' => 
      array (
        0 => 'sinjang-hn-1',
        1 => 'sinjang-hn-2',
        2 => 'sinjang-hn-3',
        3 => 'sinjang-hn-4',
        4 => 'sinjang-hn-5',
      ),
      'siblings' => 
      array (
        0 => '미사동',
        1 => '덕풍동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/hanam/misa',
        1 => 'gyeonggi/hanam/deokpung',
      ),
    ),
    'gyeonggi/hanam/deokpung' => 
    array (
      'key' => 'gyeonggi/hanam/deokpung',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/hanam',
      'name' => '덕풍동',
      'slug' => 'deokpung',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '스타필드 하남',
        1 => '덕풍동 아파트 단지',
        2 => '덕풍천',
      ),
      'area' => '경기 하남시 덕풍동',
      'lat' => 37.54916,
      'lng' => 127.21797,
      'url' => '/gyeonggi/hanam/deokpung/',
      'shops' => 
      array (
        0 => 'deokpung-1',
        1 => 'deokpung-2',
        2 => 'deokpung-3',
        3 => 'deokpung-4',
      ),
      'siblings' => 
      array (
        0 => '미사동',
        1 => '신장동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/hanam/misa',
        1 => 'gyeonggi/hanam/sinjang-hn',
      ),
    ),
    'gyeonggi/gwangju-gg/gyeongan' => 
    array (
      'key' => 'gyeonggi/gwangju-gg/gyeongan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwangju-gg',
      'name' => '경안동',
      'slug' => 'gyeongan',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '경기광주역',
        1 => '광주시청',
        2 => '경안천',
      ),
      'area' => '경기 광주시 경안동',
      'lat' => 37.42834,
      'lng' => 127.26486,
      'url' => '/gyeonggi/gwangju-gg/gyeongan/',
      'shops' => 
      array (
        0 => 'gyeongan-1',
        1 => 'gyeongan-2',
        2 => 'gyeongan-3',
        3 => 'gyeongan-4',
      ),
      'siblings' => 
      array (
        0 => '오포동',
        1 => '초월읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwangju-gg/opo',
        1 => 'gyeonggi/gwangju-gg/chowol',
      ),
    ),
    'gyeonggi/gwangju-gg/opo' => 
    array (
      'key' => 'gyeonggi/gwangju-gg/opo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwangju-gg',
      'name' => '오포동',
      'slug' => 'opo',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '오포 택지지구',
        1 => '태재고개',
        2 => '성남 분당 경계',
      ),
      'area' => '경기 광주시 오포동',
      'lat' => 37.42238,
      'lng' => 127.25805,
      'url' => '/gyeonggi/gwangju-gg/opo/',
      'shops' => 
      array (
        0 => 'opo-1',
        1 => 'opo-2',
        2 => 'opo-3',
        3 => 'opo-4',
      ),
      'siblings' => 
      array (
        0 => '경안동',
        1 => '초월읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwangju-gg/gyeongan',
        1 => 'gyeonggi/gwangju-gg/chowol',
      ),
    ),
    'gyeonggi/gwangju-gg/chowol' => 
    array (
      'key' => 'gyeonggi/gwangju-gg/chowol',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwangju-gg',
      'name' => '초월읍',
      'slug' => 'chowol',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '초월역',
        1 => '초월 산업단지',
        2 => '곤지암',
      ),
      'area' => '경기 광주시 초월읍',
      'lat' => 37.43495,
      'lng' => 127.26012,
      'url' => '/gyeonggi/gwangju-gg/chowol/',
      'shops' => 
      array (
        0 => 'chowol-1',
        1 => 'chowol-2',
        2 => 'chowol-3',
        3 => 'chowol-4',
      ),
      'siblings' => 
      array (
        0 => '경안동',
        1 => '오포동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwangju-gg/gyeongan',
        1 => 'gyeonggi/gwangju-gg/opo',
      ),
    ),
    'gyeonggi/icheon/changjeon' => 
    array (
      'key' => 'gyeonggi/icheon/changjeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/icheon',
      'name' => '창전동',
      'slug' => 'changjeon',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '이천역',
        1 => '이천 중앙로',
        2 => '설봉공원',
      ),
      'area' => '경기 이천시 창전동',
      'lat' => 37.27784,
      'lng' => 127.42842,
      'url' => '/gyeonggi/icheon/changjeon/',
      'shops' => 
      array (
        0 => 'changjeon-1',
        1 => 'changjeon-2',
        2 => 'changjeon-3',
        3 => 'changjeon-4',
      ),
      'siblings' => 
      array (
        0 => '부발읍',
        1 => '증포동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/icheon/bubal',
        1 => 'gyeonggi/icheon/jeungpo',
      ),
    ),
    'gyeonggi/icheon/bubal' => 
    array (
      'key' => 'gyeonggi/icheon/bubal',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/icheon',
      'name' => '부발읍',
      'slug' => 'bubal',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '부발역',
        1 => 'SK하이닉스 이천캠퍼스',
        2 => '부발 산업단지',
      ),
      'area' => '경기 이천시 부발읍',
      'lat' => 37.27979,
      'lng' => 127.43326,
      'url' => '/gyeonggi/icheon/bubal/',
      'shops' => 
      array (
        0 => 'bubal-1',
        1 => 'bubal-2',
        2 => 'bubal-3',
        3 => 'bubal-4',
      ),
      'siblings' => 
      array (
        0 => '창전동',
        1 => '증포동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/icheon/changjeon',
        1 => 'gyeonggi/icheon/jeungpo',
      ),
    ),
    'gyeonggi/icheon/jeungpo' => 
    array (
      'key' => 'gyeonggi/icheon/jeungpo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/icheon',
      'name' => '증포동',
      'slug' => 'jeungpo',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '증포동 아파트 단지',
        1 => '복하천',
        2 => '이천시청',
      ),
      'area' => '경기 이천시 증포동',
      'lat' => 37.2626,
      'lng' => 127.43947,
      'url' => '/gyeonggi/icheon/jeungpo/',
      'shops' => 
      array (
        0 => 'jeungpo-1',
        1 => 'jeungpo-2',
        2 => 'jeungpo-3',
        3 => 'jeungpo-4',
      ),
      'siblings' => 
      array (
        0 => '창전동',
        1 => '부발읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/icheon/changjeon',
        1 => 'gyeonggi/icheon/bubal',
      ),
    ),
    'gyeonggi/yangju/okjeong' => 
    array (
      'key' => 'gyeonggi/yangju/okjeong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yangju',
      'name' => '옥정동',
      'slug' => 'okjeong',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '옥정신도시',
        1 => '옥정호수공원',
        2 => '천보산',
      ),
      'area' => '경기 양주시 옥정동',
      'lat' => 37.78999,
      'lng' => 127.04467,
      'url' => '/gyeonggi/yangju/okjeong/',
      'shops' => 
      array (
        0 => 'okjeong-1',
        1 => 'okjeong-2',
        2 => 'okjeong-3',
      ),
      'siblings' => 
      array (
        0 => '회천동',
        1 => '백석읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yangju/hoecheon',
        1 => 'gyeonggi/yangju/baekseok-yj',
      ),
    ),
    'gyeonggi/yangju/hoecheon' => 
    array (
      'key' => 'gyeonggi/yangju/hoecheon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yangju',
      'name' => '회천동',
      'slug' => 'hoecheon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '덕정역',
        1 => '회천 택지',
        2 => '양주시청',
      ),
      'area' => '경기 양주시 회천동',
      'lat' => 37.79258,
      'lng' => 127.04745,
      'url' => '/gyeonggi/yangju/hoecheon/',
      'shops' => 
      array (
        0 => 'hoecheon-1',
        1 => 'hoecheon-2',
        2 => 'hoecheon-3',
        3 => 'hoecheon-4',
      ),
      'siblings' => 
      array (
        0 => '옥정동',
        1 => '백석읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yangju/okjeong',
        1 => 'gyeonggi/yangju/baekseok-yj',
      ),
    ),
    'gyeonggi/yangju/baekseok-yj' => 
    array (
      'key' => 'gyeonggi/yangju/baekseok-yj',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yangju',
      'name' => '백석읍',
      'slug' => 'baekseok-yj',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '백석읍',
        1 => '불곡산',
        2 => '기산저수지',
      ),
      'area' => '경기 양주시 백석읍',
      'lat' => 37.77526,
      'lng' => 127.04759,
      'url' => '/gyeonggi/yangju/baekseok-yj/',
      'shops' => 
      array (
        0 => 'baekseok-yj-1',
        1 => 'baekseok-yj-2',
      ),
      'siblings' => 
      array (
        0 => '옥정동',
        1 => '회천동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yangju/okjeong',
        1 => 'gyeonggi/yangju/hoecheon',
      ),
    ),
    'gyeonggi/osan/osan-jungang' => 
    array (
      'key' => 'gyeonggi/osan/osan-jungang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/osan',
      'name' => '중앙동',
      'slug' => 'osan-jungang',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '오산역',
        1 => '오색시장',
        2 => '오산천',
      ),
      'area' => '경기 오산시 중앙동',
      'lat' => 37.16159,
      'lng' => 127.07338,
      'url' => '/gyeonggi/osan/osan-jungang/',
      'shops' => 
      array (
        0 => 'osan-jungang-1',
        1 => 'osan-jungang-2',
        2 => 'osan-jungang-3',
        3 => 'osan-jungang-4',
        4 => 'osan-jungang-5',
      ),
      'siblings' => 
      array (
        0 => '신장동',
        1 => '세마동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/osan/sinjang-os',
        1 => 'gyeonggi/osan/sema',
      ),
    ),
    'gyeonggi/osan/sinjang-os' => 
    array (
      'key' => 'gyeonggi/osan/sinjang-os',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/osan',
      'name' => '신장동',
      'slug' => 'sinjang-os',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '오산대역',
        1 => '신장지구',
        2 => '물향기수목원',
      ),
      'area' => '경기 오산시 신장동',
      'lat' => 37.14449,
      'lng' => 127.06621,
      'url' => '/gyeonggi/osan/sinjang-os/',
      'shops' => 
      array (
        0 => 'sinjang-os-1',
        1 => 'sinjang-os-2',
        2 => 'sinjang-os-3',
        3 => 'sinjang-os-4',
        4 => 'sinjang-os-5',
      ),
      'siblings' => 
      array (
        0 => '중앙동',
        1 => '세마동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/osan/osan-jungang',
        1 => 'gyeonggi/osan/sema',
      ),
    ),
    'gyeonggi/osan/sema' => 
    array (
      'key' => 'gyeonggi/osan/sema',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/osan',
      'name' => '세마동',
      'slug' => 'sema',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '세마역',
        1 => '독산성 세마대지',
        2 => '양산동',
      ),
      'area' => '경기 오산시 세마동',
      'lat' => 37.15038,
      'lng' => 127.07353,
      'url' => '/gyeonggi/osan/sema/',
      'shops' => 
      array (
        0 => 'sema-1',
        1 => 'sema-2',
        2 => 'sema-3',
      ),
      'siblings' => 
      array (
        0 => '중앙동',
        1 => '신장동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/osan/osan-jungang',
        1 => 'gyeonggi/osan/sinjang-os',
      ),
    ),
    'gyeonggi/guri/sutaek' => 
    array (
      'key' => 'gyeonggi/guri/sutaek',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/guri',
      'name' => '수택동',
      'slug' => 'sutaek',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '구리역',
        1 => '돌다리 상권',
        2 => '구리전통시장',
      ),
      'area' => '경기 구리시 수택동',
      'lat' => 37.59356,
      'lng' => 127.12951,
      'url' => '/gyeonggi/guri/sutaek/',
      'shops' => 
      array (
        0 => 'sutaek-1',
        1 => 'sutaek-2',
        2 => 'sutaek-3',
        3 => 'sutaek-4',
      ),
      'siblings' => 
      array (
        0 => '교문동',
        1 => '인창동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/guri/gyomun',
        1 => 'gyeonggi/guri/inchang',
      ),
    ),
    'gyeonggi/guri/gyomun' => 
    array (
      'key' => 'gyeonggi/guri/gyomun',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/guri',
      'name' => '교문동',
      'slug' => 'gyomun',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '교문동 아파트 단지',
        1 => '아차산',
        2 => '구리시청',
      ),
      'area' => '경기 구리시 교문동',
      'lat' => 37.59474,
      'lng' => 127.1254,
      'url' => '/gyeonggi/guri/gyomun/',
      'shops' => 
      array (
        0 => 'gyomun-1',
        1 => 'gyomun-2',
        2 => 'gyomun-3',
        3 => 'gyomun-4',
        4 => 'gyomun-5',
      ),
      'siblings' => 
      array (
        0 => '수택동',
        1 => '인창동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/guri/sutaek',
        1 => 'gyeonggi/guri/inchang',
      ),
    ),
    'gyeonggi/guri/inchang' => 
    array (
      'key' => 'gyeonggi/guri/inchang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/guri',
      'name' => '인창동',
      'slug' => 'inchang',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '인창동 아파트 단지',
        1 => '동구릉',
        2 => '구리 농수산물도매시장',
      ),
      'area' => '경기 구리시 인창동',
      'lat' => 37.58461,
      'lng' => 127.13504,
      'url' => '/gyeonggi/guri/inchang/',
      'shops' => 
      array (
        0 => 'inchang-1',
        1 => 'inchang-2',
        2 => 'inchang-3',
        3 => 'inchang-4',
        4 => 'inchang-5',
      ),
      'siblings' => 
      array (
        0 => '수택동',
        1 => '교문동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/guri/sutaek',
        1 => 'gyeonggi/guri/gyomun',
      ),
    ),
    'gyeonggi/anseong/anseong-1' => 
    array (
      'key' => 'gyeonggi/anseong/anseong-1',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/anseong',
      'name' => '안성1동',
      'slug' => 'anseong-1',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '안성중앙시장',
        1 => '안성시청',
        2 => '안성천',
      ),
      'area' => '경기 안성시 안성1동',
      'lat' => 37.00385,
      'lng' => 127.28327,
      'url' => '/gyeonggi/anseong/anseong-1/',
      'shops' => 
      array (
        0 => 'anseong-1-1',
        1 => 'anseong-1-2',
        2 => 'anseong-1-3',
      ),
      'siblings' => 
      array (
        0 => '공도읍',
        1 => '보개면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/anseong/gongdo',
        1 => 'gyeonggi/anseong/bogae',
      ),
    ),
    'gyeonggi/anseong/gongdo' => 
    array (
      'key' => 'gyeonggi/anseong/gongdo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/anseong',
      'name' => '공도읍',
      'slug' => 'gongdo',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '공도 택지',
        1 => '중앙대 안성캠퍼스',
        2 => '공도 아파트 단지',
      ),
      'area' => '경기 안성시 공도읍',
      'lat' => 36.99862,
      'lng' => 127.26854,
      'url' => '/gyeonggi/anseong/gongdo/',
      'shops' => 
      array (
        0 => 'gongdo-1',
        1 => 'gongdo-2',
        2 => 'gongdo-3',
        3 => 'gongdo-4',
        4 => 'gongdo-5',
      ),
      'siblings' => 
      array (
        0 => '안성1동',
        1 => '보개면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/anseong/anseong-1',
        1 => 'gyeonggi/anseong/bogae',
      ),
    ),
    'gyeonggi/anseong/bogae' => 
    array (
      'key' => 'gyeonggi/anseong/bogae',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/anseong',
      'name' => '보개면',
      'slug' => 'bogae',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '안성맞춤랜드',
        1 => '금광호수',
        2 => '보개면',
      ),
      'area' => '경기 안성시 보개면',
      'lat' => 37.01244,
      'lng' => 127.27267,
      'url' => '/gyeonggi/anseong/bogae/',
      'shops' => 
      array (
        0 => 'bogae-1',
        1 => 'bogae-2',
        2 => 'bogae-3',
      ),
      'siblings' => 
      array (
        0 => '안성1동',
        1 => '공도읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/anseong/anseong-1',
        1 => 'gyeonggi/anseong/gongdo',
      ),
    ),
    'gyeonggi/pocheon/soheul' => 
    array (
      'key' => 'gyeonggi/pocheon/soheul',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/pocheon',
      'name' => '소흘읍',
      'slug' => 'soheul',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '소흘읍',
        1 => '광릉수목원',
        2 => '송우리 상권',
      ),
      'area' => '경기 포천시 소흘읍',
      'lat' => 37.89165,
      'lng' => 127.21167,
      'url' => '/gyeonggi/pocheon/soheul/',
      'shops' => 
      array (
        0 => 'soheul-1',
        1 => 'soheul-2',
        2 => 'soheul-3',
        3 => 'soheul-4',
      ),
      'siblings' => 
      array (
        0 => '포천동',
        1 => '영북면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/pocheon/pocheon-dong',
        1 => 'gyeonggi/pocheon/yeongbuk',
      ),
    ),
    'gyeonggi/pocheon/pocheon-dong' => 
    array (
      'key' => 'gyeonggi/pocheon/pocheon-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/pocheon',
      'name' => '포천동',
      'slug' => 'pocheon-dong',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '포천시청',
        1 => '포천 전통시장',
        2 => '반월산성',
      ),
      'area' => '경기 포천시 포천동',
      'lat' => 37.89148,
      'lng' => 127.21177,
      'url' => '/gyeonggi/pocheon/pocheon-dong/',
      'shops' => 
      array (
        0 => 'pocheon-dong-1',
        1 => 'pocheon-dong-2',
        2 => 'pocheon-dong-3',
      ),
      'siblings' => 
      array (
        0 => '소흘읍',
        1 => '영북면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/pocheon/soheul',
        1 => 'gyeonggi/pocheon/yeongbuk',
      ),
    ),
    'gyeonggi/pocheon/yeongbuk' => 
    array (
      'key' => 'gyeonggi/pocheon/yeongbuk',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/pocheon',
      'name' => '영북면',
      'slug' => 'yeongbuk',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '산정호수',
        1 => '명성산',
        2 => '영북면',
      ),
      'area' => '경기 포천시 영북면',
      'lat' => 37.89008,
      'lng' => 127.19003,
      'url' => '/gyeonggi/pocheon/yeongbuk/',
      'shops' => 
      array (
        0 => 'yeongbuk-1',
        1 => 'yeongbuk-2',
      ),
      'siblings' => 
      array (
        0 => '소흘읍',
        1 => '포천동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/pocheon/soheul',
        1 => 'gyeonggi/pocheon/pocheon-dong',
      ),
    ),
    'gyeonggi/uiwang/naeson' => 
    array (
      'key' => 'gyeonggi/uiwang/naeson',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/uiwang',
      'name' => '내손동',
      'slug' => 'naeson',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '내손동 아파트 단지',
        1 => '모락산',
        2 => '백운호수',
      ),
      'area' => '경기 의왕시 내손동',
      'lat' => 37.34264,
      'lng' => 126.97431,
      'url' => '/gyeonggi/uiwang/naeson/',
      'shops' => 
      array (
        0 => 'naeson-1',
        1 => 'naeson-2',
        2 => 'naeson-3',
        3 => 'naeson-4',
        4 => 'naeson-5',
      ),
      'siblings' => 
      array (
        0 => '고천동',
        1 => '청계동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/uiwang/gocheon',
        1 => 'gyeonggi/uiwang/cheonggye-uw',
      ),
    ),
    'gyeonggi/uiwang/gocheon' => 
    array (
      'key' => 'gyeonggi/uiwang/gocheon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/uiwang',
      'name' => '고천동',
      'slug' => 'gocheon',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '의왕시청',
        1 => '고천 상권',
        2 => '오전천',
      ),
      'area' => '경기 의왕시 고천동',
      'lat' => 37.34532,
      'lng' => 126.97579,
      'url' => '/gyeonggi/uiwang/gocheon/',
      'shops' => 
      array (
        0 => 'gocheon-1',
        1 => 'gocheon-2',
        2 => 'gocheon-3',
        3 => 'gocheon-4',
        4 => 'gocheon-5',
      ),
      'siblings' => 
      array (
        0 => '내손동',
        1 => '청계동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/uiwang/naeson',
        1 => 'gyeonggi/uiwang/cheonggye-uw',
      ),
    ),
    'gyeonggi/uiwang/cheonggye-uw' => 
    array (
      'key' => 'gyeonggi/uiwang/cheonggye-uw',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/uiwang',
      'name' => '청계동',
      'slug' => 'cheonggye-uw',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '청계지구',
        1 => '청계산',
        2 => '학의천',
      ),
      'area' => '경기 의왕시 청계동',
      'lat' => 37.34358,
      'lng' => 126.96975,
      'url' => '/gyeonggi/uiwang/cheonggye-uw/',
      'shops' => 
      array (
        0 => 'cheonggye-uw-1',
        1 => 'cheonggye-uw-2',
        2 => 'cheonggye-uw-3',
        3 => 'cheonggye-uw-4',
      ),
      'siblings' => 
      array (
        0 => '내손동',
        1 => '고천동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/uiwang/naeson',
        1 => 'gyeonggi/uiwang/gocheon',
      ),
    ),
    'gyeonggi/yeoju/yeoheung' => 
    array (
      'key' => 'gyeonggi/yeoju/yeoheung',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeoju',
      'name' => '여흥동',
      'slug' => 'yeoheung',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '여주역',
        1 => '여주 한글시장',
        2 => '남한강',
      ),
      'area' => '경기 여주시 여흥동',
      'lat' => 37.29117,
      'lng' => 127.6354,
      'url' => '/gyeonggi/yeoju/yeoheung/',
      'shops' => 
      array (
        0 => 'yeoheung-1',
        1 => 'yeoheung-2',
        2 => 'yeoheung-3',
        3 => 'yeoheung-4',
      ),
      'siblings' => 
      array (
        0 => '오학동',
        1 => '가남읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeoju/ohak',
        1 => 'gyeonggi/yeoju/ganam',
      ),
    ),
    'gyeonggi/yeoju/ohak' => 
    array (
      'key' => 'gyeonggi/yeoju/ohak',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeoju',
      'name' => '오학동',
      'slug' => 'ohak',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '오학동 아파트 단지',
        1 => '여주 프리미엄 아울렛',
        2 => '남한강',
      ),
      'area' => '경기 여주시 오학동',
      'lat' => 37.2994,
      'lng' => 127.64099,
      'url' => '/gyeonggi/yeoju/ohak/',
      'shops' => 
      array (
        0 => 'ohak-1',
        1 => 'ohak-2',
        2 => 'ohak-3',
        3 => 'ohak-4',
      ),
      'siblings' => 
      array (
        0 => '여흥동',
        1 => '가남읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeoju/yeoheung',
        1 => 'gyeonggi/yeoju/ganam',
      ),
    ),
    'gyeonggi/yeoju/ganam' => 
    array (
      'key' => 'gyeonggi/yeoju/ganam',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeoju',
      'name' => '가남읍',
      'slug' => 'ganam',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '가남읍',
        1 => '가남 산업단지',
        2 => '가남 택지',
      ),
      'area' => '경기 여주시 가남읍',
      'lat' => 37.30411,
      'lng' => 127.62776,
      'url' => '/gyeonggi/yeoju/ganam/',
      'shops' => 
      array (
        0 => 'ganam-1',
        1 => 'ganam-2',
        2 => 'ganam-3',
        3 => 'ganam-4',
      ),
      'siblings' => 
      array (
        0 => '여흥동',
        1 => '오학동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeoju/yeoheung',
        1 => 'gyeonggi/yeoju/ohak',
      ),
    ),
    'gyeonggi/dongducheon/saengyeon' => 
    array (
      'key' => 'gyeonggi/dongducheon/saengyeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/dongducheon',
      'name' => '생연동',
      'slug' => 'saengyeon',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '동두천중앙역',
        1 => '동두천 자유시장',
        2 => '신천',
      ),
      'area' => '경기 동두천시 생연동',
      'lat' => 37.90997,
      'lng' => 127.04964,
      'url' => '/gyeonggi/dongducheon/saengyeon/',
      'shops' => 
      array (
        0 => 'saengyeon-1',
        1 => 'saengyeon-2',
        2 => 'saengyeon-3',
        3 => 'saengyeon-4',
      ),
      'siblings' => 
      array (
        0 => '송내동',
        1 => '보산동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/dongducheon/songnae-ddc',
        1 => 'gyeonggi/dongducheon/bosan',
      ),
    ),
    'gyeonggi/dongducheon/songnae-ddc' => 
    array (
      'key' => 'gyeonggi/dongducheon/songnae-ddc',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/dongducheon',
      'name' => '송내동',
      'slug' => 'songnae-ddc',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '지행역',
        1 => '송내동 아파트 단지',
        2 => '왕방산',
      ),
      'area' => '경기 동두천시 송내동',
      'lat' => 37.91128,
      'lng' => 127.06907,
      'url' => '/gyeonggi/dongducheon/songnae-ddc/',
      'shops' => 
      array (
        0 => 'songnae-ddc-1',
        1 => 'songnae-ddc-2',
        2 => 'songnae-ddc-3',
        3 => 'songnae-ddc-4',
      ),
      'siblings' => 
      array (
        0 => '생연동',
        1 => '보산동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/dongducheon/saengyeon',
        1 => 'gyeonggi/dongducheon/bosan',
      ),
    ),
    'gyeonggi/dongducheon/bosan' => 
    array (
      'key' => 'gyeonggi/dongducheon/bosan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/dongducheon',
      'name' => '보산동',
      'slug' => 'bosan',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '보산역',
        1 => '보산동 관광특구',
        2 => '외국인 관광거리',
      ),
      'area' => '경기 동두천시 보산동',
      'lat' => 37.90907,
      'lng' => 127.07075,
      'url' => '/gyeonggi/dongducheon/bosan/',
      'shops' => 
      array (
        0 => 'bosan-1',
        1 => 'bosan-2',
        2 => 'bosan-3',
      ),
      'siblings' => 
      array (
        0 => '생연동',
        1 => '송내동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/dongducheon/saengyeon',
        1 => 'gyeonggi/dongducheon/songnae-ddc',
      ),
    ),
    'gyeonggi/gwacheon/byeoryang' => 
    array (
      'key' => 'gyeonggi/gwacheon/byeoryang',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwacheon',
      'name' => '별양동',
      'slug' => 'byeoryang',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '정부과천청사역',
        1 => '과천 중앙상가',
        2 => '중앙공원',
      ),
      'area' => '경기 과천시 별양동',
      'lat' => 37.43885,
      'lng' => 126.98367,
      'url' => '/gyeonggi/gwacheon/byeoryang/',
      'shops' => 
      array (
        0 => 'byeoryang-1',
        1 => 'byeoryang-2',
        2 => 'byeoryang-3',
        3 => 'byeoryang-4',
      ),
      'siblings' => 
      array (
        0 => '문원동',
        1 => '과천동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwacheon/munwon',
        1 => 'gyeonggi/gwacheon/gwacheon-dong',
      ),
    ),
    'gyeonggi/gwacheon/munwon' => 
    array (
      'key' => 'gyeonggi/gwacheon/munwon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwacheon',
      'name' => '문원동',
      'slug' => 'munwon',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '과천역',
        1 => '관악산',
        2 => '문원동 주택가',
      ),
      'area' => '경기 과천시 문원동',
      'lat' => 37.4199,
      'lng' => 126.9785,
      'url' => '/gyeonggi/gwacheon/munwon/',
      'shops' => 
      array (
        0 => 'munwon-1',
        1 => 'munwon-2',
        2 => 'munwon-3',
      ),
      'siblings' => 
      array (
        0 => '별양동',
        1 => '과천동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwacheon/byeoryang',
        1 => 'gyeonggi/gwacheon/gwacheon-dong',
      ),
    ),
    'gyeonggi/gwacheon/gwacheon-dong' => 
    array (
      'key' => 'gyeonggi/gwacheon/gwacheon-dong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gwacheon',
      'name' => '과천동',
      'slug' => 'gwacheon-dong',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '과천지식정보타운',
        1 => '서울대공원',
        2 => '양재천 상류',
      ),
      'area' => '경기 과천시 과천동',
      'lat' => 37.43556,
      'lng' => 126.99945,
      'url' => '/gyeonggi/gwacheon/gwacheon-dong/',
      'shops' => 
      array (
        0 => 'gwacheon-dong-1',
        1 => 'gwacheon-dong-2',
        2 => 'gwacheon-dong-3',
      ),
      'siblings' => 
      array (
        0 => '별양동',
        1 => '문원동',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gwacheon/byeoryang',
        1 => 'gyeonggi/gwacheon/munwon',
      ),
    ),
    'gyeonggi/gapyeong/gapyeong-eup' => 
    array (
      'key' => 'gyeonggi/gapyeong/gapyeong-eup',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gapyeong',
      'name' => '가평읍',
      'slug' => 'gapyeong-eup',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '가평역',
        1 => '자라섬',
        2 => '가평 잣고을시장',
      ),
      'area' => '경기 가평군 가평읍',
      'lat' => 37.83882,
      'lng' => 127.49796,
      'url' => '/gyeonggi/gapyeong/gapyeong-eup/',
      'shops' => 
      array (
        0 => 'gapyeong-eup-1',
        1 => 'gapyeong-eup-2',
        2 => 'gapyeong-eup-3',
        3 => 'gapyeong-eup-4',
      ),
      'siblings' => 
      array (
        0 => '청평면',
        1 => '상면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gapyeong/cheongpyeong',
        1 => 'gyeonggi/gapyeong/sangmyeon',
      ),
    ),
    'gyeonggi/gapyeong/cheongpyeong' => 
    array (
      'key' => 'gyeonggi/gapyeong/cheongpyeong',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gapyeong',
      'name' => '청평면',
      'slug' => 'cheongpyeong',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '청평역',
        1 => '청평호',
        2 => '쁘띠프랑스',
      ),
      'area' => '경기 가평군 청평면',
      'lat' => 37.83225,
      'lng' => 127.52001,
      'url' => '/gyeonggi/gapyeong/cheongpyeong/',
      'shops' => 
      array (
        0 => 'cheongpyeong-1',
        1 => 'cheongpyeong-2',
      ),
      'siblings' => 
      array (
        0 => '가평읍',
        1 => '상면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gapyeong/gapyeong-eup',
        1 => 'gyeonggi/gapyeong/sangmyeon',
      ),
    ),
    'gyeonggi/gapyeong/sangmyeon' => 
    array (
      'key' => 'gyeonggi/gapyeong/sangmyeon',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/gapyeong',
      'name' => '상면',
      'slug' => 'sangmyeon',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '아침고요수목원',
        1 => '운악산',
        2 => '상면',
      ),
      'area' => '경기 가평군 상면',
      'lat' => 37.83636,
      'lng' => 127.51006,
      'url' => '/gyeonggi/gapyeong/sangmyeon/',
      'shops' => 
      array (
        0 => 'sangmyeon-1',
        1 => 'sangmyeon-2',
        2 => 'sangmyeon-3',
      ),
      'siblings' => 
      array (
        0 => '가평읍',
        1 => '청평면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/gapyeong/gapyeong-eup',
        1 => 'gyeonggi/gapyeong/cheongpyeong',
      ),
    ),
    'gyeonggi/yangpyeong/yangpyeong-eup' => 
    array (
      'key' => 'gyeonggi/yangpyeong/yangpyeong-eup',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yangpyeong',
      'name' => '양평읍',
      'slug' => 'yangpyeong-eup',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '양평역',
        1 => '양평물맑은시장',
        2 => '남한강',
      ),
      'area' => '경기 양평군 양평읍',
      'lat' => 37.48452,
      'lng' => 127.49371,
      'url' => '/gyeonggi/yangpyeong/yangpyeong-eup/',
      'shops' => 
      array (
        0 => 'yangpyeong-eup-1',
        1 => 'yangpyeong-eup-2',
        2 => 'yangpyeong-eup-3',
        3 => 'yangpyeong-eup-4',
      ),
      'siblings' => 
      array (
        0 => '용문면',
        1 => '양서면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yangpyeong/yongmun',
        1 => 'gyeonggi/yangpyeong/yangseo',
      ),
    ),
    'gyeonggi/yangpyeong/yongmun' => 
    array (
      'key' => 'gyeonggi/yangpyeong/yongmun',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yangpyeong',
      'name' => '용문면',
      'slug' => 'yongmun',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '용문역',
        1 => '용문사',
        2 => '용문산',
      ),
      'area' => '경기 양평군 용문면',
      'lat' => 37.50365,
      'lng' => 127.47699,
      'url' => '/gyeonggi/yangpyeong/yongmun/',
      'shops' => 
      array (
        0 => 'yongmun-1',
        1 => 'yongmun-2',
        2 => 'yongmun-3',
      ),
      'siblings' => 
      array (
        0 => '양평읍',
        1 => '양서면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yangpyeong/yangpyeong-eup',
        1 => 'gyeonggi/yangpyeong/yangseo',
      ),
    ),
    'gyeonggi/yangpyeong/yangseo' => 
    array (
      'key' => 'gyeonggi/yangpyeong/yangseo',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yangpyeong',
      'name' => '양서면',
      'slug' => 'yangseo',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '양수역',
        1 => '두물머리',
        2 => '세미원',
      ),
      'area' => '경기 양평군 양서면',
      'lat' => 37.49595,
      'lng' => 127.49452,
      'url' => '/gyeonggi/yangpyeong/yangseo/',
      'shops' => 
      array (
        0 => 'yangseo-1',
        1 => 'yangseo-2',
      ),
      'siblings' => 
      array (
        0 => '양평읍',
        1 => '용문면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yangpyeong/yangpyeong-eup',
        1 => 'gyeonggi/yangpyeong/yongmun',
      ),
    ),
    'gyeonggi/yeoncheon/jeongok' => 
    array (
      'key' => 'gyeonggi/yeoncheon/jeongok',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeoncheon',
      'name' => '전곡읍',
      'slug' => 'jeongok',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '전곡역',
        1 => '전곡리 유적',
        2 => '한탄강',
      ),
      'area' => '경기 연천군 전곡읍',
      'lat' => 38.09891,
      'lng' => 127.07179,
      'url' => '/gyeonggi/yeoncheon/jeongok/',
      'shops' => 
      array (
        0 => 'jeongok-1',
        1 => 'jeongok-2',
        2 => 'jeongok-3',
        3 => 'jeongok-4',
      ),
      'siblings' => 
      array (
        0 => '연천읍',
        1 => '청산면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeoncheon/yeoncheon-eup',
        1 => 'gyeonggi/yeoncheon/cheongsan',
      ),
    ),
    'gyeonggi/yeoncheon/yeoncheon-eup' => 
    array (
      'key' => 'gyeonggi/yeoncheon/yeoncheon-eup',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeoncheon',
      'name' => '연천읍',
      'slug' => 'yeoncheon-eup',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '연천역',
        1 => '연천군청',
        2 => '차탄천',
      ),
      'area' => '경기 연천군 연천읍',
      'lat' => 38.09988,
      'lng' => 127.06867,
      'url' => '/gyeonggi/yeoncheon/yeoncheon-eup/',
      'shops' => 
      array (
        0 => 'yeoncheon-eup-1',
        1 => 'yeoncheon-eup-2',
        2 => 'yeoncheon-eup-3',
        3 => 'yeoncheon-eup-4',
        4 => 'yeoncheon-eup-5',
      ),
      'siblings' => 
      array (
        0 => '전곡읍',
        1 => '청산면',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeoncheon/jeongok',
        1 => 'gyeonggi/yeoncheon/cheongsan',
      ),
    ),
    'gyeonggi/yeoncheon/cheongsan' => 
    array (
      'key' => 'gyeonggi/yeoncheon/cheongsan',
      'sido' => 'gyeonggi',
      'gu' => 'gyeonggi/yeoncheon',
      'name' => '청산면',
      'slug' => 'cheongsan',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '청산역',
        1 => '한탄강',
        2 => '청산면 주택가',
      ),
      'area' => '경기 연천군 청산면',
      'lat' => 38.08706,
      'lng' => 127.08579,
      'url' => '/gyeonggi/yeoncheon/cheongsan/',
      'shops' => 
      array (
        0 => 'cheongsan-1',
        1 => 'cheongsan-2',
      ),
      'siblings' => 
      array (
        0 => '전곡읍',
        1 => '연천읍',
      ),
      'sibling_keys' => 
      array (
        0 => 'gyeonggi/yeoncheon/jeongok',
        1 => 'gyeonggi/yeoncheon/yeoncheon-eup',
      ),
    ),
    'incheon/jung/sinpo' => 
    array (
      'key' => 'incheon/jung/sinpo',
      'sido' => 'incheon',
      'gu' => 'incheon/jung',
      'name' => '신포동',
      'slug' => 'sinpo',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '인천역',
        1 => '신포국제시장',
        2 => '차이나타운',
      ),
      'area' => '인천 중구 신포동',
      'lat' => 37.46262,
      'lng' => 126.61136,
      'url' => '/incheon/jung/sinpo/',
      'shops' => 
      array (
        0 => 'sinpo-1',
        1 => 'sinpo-2',
        2 => 'sinpo-3',
      ),
      'siblings' => 
      array (
        0 => '영종동',
        1 => '운서동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/jung/yeongjong',
        1 => 'incheon/jung/unseo',
      ),
    ),
    'incheon/jung/yeongjong' => 
    array (
      'key' => 'incheon/jung/yeongjong',
      'sido' => 'incheon',
      'gu' => 'incheon/jung',
      'name' => '영종동',
      'slug' => 'yeongjong',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '영종하늘도시',
        1 => '인천대교',
        2 => '구읍뱃터',
      ),
      'area' => '인천 중구 영종동',
      'lat' => 37.47974,
      'lng' => 126.61976,
      'url' => '/incheon/jung/yeongjong/',
      'shops' => 
      array (
        0 => 'yeongjong-1',
        1 => 'yeongjong-2',
        2 => 'yeongjong-3',
        3 => 'yeongjong-4',
      ),
      'siblings' => 
      array (
        0 => '신포동',
        1 => '운서동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/jung/sinpo',
        1 => 'incheon/jung/unseo',
      ),
    ),
    'incheon/jung/unseo' => 
    array (
      'key' => 'incheon/jung/unseo',
      'sido' => 'incheon',
      'gu' => 'incheon/jung',
      'name' => '운서동',
      'slug' => 'unseo',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '운서역',
        1 => '인천국제공항',
        2 => '하늘문화센터',
      ),
      'area' => '인천 중구 운서동',
      'lat' => 37.47582,
      'lng' => 126.63014,
      'url' => '/incheon/jung/unseo/',
      'shops' => 
      array (
        0 => 'unseo-1',
        1 => 'unseo-2',
        2 => 'unseo-3',
        3 => 'unseo-4',
      ),
      'siblings' => 
      array (
        0 => '신포동',
        1 => '영종동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/jung/sinpo',
        1 => 'incheon/jung/yeongjong',
      ),
    ),
    'incheon/dong/songhyeon' => 
    array (
      'key' => 'incheon/dong/songhyeon',
      'sido' => 'incheon',
      'gu' => 'incheon/dong',
      'name' => '송현동',
      'slug' => 'songhyeon',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '동인천역',
        1 => '송현시장',
        2 => '수도국산',
      ),
      'area' => '인천 동구 송현동',
      'lat' => 37.48301,
      'lng' => 126.6377,
      'url' => '/incheon/dong/songhyeon/',
      'shops' => 
      array (
        0 => 'songhyeon-1',
        1 => 'songhyeon-2',
        2 => 'songhyeon-3',
      ),
      'siblings' => 
      array (
        0 => '화수동',
        1 => '만석동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/dong/hwasu',
        1 => 'incheon/dong/manseok',
      ),
    ),
    'incheon/dong/hwasu' => 
    array (
      'key' => 'incheon/dong/hwasu',
      'sido' => 'incheon',
      'gu' => 'incheon/dong',
      'name' => '화수동',
      'slug' => 'hwasu',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '화도진공원',
        1 => '화수부두',
        2 => '만석고가',
      ),
      'area' => '인천 동구 화수동',
      'lat' => 37.48094,
      'lng' => 126.64614,
      'url' => '/incheon/dong/hwasu/',
      'shops' => 
      array (
        0 => 'hwasu-1',
        1 => 'hwasu-2',
        2 => 'hwasu-3',
      ),
      'siblings' => 
      array (
        0 => '송현동',
        1 => '만석동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/dong/songhyeon',
        1 => 'incheon/dong/manseok',
      ),
    ),
    'incheon/dong/manseok' => 
    array (
      'key' => 'incheon/dong/manseok',
      'sido' => 'incheon',
      'gu' => 'incheon/dong',
      'name' => '만석동',
      'slug' => 'manseok',
      'kind' => 'ind',
      'anchors' => 
      array (
        0 => '만석부두',
        1 => '북성포구',
        2 => '인천 내항',
      ),
      'area' => '인천 동구 만석동',
      'lat' => 37.48301,
      'lng' => 126.63518,
      'url' => '/incheon/dong/manseok/',
      'shops' => 
      array (
        0 => 'manseok-1',
        1 => 'manseok-2',
        2 => 'manseok-3',
        3 => 'manseok-4',
      ),
      'siblings' => 
      array (
        0 => '송현동',
        1 => '화수동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/dong/songhyeon',
        1 => 'incheon/dong/hwasu',
      ),
    ),
    'incheon/michuhol/juan' => 
    array (
      'key' => 'incheon/michuhol/juan',
      'sido' => 'incheon',
      'gu' => 'incheon/michuhol',
      'name' => '주안동',
      'slug' => 'juan',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '주안역',
        1 => '주안역 지하상가',
        2 => '석바위시장',
      ),
      'area' => '인천 미추홀구 주안동',
      'lat' => 37.4707,
      'lng' => 126.65896,
      'url' => '/incheon/michuhol/juan/',
      'shops' => 
      array (
        0 => 'juan-1',
        1 => 'juan-2',
        2 => 'juan-3',
        3 => 'juan-4',
      ),
      'siblings' => 
      array (
        0 => '용현동',
        1 => '학익동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/michuhol/yonghyeon',
        1 => 'incheon/michuhol/hagik',
      ),
    ),
    'incheon/michuhol/yonghyeon' => 
    array (
      'key' => 'incheon/michuhol/yonghyeon',
      'sido' => 'incheon',
      'gu' => 'incheon/michuhol',
      'name' => '용현동',
      'slug' => 'yonghyeon',
      'kind' => 'uni',
      'anchors' => 
      array (
        0 => '인하대학교',
        1 => '용현시장',
        2 => '수봉공원',
      ),
      'area' => '인천 미추홀구 용현동',
      'lat' => 37.46998,
      'lng' => 126.65107,
      'url' => '/incheon/michuhol/yonghyeon/',
      'shops' => 
      array (
        0 => 'yonghyeon-1',
        1 => 'yonghyeon-2',
        2 => 'yonghyeon-3',
        3 => 'yonghyeon-4',
      ),
      'siblings' => 
      array (
        0 => '주안동',
        1 => '학익동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/michuhol/juan',
        1 => 'incheon/michuhol/hagik',
      ),
    ),
    'incheon/michuhol/hagik' => 
    array (
      'key' => 'incheon/michuhol/hagik',
      'sido' => 'incheon',
      'gu' => 'incheon/michuhol',
      'name' => '학익동',
      'slug' => 'hagik',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '학익동 아파트 단지',
        1 => '인천지방법원',
        2 => '문학산',
      ),
      'area' => '인천 미추홀구 학익동',
      'lat' => 37.4679,
      'lng' => 126.65064,
      'url' => '/incheon/michuhol/hagik/',
      'shops' => 
      array (
        0 => 'hagik-1',
        1 => 'hagik-2',
        2 => 'hagik-3',
        3 => 'hagik-4',
        4 => 'hagik-5',
      ),
      'siblings' => 
      array (
        0 => '주안동',
        1 => '용현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/michuhol/juan',
        1 => 'incheon/michuhol/yonghyeon',
      ),
    ),
    'incheon/yeonsu/songdo' => 
    array (
      'key' => 'incheon/yeonsu/songdo',
      'sido' => 'incheon',
      'gu' => 'incheon/yeonsu',
      'name' => '송도동',
      'slug' => 'songdo',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '송도센트럴파크',
        1 => '트리플스트리트',
        2 => '인천대학교 송도캠퍼스',
      ),
      'area' => '인천 연수구 송도동',
      'lat' => 37.41774,
      'lng' => 126.67153,
      'url' => '/incheon/yeonsu/songdo/',
      'shops' => 
      array (
        0 => 'songdo-1',
        1 => 'songdo-2',
        2 => 'songdo-3',
      ),
      'siblings' => 
      array (
        0 => '연수동',
        1 => '동춘동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/yeonsu/yeonsu-dong',
        1 => 'incheon/yeonsu/dongchun',
      ),
    ),
    'incheon/yeonsu/yeonsu-dong' => 
    array (
      'key' => 'incheon/yeonsu/yeonsu-dong',
      'sido' => 'incheon',
      'gu' => 'incheon/yeonsu',
      'name' => '연수동',
      'slug' => 'yeonsu-dong',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '원인재역',
        1 => '연수구청',
        2 => '승기천',
      ),
      'area' => '인천 연수구 연수동',
      'lat' => 37.41217,
      'lng' => 126.68257,
      'url' => '/incheon/yeonsu/yeonsu-dong/',
      'shops' => 
      array (
        0 => 'yeonsu-dong-1',
        1 => 'yeonsu-dong-2',
        2 => 'yeonsu-dong-3',
        3 => 'yeonsu-dong-4',
      ),
      'siblings' => 
      array (
        0 => '송도동',
        1 => '동춘동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/yeonsu/songdo',
        1 => 'incheon/yeonsu/dongchun',
      ),
    ),
    'incheon/yeonsu/dongchun' => 
    array (
      'key' => 'incheon/yeonsu/dongchun',
      'sido' => 'incheon',
      'gu' => 'incheon/yeonsu',
      'name' => '동춘동',
      'slug' => 'dongchun',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '동춘역',
        1 => '청량산',
        2 => '연수역',
      ),
      'area' => '인천 연수구 동춘동',
      'lat' => 37.41579,
      'lng' => 126.68928,
      'url' => '/incheon/yeonsu/dongchun/',
      'shops' => 
      array (
        0 => 'dongchun-1',
        1 => 'dongchun-2',
        2 => 'dongchun-3',
        3 => 'dongchun-4',
        4 => 'dongchun-5',
      ),
      'siblings' => 
      array (
        0 => '송도동',
        1 => '연수동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/yeonsu/songdo',
        1 => 'incheon/yeonsu/yeonsu-dong',
      ),
    ),
    'incheon/namdong/guwol' => 
    array (
      'key' => 'incheon/namdong/guwol',
      'sido' => 'incheon',
      'gu' => 'incheon/namdong',
      'name' => '구월동',
      'slug' => 'guwol',
      'kind' => 'of',
      'anchors' => 
      array (
        0 => '인천시청역',
        1 => '구월동 로데오거리',
        2 => '인천종합터미널',
      ),
      'area' => '인천 남동구 구월동',
      'lat' => 37.45819,
      'lng' => 126.72051,
      'url' => '/incheon/namdong/guwol/',
      'shops' => 
      array (
        0 => 'guwol-1',
        1 => 'guwol-2',
        2 => 'guwol-3',
        3 => 'guwol-4',
      ),
      'siblings' => 
      array (
        0 => '논현동',
        1 => '만수동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/namdong/nonhyeon-ic',
        1 => 'incheon/namdong/mansu',
      ),
    ),
    'incheon/namdong/nonhyeon-ic' => 
    array (
      'key' => 'incheon/namdong/nonhyeon-ic',
      'sido' => 'incheon',
      'gu' => 'incheon/namdong',
      'name' => '논현동',
      'slug' => 'nonhyeon-ic',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '소래포구역',
        1 => '호구포역',
        2 => '논현 택지지구',
      ),
      'area' => '인천 남동구 논현동',
      'lat' => 37.44194,
      'lng' => 126.73964,
      'url' => '/incheon/namdong/nonhyeon-ic/',
      'shops' => 
      array (
        0 => 'nonhyeon-ic-1',
        1 => 'nonhyeon-ic-2',
        2 => 'nonhyeon-ic-3',
        3 => 'nonhyeon-ic-4',
      ),
      'siblings' => 
      array (
        0 => '구월동',
        1 => '만수동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/namdong/guwol',
        1 => 'incheon/namdong/mansu',
      ),
    ),
    'incheon/namdong/mansu' => 
    array (
      'key' => 'incheon/namdong/mansu',
      'sido' => 'incheon',
      'gu' => 'incheon/namdong',
      'name' => '만수동',
      'slug' => 'mansu',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '만수동 아파트 단지',
        1 => '인천대공원',
        2 => '장수천',
      ),
      'area' => '인천 남동구 만수동',
      'lat' => 37.43685,
      'lng' => 126.74196,
      'url' => '/incheon/namdong/mansu/',
      'shops' => 
      array (
        0 => 'mansu-1',
        1 => 'mansu-2',
        2 => 'mansu-3',
        3 => 'mansu-4',
        4 => 'mansu-5',
      ),
      'siblings' => 
      array (
        0 => '구월동',
        1 => '논현동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/namdong/guwol',
        1 => 'incheon/namdong/nonhyeon-ic',
      ),
    ),
    'incheon/bupyeong/bupyeong-dong' => 
    array (
      'key' => 'incheon/bupyeong/bupyeong-dong',
      'sido' => 'incheon',
      'gu' => 'incheon/bupyeong',
      'name' => '부평동',
      'slug' => 'bupyeong-dong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '부평역',
        1 => '부평역 지하상가',
        2 => '부평문화의거리',
      ),
      'area' => '인천 부평구 부평동',
      'lat' => 37.50714,
      'lng' => 126.72796,
      'url' => '/incheon/bupyeong/bupyeong-dong/',
      'shops' => 
      array (
        0 => 'bupyeong-dong-1',
        1 => 'bupyeong-dong-2',
        2 => 'bupyeong-dong-3',
        3 => 'bupyeong-dong-4',
      ),
      'siblings' => 
      array (
        0 => '산곡동',
        1 => '십정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/bupyeong/sangok',
        1 => 'incheon/bupyeong/sipjeong',
      ),
    ),
    'incheon/bupyeong/sangok' => 
    array (
      'key' => 'incheon/bupyeong/sangok',
      'sido' => 'incheon',
      'gu' => 'incheon/bupyeong',
      'name' => '산곡동',
      'slug' => 'sangok',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '산곡역',
        1 => '원적산',
        2 => '산곡동 아파트 단지',
      ),
      'area' => '인천 부평구 산곡동',
      'lat' => 37.51072,
      'lng' => 126.71995,
      'url' => '/incheon/bupyeong/sangok/',
      'shops' => 
      array (
        0 => 'sangok-1',
        1 => 'sangok-2',
        2 => 'sangok-3',
        3 => 'sangok-4',
      ),
      'siblings' => 
      array (
        0 => '부평동',
        1 => '십정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/bupyeong/bupyeong-dong',
        1 => 'incheon/bupyeong/sipjeong',
      ),
    ),
    'incheon/bupyeong/sipjeong' => 
    array (
      'key' => 'incheon/bupyeong/sipjeong',
      'sido' => 'incheon',
      'gu' => 'incheon/bupyeong',
      'name' => '십정동',
      'slug' => 'sipjeong',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '동암역',
        1 => '열우물경기장',
        2 => '십정동 주택가',
      ),
      'area' => '인천 부평구 십정동',
      'lat' => 37.50176,
      'lng' => 126.72425,
      'url' => '/incheon/bupyeong/sipjeong/',
      'shops' => 
      array (
        0 => 'sipjeong-1',
        1 => 'sipjeong-2',
        2 => 'sipjeong-3',
      ),
      'siblings' => 
      array (
        0 => '부평동',
        1 => '산곡동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/bupyeong/bupyeong-dong',
        1 => 'incheon/bupyeong/sangok',
      ),
    ),
    'incheon/gyeyang/gyesan' => 
    array (
      'key' => 'incheon/gyeyang/gyesan',
      'sido' => 'incheon',
      'gu' => 'incheon/gyeyang',
      'name' => '계산동',
      'slug' => 'gyesan',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '계산역',
        1 => '계양산',
        2 => '계산택지 상권',
      ),
      'area' => '인천 계양구 계산동',
      'lat' => 37.54608,
      'lng' => 126.74832,
      'url' => '/incheon/gyeyang/gyesan/',
      'shops' => 
      array (
        0 => 'gyesan-1',
        1 => 'gyesan-2',
        2 => 'gyesan-3',
        3 => 'gyesan-4',
      ),
      'siblings' => 
      array (
        0 => '작전동',
        1 => '효성동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/gyeyang/jakjeon',
        1 => 'incheon/gyeyang/hyoseong',
      ),
    ),
    'incheon/gyeyang/jakjeon' => 
    array (
      'key' => 'incheon/gyeyang/jakjeon',
      'sido' => 'incheon',
      'gu' => 'incheon/gyeyang',
      'name' => '작전동',
      'slug' => 'jakjeon',
      'kind' => 'ap',
      'anchors' => 
      array (
        0 => '작전역',
        1 => '작전동 아파트 단지',
        2 => '굴포천',
      ),
      'area' => '인천 계양구 작전동',
      'lat' => 37.53606,
      'lng' => 126.73058,
      'url' => '/incheon/gyeyang/jakjeon/',
      'shops' => 
      array (
        0 => 'jakjeon-1',
        1 => 'jakjeon-2',
        2 => 'jakjeon-3',
        3 => 'jakjeon-4',
        4 => 'jakjeon-5',
      ),
      'siblings' => 
      array (
        0 => '계산동',
        1 => '효성동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/gyeyang/gyesan',
        1 => 'incheon/gyeyang/hyoseong',
      ),
    ),
    'incheon/gyeyang/hyoseong' => 
    array (
      'key' => 'incheon/gyeyang/hyoseong',
      'sido' => 'incheon',
      'gu' => 'incheon/gyeyang',
      'name' => '효성동',
      'slug' => 'hyoseong',
      'kind' => 'rs',
      'anchors' => 
      array (
        0 => '효성동 주택가',
        1 => '원적산',
        2 => '천마산',
      ),
      'area' => '인천 계양구 효성동',
      'lat' => 37.53466,
      'lng' => 126.72925,
      'url' => '/incheon/gyeyang/hyoseong/',
      'shops' => 
      array (
        0 => 'hyoseong-1',
        1 => 'hyoseong-2',
      ),
      'siblings' => 
      array (
        0 => '계산동',
        1 => '작전동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/gyeyang/gyesan',
        1 => 'incheon/gyeyang/jakjeon',
      ),
    ),
    'incheon/seo/cheongna' => 
    array (
      'key' => 'incheon/seo/cheongna',
      'sido' => 'incheon',
      'gu' => 'incheon/seo',
      'name' => '청라동',
      'slug' => 'cheongna',
      'kind' => 'nt',
      'anchors' => 
      array (
        0 => '청라국제도시역',
        1 => '청라호수공원',
        2 => '커낼웨이',
      ),
      'area' => '인천 서구 청라동',
      'lat' => 37.53827,
      'lng' => 126.66959,
      'url' => '/incheon/seo/cheongna/',
      'shops' => 
      array (
        0 => 'cheongna-1',
        1 => 'cheongna-2',
        2 => 'cheongna-3',
      ),
      'siblings' => 
      array (
        0 => '검암동',
        1 => '가정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/seo/geomam',
        1 => 'incheon/seo/gajeong',
      ),
    ),
    'incheon/seo/geomam' => 
    array (
      'key' => 'incheon/seo/geomam',
      'sido' => 'incheon',
      'gu' => 'incheon/seo',
      'name' => '검암동',
      'slug' => 'geomam',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '검암역',
        1 => '아라뱃길',
        2 => '검암 역세권',
      ),
      'area' => '인천 서구 검암동',
      'lat' => 37.55474,
      'lng' => 126.67808,
      'url' => '/incheon/seo/geomam/',
      'shops' => 
      array (
        0 => 'geomam-1',
        1 => 'geomam-2',
        2 => 'geomam-3',
        3 => 'geomam-4',
      ),
      'siblings' => 
      array (
        0 => '청라동',
        1 => '가정동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/seo/cheongna',
        1 => 'incheon/seo/gajeong',
      ),
    ),
    'incheon/seo/gajeong' => 
    array (
      'key' => 'incheon/seo/gajeong',
      'sido' => 'incheon',
      'gu' => 'incheon/seo',
      'name' => '가정동',
      'slug' => 'gajeong',
      'kind' => 'st',
      'anchors' => 
      array (
        0 => '가정역',
        1 => '루원시티',
        2 => '봉수대로',
      ),
      'area' => '인천 서구 가정동',
      'lat' => 37.54784,
      'lng' => 126.67515,
      'url' => '/incheon/seo/gajeong/',
      'shops' => 
      array (
        0 => 'gajeong-1',
        1 => 'gajeong-2',
        2 => 'gajeong-3',
        3 => 'gajeong-4',
        4 => 'gajeong-5',
      ),
      'siblings' => 
      array (
        0 => '청라동',
        1 => '검암동',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/seo/cheongna',
        1 => 'incheon/seo/geomam',
      ),
    ),
    'incheon/ganghwa/ganghwa-eup' => 
    array (
      'key' => 'incheon/ganghwa/ganghwa-eup',
      'sido' => 'incheon',
      'gu' => 'incheon/ganghwa',
      'name' => '강화읍',
      'slug' => 'ganghwa-eup',
      'kind' => 'md',
      'anchors' => 
      array (
        0 => '강화풍물시장',
        1 => '고려궁지',
        2 => '강화버스터미널',
      ),
      'area' => '인천 강화군 강화읍',
      'lat' => 37.73769,
      'lng' => 126.49422,
      'url' => '/incheon/ganghwa/ganghwa-eup/',
      'shops' => 
      array (
        0 => 'ganghwa-eup-1',
        1 => 'ganghwa-eup-2',
        2 => 'ganghwa-eup-3',
      ),
      'siblings' => 
      array (
        0 => '길상면',
        1 => '화도면',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/ganghwa/gilsang',
        1 => 'incheon/ganghwa/hwado',
      ),
    ),
    'incheon/ganghwa/gilsang' => 
    array (
      'key' => 'incheon/ganghwa/gilsang',
      'sido' => 'incheon',
      'gu' => 'incheon/ganghwa',
      'name' => '길상면',
      'slug' => 'gilsang',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '전등사',
        1 => '초지진',
        2 => '온수리',
      ),
      'area' => '인천 강화군 길상면',
      'lat' => 37.75871,
      'lng' => 126.48365,
      'url' => '/incheon/ganghwa/gilsang/',
      'shops' => 
      array (
        0 => 'gilsang-1',
        1 => 'gilsang-2',
        2 => 'gilsang-3',
      ),
      'siblings' => 
      array (
        0 => '강화읍',
        1 => '화도면',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/ganghwa/ganghwa-eup',
        1 => 'incheon/ganghwa/hwado',
      ),
    ),
    'incheon/ganghwa/hwado' => 
    array (
      'key' => 'incheon/ganghwa/hwado',
      'sido' => 'incheon',
      'gu' => 'incheon/ganghwa',
      'name' => '화도면',
      'slug' => 'hwado',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '마니산',
        1 => '동막해변',
        2 => '함허동천',
      ),
      'area' => '인천 강화군 화도면',
      'lat' => 37.74619,
      'lng' => 126.48847,
      'url' => '/incheon/ganghwa/hwado/',
      'shops' => 
      array (
        0 => 'hwado-1',
        1 => 'hwado-2',
      ),
      'siblings' => 
      array (
        0 => '강화읍',
        1 => '길상면',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/ganghwa/ganghwa-eup',
        1 => 'incheon/ganghwa/gilsang',
      ),
    ),
    'incheon/ongjin/yeongheung' => 
    array (
      'key' => 'incheon/ongjin/yeongheung',
      'sido' => 'incheon',
      'gu' => 'incheon/ongjin',
      'name' => '영흥면',
      'slug' => 'yeongheung',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '영흥대교',
        1 => '십리포해수욕장',
        2 => '장경리해변',
      ),
      'area' => '인천 옹진군 영흥면',
      'lat' => 37.44112,
      'lng' => 126.62661,
      'url' => '/incheon/ongjin/yeongheung/',
      'shops' => 
      array (
        0 => 'yeongheung-1',
        1 => 'yeongheung-2',
      ),
      'siblings' => 
      array (
        0 => '백령면',
        1 => '덕적면',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/ongjin/baengnyeong',
        1 => 'incheon/ongjin/deokjeok',
      ),
    ),
    'incheon/ongjin/baengnyeong' => 
    array (
      'key' => 'incheon/ongjin/baengnyeong',
      'sido' => 'incheon',
      'gu' => 'incheon/ongjin',
      'name' => '백령면',
      'slug' => 'baengnyeong',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '백령도',
        1 => '두무진',
        2 => '사곶해변',
      ),
      'area' => '인천 옹진군 백령면',
      'lat' => 37.44434,
      'lng' => 126.63615,
      'url' => '/incheon/ongjin/baengnyeong/',
      'shops' => 
      array (
        0 => 'baengnyeong-1',
        1 => 'baengnyeong-2',
      ),
      'siblings' => 
      array (
        0 => '영흥면',
        1 => '덕적면',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/ongjin/yeongheung',
        1 => 'incheon/ongjin/deokjeok',
      ),
    ),
    'incheon/ongjin/deokjeok' => 
    array (
      'key' => 'incheon/ongjin/deokjeok',
      'sido' => 'incheon',
      'gu' => 'incheon/ongjin',
      'name' => '덕적면',
      'slug' => 'deokjeok',
      'kind' => 'tr',
      'anchors' => 
      array (
        0 => '덕적도',
        1 => '서포리해변',
        2 => '비조봉',
      ),
      'area' => '인천 옹진군 덕적면',
      'lat' => 37.43755,
      'lng' => 126.63963,
      'url' => '/incheon/ongjin/deokjeok/',
      'shops' => 
      array (
        0 => 'deokjeok-1',
        1 => 'deokjeok-2',
      ),
      'siblings' => 
      array (
        0 => '영흥면',
        1 => '백령면',
      ),
      'sibling_keys' => 
      array (
        0 => 'incheon/ongjin/yeongheung',
        1 => 'incheon/ongjin/baengnyeong',
      ),
    ),
  ),
);
