<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Article $article) {
        return view('admin.articles.edit', [
            'article'  => $article
        ]);
    }

    public function update(Request $request, Article $article) {
        $request->validate([
            'title'  => 'required',
            'body'   => 'required'
        ]);

        $slug = $article->slug;
        if($request->title !== $article->title) {
            $slug = $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        }

        if($request->file('image')) {
            $request->validate([
                'image'  => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            ]);

            Storage::delete('/uploads/articles/thumbnails/' . $article->image);

            $fileName = $slug . "." . $request->file('image')->extension();
            $request->file('image')->storeAs('/uploads/articles/thumbnails/', $fileName, 'public');

            $article->update([
                'title'  => $request->title,
                'body'   => $request->body,
                'image'  => $fileName,
                'slug'   => $slug
            ]);
        }

        $article->update([
            'title'     => $request->title,
            'body'      => $request->body,
            'slug'      => $slug
        ]);

        return redirect()->route('admin.articles');
    }

    public function upload(Request $request) {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs('/uploads/articles/body/', $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
    
    public function destroy(Article $article) {
        Storage::delete('/uploads/articles/thumbnails/' . $article->image);
        $article->delete();  
        return back();
    }
}
