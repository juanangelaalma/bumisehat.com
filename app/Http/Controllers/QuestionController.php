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

    private function getTotalPoint($items) {
        $total = 0;
        foreach($items as $item) {
            $total = $total + $item->point;
        }
        return $total;
    }

    public function quiz() {
        $user = Auth::user();
        $isAlreadyFilledOutQuiz = $user->isAlreadyFilledOutQuiz();

        if($isAlreadyFilledOutQuiz) {
            $true_answer = DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id = questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user->id AND answers.type = 'quiz'");
            $false_answer = DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id != questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user->id AND answers.type = 'quiz'");    
            $true_point = $this->getTotalPoint($true_answer);
            $false_point = $this->getTotalPoint($false_answer);
            return view('questions.quiz', [
                'isAlreadyFilledOutQuiz' => $isAlreadyFilledOutQuiz,
                'true_answer' => count($true_answer),
                'false_answer' => count($false_answer),
                'true_point' => $true_point,
                'false_point' => $false_point
            ]);
        }else {
            $questions = Question::all();
            return view('questions.quiz', [
                'isAlreadyFilledOutQuiz' => $isAlreadyFilledOutQuiz,
                'questions' => $questions,
            ]);
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

        if($isAlreadyFilledOutEvaluation) {
            $true_answer = DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id = questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user->id AND answers.type = 'evaluation'");
            $false_answer = DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id != questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user->id AND answers.type = 'evaluation'");    
            $true_point = $this->getTotalPoint($true_answer);
            $false_point = $this->getTotalPoint($false_answer);
            
            return view('questions.evaluation', [
                'isAlreadyFilledOutEvaluation' => $isAlreadyFilledOutEvaluation,
                'true_answer' => count($true_answer),
                'false_answer' => count($false_answer),
                'true_point' => $true_point,
                'false_point' => $false_point
            ]);
        }else {
            $questions = Question::all();
            return view('questions.evaluation', [
                'isAlreadyFilledOutEvaluation' => $isAlreadyFilledOutEvaluation,
                'questions' => $questions,
            ]);
        }
    }

    public function evaluation_submit() {
        $data = $this->getFinalArray(request('answer'), 'evaluation');
        Answer::insert($data);
        return back()->with('successAlert', 'Terima kasih telah mengisi form evaluasi');
    }
}
