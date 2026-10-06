# 05. 배포 — Cloudflare Pages / 정적 호스팅

## 먼저 알아야 할 것 : Cloudflare Pages 는 PHP 를 실행하지 않습니다

Pages 는 **정적 파일 호스팅**입니다. 그누보드5는 PHP + MySQL 로 동작하므로 Pages 에 그대로 올릴 수 없습니다.
게다가 Pages **빌드 이미지에는 PHP 가 포함돼 있지 않습니다**(v1 은 5.6/7.2/7.4 만, v2 는 PHP 미지원).
따라서 `php tools/build_static.php` 를 Cloudflare 빌드 명령으로 넣는 방식도 동작하지 않습니다.

### 그래서 선택지는 둘입니다

| | A. 정적 사이트로 운영 | B. PHP 호스팅 + Cloudflare CDN |
|---|---|---|
| 호스팅 | Cloudflare Pages | 카페24 · 가비아 · AWS Lightsail 등 PHP 호스팅 |
| 지역·업소 페이지 | ✅ 그대로 동작 | ✅ 그대로 동작 |
| 게시판 · 회원 · 관리자 | ❌ 불가 (그누보드 미동작) | ✅ 동작 |
| 업소 정보 수정 | 시드 수정 → 재빌드 → 재배포 | 관리자 화면에서 바로 |
| 속도 · 비용 | 매우 빠름 / 무료 | 보통 / 월 비용 발생 |
| 추천 상황 | 디렉터리 사이트만 필요할 때 | 후기·문의 게시판을 운영할 때 |

**A안**이면 Pages 가 사이트 전체이고, **B안**이면 Cloudflare 는 DNS·CDN·WAF 만 담당합니다.
지금 단계(가상 데이터 검증)에서는 A안으로 화면을 공개해 보고, 운영은 B안으로 가는 방식도 흔합니다.

---

## A안 : Cloudflare Pages 로 배포하기

### 1. 정적 빌드 생성

```bash
php tools/build_static.php
```

`dist/` 가 만들어집니다.

```
dist/
  index.html
  seoul/index.html
  seoul/gangnam/index.html
  seoul/gangnam/yeoksam/index.html
  shop/yeoksam-1/index.html
  search/index.html         (클라이언트 검색)
  search-index.json
  img/shop/*.svg            업소 썸네일 908개
  asset/kkuk.css  kkuk.js
  sitemap.xml  rss.xml  robots.txt  404.html  _headers
```

| 항목 | 값 |
|---|---|
| 페이지 | 1,220개 |
| 총 파일 | 2,137개 |
| 용량 | 약 41 MB (zip 약 11 MB) |
| 평균 페이지 | 33 KB |

> 주소가 `/seoul/gangnam/` 형태로 유지됩니다. Pages 가 디렉터리의 `index.html` 을 자동으로 찾습니다.

### 2-1. 직접 업로드로 배포 (가장 간단, PHP 불필요)

Cloudflare 대시보드 → Workers & Pages → **Create → Pages → Upload assets**
→ `dist` 폴더를 통째로 끌어다 놓으면 끝입니다. **빌드 설정이 아예 필요 없습니다.**

명령줄을 쓴다면

```bash
npx wrangler pages deploy dist --project-name=kkuk
```

### 2-2. Git 연동으로 배포 ← **이 저장소가 채택한 방식**

Cloudflare 가 PHP 를 실행하지 못하므로 빌드는 로컬에서 하고 결과만 올립니다.
`dist/` 는 `.gitignore` 에서 제외돼 있어 **그대로 커밋**됩니다.

내용을 고친 뒤에는 아래 세 줄이면 재배포까지 끝납니다.

```bash
php tools/gen_data.php                                        # 시드를 고쳤을 때만
KKUK_BASE="https://kkuk-ary.pages.dev" php tools/build_static.php
git add dist && git commit -m "정적 빌드 갱신" && git push
```

푸시하면 Cloudflare Pages 가 자동으로 새 배포를 올립니다.

Cloudflare Pages 설정값

| 항목 | 값 |
|---|---|
| 프로덕션 분기 | `claude/inspiring-feynman-dc7rl5` (또는 병합 후 `main`) |
| 프레임워크 미리 설정 | **없음** |
| 빌드 명령 | **비워 둠** |
| **빌드 출력 디렉터리** | **`dist`** |
| 루트 디렉터리 | 비워 둠 (`/`) |

