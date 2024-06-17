<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([])->get('/books',[BooksController::class, 'index']);
Route::middleware([])->get('/books/create',[BooksController::class, 'create']);
Route::middleware([])->post('/books/store',[BooksController::class, 'store']);
Route::middleware([])->get('/books/edit/{id}',[BooksController::class, 'edit']);
Route::middleware([])->post('/books/update/{id}',[BooksController::class, 'update']);
Route::middleware([])->post('/books/destroy/{id}',[BooksController::class, 'destroy']);
