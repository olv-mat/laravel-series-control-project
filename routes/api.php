<?php

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    LoginController,
    SeriesController,
    SeasonsController,
    EpisodesController,
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LoginController::class, "index"]);
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/series', SeriesController::class);
    Route::get('/series/{series}/seasons', [SeasonsController::class, "show"]);
    Route::get('/series/{series}/episodes', [EpisodesController::class, "show"]);
    Route::patch('/episodes/{episode}', [EpisodesController::class, "update"]);
});
