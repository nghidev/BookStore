<?php

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

Route::get('/home', [App\Http\Controllers\FE\HomeController::class, 'home'])->name('home');

// ======================FE======================
Route::get('/', [App\Http\Controllers\FE\HomeController::class, 'index'])->name('fe.index');
Route::get('fe/detail/{id}', [App\Http\Controllers\FE\HomeController::class, 'detail'])->name('fe.detail');
Route::get('fe/order', [App\Http\Controllers\FE\HomeController::class, 'order'])->name('fe.order');


// ======================BE======================
Route::get('/be/home', [App\Http\Controllers\BE\AdminController::class, 'index'])->name('BE.index');
