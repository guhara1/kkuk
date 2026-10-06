/**
 * 파비콘 래스터 생성기
 *
 *   node tools/make_icons.js
 *
 * SVG 원본 두 개에서 PNG 를 만들고 ImageMagick 으로 favicon.ico 를 합친다.
 *   favicon.svg    탭 아이콘용. 배경 투명, 하트가 캔버스를 꽉 채운다.
 *   icon-tile.svg  홈화면·설치 아이콘용. iOS 가 투명 PNG 를 검게 깔아서 흰 배경을 둔다.
 *
 * 래스터화는 Chromium 으로 한다(ImageMagick 의 내장 SVG 렌더러는 곡선 품질이 떨어진다).
 */
const { chromium } = require('/opt/node-tools/node_modules/playwright');
const fs = require('fs');
const path = require('path');

const ASSET = path.join(__dirname, '../g5/plugin/kkuk/asset');
const OUT = path.join(ASSET, 'icons');

const JOBS = [
  { src: 'favicon.svg',   size: 16,  out: 'favicon-16.png',       bg: 'transparent' },
  { src: 'favicon.svg',   size: 32,  out: 'favicon-32.png',       bg: 'transparent' },
  { src: 'favicon.svg',   size: 48,  out: 'favicon-48.png',       bg: 'transparent' },
  { src: 'icon-tile.svg', size: 180, out: 'apple-touch-icon.png', bg: '#ffffff' },
  { src: 'icon-tile.svg', size: 192, out: 'icon-192.png',         bg: '#ffffff' },
  { src: 'icon-tile.svg', size: 512, out: 'icon-512.png',         bg: '#ffffff' },
];

(async () => {
  fs.mkdirSync(OUT, { recursive: true });
  const b = await chromium.launch();
  for (const j of JOBS) {
    const svg = fs.readFileSync(path.join(ASSET, j.src), 'utf8')
      .replace(/width="\d+" height="\d+"/, `width="${j.size}" height="${j.size}"`);
    const ctx = await b.newContext({
      viewport: { width: j.size, height: j.size },
      deviceScaleFactor: 1,
    });
    const p = await ctx.newPage();
    await p.setContent(
      `<body style="margin:0;background:${j.bg === 'transparent' ? 'transparent' : j.bg}">${svg}</body>`);
    await p.waitForTimeout(120);
    await p.screenshot({
      path: path.join(OUT, j.out),
      omitBackground: j.bg === 'transparent',
    });
    await ctx.close();
    console.log(`  ${j.out.padEnd(22)} ${j.size}x${j.size}`);
  }
  await b.close();
})();
