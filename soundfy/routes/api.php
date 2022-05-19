<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\AddTrackController;
use App\Http\Controllers\DeleteTrackController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/track", [TrackController::class, "create"]);
Route::put("/track", [TrackController::class, "newReproduction"]);
Route::post("/addTrack", [AddTrackController::class, "addTrack"]);
Route::delete("/deleteTrack", [DeleteTrackController::class, "deleteTrack"]);

Route::get("/genre", [GenreController::class, "getTopSongs"]);
// Route::put("/genre", [GenreController::class, "newReproduction"]);

