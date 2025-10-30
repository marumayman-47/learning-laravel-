<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TableController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [TableController::class, 'index'])->name('posts.index');
Route::get('/show', [TableController::class, 'show'])->name('posts.show');