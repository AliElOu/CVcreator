<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\homeController;
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



Route::middleware('guest')->group(function () {
    Route::get('/login', [authController::class, 'login_show'])->name('login.show'); 
    Route::post('/login_action', [authController::class, 'login'])->name('login.action');
    Route::get('/register', [authController::class, 'register_show'])->name('register.show');
    Route::post('/register_action', [authController::class, 'register'])->name('register.action');
    Route::get('/', function () {return view('welcome');});
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [authController::class, 'logout'])->name('auth.logout');
    Route::get('/home',[homeController::class , 'index'])->name('home');
});


