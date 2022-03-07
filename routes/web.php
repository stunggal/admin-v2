<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Input;
use App\Http\Controllers\InputacaraController;
use App\Http\Controllers\ListacaraController;
use App\Http\Controllers\ProfileController;
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
Route::get('/input', [InputacaraController::class, 'index']);
Route::get('/list', [ListacaraController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
