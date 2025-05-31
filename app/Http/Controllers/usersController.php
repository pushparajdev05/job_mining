<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
                "email" => ["required","email","unique:users,email"],
                "password" => ["required","confirmed",Password::min(6)->letters()->numbers()->symbols()->mixedCase()],
                "empName" => ["required"],
                "logo" => ["required","mimes:jpg,png,jpeg"]
            ],[
                "password_confirmation.confirmed" => "The confirm password does not match"
            ],[
                "uname" => "User Name",
                "email" => "Email ID",
                "password"=>"Password",
                "empName"=>"Employer Name",
                "logo" => "Company Logo"
            ]
        );
        $user = User::create(
            [
                "uname" => $attr["uname"],
                "email" => $attr["email"],
                "password" => $attr["password"],
            ]
        );

        $img_path=request("logo")->store("logos");

        $user->employer()->create(
            [
                "name" => $attr["empName"],
                "logo" => $img_path,
            ]
        );

        Auth::login($user);

        return redirect("/");
    }


}

