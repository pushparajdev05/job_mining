<?php

use App\Http\Controllers\joblistController;
use App\Http\Controllers\jobprofileController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;



//jobs
Route::controller(joblistController::class)->group(function()
{
    Route::get("/","index");
    Route::get("/post-job","create")->middleware(["auth"]);
    Route::get("/post-job/{job}","show");
    Route::get("/post-job/{job}/edit","edit");
    Route::post("/post-job","store");
    Route::patch("/post-job/{job}","update")->middleware(["auth","can:update,job"]);
    Route::delete("/post-job/{job}","destroy")->middleware(["auth","can:delete,job"]);
});



//registration
Route::get("/register", [usersController::class, "create"]);
Route::post("/register", [usersController::class, "store"]);

//login and logout
Route::get("/login", [loginController::class, "create"])->name("login");
Route::post("/login", [loginController::class, "store"]);
Route::post("/logout", [loginController::class, "destroy"]);


Route::get("/jobprofile/{job}", jobprofileController::class);
Route::get("/result", searchController::class);
