# muhilman.com

Portofolio Muhammad Hilman berbasis Laravel 13 dan Blade. Tampilan desktop dan mobile mengadaptasi referensi Stitch.

## Menjalankan dengan Docker di Ubuntu/WSL

Jika .env belum tersedia, buat sekali dengan PHP 8.3+ dan Composer 2:

```bash
composer install
cp .env.example .env
php artisan key:generate
```

Kemudian jalankan:

```bash
docker compose up -d --build --wait
docker compose ps
```

Buka http://localhost:8080. Untuk mengganti port lokal, atur PORTFOLIO_PORT di .env sebelum menjalankan Compose.

Container menjalankan Apache dan PHP sebagai pengguna non-root pada port internal 8080. Compose menerbitkan port lokal saja. Image berisi salinan source, jadi jalankan kembali docker compose up -d --build setelah mengubah file. Untuk iterasi cepat di WSL tanpa rebuild, jalankan php artisan serve --port=8079.

## Mengedit situs

- config/portfolio.php memuat profil, tautan, dan studi kasus.
- config/stitch.php memuat navigasi, layanan, FAQ, dan katalog teknologi.
- resources/views/ memuat halaman dan komponen Blade.
- public/assets/ memuat CSS, foto WebP, logo teknologi, dan font lokal.
- licenses/ memuat lisensi aset pihak ketiga.

Terminal dan diagram merupakan ilustrasi. Foto lari disediakan oleh Muhammad Hilman.

## Sebelum publikasi

Tempatkan reverse proxy dengan TLS di depan service, gunakan APP_KEY yang terpisah untuk produksi, dan atur APP_URL serta penerusan skema HTTPS sesuai topologi deployment. Verifikasi asset dan tautan yang dihasilkan Laravel di domain tujuan. APP_DEBUG sudah dinonaktifkan lewat Compose. Jalankan composer audit --no-dev dan uji kembali Lighthouse dari URL HTTPS setelah deployment.

Image melayani direktori public/ saja, menolak dotfile, dan mengirim CSP serta header keamanan. Jangan commit .env atau dependensi vendor.

Canonical URL, Open Graph, dan sitemap memakai https://muhilman.com secara default.
Jika domain publik berbeda, ubah PORTFOLIO_URL di .env, lalu buat ulang container.
