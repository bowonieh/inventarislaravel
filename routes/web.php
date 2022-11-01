<?php

use App\Http\Controllers\logincontroller;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\Supplier;
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

Route::get('/supplier',[Supplier::class,'index']);
Route::get('/supplier/tambah',[Supplier::class,'form']);
Route::post('/supplier/process',[Supplier::class,'process']);
Route::get('/supplier/detil/{id}',[Supplier::class,'detil/{$id}']);
//Get, Post, Put, dll 
//Lokasi Routing
Route::get('/gudang',[LokasiController::class,'index']);
Route::get('/gudang/tambah',[LokasiController::class,'formTambah']);
Route::post('/gudang/simpan',[LokasiController::class,'simpan']);
Route::get('/gudang/edit/{id}',[LokasiController::class,'edit']);
Route::post('/gudang/edit/editsimpan',[LokasiController::class,'editsimpan']);
Route::get('/gudang/hapus/{id}',[LokasiController::class,'hapus']);
//Route login
Route::post('auth',[logincontroller::class,'authenticate']);
