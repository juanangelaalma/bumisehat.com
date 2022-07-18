<?php

namespace App\Http\Controllers;

use App\Models\PregnancyAlert;
use App\Models\PregnancyStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class PregnancyAlertController extends Controller
{
    public function index() {
        $user = Auth::user();
        $age = $user->age_pregnancy ? get_age_of_pregnancy($user->age_pregnancy->pregnancy_start) : NULL;

        return view('pregnancy.index', [
            'age' => $age,
            'pregnancy_alerts' => PregnancyAlert::where('weeks', $age)->get(),
            'user' => $user
        ]);
    }

    public function read($id) {
        $pregnancy = PregnancyAlert::find($id);
        
        return view('pregnancy.read', compact('pregnancy'));
    }

    public function done($id) {
        PregnancyStatus::create([
            'user_id' => Auth::user()->id,
            'pregnancy_alert_id' => $id,
            'done' => true
        ]);

        return back();
    }
}
