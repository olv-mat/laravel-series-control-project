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
        $series = Serie::create($request->all());
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been created");
    }

    public function destroy(Serie $series)
    {
        $series->delete();
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been removed");
    }
}
