<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WatchController;
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



Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/card', [AdminController::class,'card'])->name('card');
Route::get('/carddetail',[AdminController::class,'adminDetail'] )->name('admin.detail');
Route::get('/index', [AdminController::class,'adminIndex'])->name('admin.index');
Route::post('/postWatches', [AdminController::class,'postWatches'])->name('postWatches');
Route::get('/create', [AdminController::class,'create'])->name('create');




    // ===============================
    //  routes
    // ===============================




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
