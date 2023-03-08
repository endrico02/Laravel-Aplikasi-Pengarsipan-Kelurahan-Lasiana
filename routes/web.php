<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

ROUTE::GET('/', [LoginController::class, 'ceklogin']);
Route::POST('actionlogin', [LoginController::class, 'actionlogin']);
Route::GET('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::GET('data_tamu', [HomeController::class, 'data_tamu'])->name('data_tamu')->middleware('auth');
Route::GET('data_tamu/read', [HomeController::class, 'read'])->name('read')->middleware('auth');
Route::GET('create', [HomeController::class, 'create'])->name('create')->middleware('auth');
Route::GET('pengurusan_surat', [HomeController::class, 'pengurusan_surat'])->name('pengurusan_surat')->middleware('auth');
Route::GET('pengarsipan_surat', [HomeController::class, 'pengarsipan_surat'])->name('pengarsipan_surat')->middleware('auth');
Route::GET('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');