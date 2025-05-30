<?php

use App\Http\Controllers\joblistController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;


//jobs
Route::get("/", [joblistController::class,"index"]);
Route::post("/post-job", [joblistController::class,"create"]);
Route::get("/post-job/{job}", [joblistController::class,"show"]);


//registration
Route::get("/register", [usersController::class, "create"]);
Route::post("/register", [usersController::class, "store"]);

//login
Route::get("/login", [usersController::class, "create"]);
Route::post("/login", [usersController::class, "store"]);
Route::get("/result", function () {
    return view("result");
});
