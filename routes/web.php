<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get("/contact", function() {
    return view("contact");
})->name("contact");

// product

Route::controller(ProductController::class)->group(function() {

    Route::get("/product","index")->name("products");
    Route::get("/product/{id}","show")->name('product');

    Route::get("/dashboard/product/create","create")->name("dasboard.product.create");
    Route::post("dashboard/product/store",'store')->name("dashboard.product.store");

    Route::get("dashboard/product/{id}/edit",'edit')->name("dashboard.product.edit");
    Route::post("dashboard/product/update",'update')->name("dasbhoard.product.update");
    Route::delete("dasbhoard/product/delete",'destroy')->name("dashboard.product.delete");
});

// dashboard
Route::controller(dashboardController::class)->middleware(['role:admin|editor'])->group(function() {
    Route::get("/dashboard", 'index')->name('dashboard');
    Route::get("/dashboard/product",'product')->name("dashboard.product");
    Route::get("/dashboard/users",'users')->name("dashboard.user");
    Route::get("/dasboard/customers", 'customers')->name("dashboard.customers");
});


// users dashboard

Route::controller(usersController::class)->group(function() {
    Route::post("user/changeRole",'changeRole')->name('changeRole');
});

// customers

Route::controller(customersController::class)->group(function() {
    Route::post("/dashboard/customer/create",'create')->name("dashboard.customer.create");
    Route::get("/dashboard/customer/{id}/edit",'edit')->name("dashboard.customer.edit");
    Route::post("/dashboard/customer/update",'update')->name("dashboard.customer.update");
    Route::delete("/dasbhoard/customer/delete",'destroy')->name("dashboard.customer.delete");
});


Route::get("/search", function() {
    return view("product.search");
})->name("search");





Route::get("/dashboard/customers/create", function () {
   return view("admin.customers.create"); 
})->name("dashboard.customers.create");



// auth


Route::controller(authController::class)->group(function() {
    Route::get("login",'login')->name("login");
    Route::post("login",'doLogin')->name("doLogin");
    Route::get("register",'register')->name("register");
    Route::post("doRegister",'doRegister')->name("doRegister");
    Route::get("profilePic",'ProfilePic')->name("profilePic");
    Route::post("changePicture",'changePicture')->name("changePicture");

    Route::get("logout",'logout')->name("logout");
});
