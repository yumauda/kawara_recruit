import { createHash } from 'crypto';
import { promises as fs } from 'fs';
import path from 'path';
import { glob } from 'glob';
import { fileURLToPath } from 'url';
import { dirname } from 'path';
import { copyFile, mkdir, readFile, writeFile } from 'fs/promises';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

const PROJECT_ROOT = path.resolve(__dirname, '..');
const SRC_ROOT = path.join(PROJECT_ROOT, 'src', 'images');
const DEST_ROOT = path.join(PROJECT_ROOT, 'images');

const CACHE_PATH = path.join(__dirname, '.sync-images-cache.json');
const CHANGED_LIST_PATH = path.join(__dirname, '.images-changed.json');

const IMAGE_EXTS = new Set(['.jpg', '.jpeg', '.png', '.gif', '.svg', '.webp']);

function sha1(buffer) {
  return createHash('sha1').update(buffer).digest('hex');
}

async function loadJson(filePath, fallback) {
  try {
    const raw = await readFile(filePath, 'utf8');
    return JSON.parse(raw);
  } catch {
    return fallback;
  }
}

function isImageFile(p) {
  return IMAGE_EXTS.has(path.extname(p).toLowerCase());
}

async function ensureDir(filePath) {
  await mkdir(path.dirname(filePath), { recursive: true });
}

async function syncOne(srcPath, cache) {
  const rel = path.relative(SRC_ROOT, srcPath);
  const destPath = path.join(DEST_ROOT, rel);

  const buf = await readFile(srcPath);
  const hash = sha1(buf);

  if (cache[rel] === hash) {
    return null;
  }

  await ensureDir(destPath);
  await copyFile(srcPath, destPath);
  cache[rel] = hash;
  return path.relative(PROJECT_ROOT, destPath).replaceAll(path.sep, '/');
}

async function syncAll() {
  const cache = await loadJson(CACHE_PATH, {});
  const srcFiles = await glob('**/*', { cwd: SRC_ROOT, absolute: true, nodir: true });

  const changed = [];
  for (const f of srcFiles) {
    if (!isImageFile(f)) continue;
    const out = await syncOne(f, cache);
    if (out) changed.push(out);
  }

  await writeFile(CACHE_PATH, JSON.stringify(cache, null, 2) + '\n', 'utf8');
  await writeFile(CHANGED_LIST_PATH, JSON.stringify(changed, null, 2) + '\n', 'utf8');

  if (changed.length) {
    console.log(`✓ Synced ${changed.length} changed image(s).`);
  } else {
    console.log('✓ No image changes to sync.');
  }
}

async function syncFromArgs() {
  const args = process.argv.slice(2).filter(Boolean);
  if (args.length === 0) {
    return syncAll();
  }

  const srcPathRaw = args[0];
  const absSrcPath = path.isAbsolute(srcPathRaw) ? srcPathRaw : path.resolve(PROJECT_ROOT, srcPathRaw);

  // chokidar-cli can pass directory events; ignore non-files gracefully
  try {
    const st = await fs.stat(absSrcPath);
    if (!st.isFile() || !isImageFile(absSrcPath)) {
      await writeFile(CHANGED_LIST_PATH, JSON.stringify([], null, 2) + '\n', 'utf8');
      return;
    }
  } catch {
    // If removed, we don't delete outputs because WebP等の生成物もあるため
    await writeFile(CHANGED_LIST_PATH, JSON.stringify([], null, 2) + '\n', 'utf8');
    return;
  }

  const cache = await loadJson(CACHE_PATH, {});
  const out = await syncOne(absSrcPath, cache);

  await writeFile(CACHE_PATH, JSON.stringify(cache, null, 2) + '\n', 'utf8');
  await writeFile(CHANGED_LIST_PATH, JSON.stringify(out ? [out] : [], null, 2) + '\n', 'utf8');

  if (out) {
    console.log('✓ Synced 1 changed image.');
  } else {
    console.log('✓ No image changes to sync.');
  }
}

syncFromArgs().catch((error) => {
  console.error('Error syncing images:', error);
  process.exit(1);
});

