<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/archive', [PageController::class, 'archive'])->name('archive');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/multimedia', [PageController::class, 'multimedia'])->name('multimedia');
Route::get('/typography', [PageController::class, 'typography'])->name('typography');
Route::get('/shortcodes', [PageController::class, 'shortcodes'])->name('shortcodes');
Route::group(['prefix' => 'project', 'as' => 'project.'], function () {
    Route::get('/{project}', [PageController::class, 'project'])->name('index');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/login', [\App\Http\Controllers\DashboardController::class, 'login'])->middleware('dashboard.auth')->name('login');
    Route::post('/authenticate', [\App\Http\Controllers\DashboardController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [\App\Http\Controllers\DashboardController::class, 'logout'])->name('logout');

    Route::middleware('dashboard.auth')->group(function () {
        Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\DashboardController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\DashboardController::class, 'store'])->name('store');
        Route::get('/{project}/edit', [\App\Http\Controllers\DashboardController::class, 'edit'])->name('edit');
        Route::put('/{project}', [\App\Http\Controllers\DashboardController::class, 'update'])->name('update');
        Route::delete('/{project}', [\App\Http\Controllers\DashboardController::class, 'destroy'])->name('destroy');
    });
});
