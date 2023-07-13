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
