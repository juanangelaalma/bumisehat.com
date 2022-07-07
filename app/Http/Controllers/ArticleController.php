<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $data = Article::latest()->get();
        return view('articles.index', ['articles' => $data]);
    }

    public function read(Article $article) {
        return view('articles.read', compact('article'));
    }
}
