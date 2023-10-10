<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KategoriController;

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
    return view('auth.login');
});
Route::get('/sidebar',function(){
    return view ('sidebar');
  });
  Route::get('/home',function(){
    return view ('layouts.index');
  })->name('home');
  
    Route::get('login',[AuthController::class,'login']);
    Route::post('login',[AuthController::class,'auth']);
    Route::get('register',[UserController::class,'register']);
    Route::post('register',[UserController::class,'create']);
    Route::get('logout',[AuthController::class,'logout'])->name('logoutgas');
  
    Route::get('siswa',[SiswaController::class,'index'])->name('siswa');
    Route::get('siswa/create',[SiswaController::class,'create']);
    Route::post('siswa/store',[SiswaController::class,'store']);
    Route::get('siswa/edit/{id}',[SiswaController::class,'edit']);
    Route::post('siswa/update/{id}',[SiswaController::class,'update']);
    Route::get('siswa/destroy/{id}',[SiswaController::class,'destroy']);
  
    Route::get('kas',[KasController::class,'index'])->name('pemasukan');
    Route::get('history',[KasController::class,'showhistory'])->name('history');
    Route::get('kas/create',[KasController::class,'create']);
    Route::post('kas/store',[KasController::class,'store']);
    Route::get('kas/edit/{id}',[KasController::class,'edit']);
    Route::post('kas/update/{id}',[KasController::class,'update']);
    Route::get('kas/destroy/{id}',[KasController::class,'destroy']);

    Route::get('pengeluaran',[PengeluaranController::class,'index'])->name('pengeluaran');
    // Route::get('history',[KasController::class,'showhistory'])->name('history');
    Route::get('pengeluaran/create',[PengeluaranController::class,'create']);
    Route::post('pengeluaran/store',[PengeluaranController::class,'store']);
    Route::get('pengeluaran/edit/{id}',[PengeluaranController::class,'edit']);
    Route::post('pengeluaran/update/{id}',[PengeluaranController::class,'update']);
    Route::get('pengeluaran/destroy/{id}',[PengeluaranController::class,'destroy']);
    
    // Route::get('pengeluaran',[PengeluaranController::class,'show'])->name('pengeluaran');
    // Route::get('pengeluaran/add',[PengeluaranController::class,'add']);
    // Route::post('pengeluaran/create',[PengeluaranController::class,'create']);
    // Route::get('pengeluaran/edit/{id}',[PengeluaranController::class,'edit']);
    // Route::post('pengeluaran/update/{id}',[PengeluaranController::class,'update']);
    // Route::get('pengeluaran/hapus/{id}',[PengeluaranController::class,'hapus']);
    
    Route::get('profil',[ProfilController::class,'show'])->name('profil');

    Route::get('kategori',[KategoriController::class,'index'])->name('kategori');
    Route::get('kategori/create',[KategoriController::class,'create'])->name('kategori-create');
    Route::post('kategori/store',[KategoriController::class,'store']);
    Route::get('kategori/edit/{id}',[KategoriController::class,'edit']);
    Route::post('kategori/update/{id}',[KategoriController::class,'update']);
    Route::get('Kategori/destroy/{id}',[KategoriController::class,'destroy']);







    
  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