> 내용을 고칠 때마다 변경된 파일만 커밋되지만, 전면 재생성 시에는 수십 MB 가 쌓입니다.
> 이력이 너무 커지면 2-1(직접 업로드)로 바꾸고 `dist/` 를 다시 `.gitignore` 에 넣으면 됩니다.

### 3. 환경 변수

Pages → 설정 → 환경 변수에서 지정합니다. 빌드를 로컬에서 하는 경우에는 **빌드할 때 셸에서** 지정합니다.

| 변수 | 설명 | 예시 |
|---|---|---|
| `KKUK_BASE` | 사이트 절대주소 (canonical·사이트맵에 사용) | `https://kkuk-ary.pages.dev` |
| `KKUK_DEMO_DATA` | `false` 로 두면 색인 허용. **기본값 true = 전체 noindex** | `true` |
| `KKUK_BRAND` | 상호 | `마사지 지역가이드` |
| `KKUK_BRAND_SUB` | 헤더 보조 문구 | `서울 · 경기 · 인천` |
| `KKUK_SCHEMA_RATING` | 평점 구조화 데이터. 실제 후기 전까지 `false` | `false` |

```bash
KKUK_BASE="https://kkuk-ary.pages.dev" php tools/build_static.php
```

`KKUK_BASE` 를 지정하지 않으면 Cloudflare 가 주는 `CF_PAGES_URL` 을 쓰고, 그것도 없으면 기본값 `https://kkuk-ary.pages.dev` 가 들어갑니다.
**canonical 주소가 틀리면 색인이 꼬이므로 반드시 지정하세요.**

### 4. 색인 정책 주의

가상 업소 데이터를 쓰는 동안에는 기본값이 **전체 noindex + robots.txt 전면 차단**입니다.
`pages.dev` 임시 주소가 색인되면 나중에 실도메인과 중복 문서로 잡히므로, 이 기본값을 그대로 두는 편이 안전합니다.

실제 업소 정보로 교체하고 **실도메인을 연결한 뒤에만** `KKUK_DEMO_DATA=false` 로 바꾸세요.

### 5. 커스텀 도메인

Pages → 사용자 지정 도메인에서 도메인을 연결한 뒤, `KKUK_BASE` 를 그 도메인으로 바꿔 **다시 빌드·배포**해야 합니다.
canonical·sitemap 에 박히는 주소가 빌드 시점에 결정되기 때문입니다.

`pages.dev` 주소가 함께 색인되는 것을 막으려면, 실도메인 연결 후 `_headers` 에 다음을 추가하는 방법도 있습니다.

```
https://:project.pages.dev/*
  X-Robots-Tag: noindex
```

---

## A안의 제약

| 기능 | 상태 |
|---|---|
| 지역·업소 페이지 1,220개 | ✅ 동작 |
| 모바일 전화연결 바 | ✅ 동작 |
| JSON-LD · sitemap · rss · robots | ✅ 동작 |
| 검색 | ✅ 동작 (클라이언트 측 `search-index.json` 필터) |
| 업종 필터 · 다크모드 | ✅ 동작 |
| 그누보드 게시판 · 회원 · 관리자 | ❌ 불가 |
| 관리자에서 업소 수정 | ❌ 불가 — 시드 수정 후 재빌드 |

게시판이 필요해지면 B안(PHP 호스팅)으로 옮기면 됩니다.
**같은 템플릿·같은 데이터를 쓰므로 화면은 완전히 동일**하고, 이전 비용은 파일 복사와 DB 적재뿐입니다.

---

## B안 : PHP 호스팅 + Cloudflare

1. PHP 8.x + MySQL 호스팅에 그누보드5 설치
2. `docs/01-설치가이드.md` 대로 플러그인·테마 배치, `.htaccess` 적용
3. 도메인 네임서버를 Cloudflare 로 변경 → DNS 프록시(주황 구름) 켜기
4. Cloudflare 캐시 규칙에서 `/bbs/*`, `/adm/*` 는 캐시 제외

이 경우 Pages 프로젝트는 만들 필요가 없습니다.
