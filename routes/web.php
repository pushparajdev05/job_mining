<?php

use App\Http\Controllers\joblistController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;


//jobs
Route::get("/", [joblistController::class,"index"]);
Route::get("/post-job", [joblistController::class,"create"]);
Route::get("/post-job/{job}", [joblistController::class,"show"]);
Route::get("/post-job/{job}/edit", [joblistController::class,"edit"]);
Route::post("/post-job", [joblistController::class,"store"]);
Route::patch("/post-job/{job}", [joblistController::class,"update"])->middleware(["auth","can:update,job"]);
Route::delete("/post-job/{job}/edit", [joblistController::class,"destroy"])->middleware(["auth","can:delete,job"]);


//registration
Route::get("/register", [usersController::class, "create"]);
Route::post("/register", [usersController::class, "store"]);

//login and logout
Route::get("/login", [loginController::class, "create"])->name("login");
Route::post("/login", [loginController::class, "store"]);
Route::post("/logout", [loginController::class, "destroy"]);


Route::get("/result", function () {
    return view("result");
});
