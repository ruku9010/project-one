<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "Hello World";
});

Route::get("/hello1", [WelcomeController::class, 'sayHello']);
Route::get("/course", [WelcomeController::class, 'courseName']);