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
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminDeleteUserController;
use App\Http\Controllers\AdminDeleteCommentController;
use App\Http\Controllers\MailSendController;
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
    Route::get('/mypage/profile', [ProfileController::class, 'profile'])->name('profile.create');
    Route::post('/mypage/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::put('mypage/profile', [ProfileController::class, 'update'])->name('profile.update');
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
    Route::delete('/comment/{item_id}', [CommentController::class, 'destroy'])->name('comment.destroy');
    Route::get('/comment_list/{item_id}', [CommentController::class, 'show'])->name('comment.show');
});

Route::middleware('auth')->group(function () {
    Route::get('/reply/{comment_id}', [ReplyController::class, 'reply'])->name('reply.create');
    Route::post('/reply/{comment_id}', [ReplyController::class, 'store'])->name('reply.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/purchase/{item_id}', [PurchaseController::class, 'purchase']);
    Route::get('/purchase/address/{item_id}', [PurchaseController::class, 'address']);
});

Route::middleware('guest:admin')->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'getAdminLogin'])->name('admin.showLogin');
    Route::post('/admin/login', [AdminLoginController::class, 'postAdminLogin']);
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', [AdminUserController::class, 'show']);
    Route::post('/admin/logout', [AdminLoginController::class, 'postAdminLogout']);
    Route::get('/admin/user_list', [AdminUserController::class, 'getUserList'])->name('admin.showUserList');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/user_detail/{user_id}', [AdminDeleteUserController::class, 'getUserDetail'])->name('admin.showUserDetail');
    Route::delete('/admin/user_detail/{user_id}', [AdminDeleteUserController::class, 'destroy'])->name('admin.userDestroy');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/comment_detail/{user_id}', [AdminDeleteCommentController::class, 'getCommentDetail'])->name('admin.showCommentDetail');
    Route::delete('/admin/comment_detail/{comment_id}', [AdminDeleteCommentController::class, 'destroy'])->name('admin.commentDestroy');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/mail/mail', [MailSendController::class, 'mailCreate'])->name('admin.mailCreate');
    Route::post('/admin/mail/complete', [MailSendController::class, 'send'])->name('admin.mailSend');
});

Route::get('/image', [UploadController::class, 'image']);
Route::post('/image_upload', [UploadController::class, 'store'])->name('image_upload');