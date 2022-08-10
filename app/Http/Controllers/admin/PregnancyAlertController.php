<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PregnancyAlert;
use App\Models\User;
use Illuminate\Http\Request;

class PregnancyAlertController extends Controller
{
    private function isExist($pregnancy_alert_id, $statuses) {
        foreach($statuses as $item) {
            if($item["pregnancy_alert_id"] == $pregnancy_alert_id) {
                return true;
            }
        }
        return false;
    }
    
    public function index()
    {
        $users = User::with('age_pregnancy', 'pregnancy_statuses')->get();
        $alerts = PregnancyAlert::all();
        return view('admin.pregnancy.index', compact('users', 'alerts'));
    }

    public function list() {
        $pregnancy_alerts = PregnancyAlert::orderBy('weeks', 'ASC')->get();

        $pregnancy_alerts[0]->image = "index.jpg";
        return view('admin.pregnancy.list', compact('pregnancy_alerts'));
    }

    public function create() {
        
    }

    public function store() {

    }

    public function edit(PregnancyAlert $pregnancyAlert) {

    }

    public function update(PregnancyAlert $pregnancyAlert) {

    }

    public function destroy(PregnancyAlert $pregnancyAlert) {

    }
}
