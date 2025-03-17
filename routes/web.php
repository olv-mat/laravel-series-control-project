<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SeriesCreated;
use App\Http\Controllers\{
    SeriesController,
    SeasonController,
    LoginController,
    RegisterController,
};
use App\Http\Middleware\Authenticator;

Route::get('/', function () {
    return redirect('/series');
})->middleware(Authenticator::class);

Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post("/login", [LoginController::class, "store"]);
Route::get("/register", [RegisterController::class, "index"])->name("register");
Route::post("/register", [RegisterController::class, "store"]);
Route::get("/logout", [LoginController::class, "destroy"])->name("logout");
Route::resource("/series", SeriesController::class);
Route::resource("/season", SeasonController::class)->only(["show", "update"]);

Route::get("/mail", function () {
    return new SeriesCreated("'Test'");
});