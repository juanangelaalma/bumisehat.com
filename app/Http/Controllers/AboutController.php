<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view('about', ['about' => About::get('body')->first()->body]);
    }

    public function contact() {
        return view('contact', ['contact' => About::get(['email', 'whatsapp'])->first()]);
    }
}
