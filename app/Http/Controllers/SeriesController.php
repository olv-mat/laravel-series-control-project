<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            "Lost",
            "The Office",
            "Manifest",
            "Dexter"
        ];

        return view("series.index")->with("series", $series);
    }

    public function create(Request $request)
    {
        return view("series.create");
    }
}
