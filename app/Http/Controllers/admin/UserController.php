<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::with('age_pregnancy')->where('role', 'user')->get();
        return view('admin.users.index',compact('users'));
    }
}
