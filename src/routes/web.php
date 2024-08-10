<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UploadController;

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

Route::get('/', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/{item_id}', [ItemController::class, 'item']);
Route::middleware('auth')->group(function () {
    Route::get('/mylist', [ItemController::class, 'getMyList'])->name('mylist.index');
});

Route::get('/register', [RegisterController::class, 'getRegister']);
Route::post('/register', [RegisterController::class, 'postRegister']);

Route::get('/login', [LoginController::class, 'getLogin']);
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('/logout', [LoginController::class, 'postLogout']);

Route::middleware('auth')->group(function () {
    Route::get('/mypage', [UserController::class, 'mypage']);
});

Route::middleware('auth')->group(function () {  
    Route::get('/mypage/profile', [ProfileController::class, 'profile']);
    Route::post('/profile_create', [ProfileController::class, 'store'])->name('profile_create');
    Route::put('/profile_update', [ProfileController::class, 'update'])->name('profile_update');
});

Route::middleware('auth')->group(function () {
    Route::get('/sell', [SellController::class, 'sell']);
    Route::post('/sell', [SellController::class, 'store'])->name('sell_item.store');
});


Route::middleware('auth')->group(function () {
    Route::post('/like/{item}', [LikeController::class, 'store'])->name('likes.store');
    Route::delete('/unlike/{item}', [LikeController::class, 'destroy'])->name('likes.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/comment/{item_id}', [CommentController::class, 'comment'])->name('comment.create');
    Route::post('/comment/{item_id}', [CommentController::class, 'store'])->name('comment.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'purchase']);
    Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'address']);
});

Route::get('/image', [UploadController::class, 'image']);
Route::post('/image_upload', [UploadController::class, 'store'])->name('image_upload');