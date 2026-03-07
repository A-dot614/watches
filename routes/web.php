<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\BuyController;
use App\Http\Middleware\AdminCheck;
use App\Http\Middleware\BuyCheck;
use Illuminate\Support\Facades\Route;

    // ===============================
    // site routes
    // ===============================

Route::get('/', [WatchController::class, 'home'])->name('home');
Route::get('/collection', [WatchController::class, 'collection'])->name('collection');
Route::get('/about', [WatchController::class, 'about'])->name('about');
Route::get('/contact', [WatchController::class, 'contact'])->name('contact');
Route::get('/detail/{okatia:slug}', [WatchController::class, 'detail'])->name('detail');




    // ===============================
    // admin routes
    // ===============================


Route::prefix('/admin')->middleware(['auth', 'verified', 'web'])->group(function () {

      Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/card', [AdminController::class,'card'])->name('card');
Route::get('/carddetail',[AdminController::class,'adminDetail'] )->name('admin.detail');
Route::get('/index', [AdminController::class,'adminIndex'])->name('admin.index');
Route::post('/card', [AdminController::class, 'store'])->name('card');
Route::get('/create', [AdminController::class,'create'])->name('create');
});

    // ===============================
    //  buy route use in admin route
    // ===============================
Route::prefix('/buy')->middleware(['auth', 'verified', 'web'])->group(function () {

Route::get('/purchase', [AdminController::class, 'purchase'])->name('purchase');
Route::get('/detail-purchase/{okatia:slug}', [AdminController::class, 'buyDetail'])->name('buy.detail');
Route::get('/index-purchase', [AdminController::class, 'buyIndex'])->name('buy.index');
});
    // ===============================
    //  routes
    // ===============================




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
