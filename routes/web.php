<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('about');
});

Route::get('/kegiatan', function () {
    return view('activities');
});

Route::get('/berita', function () {
    return view('news');
});

Route::get('/kontak', [ContactController::class, 'index']);
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
Route::get('/admin/kontak', [ContactController::class, 'admin'])->name('contacts.admin')->middleware('auth');

Auth::routes();
