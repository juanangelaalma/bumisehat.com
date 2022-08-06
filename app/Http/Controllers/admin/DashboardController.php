<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private function valueToArray($data) {
        $month = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        foreach($data as $res) {
            $month[$res->month - 1] = $res->total;
        }
        return $month;
    }
    public function index() {
        $questionsGroup = Question::all()->groupBy('type')->toArray();

        return view('admin.dashboard', [
            'usersCount' => User::count(),
            'articlesCount' => Article::count(),
            'quizAnswer' => [
                "true" => count(DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id = questions.true_answer AND questions.true_answer IS NOT NULL AND answers.type = 'quiz'")), 
                "false" => count(DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id != questions.true_answer AND questions.true_answer IS NOT NULL AND answers.type = 'quiz'"))
            ],
            'evalAnswer' => [
                "true" => count(DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id = questions.true_answer AND questions.true_answer IS NOT NULL AND answers.type = 'evaluation'")), 
                "false" => count(DB::select("select answers.id, point from answers inner join questions on answers.question_id = questions.id where answers.offered_answer_id != questions.true_answer AND questions.true_answer IS NOT NULL AND answers.type = 'evaluation'"))
            ],
            'questionsCount' => Question::count(),
            'userJoin' => $this->valueToArray(User::select(DB::raw('count(id) as total'), DB::raw('MONTH(created_at) as month'))->groupBy('month')->get()),
            'users' => User::latest()->with('age_pregnancy')->limit(5)->get(),
            'abcdCount' => isset($questionsGroup["abcd"]) ? count($questionsGroup["abcd"]) : 0,
            'numberQuestionCount' => isset($questionsGroup["1234"]) ? count($questionsGroup["1234"]) : 0,
            'agreementCount' => isset($questionsGroup["agreement"]) ? count($questionsGroup["agreement"]) : 0,
        ]);
    }
}
