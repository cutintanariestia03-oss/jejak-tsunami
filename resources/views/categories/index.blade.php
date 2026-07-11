<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Kategori Saya
            </h2>
            <a href="{{ route('categories.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm">+ Tambah Kategori</a>
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
                @if ($categories->isEmpty())
                    <p class="text-gray-500">Belum ada kategori. Yuk tambah dulu!</p>
                @else
                    <table class="w-full text-sm text-left">
                        <thead class="text-gray-500 border-b">
                            <tr>
                                <th class="py-2">Nama</th>
                                <th class="py-2">Deskripsi</th>
                                <!-- Kolom Aksi dikunci lebarnya dan dipusatkan -->
                                <th class="py-2 text-center w-32">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-b">
                                    <td class="py-3">{{ $category->name }}</td>
                                    <td class="py-3">{{ $category->description ?? '-' }}</td>
                                    <!-- Tombol Edit & Hapus dibungkus dan dipusatkan -->
                                    <td class="py-3 w-32">
                                        <div class="flex justify-center items-center gap-3">
                                            <a href="{{ route('categories.edit', $category) }}" class="text-blue-600">Edit</a>
                                            <form action="{{ route('categories.destroy', $category) }}" method="POST" class="m-0 p-0" onsubmit="return confirm('Yakin hapus kategori ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>

            <a href="{{ route('articles.index') }}" class="inline-block mt-4 text-sm text-sky-600 hover:underline">&larr; Kembali ke Artikel</a>
        </div>
    </div>
</x-app-layout>