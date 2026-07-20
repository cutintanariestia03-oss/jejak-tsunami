# Jejak Tsunami

Aplikasi blog pribadi bertema sejarah, edukasi, dan kesiapsiagaan bencana tsunami Aceh, dibangun menggunakan Laravel.Proyek ini dibangun secara khusus untuk menjadi wadah digital perwakilan Museum Tsunami Aceh. Proyek ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web Lanjut, dengan misi utama membawa arsip sejarah ke ranah online.

## Deskripsi Aplikasi

Jejak Tsunami memungkinkan penulis (setelah login) untuk membuat, mengedit, dan menghapus artikel serta kategori miliknya sendiri. Pengunjung umum dapat membaca artikel yang telah dipublikasikan tanpa perlu login, mencari artikel berdasarkan judul, dan memfilter berdasarkan kategori.

## Fitur

- Autentikasi pengguna (register, login, logout) menggunakan Laravel Breeze
- CRUD artikel dengan upload thumbnail dan status draft/publikasi
- CRUD kategori
- Halaman publik: beranda, detail artikel, pencarian, filter kategori
- Halaman statis: Sejarah, Kisah & Kenangan, Edukasi, Galeri, Tentang Kami, Kebijakan Privasi, Syarat & Ketentuan, Kontak
- Proteksi kepemilikan: pengguna hanya dapat mengedit/menghapus artikel dan kategori miliknya sendiri
- Artikel Tersimpan (Bookmark):Pengguna yang sudah login dapat menyimpan artikel ke dalam koleksi bacaan pribadi.


## Teknologi yang Digunakan

- Laravel 10
- MySQL (via XAMPP)
- Laravel Breeze (autentikasi)
- Tailwind CSS

## Cara Instalasi

1. Clone repository ini
```
   git clone https://github.com/cutintanariestia03-oss/jejak-tsunami.git
   cd jejak-tsunami
```

2. Install dependency PHP
```
   composer install
```

3. Install dependency Node.js
```
   npm install
   npm run build
```

4. Salin file environment
```
   copy .env.example .env
```

5. Generate application key
```
   php artisan key:generate
```

6. Buat database baru bernama `jejak_tsunami` di MySQL/phpMyAdmin, lalu sesuaikan konfigurasi database di file `.env`:
```
   DB_DATABASE=jejak_tsunami
   DB_USERNAME=root
   DB_PASSWORD=
```

7. Jalankan migration
```
   php artisan migrate
```

8. Jalankan seeder untuk mengisi data contoh
```
   php artisan db:seed
```

9. Buat symbolic link untuk storage (agar gambar dapat ditampilkan)
```
   php artisan storage:link
```

10. Jalankan server
```
    php artisan serve
```

11. Buka `http://127.0.0.1:8000` di browser

## Akun Demo

- Email: `demojejaktsunami@gmail.com`
- Password: `demo12345`



## Sumber

Beberapa konten artikel disadur dan ditulis ulang dari liputan publik seputar peringatan tsunami Aceh 2004.
Ikon dan gambar bersumber dari referensi edukasi kebencanaan.