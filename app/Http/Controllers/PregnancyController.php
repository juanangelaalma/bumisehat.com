<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PregnancyController extends Controller
{
    public function index() {
        return view('pregnancy');
    }
}
