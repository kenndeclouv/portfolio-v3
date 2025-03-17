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