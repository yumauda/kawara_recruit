import imagemin from 'imagemin';
import imageminMozjpeg from 'imagemin-mozjpeg';
import imageminPngquant from 'imagemin-pngquant';
import imageminSvgo from 'imagemin-svgo';
import imageminWebp from 'imagemin-webp';
import { glob } from 'glob';
import { createHash } from 'crypto';
import { promises as fs } from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const CACHE_PATH = path.join(__dirname, '.compress-images-cache.json');
const CHANGED_LIST_PATH = path.join(__dirname, '.images-changed.json');

function sha1(buffer) {
  return createHash('sha1').update(buffer).digest('hex');
}

async function loadJson(filePath, fallback) {
  try {
    const raw = await fs.readFile(filePath, 'utf8');
    return JSON.parse(raw);
  } catch {
    return fallback;
  }
}

async function writeJson(filePath, value) {
  await fs.writeFile(filePath, JSON.stringify(value, null, 2) + '\n', 'utf8');
}

async function resolveTargets() {
  // sync-images.js が書き出す「今回変更のあった images/ 配下のファイル一覧」を優先
  const changed = await loadJson(CHANGED_LIST_PATH, null);
  if (Array.isArray(changed)) {
    if (changed.length === 0) return [];
    return changed.map((p) => path.resolve(process.cwd(), p));
  }

  // 変更リストが無い場合は従来通り全対象（手動実行/初回向け）
  return await glob('images/**/*.{jpg,jpeg,png,gif,svg}', {
    absolute: true,
    nodir: true,
  });
}

async function compressImages() {
  const imageFiles = await resolveTargets();
  const cache = await loadJson(CACHE_PATH, {});

  console.log(`Found ${imageFiles.length} images to compress...`);

  for (const file of imageFiles) {
    // 変更リストにディレクトリが混ざっても落ちないように
    try {
      const st = await fs.stat(file);
      if (!st.isFile()) continue;
    } catch {
      continue;
    }

    const dir = path.dirname(file);
    const ext = path.extname(file).toLowerCase();

    const beforeBuf = await fs.readFile(file);
    const beforeHash = sha1(beforeBuf);
    if (cache[file] === beforeHash) {
      continue;
    }

    // 元の画像を圧縮
    await imagemin([file], {
      destination: dir,
      plugins: [
        imageminMozjpeg({ quality: 80 }),
        imageminPngquant({ quality: [0.65, 0.9] }),
        imageminSvgo({
          plugins: [{ name: 'removeViewBox', active: false }]
        })
      ]
    });

    // JPGとPNGをWebPに変換
    if (ext === '.jpg' || ext === '.jpeg' || ext === '.png') {
      await imagemin([file], {
        destination: dir,
        plugins: [
          imageminWebp({ quality: 80 })
        ]
      });
      console.log(`✓ Created WebP: ${path.basename(file, ext)}.webp`);
    }

    // 圧縮後の内容でキャッシュ更新（次回以降、同一ファイルは再圧縮しない）
    const afterBuf = await fs.readFile(file);
    cache[file] = sha1(afterBuf);
  }

  await writeJson(CACHE_PATH, cache);

  console.log('✓ Image compression and WebP conversion complete!');
}

compressImages().catch(error => {
  console.error('Error compressing images:', error);
  process.exit(1);
});
