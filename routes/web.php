<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Carbon;
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
Route::middleware(['admin.auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('profile', [AdminController::class, 'profile'])->name('profile');

    Route::resource('users', UserController::class)->except(['show']);
    Route::get('/users/{user}/send-message', [UserController::class, 'showSendMessageForm'])->name('users.sendMessage');
    Route::post('/users/{user}/send-message', [UserController::class, 'sendMessage'])->name('users.sendMessage.post');

    Route::resource('categories', CategoryController::class)->except(['show']);

    Route::resource('products', ProductController::class)->except(['show']);
    Route::get('/products/export', [ProductController::class, 'export'])->name('products.export');
    Route::get('/message', [MessageController::class, 'index'])->name('message');
    Route::get('/messages/reply/{id}', [MessageController::class, 'replyForm'])->name('reply');
    Route::post('/messages/reply/{id}', [MessageController::class, 'sendReply'])->name('messages.reply');

    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');

    Route::resource('orders', OrderController::class)->except(['show']);
    Route::get('/orders/export', [OrderController::class, 'export'])->name('orders.export');

    Route::get('/edit/{id}', [AdminController::class, 'editAdmin'])->name('admin.edit');
    Route::patch('/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/delete/{id}', [AdminController::class, 'deleteAdmin'])->name('admin.delete');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});

Route::get('/login', [AdminController::class, 'create'])->name('login');
Route::post('/login', [AdminController::class, 'login'])->name('login.store');
Route::get('/resetpasword', [AdminController::class, 'resetPassword'])->name('resetPassword');

Route::post('/addadmin', [AdminController::class, 'addAdmin'])->name('admin.store');
Route::get('/create', [AdminController::class, 'createAdmin'])->name('admin.create');

