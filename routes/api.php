<?php

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    SeriesController,
    SeasonsController,
    EpisodesController,
};

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/series', SeriesController::class);
Route::get('/series/{series}/seasons', [SeasonsController::class, "show"]);
Route::get('/series/{series}/episodes', [EpisodesController::class, "show"]);
Route::patch('/episodes/{episode}', [EpisodesController::class, "update"]);