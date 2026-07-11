<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel Tersimpan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border p-8">
                
                <div class="mb-6">
                    <h3 class="text-lg font-medium text-gray-900">Koleksi Bacaanmu</h3>
                    <p class="text-sm text-gray-500">Kumpulan artikel Jejak Tsunami yang telah kamu simpan.</p>
                </div>

                @if ($bookmarks->isEmpty())
                    <div class="text-center py-12 bg-gray-50 rounded-xl border-2 border-dashed border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12 mx-auto text-gray-300 mb-3">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                        </svg>
                        <p class="text-gray-500 font-medium">Belum ada artikel yang disimpan.</p>
                        <a href="{{ route('home') }}#artikel" class="text-sky-600 text-sm hover:underline mt-2 inline-block">Jelajahi artikel beranda &rarr;</a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($bookmarks as $article)
                            <div class="bg-white rounded-xl overflow-hidden border hover:shadow-md transition flex flex-col">
                                <!-- Gambar -->
                                <a href="{{ route('articles.show', $article) }}" class="block">
                                    <div class="h-44 bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                                        @if ($article->thumbnail)
                                            <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-full h-full object-cover">
                                        @else
                                            Tidak ada gambar
                                        @endif
                                    </div>
                                </a>
                                
                                <!-- Konten -->
                                <div class="p-5 flex-1 flex flex-col">
                                    <span class="text-xs text-gray-400">{{ $article->category->name ?? 'Tanpa Kategori' }}</span>
                                    
                                    <a href="{{ route('articles.show', $article) }}" class="block mt-1 mb-2">
                                        <p class="font-medium hover:text-sky-600 transition">{{ $article->title }}</p>
                                    </a>
                                    
                                    <div class="text-[11px] text-gray-500 mb-auto">
                                        <span>{{ $article->user->name ?? 'Penulis' }}</span>
                                        <span class="mx-1">&bull;</span>
                                        <span>{{ $article->created_at->format('d M Y') }}</span>
                                    </div>
                                    
                                    <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-100">
                                        <a href="{{ route('articles.show', $article) }}" class="text-sm font-medium text-sky-600 hover:underline">Baca &rarr;</a>
                                        
                                        <!-- Tombol Hapus Bookmark -->
                                        <form action="{{ route('bookmarks.toggle', $article) }}" method="POST" class="m-0 p-0">
                                            @csrf
                                            <button type="submit" class="text-rose-500 hover:text-rose-700 transition flex items-center gap-1 text-xs font-medium" title="Hapus dari tersimpan">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                                  <path fill-rule="evenodd" d="M6.32 2.577a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 0 1-1.085.67L12 18.089l-7.165 3.583A.75.75 0 0 1 3.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93Z" clip-rule="evenodd" />
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- TOMBOL KEMBALI WARNA BIRU -->
                <div class="mt-8 pt-4 border-t border-gray-100">
                    <a href="{{ route('home') }}" class="text-sm text-sky-600 hover:text-sky-800 hover:underline transition inline-block">
                        &larr; Kembali ke Beranda
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>