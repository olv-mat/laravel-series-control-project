<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Series::with(["seasons"])->get();
        $successMessage = $request->session()->get("success.message");
        return view("series.index")->with("series", $series)->with("successMessage", $successMessage);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(SeriesFormRequest $request)
    {
        $series = Series::create($request->all());
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been created");
    }

    public function destroy(Series $series)
    {
        $series->delete();
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been removed");
    }

    public function edit(Series $series)
    {
        return view("series.edit")->with("series", $series);
    }

    public function update(SeriesFormRequest $request, Series $series)
    {
        $series->fill($request->all());
        $series->save();
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been updated");
    }
}
