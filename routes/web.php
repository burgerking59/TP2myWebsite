<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/about', function () {return view('about');})->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'mail'])->name('contact.mail');


Route::get('/books/{genre}', [BookController::class, 'index'])->where('genre', '[A-Za-z]+')->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->where('id', '[0-9]+')->name('books.show');

Route::post('/basket/{id}', [BasketController::class, 'store'])->middleware('auth')->name('basket.store');
Route::get('/basket', [BasketController::class, 'index'])->middleware('auth')->name('basket');
Route::delete('/basket/{id}', [BasketController::class, 'destroy'])->middleware('auth')->name('basket.destroy');

require __DIR__.'/auth.php';
