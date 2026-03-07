<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('services', AdminServiceController::class);
});

