<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaUploaderController extends Controller
{
    public function upload(Request $request) {
        $fileName = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->storeAs("/uploads/body/", $fileName, 'public');
        return response()->json(['location' => "/storage/$path"]);
    }
}
