<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view("/register", "registration");
Route::view("/login", "login");
Route::get("/result", function () {
    return view("result");
});
