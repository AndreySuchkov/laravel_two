<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Text;

Route::get('/', function () {
    $articles = Article::latest()->get();
    return view('index', ['articles' => $articles]);
})->name('home');

Route::get('category', function (){
    return view('category');
});
Route::get('/category/{category}', function ($category) {
    $articles = Article::where('category', $category)->latest()->get();
    return view('category', ['articles' => $articles, 'currentCategory' => $category]);
});

Route::get('/journalist', [ArticleController::class, 'create'])->name('journalist');
Route::post('/journalist', [ArticleController::class, 'store'])->name('journalist.store');

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/check-relations', function () {
    return \App\Models\Text::with(['user.role', 'category'])->get();
});