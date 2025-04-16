<?php

namespace App\Http\Controllers\Api;

use App\Models\Series;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    public function show(Series $series)
    {
        return $series->seasons;
    }
}
