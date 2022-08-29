<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RatingUsiaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::get('/movie/index',[MovieController::class,'index'])->name('movie-index');
Route::get('/movie/create',[MovieController::class,'create'])->name('movie-create');
Route::post('/movie/store',[MovieController::class,'store'])->name('movie-store');
Route::get('/movie/edit/{id}',[MovieController::class,'edit'])->name('movie-edit');
Route::patch('/movie/update/{id}',[MovieController::class,'update'])->name('movie-update');
Route::delete('/movie/destroy/{id}',[MovieController::class,'destroy'])->name('movie-destroy');

Route::get('/genre/index',[GenreController::class,'index'])->name('genre-index');
Route::get('/genre/create',[GenreController::class,'create'])->name('genre-create');
Route::post('/genre/store',[GenreController::class,'store'])->name('genre-store');
Route::get('/genre/edit/{id}',[GenreController::class,'edit'])->name('genre-edit');
Route::patch('/genre/update/{id}',[GenreController::class,'update'])->name('genre-update');
Route::delete('/genre/destroy/{id}',[GenreController::class,'destroy'])->name('genre-destroy');


Route::get('/rating_usia/index',[RatingUsiaController::class,'index'])->name('rating_usia-index');
Route::get('/rating_usia/create',[RatingUsiaController::class,'create'])->name('rating_usia-create');
Route::post('/rating_usia/store',[RatingUsiaController::class,'store'])->name('rating_usia-store');
Route::get('/rating_usia/edit/{id}',[RatingUsiaController::class,'edit'])->name('rating_usia-edit');
Route::patch('/rating_usia/update/{id}',[RatingUsiaController::class,'update'])->name('rating_usia-update');
Route::delete('/rating_usia/destroy/{id}',[RatingUsiaController::class,'destroy'])->name('rating_usia-destroy');

