<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
       public function index()
    {
        // Mengambil semua artikel yang di-bookmark oleh user yang sedang login
        $bookmarks = auth()->user()->bookmarks()->latest()->get();
        
        return view('bookmarks', compact('bookmarks'));
    }

   
    public function toggle(Article $article)
    {
        auth()->user()->bookmarks()->toggle($article->id);
        return back();
    }
}