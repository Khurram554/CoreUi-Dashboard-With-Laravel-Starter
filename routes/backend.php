<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\DashboardController;


Route::prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('backend.dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('backend.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('backend.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('backend.profile.destroy');
    });
});
