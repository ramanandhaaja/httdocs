<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('customers', CustomerController::class);

Route::resource('images', ImageController::class);
