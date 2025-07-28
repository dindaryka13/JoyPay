<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/login', function () {
    return view('pages.login');
});
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->with('error', 'Email atau password salah!');
});

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::get('/', function () {
    return view('layouts.app', [
        'page' => 'home',
        'title' => 'Beranda'
    ]);
})->name('home');

Route::get('/about', function () {
    return view('layouts.app', [
        'page' => 'about',
        'title' => 'Tentang Kami'
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('layouts.app', [
        'page' => 'contact',
        'title' => 'Kontak'
    ]);
})->name('contact');

// Tambahan agar tidak error
Route::get('/informasi', function () {
    return view('layouts.app', [
        'page' => 'informasi',
        'title' => 'Informasi'
    ]);
})->name('informasi');

Route::get('/kamus', function () {
    return view('layouts.app', [
        'page' => 'kamus',
        'title' => 'Kamus Istilah'
    ]);
})->name('kamus');

Route::get('/kloterAktif', function () {
    return view('layouts.app', ['page' => 'kloteraktif']);
})->name('kloter');
