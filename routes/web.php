<?php

use Illuminate\Support\Facades\App;
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
    return view('index');
})->name('home');

Route::get('/about',[
    \App\Http\Controllers\HomeController::class, 'about'
])->name('nosotros');

Route::get('/about/products',[
    \App\Http\Controllers\HomeController::class, 'products'
])->name('productos');

Route::get('/administrador', [
    \App\Http\Controllers\AdminController::class, 'admin'
])->name('administrador');