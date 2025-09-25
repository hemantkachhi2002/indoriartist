<?php

use Illuminate\Support\Facades\Route;

// Define your web routes here

Route::get('/', function () {
    return view('welcome');
});

// Add more routes as needed
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

// Example of a route with a controller
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);