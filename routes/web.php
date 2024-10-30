<?php

use App\Http\Controllers\BookController;
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


Route::get('/', [BookController::class, "index"])->name('new');

Route::get('/form', [BookController::class, "index"])->name('new');
Route::post('/form', [BookController::class, "save"])->name('save');

Route::get('/form/{book}', [BookController::class, "edit"])->name('edit');
Route::put('/form/{book}', [BookController::class, "update"])->name('update');


Route::get('/form/delete/{book}', [BookController::class, "delete"])->name('delete');






