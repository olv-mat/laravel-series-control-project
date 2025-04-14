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

    public function show(int $id)
    {
        $series = Series::with('seasons.episodes')->find($id);
        if (is_null($series)) {
            return response()->json(["message" => "Series not found"], 404);
        }
        return $series;
    }

    public function store(SeriesFormRequest $request, SeriesRepository $repository)
    {
        return response()->json($repository->add($request->all()), 201);
    }

    public function update(int $id, Request $request)
    {
        $series = Series::find($id);
        if (is_null($series)) {
            return response()->json(["message" => "Series not found"], 404);
        }
        $series->fill($request->all());
        $series->save();
        return $series;
    }

    public function destroy(int $id)
    {
        Series::destroy($id);
        return response()->noContent();
    }
}
