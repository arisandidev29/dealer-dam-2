<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/contact", function() {
    return view("contact");
})->name("contact");


Route::controller(authController::class)->group(function() {
    Route::get("login",'login');
});
