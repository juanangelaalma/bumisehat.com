<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ArticleController extends Controller
{
    public function index() {
        return view('admin.articles.index', [
            'articles'  => Article::latest()->paginate(9)
        ]);
    }

    public function create() {
        return view('admin.articles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'image'  => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'title'  => 'required',
            'body'   => 'required'
        ]);

        $slug = $slug = SlugService::createSlug(Article::class, 'slug', $request->title);

        $fileName = $slug . "." . $request->file('image')->extension();

        $request->file('image')->storeAs('/uploads/articles/thumbnails/', $fileName, 'public');

        Article::create([
            'title'  => $request->title,
            'body'  => $request->body,
            'image'  => $fileName,
            'slug'  => $slug
        ]);

        return redirect()->route('admin.articles')->with('successAlert', 'Mater berhasil ditambahkan');
    }



    public function upload(Request $request) {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('/uploads/articles/body/', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
