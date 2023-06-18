<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    public function index() {
        $data = Article::latest()->get();
        return view('articles.index', ['articles' => $data, 'webTitle' => 'Materi']);
    }

    private function generateBody($article) {
        try {
            $body = View::make("articles.static.$article->slug")->render(); 
            return $body;
        } catch (\Throwable $error) {
            return $article->body;
        }
    }

    public function read(Article $article) {
        $new_articles = Article::where('id', '!=', $article->id)->limit(4)->get();
        $webTitle = $article->title;
        $article->body = $this->generateBody($article);
        return view('articles.read', compact('article', 'new_articles', 'webTitle'));
    }
}
