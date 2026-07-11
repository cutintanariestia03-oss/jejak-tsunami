<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use App\Http\Controllers\BookmarkController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// ================== HALAMAN PUBLIK (tanpa login) ==================

// Beranda - menampilkan artikel yang sudah dipublikasikan
Route::get('/', function () {
    $keyword = request('search');
    $categoryId = request('category');

    $articles = Article::with(['user', 'category'])
        ->where('status', 'published')
        ->when($keyword, function ($query, $keyword) {
            $query->where('title', 'like', "%{$keyword}%");
        })
        ->when($categoryId, function ($query, $categoryId) {
            $query->where('category_id', $categoryId);
        })
        ->latest()
        ->get();

    $categories = Category::all();

    return view('welcome', compact('articles', 'categories'));
})->name('home');

// Detail artikel (publik)
Route::get('/artikel/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');
Route::get('/kisah', function () {
    return view('kisah');
})->name('kisah');
Route::get('/edukasi', function () {
    return view('edukasi');
})->name('edukasi');
Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');
Route::get('/tentang-kami', function () {
    return view('tentang');
})->name('tentang');
Route::get('/kebijakan-privasi', function () {
    return view('kebijakan-privasi');
})->name('kebijakan-privasi');
Route::get('/syarat-ketentuan', function () {
    return view('syarat-ketentuan');
})->name('syarat-ketentuan');
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// ================== HALAMAN SETELAH LOGIN ==================

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('articles.index');
    })->name('dashboard');

    Route::resource('articles', ArticleController::class)->except(['show']);
    Route::resource('categories', CategoryController::class);
    
    // Rute untuk halaman daftar artikel tersimpan (Ini yang tadinya kelupaan)
    Route::get('/bookmarks', [BookmarkController::class, 'index'])->name('bookmarks.index');
    // Rute untuk tombol aksi simpan
    Route::post('/bookmarks/{article}', [BookmarkController::class, 'toggle'])->name('bookmarks.toggle');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';