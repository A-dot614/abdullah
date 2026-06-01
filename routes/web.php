<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProtfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProtfolioController::class, 'index'])->name('home');
Route::get('/contact', [ProtfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/services',[ProtfolioController::class, 'services'])->name('service');
Route::get('/about', [ProtfolioController::class, 'about'])->name('about');
Route::get('/projects', [ProtfolioController::class, 'projects'])->name('project');
Route::get('/projects/detail', [ProtfolioController::class, 'show'])->name('project.detail');
Route::get('/booking',[ProtfolioController::class, 'booking'])->name('booking');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
