<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\Input;
use App\Http\Controllers\InputacaraController;
use App\Http\Controllers\ListacaraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
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

Route::get('/', [DashboardController::class, 'index']);
Route::post('/input/{acara:id}', [DeleteController::class, 'destroy'])->middleware('auth');

Route::resource('/delete', DeleteController::class)->middleware('auth');

Route::resource('/input', InputacaraController::class)->middleware('auth');
// Route::get('/input', [InputacaraController::class, 'index'])->middleware('auth');

Route::get('/list', [ListacaraController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->Middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::resource('register', RegisterController::class);
// Route::post('/register', [RegisterController::class, 'store']);
