<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [HomeController::class, 'about'])->name('about');
Route::get('/lomba', [HomeController::class, 'competitions'])->name('competitions');
Route::get('/jadwal', [HomeController::class, 'timeline'])->name('timeline');
Route::get('/daftar', [HomeController::class, 'registration'])->name('registration');
Route::post('/daftar', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/kontak', [HomeController::class, 'contact'])->name('contact');
Route::post('/kontak', [HomeController::class, 'contactStore'])->name('contact.store');
