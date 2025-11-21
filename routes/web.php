<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Userルート
Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('', '/dashboard')->name('home');

    Route::get('dashboard', function () {
        return Inertia::render('user/dashboard');
    })->name('dashboard');
});

require __DIR__.'/user/settings/settings.php';
require __DIR__.'/user/auth/auth.php';

// Adminルート
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::redirect('', '/admin/dashboard')->name('admin.home');

    Route::get('dashboard', function () {
        return Inertia::render('admin/dashboard');
    })->name('admin.dashboard');
});

require __DIR__.'/admin/settings/settings.php';
require __DIR__.'/admin/auth/auth.php';
