<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TableController::class, 'index'])->name('posts.index');
Route::get('/create', [TableController::class, 'create'])->name('posts.create');
Route::get('/show', [TableController::class, 'show'])->name('posts.show');
Route::post('/store', [TableController::class, 'store'])->name('posts.store');
Route::get('/edit', [TableController::class, 'edit'])->name('posts.edit');