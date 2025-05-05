<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.main');
});

Route::get('/ruang', function(){
    return view('pages.ruangan');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/pemesanan', function(){
    return view('pages.pemesanan');
});