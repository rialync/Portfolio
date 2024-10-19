<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/laboratory/framework', [PageController::class, 'framework'])->name('framework');
Route::get('/laboratory/routing', [PageController::class, 'routing'])->name('routing');
Route::get('/laboratory/layout', [PageController::class, 'layout'])->name('layout');
Route::get('/laboratory/middleware', [PageController::class, 'middleware'])->name('middleware');
