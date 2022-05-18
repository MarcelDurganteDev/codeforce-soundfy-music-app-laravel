<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function getTopSongs(Request $request) {
        return DB::table("genres")->orderBy("reproductions", "desc")->limit($request->limit)->get();
    }    
}
