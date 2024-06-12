<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/contact", function() {
    return view("contact");
})->name("contact");

// product

Route::get("/product", function() {
    return view("product.index");
})->name("products");

Route::get("/product/{id}", function () {
    return view("product.product");
})->name("product");


Route::get("/search", function() {
    return view("product.search");
})->name("search");



// admin

Route::get("/dashboard", function () {
    return view("admin.index");
})->name("dashboard");

Route::get("/dashboard/product", function() {
    return view("admin.product.product");
})->name("dashboard.product");

Route::get("dashboard/product/create", function () {
    return view("admin.product.create");
})->name("dasboard.product.create");

Route::get("dashboard/product/{id}/edit", function() {
    return view("admin.product.edit");
})->name("dashboard.product.edit");

// customers

Route::Get("dashboard/custumers", function () {
    return view("admin.customers.index");
})->name("dashboard.customers");


Route::get("/dashboard/customers/create", function () {
    return view("admin.customers.create");
})->name("dashboard.customers.create");

Route::get("/dashboard/customers/{id}/edit", function () {
    return view("admin.customers.edit");
})->name("dashboard.customers.edit");

// users

Route::get("/dashboard/user", function () {
    return view("admin.user.index");
})->name("dashboard.user");


// auth


Route::controller(authController::class)->group(function() {
    Route::get("login",'login')->name("login");
    Route::get("register",'register')->name("register");
    Route::get("profilePic",'ProfilePic')->name("profilePic");
});
