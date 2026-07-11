<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Ruang Kenangan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50">

    <nav class="bg-white border-b px-8 py-4 flex justify-between items-center">
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
        <div class="flex items-center gap-4">
            @auth
                <!-- INI DIA MENU BARUNYA -->
                <a href="{{ route('bookmarks.index') }}" class="text-sm font-medium text-slate-600 hover:text-sky-600 transition mr-2">Artikel Tersimpan</a>
                <a href="{{ route('articles.index') }}" class="text-sm font-medium bg-slate-900 text-white px-4 py-2 rounded-md">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium mr-6">Masuk</a>
                <a href="{{ route('register') }}" class="text-sm bg-slate-900 text-white px-4 py-2 rounded-md">Daftar</a>
            @endauth
        </div>
    </nav>

    <div class="relative text-white px-5 py-24 bg-cover bg-center" style="background-image: linear-gradient(to right, rgba(15,23,42,0.85), rgba(15,23,42,0.4)), url('{{ asset('images/museum-aceh.jpg') }}');">
        <div class="max-w-3xl">
            <h1 class="text-4xl font-semibold mb-4 leading-tight">Ruang kenangan<br>yang tak boleh dilupakan.</h1>
            <p class="text-slate-200 mb-6">Ruang Kenangan adalah ruang digital untuk mengenal,<br> menghargai, dan belajar dari pengalaman,<br> agar kita lebih siap menghadapi masa depan.</p>
            <a href="#artikel" class="inline-block bg-white text-sky-900 px-5 py-2.5 rounded-md text-sm font-medium">Jelajahi Cerita &#10140;</a>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-8 -mt-8 relative">
        <div class="bg-white rounded-xl p-6 grid grid-cols-2 md:grid-cols-4 gap-6 shadow-sm border">
            <div class="flex items-start gap-4">
                <!-- Ikon Buku -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" class="w-8 h-8 text-slate-900 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25A2.25 2.25 0 0 1 6 3h5.25a2.25 2.25 0 0 1 2.25 2.25V21a3 3 0 0 0-3-3H6a2.25 2.25 0 0 0-2.25 2.25V5.25ZM20.25 5.25A2.25 2.25 0 0 0 18 3h-5.25a2.25 2.25 0 0 0-2.25 2.25V21a3 3 0 0 1 3-3H18a2.25 2.25 0 0 1 2.25 2.25V5.25Z"/>
                </svg>
                <!-- Teks -->
                <div>
                    <p class="font-medium text-sm mb-1">Mengenal Sejarah</p>
                    <p class="text-xs text-gray-700 leading-5">Pahami peristiwa dan <br>kronologi secara lengkap.</p>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <!-- Ikon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-slate-800 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.5 20.25a7.5 7.5 0 0 1 15 0" />
                </svg>
                <!-- Teks -->
                <div>
                    <p class="font-medium text-sm mb-1">Kisah &amp; Kenangan</p>
                    <p class="text-xs text-gray-700 leading-5">Dengarkan kisah nyata <br>para penyintas.</p>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <!-- Ikon Topi Wisuda -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" class="w-8 h-8 text-slate-900 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3 2 8l10 5 10-5-10-5Zm-6 7v4c0 1.5 2.7 3 6 3s6-1.5 6-3v-4m4 2v4"/>
                </svg>
                <!-- Teks -->
                <div>
                    <p class="font-medium text-sm mb-1">Edukasi &amp; Kesiapsiagaan</p>
                    <p class="text-xs text-gray-700 leading-5">Belajar untuk siap dan <br>melindungi masa depan.</p>
                </div>
            </div>
            
            <div class="flex items-start gap-4">
                <!-- Ikon Galeri -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" class="w-8 h-8 text-slate-900 flex-shrink-0">
                    <rect x="3" y="5" width="18" height="14" rx="2" ry="2"/>
                    <circle cx="8.5" cy="9" r="1.5"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 16l-5-5-7 7"/>
                </svg>
                <!-- Teks -->
                <div>
                    <p class="font-medium text-sm mb-1">Galeri &amp; Arsip</p>
                    <p class="text-xs text-gray-700 leading-5">Foto, dokumen, dan artefak <br>bersejarah.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="artikel" class="max-w-6xl mx-auto px-8 py-16">
        <div class="mb-8">
            <h2 class="text-2xl font-semibold mb-1">Kurasi pilihan</h2>
            <p class="text-sm text-gray-700">Temukan kisah, informasi, dan pengetahuan yang menginspirasi.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/kronologi-tsunami.jpg') }}" class="w-full h-44 object-cover">
                <div class="p-5">
                    <span class="text-xs text-gray-700">Sejarah</span>
                    <p class="font-medium mt-1 mb-2">Kronologi Peristiwa</p>
                    <p class="text-xs text-gray-700">Rangkaian kejadian penting dalam musibah tsunami di Aceh.</p>
                    <a href="{{ route('sejarah') }}" class="text-sm font-medium text-sky-600 hover:underline mt-2 inline-block">Baca selengkapnya &rarr;</a>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/kisah.jpg') }}" class="w-full h-44 object-cover">
                <div class="p-5">
                    <span class="text-xs text-gray-700">Kisah Nyata</span>
                    <p class="font-medium mt-1 mb-2">Suara dari Penyintas</p>
                    <p class="text-xs text-gray-700">Kisah perjuangan, kehilangan, dan harapan yang menginspirasi.</p>
                    <a href="{{ route('kisah') }}" class="text-sm font-medium text-sky-600 hover:underline mt-2 inline-block">Baca selengkapnya &rarr;</a>
                </div>
            </div>
            <div class="bg-white rounded-xl overflow-hidden border">
                <img src="{{ asset('images/belajar-untuk-masa-depan.jpg') }}" class="w-full h-44 object-cover">
                <div class="p-5">
                    <span class="text-xs text-gray-700">Edukasi</span>
                    <p class="font-medium mt-1 mb-2">Belajar untuk Masa Depan</p>
                    <p class="text-xs text-gray-700">Panduan mitigasi dan kesiapsiagaan untuk kita semua.</p>
                    <a href="{{ route('edukasi') }}" class="text-sm font-medium text-sky-600 hover:underline mt-2 inline-block">Baca selengkapnya &rarr;</a>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-1">Artikel Terbaru</h2>
            <p class="text-sm text-gray-500">Ditulis langsung oleh penulis Jejak Tsunami.</p>
        </div>

        <form action="{{ route('home') }}" method="GET" class="flex gap-2 mb-8">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul artikel..." class="flex-1 rounded-md border-gray-300 text-sm">
            <select name="category" class="rounded-md border-gray-300 text-sm">
                <option value="">Semua kategori</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="px-4 py-2 bg-slate-900 text-white rounded-md text-sm">Cari</button>
        </form>

        @if ($articles->isEmpty())
            <p class="text-gray-500 text-sm">Belum ada artikel yang dipublikasikan.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                @foreach ($articles as $article)
                    <div class="bg-white rounded-xl overflow-hidden border hover:shadow-md transition flex flex-col">
                        <!-- Gambar yang bisa diklik -->
                        <a href="{{ route('articles.show', $article) }}" class="block">
                            <div class="h-44 bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                                @if ($article->thumbnail)
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-full h-full object-cover">
                                @else
                                    Tidak ada gambar
                                @endif
                            </div>
                        </a>
                        
                        <div class="p-5 flex-1 flex flex-col">
                            <!-- Judul dan Deskripsi yang bisa diklik -->
                            <a href="{{ route('articles.show', $article) }}" class="block mb-auto">
                                <span class="text-xs text-gray-400">{{ $article->category->name ?? 'Tanpa Kategori' }}</span>
                                <p class="font-medium mt-1 mb-2 hover:text-sky-600">{{ $article->title }}</p>
                                <div class="text-[11px] text-gray-500 mb-2">
                                    <span>{{ $article->user->name ?? 'Penulis' }}</span>
                                    <span class="mx-1">&bull;</span>
                                    <span>{{ $article->created_at->format('d M Y') }}</span>
                                </div>
                                <p class="text-xs text-gray-400 mb-2">{{ Str::limit(strip_tags($article->content), 80) }}</p>
                            </a>
                            
                            <!-- BAGIAN BAWAH: Tombol Baca & Bookmark Sejajar -->
                            <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-100">
                                <a href="{{ route('articles.show', $article) }}" class="text-sm font-medium text-sky-600 hover:underline">Baca selengkapnya &rarr;</a>
                                
                                @auth
                                    <form action="{{ route('bookmarks.toggle', $article) }}" method="POST" class="m-0 p-0">
                                        @csrf
                                        <button type="submit" class="text-gray-400 hover:text-sky-600 transition" title="Simpan Artikel">
                                            @if(auth()->check() && auth()->user()->bookmarks->contains($article->id))
                                                <!-- Ikon Terisi (Sudah Disimpan) -->
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-sky-600">
                                                    <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 0 1-1.085.67L12 18.089l-7.165 3.583A.75.75 0 0 1 3.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93Z" clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <!-- Ikon Kosong (Belum Disimpan) -->
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                                                </svg>
                                            @endif
                                        </button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <div class="max-w-6xl mx-auto px-8 pb-16">
        <div class="bg-slate-900 text-white rounded-xl p-8">
            <p class="text-lg leading-relaxed font-serif italic tracking-wide">"Mengingat bukan untuk larut dalam kesedihan,<br>tetapi untuk membangun masa depan yang lebih aman."</p>
            <p class="text-sm text-slate-400">&ndash; Museum Tsunami Aceh</p>
        </div>
    </div>

