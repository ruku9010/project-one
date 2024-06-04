<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "Hello World";
});

Route::get("/hello1", [WelcomeController::class, 'sayHello']);
Route::get("/course", [WelcomeController::class, 'courseName']);
Route::get("/dashboard", [DashboardController::class, 'dashboard']);

// dynamic Route   http://127.0.0.1:8000/article/1
Route::get("/article/{id?}", [ArticleController::class, 'index']);

// Dynamic but multiple parameter   http://127.0.0.1:8000/articles/page/2/display/authors?
Route::get("/articles/page/{pageNumber}/display/{type}", [ArticleController::class, 'showArticle']);

// Dynamic with query string      http://127.0.0.1:8000/articles/page/2?perpage=20&sort=date
Route::get("/articles/page/{pageNumber}", [ArticleController::class, 'queryString']);
