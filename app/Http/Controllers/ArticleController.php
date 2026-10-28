<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
        return view('journalist');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'content' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
            'author' => 'Журналист',
        ]);

        return redirect()->route('home')->with('success', 'Статья успешно опубликована!');
    }
}
