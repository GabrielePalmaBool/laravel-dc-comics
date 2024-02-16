<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

// chiamo metodo index del ComicController
Route::get('/', [ComicController::class,'index']) ->name('comic.index');

// chiamo metodo create del ComicController
Route::get('/comics/create', [ComicController::class,'create']) ->name('comic.create');

// chiamo metodo store del ComicController
Route::post('/comics', [ComicController::class,'store']) ->name('comic.store');

// chiamo metodo show del ComicController
Route::get('/comics/{id}', [ComicController::class,'show']) ->name('comic.show');

// chiamo metodo destroy del ComicController
Route::delete('/comics/{id}', [ComicController::class,'destroy']) ->name('comic.destroy');


