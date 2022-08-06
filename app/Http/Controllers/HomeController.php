<?php

namespace App\Http\Controllers;

use App\Models\ShortContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'webTitle' => 'Beranda'
        ]);
    }
}
