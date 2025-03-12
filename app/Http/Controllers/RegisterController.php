<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Hash,
    Auth
};

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $data = $request->except(["_token"]);
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        Auth::login($user);
        return to_route("series.index");
    }
}
