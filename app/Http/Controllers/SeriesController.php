<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
        return view("series.index")->with("series", $series);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return to_route("series.index");
    }
}
