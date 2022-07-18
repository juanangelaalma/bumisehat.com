<?php

namespace App\Http\Controllers;

use App\Models\ShortContent;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function Ramsey\Uuid\v1;

class ShortContentController extends Controller
{
    public function index() {
        return view('admin.short_content.index', [
            'short_contents' => ShortContent::latest()->get()
        ]);
    }

    public function create() {
        return view('admin.short_content.create');
    }

    public function store(Request $request) {
        $request->validate([
            'image'  => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            'title'  => 'required',
            'body'   => 'required'
        ]);

        $slug = $slug = SlugService::createSlug(ShortContent::class, 'slug', $request->title);

        $fileName = $slug . "." . $request->file('image')->extension();

        $request->file('image')->storeAs('/uploads/short_contents/thumbnails/', $fileName, 'public');

        ShortContent::create([
            'title'  => $request->title,
            'body'  => $request->body,
            'image'  => $fileName,
            'slug'  => $slug
        ]);

        return redirect()->route('admin.short_content')->with('successAlert', 'Short content berhasil ditambahkan');
    }

    public function edit(ShortContent $short_content) {
        return view('admin.short_content.edit', ['short_content' => $short_content]);
    }

    public function update(ShortContent $short_content, Request $request) {
        $request->validate([
            'title'  => 'required',
            'body'   => 'required'
        ]);

        $slug = $short_content->slug;
        if($request->title !== $short_content->title) {
            $slug = $slug = SlugService::createSlug(ShortContent::class, 'slug', $request->title);
        }

        if($request->file('image')) {
            $request->validate([
                'image'  => 'required|mimes:png,jpg,jpeg,webp|max:2048',
            ]);

            Storage::delete('/uploads/short_contents/thumbnails/' . $short_content->image);

            $fileName = $slug . "." . $request->file('image')->extension();
            $request->file('image')->storeAs('/uploads/short_contents/thumbnails/', $fileName, 'public');

            $short_content->update([
                'title'  => $request->title,
                'body'   => $request->body,
                'image'  => $fileName,
                'slug'   => $slug
            ]);
        }

        $short_content->update([
            'title'     => $request->title,
            'body'      => $request->body,
            'slug'      => $slug
        ]);

        return redirect()->route('admin.short_content');
    }

    public function destroy(ShortContent $shortContent) {
        Storage::delete('/uploads/short_contents/thumbnails/' . $shortContent->image);
        $shortContent->delete();  
        return back();
    }

    public function read($id) {
        $short = ShortContent::find($id);
        return view('articles.read', [
            'article' => $short,
            'new_articles' => ShortContent::where('id', '!=', $id)->get(),
            'is_short'  => true
        ]);
    }
}
