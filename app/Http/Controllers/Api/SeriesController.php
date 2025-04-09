<?php

namespace App\Http\Controllers\Api;

use App\Models\Series;
use App\Http\Requests\SeriesFormRequest;
use App\Repositories\SeriesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        return Series::all();
    }

    public function store(SeriesFormRequest $request, SeriesRepository $repository)
    {
        return response()->json($repository->add($request->all()), 201);
    }

    public function show(int $id)
    {
        return Series::whereId($id)->with('seasons.episodes')->first();
    }
}
