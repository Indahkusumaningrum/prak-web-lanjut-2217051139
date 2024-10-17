<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

Route::get('/user/profile', [UserController::class, 'profile']);

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/user', [UserController::class, 'index']);

Route::get('/show/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/user/{id}/edit', [UserController::class,'edit'])->name('users.edit');
// Route::get('/user/{id}', [UserController::class, 'update'])->name('users.show');