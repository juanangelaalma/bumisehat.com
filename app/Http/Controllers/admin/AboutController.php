<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view('admin.about.index', [
            'about'    => About::first()
        ]);
    }

    public function update(Request $request) {
        $request->validate([
            'email'  => 'required',
            'wa' => 'required',
            'body'  => 'required'
        ]);

        $about = About::first();

        $about->update([
            'email'  => $request->email,
            'whatsapp'  => $request->wa,
            'body'  => $request->body
        ]);

        return back();
    }
}
