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
        $age_pregnancy = $user->age_pregnancy;
        $age = $age_pregnancy ? get_age_of_pregnancy($age_pregnancy->pregnancy_start) : NULL;

        $idStatuses = PregnancyStatus::where('user_id', $user->id)->get('pregnancy_alert_id');

        return view('pregnancy.index', [
            'age' => $age,
            'pregnancy_alerts' => PregnancyAlert::where('weeks', $age)->get(),
            'pregnancy_alerts_before' => $age_pregnancy ? PregnancyAlert::where('weeks', '>=', $age_pregnancy->age_when_join)->where('weeks', '<' , $age)->whereNotIn('id', $idStatuses->toArray())->get() : [],
            'user' => $user,
            'webTitle' => 'Pengingat Kesehatan'
        ]);
    }

    public function read($id) {
        $pregnancy = PregnancyAlert::find($id);
        
        return view('pregnancy.read', ['pregnancy' => $pregnancy, 'webTitle' => "Pengingat Kesehatan Minggu ke $pregnancy->weeks"]);
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
