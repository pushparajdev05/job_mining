<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view("/job/register", "registration");
Route::view("/job/login", "login");
Route::view("/job/post", "post-job");
Route::get("/job/result", function () {
    return view("result");
});
