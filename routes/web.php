<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});


// Redirect
// route::redirect('/home','/');

// View
route::view('/displayhome','home');

// User Controller routes
Route::get('user',[UserController::class, 'getUser']);
Route::get('about',[UserController::class, 'aboutUser']);
Route::get('user/{name}',[UserController::class, 'getUserName']);
Route::get('admin',[UserController::class, 'adminLogin']);
Route::get('/user-home',[UserController::class, 'userHome']);
Route::get('user-about/{name}',[UserController::class, 'userAbout']);

// View Routes
Route::view('/about-test','about');
// Route::view('/admin','admin');
