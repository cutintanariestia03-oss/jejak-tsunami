<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Kontak - Jejak Tsunami</title>
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

    <div class="max-w-4xl mx-auto px-8 py-16">

        <h1 class="text-2xl font-semibold mb-2">Hubungi Kami</h1>
        <p class="text-gray-600 mb-10">Ada pertanyaan atau masukan? Silakan hubungi kami melalui informasi di bawah ini.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

            <div class="space-y-6">
                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center flex-shrink-0">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-sky-700">
                            <path d="M21 10c0 6-9 12-9 12s-9-6-9-12a9 9 0 0 1 18 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-sm mb-1">Alamat</p>
                        <p class="text-sm text-gray-600">Jl. Sultan Iskandar Muda, Kec. Meuraxa, Banda Aceh, Aceh 23233</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center flex-shrink-0">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-sky-700">
                            <path d="M4 4h16v16H4z" stroke="none"/>
                            <path d="M22 6 12 13 2 6"/>
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-sm mb-1">Email</p>
                        <p class="text-sm text-gray-600">info@jejaktsunami.id</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center flex-shrink-0">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-sky-700">
                            <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.7A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.5 2.1L8 9.6a16 16 0 0 0 6 6l1.1-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.7 2Z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-sm mb-1">Telepon</p>
                        <p class="text-sm text-gray-600">(0651) 23456</p>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-10 h-10 rounded-full bg-sky-50 flex items-center justify-center flex-shrink-0">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-sky-700">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-medium text-sm mb-1">Jam Operasional</p>
                        <p class="text-sm text-gray-600">Setiap hari, kecuali Jumat &middot; 09.00 - 16.00 WIB</p>
                    </div>
                </div>
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