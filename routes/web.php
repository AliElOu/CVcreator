<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\creationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\templateController;
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
    Route::get('/templates',[templateController::class , 'templates_show'])->name('templates.show');
    Route::get('/template/{template}',[templateController::class , 'template_create'])->name('template.create');
    Route::get('/creation',[creationController::class , 'create_show'])->name('create.show');
    Route::post('/creation/add_exp',[creationController::class , 'add_exp'])->name('add.exp');
    Route::get('/creation/remove_exp',[creationController::class , 'remove_exp'])->name('remove.exp');
});


