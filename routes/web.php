<?php

use App\Http\Controllers\HostingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuangsicController;
use App\Http\Controllers\VideotronController;
use App\Http\Controllers\ZoomController;

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/', [RuangsicController::class,'index2']);


Route::view('main', 'pages.main')
    ->middleware(['auth', 'verified', 'admin_or_user'])
    ->name('main');
    
Route::view('pelayanan', 'pages.pelayanan')
    ->middleware(['auth', 'verified', 'admin_or_user'])
    ->name('pelayanan');
    
Route::view('videotron', 'pages.videotron')
    ->middleware(['auth', 'verified', 'admin_or_user'])
    ->name('videotron');
    
Route::view('hosting', 'pages.hosting')
    ->middleware(['auth', 'verified', 'admin_or_user'])
    ->name('hosting');
    
Route::view('zoom', 'pages.zoom')
    ->middleware(['auth', 'verified', 'admin_or_user'])
    ->name('zoom');
    
Route::view('ruang', 'pages.ruangan')
    ->middleware(['auth', 'verified', 'admin_or_user'])
    ->name('ruang');

Route::view('admin', 'pages.admin')
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

Route::get('admin', [RuangsicController::class, 'count'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('admin');

    
Route::get('admin/sic', [RuangsicController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminsic');
    
Route::delete('/admin/sic/{id}', [RuangsicController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminsic.destroy');
    
Route::put('/ruangsic/update/{id}', [App\Http\Controllers\RuangSicController::class, 'update'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('updateruang.update');

Route::get('admin/videotron', [VideotronController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminvideotron');
    
Route::put('admin/videotron/{id}', [VideotronController::class, 'update'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('videotron.update');

Route::delete('admin/videotron/{id}', [VideotronController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('videotron.destroy');

Route::get('admin/zoom', [ZoomController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminzoom');

Route::put('admin/zoom/{id}', [ZoomController::class, 'update'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('zoom.update');

Route::delete('admin/zoom/{id}', [ZoomController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('zoom.destroy');
    
Route::get('admin/hosting', [HostingController::class, 'index'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('adminhosting');

Route::put('admin/hosting/{id}', [HostingController::class, 'update'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('hosting.update');

Route::delete('admin/hosting/{id}', [HostingController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'admin'])
    ->name('hosting.destroy');

Route::post('/peminjaman', [RuangsicController::class, 'store'])->name('ruang.store');

Route::get('/peminjaman', [RuangsicController::class, 'create'])->name('ruang.create');

Route::post('/videotron', [VideotronController::class, 'store'])->name('videotron.store');

Route::post('/hosting', [HostingController::class, 'store'])->name('hosting.store');

Route::post('/zoom', [ZoomController::class, 'store'])->name('zoom.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
