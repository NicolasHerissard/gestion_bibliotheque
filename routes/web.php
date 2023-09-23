<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\BooksUserController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/users')->name('users.')->group(function() {
    Route::get('/show', [UserController::class, 'show'])->name('show');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
});

Route::prefix('/books')->name('books.')->group(function() {
    Route::get('/show', [BooksController::class, 'show'])->name('show');
    Route::get('/showBook/{id}', [BooksController::class, 'showOne'])->name('showBook');
    Route::get('/create', [BooksController::class, 'create'])->name('create');
    Route::post('/store', [BooksController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [BooksController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [BooksController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [BooksController::class, 'delete'])->name('delete');
});

Route::prefix('/booksUser')->name('booksUser.')->group(function() {
    Route::get('/show', [BooksUserController::class, 'showBooksUser'])->name('showBooksUser');
    Route::post('/store', [BooksUserController::class, 'storeBooksUser'])->name('storeBooksUser');
});