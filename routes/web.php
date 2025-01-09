<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\RenovController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/audit', [AuditController::class, 'index'])->name('audit.index');
Route::get('/renov', [RenovController::class, 'index'])->name('renov.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
