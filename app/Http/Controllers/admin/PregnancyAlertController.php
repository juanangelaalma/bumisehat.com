<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PregnancyAlert;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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

        return view('admin.pregnancy.list', compact('pregnancy_alerts'));
    }

    public function create() {
        return view('admin.pregnancy.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'image' => 'mimes:png,jpg,jpeg',
            'weeks' => 'required|numeric'
        ]);  
        if($request->image) {
            $slug = Str::slug($request->title) . '-' . time();
            $fileName = $slug . "." . $request->file('image')->extension();
            $request->file('image')->storeAs('/uploads/pregnancy_alerts/thumbnails/', $fileName, 'public');

            PregnancyAlert::create([
                'title' => $request->title,
                'weeks' => $request->weeks,
                'content' => $request->body,
                'image' => $fileName
            ]);
        }else {
            PregnancyAlert::create([
                'title' => $request->title,
                'weeks' => $request->weeks,
                'content' => $request->body
            ]);
        }

        return redirect()->route('admin.pregnancy_alerts.list')->with('successAlert', 'Pengingat berhasil ditambahkan');
    }

    public function edit(PregnancyAlert $pregnancyAlert) {

    }

    public function update(PregnancyAlert $pregnancyAlert) {

    }

    public function destroy(PregnancyAlert $pregnancyAlert) {
        Storage::delete('/uploads/pregnancy_alerts/thumbnails/' . $pregnancyAlert->image);
        $pregnancyAlert->delete();
        return back();
    }
}
