<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Artikel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="title" value="{{ old('title', $article->title) }}" class="mt-1 block w-full rounded-md border-gray-300">
                        @error('title') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Kategori</label>
                        <select name="category_id" class="mt-1 block w-full rounded-md border-gray-300">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $article->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Konten</label>
                        <textarea name="content" rows="8" class="mt-1 block w-full rounded-md border-gray-300">{{ old('content', $article->content) }}</textarea>
                        @error('content') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700">Thumbnail saat ini</label>
                        @if ($article->thumbnail)
                            <img src="{{ asset('storage/' . $article->thumbnail) }}" class="w-32 h-32 object-cover rounded my-2">
                        @else
                            <p class="text-sm text-gray-400">Belum ada thumbnail</p>
                        @endif
                        <label class="block text-sm font-medium text-gray-700 mt-2">Ganti thumbnail (opsional)</label>
                        <input type="file" name="thumbnail" class="mt-1 block w-full">
                        @error('thumbnail') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700">Status</label>
                        <select name="status" class="mt-1 block w-full rounded-md border-gray-300">
                            <option value="draft" {{ $article->status == 'draft' ? 'selected' : '' }}>Draft</option>
                            <option value="published" {{ $article->status == 'published' ? 'selected' : '' }}>Publikasikan</option>
                        </select>
                    </div>

                    <div class="flex gap-2">
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Perbarui</button>
                        <a href="{{ route('articles.index') }}" class="px-4 py-2 bg-gray-200 rounded-md">Batal</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>