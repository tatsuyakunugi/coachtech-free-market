<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [ItemController::class, 'index']);

Route::get('register', [RegisterController::class, 'getRegister']);
Route::post('register', [RegisterController::class, 'postRegister']);

Route::get('/login', [LoginController::class, 'getLogin']);
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', [LoginController::class, 'postLogout']);

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [UserController::class, 'mypage']);
    Route::get('/mypage/profile', [UserController::class, 'profile']);
});

Route::middleware('auth')->group(function () {  
    Route::post('/profile_create', [ProfileController::class, 'store'])->name('profile_create');
    Route::put('/profile_update', [ProfileController::class, 'update'])->name('profile_update');
});