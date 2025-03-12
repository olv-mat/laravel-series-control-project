<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        if (!Auth::attempt($request->only(["email", "password"]))) {
            return redirect()->back()->withErrors(["login" => "Invalid Credentials"]);;
        }
        return to_route("series.index");
    }

    public function destroy()
    {
        Auth::logout();
        return to_route("login");
    }
}
