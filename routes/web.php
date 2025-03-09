<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    SeriesController,
    SeasonController,
};

Route::get('/', function () {
    return redirect('/series');
});

Route::resource("/series", SeriesController::class);
Route::resource("/season", SeasonController::class)->only(["show", "update"]);
