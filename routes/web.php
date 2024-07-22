<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/contact-us', function () {
    return view('layouts.contact');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/articles', [ArticlesController::class,'index']);

Route::get('/article/{id}', [ArticlesController::class, 'show']);

Route::get('/articles/create', [ArticlesController::class,'create']);

Route::post('/articles/create', [ArticlesController::class, 'store']);

Route::get('article/{article}/edit', [ArticlesController::class, 'edit']);

Route::patch('/article/{article}/edit', [ArticlesController::class, 'update']);