<?php

use App\Http\Controllers\AuthController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login/check', 'check');
    Route::get('/register', 'register');
    Route::post('/register/check', 'store');
    Route::get('/logout', 'logout');
});

Route::middleware('IsLogin')->group(function () {
    Route::controller()->group(function () {
    });
});
