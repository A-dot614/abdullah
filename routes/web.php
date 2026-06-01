<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',function () {return view('site.index');})->name('home');
Route::get('/contact', function () {return view('site.contact');})->name('contact');
Route::get('/services', function () {return view('site.service');})->name('service');
Route::get('/about', function () {return view('site.about');})->name('about');
Route::get('/projects', function () {return view('site.project');})->name('project');
Route::get('/projects/detail', function () {return view('site.detail');})->name('project.detail');
Route::get('/booking', function () {return view('site.booking');})->name('booking');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
