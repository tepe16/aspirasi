<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeDepanController;
use App\Http\Controllers\MasukanAspirasiController;
use App\Http\Controllers\BalasanKomentarController;
use App\Http\Controllers\BalasanKomentarDepanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



#users
Route::get('admin', [UserController::class, 'index_login']);

Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('tambah_user', [UserController::class, 'tambah_user'])->name('tambah_user');
Route::get('lihat_user', [UserController::class, 'lihat_user'])->name('admin.lihat_user');
Route::post('hapus', [UserController::class, 'destroy'])->name('admin.destroy');
Route::get('admin/{id}', [UserController::class, 'edit'])->name('admin.edit');
Route::put('admin/{id}', [UserController::class, 'update'])->name('admin.update');
Route::delete('admin/{id}', [UserController::class, 'destroy'])->name('admin.destroy');
Route::post('proses_tambah_user', [UserController::class, 'proses_tambah_user'])->name('proses_tambah_user');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
#berita
Route::resource('admins', BeritaController::class);



#home depan
Route::get('/', function () {
    return view('depan.index');
});
#news
Route::resource('depan', NewsController::class);
#home
Route::get('home', [HomeDepanController::class, 'index'])->name('depan.home');

#contact
Route::get('index_contact', [KontakController::class, 'index_contact'])->name('index_contact');
#masukan aspirasi
Route::resource('masukan', MasukanAspirasiController::class);
#balasan komentar
Route::resource('balasan', BalasanKomentarController::class);
Route::resource('balasan_depan', BalasanKomentarDepanController::class);;