<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AboutController extends Controller
{
    public function about() {
        $about = About::get('body')->first();
        return view('about', [
            'about' => $about ? $about->body : '',
            'webTitle' => 'Tentang'
        ]);
    }

    public function contact() {
        return view('contact', [
            'contact' => About::get(['email', 'whatsapp'])->first(),
            'webTitle' => 'Hubungi kami'
        ]);
    }

    public function sendEmail(Request $request) {
        Mail::to('juanangelaalma@gmail.com')->send(new ContactEmail($request->email, $request->message));
        return back()->with(['successAlert' => 'Pesan anda telah dikirim']);
    }
}
