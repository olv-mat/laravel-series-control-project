<?php

namespace App\Http\Controllers;

use App\Models\Series;
use App\Events\{SeriesCreated, SeriesDeleted};
use App\Repositories\SeriesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;
use App\Http\Middleware\Authenticator;

class SeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticator::class)->except("index");
    }

    public function index(Request $request)
    {
        $name = "Guest";
        if (!is_null($request->user())) {
            $name = $request->user()->name;
        }
        $series = Series::with(["seasons"])->get();
        $successMessage = $request->session()->get("success.message");
        return view("series.index")->with([
            "name" => $name,
            "series" => $series,
            "successMessage" => $successMessage
        ]);
    }

    public function show(Series $series) {
        return view("series.show")->with([
            "series" => $series,
            "seasons" => $series->seasons()->with("episodes")->get()
        ]);
    }

    public function create()
    {
        return view("series.create");
    }

    public function store(SeriesFormRequest $request, SeriesRepository $repository)
    {
        $requestData = $request->all();

        if ($request->file("cover")) {
            $path = $request->file("cover")->store("covers", "public");
            $requestData["cover"] = $path;
        }

        $series = $repository->add($requestData);
        SeriesCreated::dispatch($series->name, $request->user());
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been created");
    }

    public function destroy(Series $series)
    {
        $series->delete();
        if ($series->cover) {
            SeriesDeleted::dispatch($series);   
        }
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been removed");
    }

    public function edit(Series $series)
    {
        return view("series.edit")->with("series", $series);
    }

    public function update(Request $request, Series $series)
    {
        $series->fill($request->all());
        $series->save();
        return to_route("series.index")->with("success.message", "The series '{$series->name}' has been updated");
    }    
}
