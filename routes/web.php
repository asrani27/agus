<?php

use App\Http\Controllers\BookingController;
use App\Models\Deviasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\JalurController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\VerifikasiController;

Route::get('/', [LoginController::class, 'welcome']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);

    Route::get('/user/ajukan', [UserController::class, 'ajukan']);
    Route::get('/user/ajukan/add', [UserController::class, 'add_ajukan']);
    Route::post('/user/ajukan/add', [UserController::class, 'store_ajukan']);
    Route::get('/user/ajukan/edit/{id}', [UserController::class, 'edit_ajukan']);
    Route::post('/user/ajukan/edit/{id}', [UserController::class, 'update_ajukan']);
    Route::get('/user/ajukan/delete/{id}', [UserController::class, 'delete_ajukan']);

    Route::get('/user/pengaduan', [UserController::class, 'pengaduan']);
    Route::get('/user/pengaduan/add', [UserController::class, 'add_pengaduan']);
    Route::post('/user/pengaduan/add', [UserController::class, 'store_pengaduan']);
    Route::get('/user/pengaduan/edit/{id}', [UserController::class, 'edit_pengaduan']);
    Route::post('/user/pengaduan/edit/{id}', [UserController::class, 'update_pengaduan']);
    Route::get('/user/pengaduan/delete/{id}', [UserController::class, 'delete_pengaduan']);
});

Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin', [HomeController::class, 'superadmin']);
    Route::get('/superadmin/pengaduan', [PengaduanController::class, 'index']);
    Route::get('/superadmin/laporan', [LaporanController::class, 'index']);

    Route::get('/superadmin/laporan/bulan', [LaporanController::class, 'bulan']);

    Route::get('/superadmin/user', [UserController::class, 'index']);
    Route::get('/superadmin/user/add', [UserController::class, 'add']);
    Route::post('/superadmin/user/add', [UserController::class, 'store']);
    Route::get('/superadmin/user/edit/{id}', [UserController::class, 'edit']);
    Route::post('/superadmin/user/edit/{id}', [UserController::class, 'update']);
    Route::get('/superadmin/user/delete/{id}', [UserController::class, 'delete']);


    Route::get('/superadmin/kota', [KotaController::class, 'index']);
    Route::get('/superadmin/kota/add', [KotaController::class, 'add']);
    Route::post('/superadmin/kota/add', [KotaController::class, 'store']);
    Route::get('/superadmin/kota/edit/{id}', [KotaController::class, 'edit']);
    Route::post('/superadmin/kota/edit/{id}', [KotaController::class, 'update']);
    Route::get('/superadmin/kota/delete/{id}', [KotaController::class, 'delete']);

    Route::get('/superadmin/kapal', [KapalController::class, 'index']);
    Route::get('/superadmin/kapal/add', [KapalController::class, 'add']);
    Route::post('/superadmin/kapal/add', [KapalController::class, 'store']);
    Route::get('/superadmin/kapal/edit/{id}', [KapalController::class, 'edit']);
    Route::post('/superadmin/kapal/edit/{id}', [KapalController::class, 'update']);
    Route::get('/superadmin/kapal/delete/{id}', [KapalController::class, 'delete']);

    Route::get('/superadmin/jalur', [JalurController::class, 'index']);
    Route::get('/superadmin/jalur/add', [JalurController::class, 'add']);
    Route::post('/superadmin/jalur/add', [JalurController::class, 'store']);
    Route::get('/superadmin/jalur/edit/{id}', [JalurController::class, 'edit']);
    Route::post('/superadmin/jalur/edit/{id}', [JalurController::class, 'update']);
    Route::get('/superadmin/jalur/delete/{id}', [JalurController::class, 'delete']);


    Route::get('/superadmin/pemesanan', [PemesananController::class, 'index']);
    Route::get('/superadmin/pemesanan/add', [PemesananController::class, 'add']);
    Route::post('/superadmin/pemesanan/add', [PemesananController::class, 'store']);
    Route::get('/superadmin/pemesanan/edit/{id}', [PemesananController::class, 'edit']);
    Route::post('/superadmin/pemesanan/edit/{id}', [PemesananController::class, 'update']);
    Route::get('/superadmin/pemesanan/delete/{id}', [PemesananController::class, 'delete']);

    Route::get('/superadmin/booking', [BookingController::class, 'index']);
    Route::get('/superadmin/booking/add', [BookingController::class, 'add']);
    Route::post('/superadmin/booking/add', [BookingController::class, 'store']);
    Route::get('/superadmin/booking/edit/{id}', [BookingController::class, 'edit']);
    Route::post('/superadmin/booking/edit/{id}', [BookingController::class, 'update']);
    Route::get('/superadmin/booking/delete/{id}', [BookingController::class, 'delete']);
});

Route::get('/logout', function () {
    Auth::logout();
    Session::flash('success', 'Anda Telah Logout');
    return redirect('/');
});