<footer class="border-t px-8 py-8">
   <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-6">
    <div class="flex items-center gap-3">
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-9 h-9 object-contain">
        <div>
            <p class="font-bold text-lg text-sky-700 leading-none">Jejak Tsunami</p>
            <p class="text-xs text-slate-500">Museum Tsunami Aceh</p>
        </div>
    </div>

    <div class="flex items-center gap-8">
        <div class="flex gap-6 text-sm text-sky-600">
            <a href="{{ route('tentang') }}" class="hover:underline">Tentang Kami</a>
            <a href="{{ route('kebijakan-privasi') }}" class="hover:underline">Kebijakan Privasi</a>
            <a href="{{ route('syarat-ketentuan') }}" class="hover:underline">Syarat & Ketentuan</a>
            <a href="{{ route('kontak') }}" class="hover:underline">Kontak</a>
        </div>

        <div class="flex gap-4 text-gray-500">
            <a href="https://facebook.com" target="_blank" class="hover:text-slate-900">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 1 0-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/></svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="hover:text-slate-900">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c2.7 0 3.1 0 4.1.1 1.1 0 1.8.2 2.5.5.7.3 1.2.6 1.8 1.2.6.6.9 1.1 1.2 1.8.3.7.5 1.4.5 2.5.1 1 .1 1.4.1 4.1s0 3.1-.1 4.1c0 1.1-.2 1.8-.5 2.5-.3.7-.6 1.2-1.2 1.8-.6.6-1.1.9-1.8 1.2-.7.3-1.4.5-2.5.5-1 .1-1.4.1-4.1.1s-3.1 0-4.1-.1c-1.1 0-1.8-.2-2.5-.5-.7-.3-1.2-.6-1.8-1.2-.6-.6-.9-1.1-1.2-1.8-.3-.7-.5-1.4-.5-2.5C2 15.1 2 14.7 2 12s0-3.1.1-4.1c0-1.1.2-1.8.5-2.5.3-.7.6-1.2 1.2-1.8.6-.6 1.1-.9 1.8-1.2.7-.3 1.4-.5 2.5-.5C8.9 2 9.3 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 8.2a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4zM17.3 6a1.2 1.2 0 1 1-2.4 0 1.2 1.2 0 0 1 2.4 0z"/></svg>
            </a>
            <a href="https://youtube.com" target="_blank" class="hover:text-slate-900">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22.5 6.2s-.2-1.6-.9-2.3c-.9-.9-1.9-.9-2.3-1C16.4 2.6 12 2.6 12 2.6s-4.4 0-7.3.3c-.4 0-1.4.1-2.3 1-.7.7-.9 2.3-.9 2.3S1.2 8 1.2 9.9v1.8c0 1.9.3 3.7.3 3.7s.2 1.6.9 2.3c.9.9 2 .9 2.6 1 1.9.2 8 .3 8 .3s4.4 0 7.3-.3c.4 0 1.4-.1 2.3-1 .7-.7.9-2.3.9-2.3s.3-1.8.3-3.7V9.9c0-1.9-.3-3.7-.3-3.7zM9.7 14.6V8.4l6 3.1-6 3.1z"/></svg>
            </a>
        </div>
    </div>
</div>
    <p class="text-xs text-gray-600 text-center max-w-6xl mx-auto">
        &copy; {{ date('Y') }} Museum Tsunami Aceh. Semua hak dilindungi.
    </p>
</footer>

</body>
</html>