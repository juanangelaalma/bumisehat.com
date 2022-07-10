<?php

namespace App\Http\Controllers;

use App\Models\PregnancyAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PregnancyAlertController extends Controller
{
    public function index() {
        $user = Auth::user();
        $age = $user->age_pregnancy ? intval(floor(Carbon::now()->diffInDays($user->age_pregnancy->pregnancy_start) / 7)) : NULL;

        return view('pregnancy', [
            'age' => $age,
            'pregnancy_alerts' => PregnancyAlert::where('weeks', $age)->get()
        ]);
    }
}
