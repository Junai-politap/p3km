<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\HKI\HKIController;
use App\Http\Controllers\Admin\HKI\ProsedurHKIController;
use App\Http\Controllers\Admin\Kegiatan\GaleriController;
use App\Http\Controllers\Admin\Kegiatan\SeminarController;
use App\Http\Controllers\Admin\PenelitianController;
use App\Http\Controllers\Admin\PengabdianController;
use App\Http\Controllers\Admin\PimpinanController;
use App\Http\Controllers\Admin\Profil\ProfilController;
use App\Http\Controllers\Admin\PublikasiController;
use App\Http\Controllers\Admin\RenstraController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/',[AdminController::class, 'index']);

    Route::resource('user', UserController::class);
    Route::resource('galeri', GaleriController::class);
    Route::resource('seminar', SeminarController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('renstra', RenstraController::class);
    Route::resource('publikasi', PublikasiController::class);
    Route::resource('penelitian', PenelitianController::class);
    Route::resource('pengabdian', PengabdianController::class);
    Route::resource('prosedur-hki', ProsedurHKIController::class);
    Route::resource('hki', HKIController::class);
    Route::resource('berita', BeritaController::class);
    Route::put('berita/arsip/{berita}', [BeritaController::class, 'arsip']);
    Route::put('berita/publis/{berita}', [BeritaController::class, 'publis']);
    Route::resource('slide', SlideController::class);
    Route::resource('struktur-organisasi', PimpinanController::class);

});
