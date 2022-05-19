<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteTrackController extends Controller
{
    public function create() {
        DB::table("tracks");
    }

    public function deleteTrack(Request $request) {
        //insert in DB values from front public function addTrack, other file
        //DB::table("tracks")->where("id", $request->_id)->increment("reproductions");
            DB::table('tracks')->where("id",$request->id)->delete();
    }
}
