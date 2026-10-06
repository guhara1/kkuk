/*! kkuk-care ui · 의존성 없음 / 7KB 미만 / 그누보드5 jQuery와 충돌 없음 */
(function () {
  'use strict';

  /* ---- 1. 다크/라이트 토글 (localStorage 유지, FOUC 방지는 head.php 인라인) ---- */
  var KEY = 'kkuk-theme';
  function apply(t) {
    if (t === 'dark' || t === 'light') document.documentElement.setAttribute('data-theme', t);
    else document.documentElement.removeAttribute('data-theme');
    var btn = document.querySelector('[data-kkuk-theme]');
    if (btn) {
      var dark = document.documentElement.getAttribute('data-theme') === 'dark' ||
        (!document.documentElement.getAttribute('data-theme') &&
          window.matchMedia('(prefers-color-scheme: dark)').matches);
      btn.setAttribute('aria-label', dark ? '밝은 화면으로 전환' : '어두운 화면으로 전환');
      btn.setAttribute('aria-pressed', dark ? 'true' : 'false');
    }
  }
  document.addEventListener('click', function (e) {
    var b = e.target.closest ? e.target.closest('[data-kkuk-theme]') : null;
    if (!b) return;
    var cur = document.documentElement.getAttribute('data-theme');
    if (!cur) cur = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    var next = cur === 'dark' ? 'light' : 'dark';
    try { localStorage.setItem(KEY, next); } catch (_) {}
    apply(next);
  });
  try { apply(localStorage.getItem(KEY)); } catch (_) { apply(null); }

  /* ---- 2. 전화 전환 집계 훅 (GA4 / 네이버 애널리틱스 공통) ---- */
  document.addEventListener('click', function (e) {
    var a = e.target.closest ? e.target.closest('a[href^="tel:"]') : null;
    if (!a) return;
    var label = a.getAttribute('data-kkuk-label') || '출장마사지 전화연결';
    var place = a.getAttribute('data-kkuk-place') || '';
    if (typeof window.gtag === 'function') {
      window.gtag('event', 'call_click', { event_category: 'cta', event_label: label, place: place });
    }
    if (window.wcs && typeof window.wcs_do === 'function') {
      try { window.wcs.inflow(); window.wcs_do(); } catch (_) {}
    }
    document.dispatchEvent(new CustomEvent('kkuk:call', { detail: { label: label, place: place } }));
  });

  /* ---- 3. 선택된 지역 칩을 가로 스크롤 중앙으로 ---- */
  function centerChip() {
    document.querySelectorAll('.k-chips--scroll').forEach(function (box) {
      var on = box.querySelector('[aria-current="page"], .k-chip--on');
      if (!on) return;
      var target = on.offsetLeft - (box.clientWidth / 2) + (on.offsetWidth / 2);
      box.scrollLeft = Math.max(0, target);
    });
  }

  /* ---- 4. 업소 필터 (업종 탭) ---- */
  function bindFilter() {
    var bar = document.querySelector('[data-kkuk-filter]');
    if (!bar) return;
    bar.addEventListener('click', function (e) {
      var b = e.target.closest('[data-filter]');
      if (!b) return;
      e.preventDefault();
      var v = b.getAttribute('data-filter');
      bar.querySelectorAll('[data-filter]').forEach(function (x) {
        x.classList.toggle('k-chip--on', x === b);
        x.setAttribute('aria-pressed', x === b ? 'true' : 'false');
      });
      var shown = 0;
      document.querySelectorAll('[data-shop-type]').forEach(function (card) {
        var hit = v === '*' || card.getAttribute('data-shop-type') === v;
        card.hidden = !hit;
        if (hit) shown++;
      });
      var empty = document.querySelector('[data-kkuk-empty]');
      if (empty) empty.hidden = shown > 0;
      var live = document.querySelector('[data-kkuk-live]');
      if (live) live.textContent = shown + '개 업소를 표시했습니다.';
    });
  }

  /* ---- 5. 본문 h2에 자동 앵커 id (AEO 딥링크) ---- */
  function anchorHeads() {
    var i = 0;
    document.querySelectorAll('.k-article h2').forEach(function (h) {
      if (!h.id) h.id = 'sec-' + (++i);
    });
  }

  function init() { centerChip(); bindFilter(); anchorHeads(); }
  if (document.readyState !== 'loading') init();
  else document.addEventListener('DOMContentLoaded', init);
})();
