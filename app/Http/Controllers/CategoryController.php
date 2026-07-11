<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    // Menampilkan semua kategori milik user yang login
    public function index()
    {
        $categories = Category::where('user_id', Auth::id())->latest()->get();
        return view('categories.index', compact('categories'));
    }

    // Menampilkan form tambah kategori
    public function create()
    {
        return view('categories.create');
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Category::create([
            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')) . '-' . uniqid(),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    // Menampilkan form edit kategori
    public function edit(Category $category)
    {
         if ($category->user_id !== Auth::id()) {
        abort(403, 'Anda tidak memiliki akses ke kategori ini.');
    }
        return view('categories.edit', compact('category'));
    }

    // Update kategori
    public function update(Request $request, Category $category)
    {
         if ($category->user_id !== Auth::id()) {
        abort(403, 'Anda tidak memiliki akses ke kategori ini.');
    }
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update([
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')) . '-' . uniqid(),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    // Hapus kategori
    public function destroy(Category $category)
    {
        if ($category->user_id !== Auth::id()) {
        abort(403, 'Anda tidak memiliki akses ke kategori ini.');
    }
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus!');
    }
}