<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

// chiamo metodo index del ComicController
Route::get('/', [ComicController::class,'index']) ->name('comic.index');

// chiamo metodo show del ComicController
Route::get('/comics/{id}', [ComicController::class,'show']) ->name('comic.show');