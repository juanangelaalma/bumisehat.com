<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function quiz() {
        return view('questions.quiz');
    }

    public function evaluation() {
        return view('questions.evaluation');
    }
}
