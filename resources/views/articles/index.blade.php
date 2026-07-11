<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Artikel Saya
            </h2>
            <div class="flex gap-2">
                <a href="{{ route('categories.index') }}" class="px-4 py-2 bg-gray-200 rounded-md text-sm">Kategori</a>
                <a href="{{ route('articles.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm">+ Tulis Artikel</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                @if ($articles->isEmpty())
                    <p class="text-gray-500">Belum ada artikel. Yuk mulai menulis!</p>
                @else
                    <table class="w-full text-sm text-left mb-6">
                        <thead class="text-gray-500 border-b">
                            <tr>
                                <th class="py-2">Judul</th>
                                <th class="py-2">Kategori</th>
                                <th class="py-2">Status</th>
                                <th class="py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr class="border-b">
                                    <td class="py-3">{{ $article->title }}</td>
                                    <td class="py-3">{{ $article->category->name ?? '-' }}</td>
                                    <td class="py-3">
                                        @if ($article->status == 'published')
                                            <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs">Dipublikasi</span>
                                        @else
                                            <span class="px-2 py-1 bg-yellow-100 text-yellow-700 rounded text-xs">Draft</span>
                                        @endif
                                    </td>
                                    <td class="py-3 text-center">
                                        <a href="{{ route('articles.edit', $article) }}" class="text-blue-600 mr-3">Edit</a>
                                        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus artikel ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
                
                <!-- Tombol kembali dirapikan ke dalam kotak putih -->
                <div class="mt-4 border-t pt-4">
                    <a href="{{ route('home') }}" class="inline-block text-sm text-indigo-600 hover:underline">&larr; Kembali ke Beranda</a>
                </div>
            </div>
            
        </div>
    </div>
</x-app-layout>