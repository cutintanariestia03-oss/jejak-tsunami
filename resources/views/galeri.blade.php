<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Galeri - Jejak Tsunami</title>
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
            <a href="{{ route('galeri') }}" class="text-slate-900 font-medium border-b-2 border-sky-600 pb-1">Galeri</a>
            <a href="{{ route('tentang') }}" class="hover:text-slate-900">Tentang Kami</a>
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
            <h1 class="text-3xl font-semibold mb-2">Galeri & Arsip</h1>
            <p class="text-slate-200">Dokumentasi foto seputar sejarah dan dampak tsunami Aceh.</p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-8 py-16">

        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/1.jpg') }}" class="w-full h-52 object-cover hover:scale-105 transition duration-300">
                <p class="text-xs text-gray-800 px-3 py-2">Reruntuhan bangunan pascatsunami</p>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/2.jpg') }}" class="w-full h-52 object-cover hover:scale-105 transition duration-300">
                <p class="text-xs text-gray-800 px-3 py-2">Kawasan permukiman yang terendam</p>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/3.jpg') }}" class="w-full h-52 object-cover hover:scale-105 transition duration-300">
                <p class="text-xs text-gray-800 px-3 py-2">Puing bangunan di pesisir</p>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/4.jpg') }}" class="w-full h-52 object-cover hover:scale-105 transition duration-300">
                <p class="text-xs text-gray-800 px-3 py-2">Warga menyaksikan dampak bencana</p>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/5.jpg') }}" class="w-full h-52 object-cover hover:scale-105 transition duration-300">
                <p class="text-xs text-gray-800 px-3 py-2">Rumah yang bergeser akibat gelombang</p>
            </div>

            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/6.jpg') }}" class="w-full h-52 object-cover hover:scale-105 transition duration-300">
                <p class="text-xs text-gray-800 px-3 py-2">Kapal yang terdampar di daratan</p>
            </div>

        </div>

        <a href="{{ route('home') }}" class="inline-block text-sm text-sky-600 hover:underline mt-10">&larr; Kembali ke beranda</a>
    </div>

    <footer class="border-t px-8 py-8">
        <p class="text-xs text-gray-600 text-center max-w-6xl mx-auto">
            &copy; {{ date('Y') }} Museum Tsunami Aceh. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>