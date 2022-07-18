<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    private function getFinalArray($answer, $type) {
        $final = array();
        $user_id = Auth::user()->id;
        foreach ($answer as $key => $value) {
            array_push($final, [
                'question_id' => $key,
                'user_id' => $user_id,
                'offered_answer_id' => intval($value),
                'type' => $type
            ]);
        }
        return $final;
    }

    public function quiz() {
        $user = Auth::user();
        $isAlreadyFilledOutQuiz = $user->isAlreadyFilledOutQuiz();

        if($isAlreadyFilledOutQuiz) {
            $true_answer = count(DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id = questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user->id AND answers.type = 'quiz'"));
            $false_answer = count(DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id != questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user->id AND answers.type = 'quiz'"));    
            return view('questions.quiz', compact('isAlreadyFilledOutQuiz', 'true_answer', 'false_answer'));
        }else {
            $questions = Question::all();
            return view('questions.quiz', compact('questions', 'isAlreadyFilledOutQuiz'));
        }
        
    }

    public function quiz_submit() {
        $data = $this->getFinalArray(request('answer'), 'quiz');
        Answer::insert($data);
        return back()->with('successAlert', 'Terima kasih telah mengisi quiz');
    }

    public function evaluation() {
        $questions = Question::all();
        $user = Auth::user();
        $isAlreadyFilledOutQuiz = $user->isAlreadyFilledOutQuiz();
        $isAlreadyFilledOutEvaluation = $user->isAlreadyFilledOutEvaluation();

        if(!$isAlreadyFilledOutQuiz) {
            return redirect()->route('quiz.index')->with('errorAlert', 'Anda harus mengisi quiz terlebih dahulu sebelum mengisi form evaluasi');
        }

        return view('questions.evaluation', compact('questions', 'isAlreadyFilledOutEvaluation'));
    }

    public function evaluation_submit() {
        $data = $this->getFinalArray(request('answer'), 'evaluation');
        Answer::insert($data);
        return back()->with('successAlert', 'Terima kasih telah mengisi form evaluasi');
    }
}
