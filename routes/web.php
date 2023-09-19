<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


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
    return view ('home');
  });
  
    Route::get('login',[AuthController::class,'login']);
    Route::post('login',[AuthController::class,'auth']);
    Route::get('register',[UserController::class,'register']);
    Route::post('register',[UserController::class,'create']);
    Route::get('logout',[AuthController::class,'logout']);
  
    Route::get('siswa',[SiswaController::class,'show']);
    Route::get('siswa/add',[SiswaController::class,'add']);
    Route::post('siswa/create',[SiswaController::class,'create']);
    Route::get('siswa/edit/{id}',[SiswaController::class,'edit']);
    Route::post('siswa/update/{id}',[SiswaController::class,'update']);
    Route::get('siswa/hapus/{id}',[SiswaController::class,'hapus']);
  
    Route::get('kas',[KasController::class,'show']);
    Route::get('kas/add',[KasController::class,'add']);
    Route::post('kas/create',[KasController::class,'create']);
    Route::get('kas/edit/{id}',[KasController::class,'edit']);
    Route::post('kas/update/{id}',[KasController::class,'update']);
    Route::get('kas/hapus/{id}',[KasController::class,'hapus']);
    
    Route::get('pengeluaran',[PengeluaranController::class,'show']);
    Route::get('pengeluaran/add',[PengeluaranController::class,'add']);
    Route::post('pengeluaran/create',[PengeluaranController::class,'create']);
    Route::get('pengeluaran/edit/{id}',[PengeluaranController::class,'edit']);
    Route::post('pengeluaran/update/{id}',[PengeluaranController::class,'update']);
    Route::get('pengeluaran/hapus/{id}',[PengeluaranController::class,'hapus']);
    
    
  

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
