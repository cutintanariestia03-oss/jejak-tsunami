<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Tentang Kami - Jejak Tsunami</title>
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

        <div class="hidden md:flex flex-1 justify-end items-center gap-8 text-sm text-slate-600 mr-12">
            <a href="{{ route('home') }}" class="hover:text-slate-900">Beranda</a>
            <a href="{{ route('sejarah') }}" class="hover:text-slate-900">Sejarah</a>
            <a href="{{ route('kisah') }}" class="hover:text-slate-900">Kisah & Kenangan</a>
            <a href="{{ route('edukasi') }}" class="hover:text-slate-900">Edukasi</a>
            <a href="{{ route('galeri') }}" class="hover:text-slate-900">Galeri</a>
            <a href="{{ route('tentang') }}" class="hover:text-slate-900 font-medium border-b-2 border-sky-600 pb-1">Tentang Kami</a>
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

    <div class="relative text-white px-8 py-24 bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(15,23,42,0.85), rgba(15,23,42,0.4)), url('{{ asset('images/museum-aceh.jpg') }}');">
        <div class="max-w-3xl">
            <h1 class="text-3xl font-semibold mb-2">Tentang Kami</h1>
            <p class="text-slate-200">Mengenal lebih dekat Jejak Tsunami dan Museum Tsunami Aceh.</p>
        </div>
    </div>

    <div class="max-w-4xl mx-auto px-8 py-16">

        <h2 class="text-2xl font-semibold mb-4">Tentang Jejak Tsunami</h2>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Jejak Tsunami adalah ruang digital yang dibuat untuk mengenang, mendokumentasikan, dan mengedukasi
            masyarakat tentang peristiwa tsunami Aceh pada 26 Desember 2004. Melalui platform ini, kami berharap
            generasi masa kini dan mendatang dapat memahami sejarah, mengambil hikmah dari kisah para penyintas,
            serta lebih siap menghadapi potensi bencana serupa di masa depan.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Website ini dikembangkan sebagai bagian dari proyek pembelajaran pemrograman web, dengan
            harapan dapat menjadi kontribusi kecil dalam upaya menjaga ingatan kolektif tentang salah satu
            peristiwa paling bersejarah bagi masyarakat Aceh dan Indonesia.
        </p>

        <h2 class="text-2xl font-semibold mb-4 mt-10">Tentang Museum Tsunami Aceh</h2>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Museum Tsunami Aceh adalah institusi resmi yang didirikan di Banda Aceh sebagai monumen peringatan
            sekaligus pusat edukasi kebencanaan. Diresmikan pada 23 Februari 2009, museum ini dirancang oleh
            M. Ridwan Kamil dengan konsep arsitektur yang terinspirasi dari Rumoh Aceh, rumah tradisional
            masyarakat setempat.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">
            Selain berfungsi sebagai ruang refleksi dan pengingat bagi generasi mendatang, museum ini juga
            berperan sebagai tempat evakuasi darurat apabila sewaktu-waktu bencana serupa terjadi kembali di
            masa depan.
        </p>

        <a href="{{ route('home') }}" class="inline-block text-sm text-sky-600 hover:underline mt-4">&larr; Kembali ke beranda</a>
    </div>

    <footer class="border-t px-8 py-8">
        <p class="text-xs text-gray-600 text-center max-w-6xl mx-auto">
            &copy; {{ date('Y') }} Museum Tsunami Aceh. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>