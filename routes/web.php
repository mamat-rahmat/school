<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
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

Route::get('/kontak', function () {
    return view('contact');
});

Auth::routes();
