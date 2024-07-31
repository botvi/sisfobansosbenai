<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArsipController,
    InformasiController,
    DashboardController,
    PenerimaBantuanController,
    BantuanSosialController,
    LaporanController,
    LoginController,
    MasyarakatController,
    RegisterController,
    WebsiteController,
};
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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');



Route::middleware('auth')->group(function () {
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');



Route::get('/masyarakat', [MasyarakatController::class, 'index'])->name('masyarakat.index');
Route::get('/masyarakat/create', [MasyarakatController::class, 'create'])->name('masyarakat.create');
Route::post('/masyarakat', [MasyarakatController::class, 'store'])->name('masyarakat.store');
Route::get('/masyarakat/{id}', [MasyarakatController::class, 'show'])->name('masyarakat.show');
Route::get('/masyarakat/{id}/edit', [MasyarakatController::class, 'edit'])->name('masyarakat.edit');
Route::put('/masyarakat/{id}', [MasyarakatController::class, 'update'])->name('masyarakat.update');
Route::delete('/masyarakat/{id}', [MasyarakatController::class, 'destroy'])->name('masyarakat.destroy');

Route::resource('informasi', InformasiController::class);

Route::resource('penerima_bantuan', PenerimaBantuanController::class);
Route::get('/penerima-bantuan/{id}/print', [PenerimaBantuanController::class, 'print'])->name('penerima-bantuan.print');

Route::resource('bantuan_sosial', BantuanSosialController::class);

Route::post('/penerima_bantuan/arsipkan/{id}', [ArsipController::class, 'arsipkan'])->name('penerima_bantuan.arsipkan');
Route::get('/arsip_penerima_bantuan', [ArsipController::class, 'arsipIndex'])->name('arsip_penerima_bantuan.index');
Route::post('/arsip_penerima_bantuan/keluarkan/{id}', [ArsipController::class, 'keluarkan'])->name('arsip_penerima_bantuan.keluarkan');
Route::get('/arsip/{id}/detail', [ArsipController::class, 'detail'])->name('arsip_penerima_bantuan.detail');
Route::get('/arsip/{id}/print', [ArsipController::class, 'print'])->name('arsip_penerima_bantuan.print');


Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');

});


// WEBSITE

Route::get('/', [WebsiteController::class, 'index']);
Route::get('/informasidetail/{id}', [WebsiteController::class, 'show'])->name('informasidetail.show');

Route::get('/caridata', [WebsiteController::class, 'caridata']);
Route::get('/pencarian', [WebsiteController::class, 'search'])->name('pencarian');

// WEBSITE