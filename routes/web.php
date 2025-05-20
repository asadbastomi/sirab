<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketDetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('admin.')->prefix('admin')->group(function () {

        // Route::resource('user', UserController::class)->except('index', 'create', 'show');
        Route::name('user.')->prefix('user')->group(function () {
            Route::get('/{param?}', [UserController::class, 'index'])->name('index');
            Route::get('/{param?}/create', [UserController::class, 'create'])->name('create');
            Route::post('/{param?}', [UserController::class, 'store'])->name('store');
            Route::get('/edit/{id}/{param?}', [UserController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}/{param?}', [UserController::class, 'update'])->name('update');
            Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
        });

        Route::resource('ticket', TicketController::class);
        Route::resource('ticket-detail', TicketDetailController::class);
    });
});

Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::name('user.')->prefix('user')->group(function () {
        Route::name('sub-category.')->prefix('sub-category')->group(function () {
            Route::get('/{id}/get-by-category-id', [SubCategoryController::class, 'getByCategoryId'])->name('getByCategoryId');
        });
        Route::resource('user', UserController::class);
        Route::resource('biodata', BiodataController::class);
        Route::resource('ticket', TicketController::class);
    });
});

require __DIR__ . '/auth.php';
