<?php

namespace App\Http\Controllers;

use App\Models\AgePregnancy;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return view('users.index', compact('users'));
    }

    public function setPregnancyStart() {
        $user = Auth::user();
        $date = date('Y-m-d', strtotime(request('pregnancy_start')));

        AgePregnancy::create([
            'pregnancy_start' => $date,
            'user_id' => $user->id
        ]);

        return back();
    }
}
