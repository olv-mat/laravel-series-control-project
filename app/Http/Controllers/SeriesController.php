<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::all();
        $successMessage = $request->session()->get("success.message");
        return view("series.index")->with("series", $series)->with("successMessage", $successMessage);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        $request->session()->flash("success.message", "The series has been created");
        return to_route("series.index");
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->series);
        $request->session()->flash("success.message", "The series has been removed");
        return to_route("series.index");
    }
}
