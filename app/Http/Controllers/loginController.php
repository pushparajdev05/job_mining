<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class loginController extends Controller
{
    public function create()
    {
        return view("login");
    }
    public function store()
    {
        $attr = request()->validate(
            [
                "email" => ["required", "email"],
                "password" => ["required"]
            ]
        );

        if(!Auth::attempt($attr))
        {
            throw ValidationException::withMessages([
                "email" => "User Credential does not match"
            ]);
        }

        return redirect("/");
    }
    public function destroy()
    {
        Auth::logout();

        session()->invalidate();

        return redirect("/");
    }
}
