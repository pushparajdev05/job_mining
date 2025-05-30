<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

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
            throw ValidationValidationException::withMessages([
                "email" => "User Credential does not match"
            ]);
        }

        return redirect("/");
    }
}
