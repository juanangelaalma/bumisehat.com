<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('admin.articles.index', [
            'articles'  => Article::latest()->paginate(9)
        ]);
    }
}
