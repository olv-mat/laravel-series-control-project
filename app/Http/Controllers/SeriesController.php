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

        return view("series-listing", compact("series"));
    }
}
