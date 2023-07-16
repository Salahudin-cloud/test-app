<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Mahasiswa::class, 'allMahasiswa']);

Route::get('mahasiswa/tambah', [Mahasiswa::class, 'index']);
Route::post('mahasiswa/tambah/proses', [Mahasiswa::class, 'tambahMahasiswa']);
Route::delete('mahasiswa/proses/delete/{id} ', [Mahasiswa::class, 'deleteMahasiswa']);
Route::get('mahasiswa/edit/{id}', [Mahasiswa::class, 'editViewMahasiswa']);
Route::put('mahasiswa/proses/edit/{id}', [Mahasiswa::class, 'editMahasiswa']);
