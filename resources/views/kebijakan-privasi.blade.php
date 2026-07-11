<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kebijakan Privasi - Jejak Tsunami</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50">

    <nav class="bg-white border-b px-8 py-4 flex items-center">
        <div class="flex items-center gap-3">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-9 h-9 object-contain">
            <div>
                <p class="font-bold text-xl tracking-wide text-sky-700">Jejak Tsunami</p>
                <p class="text-xs text-slate-500">Museum Tsunami Aceh</p>
            </div>
        </div>

        <div class="hidden md:flex items-center gap-8 text-sm text-slate-600 ml-12">
            <a href="{{ route('home') }}" class="hover:text-slate-900">Beranda</a>
            <a href="{{ route('sejarah') }}" class="hover:text-slate-900">Sejarah</a>
            <a href="{{ route('kisah') }}" class="hover:text-slate-900">Kisah & Kenangan</a>
            <a href="{{ route('edukasi') }}" class="hover:text-slate-900">Edukasi</a>
            <a href="{{ route('galeri') }}" class="hover:text-slate-900">Galeri</a>
        </div>

        <div class="flex items-center gap-4 ml-auto">
            @auth
                <a href="{{ route('articles.index') }}" class="text-sm font-medium">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium mr-6">Masuk</a>
                <a href="{{ route('register') }}" class="text-sm bg-slate-900 text-white px-4 py-2 rounded-md">Daftar</a>
            @endauth
        </div>
    </nav>

    <div class="max-w-3xl mx-auto px-8 py-16">

        <h1 class="text-2xl font-semibold mb-2">Kebijakan Privasi</h1>
        <p class="text-sm text-gray-500 mb-8">Terakhir diperbarui: {{ date('d F Y') }}</p>

        <div class="space-y-6 text-gray-700 leading-relaxed">
            <div>
                <h2 class="font-semibold text-lg mb-2">1. Informasi yang Kami Kumpulkan</h2>
                <p class="text-justify">
                    Saat kamu mendaftar sebagai penulis di Jejak Tsunami, kami mengumpulkan informasi dasar
                    seperti nama dan alamat email untuk keperluan pembuatan akun dan autentikasi.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">2. Penggunaan Informasi</h2>
                <p class="text-justify">
                    Informasi yang kamu berikan digunakan semata-mata untuk mengelola akun, memverifikasi
                    identitas penulis, dan menampilkan nama penulis pada artikel yang dipublikasikan.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">3. Keamanan Data</h2>
                <p class="text-justify">
                    Kami berupaya menjaga keamanan data pengguna dengan menyimpan kata sandi dalam bentuk
                    terenkripsi dan membatasi akses hanya kepada pemilik akun terkait.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">4. Konten Pengguna</h2>
                <p class="text-justify">
                    Artikel dan gambar yang diunggah oleh pengguna menjadi tanggung jawab penulis
                    masing-masing. Kami berhak menghapus konten yang melanggar hukum atau etika.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">5. Perubahan Kebijakan</h2>
                <p class="text-justify">
                    Kebijakan privasi ini dapat diperbarui sewaktu-waktu. Perubahan akan diumumkan melalui
                    halaman ini.
                </p>
            </div>
        </div>

        <a href="{{ route('home') }}" class="inline-block text-sm text-sky-600 hover:underline mt-8">&larr; Kembali ke beranda</a>
    </div>

    <footer class="border-t px-8 py-8">
        <p class="text-xs text-gray-600 text-center max-w-6xl mx-auto">
            &copy; {{ date('Y') }} Museum Tsunami Aceh. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>