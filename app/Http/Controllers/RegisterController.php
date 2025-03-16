<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request, UserRepository $repository)
    {
        $data = $request->except(["_token"]);
        $user = $repository->add($data);
        Auth::login($user);
        return to_route("series.index");
    }
}
