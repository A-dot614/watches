<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WatchController;
use Illuminate\Support\Facades\Route;

    // ===============================
    // site routes
    // ===============================

Route::get('/', [WatchController::class, 'index'])->name('home');
Route::get('/collection', [WatchController::class, 'collection'])->name('collection');
Route::get('/about', [WatchController::class, 'about'])->name('about');
Route::get('/contact', [WatchController::class, 'contact'])->name('contact');
Route::get('/detail/{okatia:slug}', [WatchController::class, 'detail'])->name('detail');




    // ===============================
    // admin routes
    // ===============================



Route::get('/dashboard', function () {return view('admin.dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/card', function () {return view('admin.watches.card');})->name('card');
Route::get('/carddetail', function () {return view('admin.watches.detail');})->name('admin.detail');
Route::get('/index', function () {return view('admin.watches.index');})->name('admin.index');
Route::post('/postWatches', function () {return view('admin.watches.post');})->name('postWatches');
Route::get('/create', function () {return view('admin.watches.create');})->name('create');




    // ===============================
    //  routes
    // ===============================




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
