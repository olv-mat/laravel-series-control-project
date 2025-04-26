<?php

namespace App\Http\Controllers\Api;

use App\Models\{
    Series,
    Episode,
};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function show(Series $series)
    {
        return $series->episodes;
    }

    public function update(Episode $episode, Request $request)
    {
        $episode->watched = $request->watched;
        $episode->save();
        return $episode;
    }
}
