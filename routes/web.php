<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuangsicController;

Route::get('/', function () {
    return view('pages.main');
});

Route::view('main', 'pages.main')
    ->name('main');

Route::view('pelayanan', 'pages.pelayanan')
    ->name('pelayanan');

Route::view('videotron', 'pages.videotron')
    ->name('videotron');

Route::view('hosting', 'pages.hosting')
    ->name('hosting');

Route::view('zoom', 'pages.zoom')
    ->name('zoom');

Route::view('ruang', 'pages.ruangan')
    ->name('ruang');

Route::get('updateruang/{id}', [RuangsicController::class, 'update'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('updateruang.update');

Route::view('admin', 'pages.admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::get('admin', [RuangsicController::class, 'count'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::view('adminsic', 'pages.adminsic')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminsic');

Route::get('adminsic', [RuangsicController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminsic');

Route::delete('/adminsic/{id}', [RuangsicController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminsic.destroy');

    
Route::post('/peminjaman', [RuangsicController::class, 'store'])->name('ruang.store');

Route::get('/peminjaman', [RuangsicController::class, 'create'])->name('ruang.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
