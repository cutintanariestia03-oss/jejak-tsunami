<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>{{ $article->title }}</title>
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
        <a href="{{ route('home') }}" class="text-slate-900 font-medium border-b-2 border-sky-600 pb-1">Beranda</a>
        <a href="{{ route('sejarah') }}" class="hover:text-slate-900">Sejarah</a>
        <a href="{{ route('kisah') }}" class="hover:text-slate-900">Kisah & Kenangan</a>
        <a href="{{ route('edukasi') }}" class="hover:text-slate-900">Edukasi</a>
        <a href="{{ route('galeri') }}" class="hover:text-slate-900">Galeri</a>
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

    <div class="max-w-3xl mx-auto py-10 px-6">

        @if ($article->thumbnail)
            <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-full h-72 object-cover rounded-lg mb-6">
        @endif

        <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">
            {{ $article->category->name ?? 'Tanpa Kategori' }}
        </span>

        <h1 class="text-3xl font-semibold mt-4 mb-2">{{ $article->title }}</h1>

        <div class="flex items-center gap-4 text-sm text-gray-500 mb-6 pb-4 border-b">
            <span>{{ $article->user->name ?? 'Anonim' }}</span>
            <span>{{ $article->created_at->format('d M Y') }}</span>
        </div>

        <div class="prose max-w-none leading-relaxed text-gray-800 text-justify">
            {!! nl2br(e($article->content)) !!}
        </div>

        <a href="{{ route('home') }}" class="inline-block text-sm text-sky-600 hover:underline mt-8">&larr; Kembali ke beranda</a>
    </div>

    <footer class="border-t px-8 py-8 mt-8">
        <p class="text-xs text-gray-600 text-center max-w-6xl mx-auto">
            &copy; {{ date('Y') }} Museum Tsunami Aceh. Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>