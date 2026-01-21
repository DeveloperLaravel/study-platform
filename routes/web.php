<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/lessons', [HomeController::class, 'lessons'])->name('lessons');
Route::get('/tracks', [HomeController::class, 'tracks'])->name('tracks');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::get('/pagedart', [HomeController::class, 'showdart'])->name('pagedart');
Route::get('/pagephp', [HomeController::class, 'showphp'])->name('pagephp');
Route::get('/pageunity', [HomeController::class, 'showunity'])->name('pageunity');
Route::get('/pagetest', [HomeController::class, 'showunity'])->name('pagetest');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
