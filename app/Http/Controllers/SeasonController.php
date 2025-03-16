<?php

namespace App\Http\Controllers;

use App\Models\Season;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeasonController extends Controller
{

    public function __construct()
    {
        $this->middleware(Authenticator::class);
    }

    public function show(Request $request, Season $season)
    {
        return view("season.show")->with("season", $season);
    }

    public function update(Request $request, Season $season)
    {
        $episodes = $request->watched ?? [];
        $season->episodes()->update(["watched" => false]);
        $season->episodes()->whereIn("id", $episodes)->update(["watched" => true]);
        return to_route("series.index")->with("success.message", "The episodes were marked as watched successfuly");        
    }
}
