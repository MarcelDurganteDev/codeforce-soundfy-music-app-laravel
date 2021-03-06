<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackController extends Controller
{
    public function create() {
        DB::table("genres");
    }

    public function newReproduction(Request $request) {

        //insert in DB values from front public function addTrack, other file
        DB::table("tracks")->where("id", $request->_id)->increment("reproductions");
        DB::table("genres")->where("name", $request->genre)->increment("reproductions");
    }
}
