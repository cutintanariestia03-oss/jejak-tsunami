<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Syarat & Ketentuan - Jejak Tsunami</title>
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

        <h1 class="text-2xl font-semibold mb-2">Syarat & Ketentuan</h1>
        <p class="text-sm text-gray-500 mb-8">Terakhir diperbarui: {{ date('d F Y') }}</p>

        <div class="space-y-6 text-gray-700 leading-relaxed">
            <div>
                <h2 class="font-semibold text-lg mb-2">1. Penerimaan Ketentuan</h2>
                <p class="text-justify">
                    Dengan mengakses dan menggunakan situs Jejak Tsunami, kamu dianggap telah membaca,
                    memahami, dan menyetujui seluruh syarat dan ketentuan yang berlaku di situs ini.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">2. Akun Pengguna</h2>
                <p class="text-justify">
                    Setiap pengguna yang mendaftar sebagai penulis bertanggung jawab penuh atas kerahasiaan
                    kata sandi dan seluruh aktivitas yang terjadi melalui akun miliknya.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">3. Konten yang Dipublikasikan</h2>
                <p class="text-justify">
                    Penulis bertanggung jawab penuh atas keaslian dan keakuratan artikel yang dipublikasikan.
                    Kami berhak menghapus konten yang mengandung unsur SARA, kekerasan, ujaran kebencian, atau
                    melanggar hukum yang berlaku.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">4. Hak Kekayaan Intelektual</h2>
                <p class="text-justify">
                    Seluruh konten yang diunggah tetap menjadi hak penulis masing-masing. Namun, dengan
                    mempublikasikan artikel di situs ini, penulis memberikan izin kepada Jejak Tsunami untuk
                    menampilkan konten tersebut secara publik.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">5. Batasan Tanggung Jawab</h2>
                <p class="text-justify">
                    Jejak Tsunami tidak bertanggung jawab atas kerugian yang timbul akibat penggunaan
                    informasi yang terdapat di situs ini, termasuk namun tidak terbatas pada kesalahan
                    interpretasi konten oleh pengguna.
                </p>
            </div>

            <div>
                <h2 class="font-semibold text-lg mb-2">6. Perubahan Ketentuan</h2>
                <p class="text-justify">
                    Kami berhak mengubah syarat dan ketentuan ini sewaktu-waktu. Perubahan akan berlaku
                    segera setelah dipublikasikan di halaman ini.
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