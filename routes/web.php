<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/books/{genre}', [BookController::class, 'index'])->where('genre', '[A-Za-z]+')->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->where('id', '[0-9]+')->name('books.show');
