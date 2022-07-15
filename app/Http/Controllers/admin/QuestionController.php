<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function quiz() {
        $users = User::whereHas('answers', function(Builder $query) {
            $query->where('type', 'quiz');
        })->get();

        return view('admin.questions.quiz', compact('users'));
    }

    public function evaluation() {
        $users = User::whereHas('answers', function(Builder $query) {
            $query->where('type', 'evaluation');
        })->get();

        return view('admin.questions.evaluation', compact('users'));
    }

    private function getTotalPoint($items) {
        $total = 0;
        foreach($items as $item) {
            $total = $total + $item->point;
        }
        return $total;
    }

    public function quiz_show($user_id) {
        $user = User::find($user_id)->first();
        $answers = Answer::where('user_id', $user_id)->where('type', 'quiz');
        
        $true_answer = DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id = questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user_id AND answers.type = 'quiz'");
        $false_answer = DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id != questions.true_answer AND questions.true_answer IS NOT NULL AND answers.user_id = $user_id AND answers.type = 'quiz'");

        $true_point = $this->getTotalPoint($true_answer);
        $false_point = $this->getTotalPoint($false_answer);

        return view('admin.questions.quiz.show_answers', [
            'user' => $user,
            'answers' => $answers->get(),
            'true_answer' => count($true_answer),
            'false_answer' => count($false_answer),
            'true_point'  => $true_point,
            'total_point'  => $true_point + $false_point,
        ]);
    }

    public function evaluation_show() {
        return view('admin.questions.evaluation.show_answers');
    }
}
