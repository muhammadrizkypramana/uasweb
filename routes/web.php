<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('makul', [App\Http\Controllers\MakulController::class, 'index'])->name('makul');
Route::get('makul-add', [App\Http\Controllers\MakulController::class, 'add'])->name('tambah_makul');
Route::post('makul-add', [App\Http\Controllers\MakulController::class, 'save'])->name('simpan_makul');
Route::get('makul-edit/{id}', [App\Http\Controllers\MakulController::class, 'edit'])->name('edit_makul');
Route::post('makul-update/{id}', [App\Http\Controllers\MakulController::class, 'update'])->name('update_makul');
Route::get('makul-delete/{id}', [App\Http\Controllers\MakulController::class, 'delete'])->name('hapus_makul');
Route::get('/makul/export-excel', [App\Http\Controllers\MakulController::class, 'export_excel'])->name('export_makul');

Route::get('mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('mahasiswa-add', [App\Http\Controllers\MahasiswaController::class, 'add'])->name('tambah_mahasiswa');
Route::post('mahasiswa-save', [App\Http\Controllers\MahasiswaController::class, 'save'])->name('simpan_mahasiswa');
Route::get('mahasiswa-edit/{id}', [App\Http\Controllers\MahasiswaController::class, 'edit'])->name('edit_mahasiswa');
Route::post('mahasiswa-update/{id}', [App\Http\Controllers\MahasiswaController::class, 'update'])->name('update_mahasiswa');
Route::get('mahasiswa-delete/{id}', [App\Http\Controllers\MahasiswaController::class, 'delete'])->name('hapus_mahasiswa');
Route::get('/mahasiswa/export-excel', [App\Http\Controllers\MahasiswaController::class, 'export_excel'])->name('export_mahasiswa');

Route::get('nilai', [App\Http\Controllers\NilaiController::class, 'index'])->name('nilai');
Route::get('nilai-add', [App\Http\Controllers\NilaiController::class, 'add'])->name('tambah_nilai');
Route::post('nilai-save', [App\Http\Controllers\NilaiController::class, 'save'])->name('simpan_nilai');
Route::get('nilai-edit/{id}', [App\Http\Controllers\NilaiController::class, 'edit'])->name('edit_nilai');
Route::post('niali-update/{id}', [App\Http\Controllers\NilaiController::class, 'update'])->name('update_nilai');
Route::get('nilai-delete/{id}', [App\Http\Controllers\NilaiController::class, 'delete'])->name('hapus_nilai');
Route::get('/nilai/export-excel', [App\Http\Controllers\NilaiController::class, 'export_excel'])->name('export_nilai');


