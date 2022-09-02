<?php

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
