<?php

use App\Http\Controllers\Web\BeritaController;
use App\Http\Controllers\Web\HKIController;
use App\Http\Controllers\Web\KegiatanController;
use App\Http\Controllers\Web\PanduanController;
use App\Http\Controllers\Web\PenelitianController;
use App\Http\Controllers\Web\PengabdianController;
use App\Http\Controllers\Web\ProfilController;
use App\Http\Controllers\Web\PublikasiController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class,'index']);

Route::get('profil', [ProfilController::class, 'profil']);
Route::get('visi-misi', [ProfilController::class, 'visiMisi']);
Route::get('struktur-organisasi', [ProfilController::class, 'strukturOrganisasi']);
Route::get('renstra', [ProfilController::class, 'renstra']);
Route::get('rip', [ProfilController::class, 'rip']);

Route::get('penelitian-internal', [PenelitianController::class, 'internal']);
Route::get('penelitian-drtpm-aptv', [PenelitianController::class, 'drtpmAptv']);

Route::get('pengabdian-internal', [PengabdianController::class, 'internal']);
Route::get('pengabdian-drtpm-aptv', [PengabdianController::class, 'drtpmAptv']);

Route::get('publikasi', [PublikasiController::class, 'index']);

Route::get('prosedur-hki', [HKIController::class, 'prosedurHKI']);
Route::get('hki', [HKIController::class, 'hki']);

Route::get('seminar-nasional', [KegiatanController::class, 'seminarNasional']);
Route::get('seminar-internasional', [KegiatanController::class, 'seminarInternasional']);
Route::get('galeri', [KegiatanController::class, 'galeri']);

Route::get('berita', [BeritaController::class, 'index']);
Route::get('berita/{berita}', [BeritaController::class, 'show']);

Route::get('panduan-internal', [PanduanController::class, 'internal']);
Route::get('panduan-pusat', [PanduanController::class, 'pusat']);
Route::get('tentang-kami', [WebController::class, 'tentangKami']);