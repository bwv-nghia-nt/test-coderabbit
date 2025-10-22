<?php

use App\Http\Controllers\{
    AuthController,
    TopController,
    UserController
};
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/handleLogin', [AuthController::class, 'handleLogin'])->name('auth.handleLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [TopController::class, 'index'])->name('top.index');
    
    // User routes
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
});
