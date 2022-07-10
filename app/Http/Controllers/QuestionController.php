<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function quiz() {
        $questions = Question::all();
        $isAlreadyFilledOutQuiz = Auth::user()->isAlreadyFilledOutQuiz();
        return view('questions.quiz', compact('questions', 'isAlreadyFilledOutQuiz'));
    }

    public function quiz_submit() {
        $final = array();
        $user_id = Auth::user()->id;
        foreach (request('answer') as $key => $value) {
            array_push($final, [
                'question_id' => $key,
                'user_id' => $user_id,
                'offered_answer_id' => intval($value),
                'type' => 'quiz'
            ]);
        }

        Answer::insert($final);

        return back()->with('successAlert', 'Terima kasih telah mengisi quiz');
    }

    public function evaluation() {
        return view('questions.evaluation');
    }
}
