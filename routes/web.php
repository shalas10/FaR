<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// tampilan user
Route::get('/', function () {
    return view('LandingPage.index');
});
Route::get('/tentang', function () {
    return view('LandingPage.tentang');
});
Route::get('/booking', function () {
    return view('LandingPage.booking');
});
Route::get('/kontak', function () {
    return view('LandingPage.kontak');
});


// Tampilan Dashboard Admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/tambahantrian', function () {
    return view('admin.tambahantrian');
});
Route::get('/antrianmasuk', function () {
    return view('admin.antrianmasuk');
});
Route::get('/statusantrian', function () {
    return view('admin.statusantrian');
});
Route::get('/pencucianselesai', function () {
    return view('admin.pencucianselesai');
});
Route::get('/datapelanggan', function () {
    return view('admin.datapelanggan');
});
Route::get('/datakaryawan', function () {
    return view('admin.datakaryawan');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
