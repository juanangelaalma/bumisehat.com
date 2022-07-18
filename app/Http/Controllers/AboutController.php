<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AboutController extends Controller
{
    public function about() {
        return view('about', ['about' => About::get('body')->first()->body]);
    }

    public function contact() {
        return view('contact', ['contact' => About::get(['email', 'whatsapp'])->first()]);
    }

    public function sendEmail(Request $request) {
        Mail::to('juanangelaalma@gmail.com')->send(new ContactEmail($request->email, $request->message));
        return back()->with(['successAlert' => 'Pesan anda telah dikirim']);
    }
}
