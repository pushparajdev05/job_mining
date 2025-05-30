<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class usersController extends Controller
{
    public function create()
    {
        return view("registration");
    }
    public function store()
    {
        $attr = request()->validate(
            [
                "uname" => ["required"],
                "email" => ["required"],
                "password" => ["required", "email",Password::min(6)->letters()->numbers()->symbols()->mixedCase()],
                "password_confirmation" => ["required", "comfirm"],
                "empName" => ["required"],
                "logo" => ["required"]
            ]
        );
        $user = User::create(
            [
                "uname" => $attr["uname"],
                "email" => $attr["email"],
                "password" => $attr["password"],
            ]
        );

        Auth::login($user);
        
        return redirect("/");
    }
}

