<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index() {
        $data = Article::latest()->get();
        return view('articles.index', ['articles' => $data]);
    }

    public function read(Article $article) {
        $new_articles = Article::where('id', '!=', $article->id)->limit(4)->get();
        return view('articles.read', compact('article', 'new_articles'));
    }
}
