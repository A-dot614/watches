<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

    // ===============================
    // site routes
    // ===============================

Route::get('/', function () { return view('site.home');})->name('home');
Route::get('/collection', function () { return view('site.collection');})->name('collection');
Route::get('/about', function () { return view('site.about');})->name('about');
Route::get('/contact', function () { return view('site.contact');})->name('contact');
Route::get('/detail', function () {return view('site.detail');})->name('detail');




    // ===============================
    // admin routes
    // ===============================



Route::get('/dashboard', function () {return view('admin.dashboard');})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/card', function () {return view('admin.watches.card');})->name('card');
Route::get('/detail', function () {return view('admin.watches.detail');})->name('detail');
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
