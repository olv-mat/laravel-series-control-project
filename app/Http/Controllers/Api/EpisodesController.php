<?php

namespace App\Http\Controllers\Api;

use App\Models\Series;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function show(Series $series)
    {
        return $series->episodes;
    }
}
