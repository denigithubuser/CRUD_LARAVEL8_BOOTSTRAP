<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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

//Route::get('/', function () {
//   return view('welcome');
//});

Route::get('/', [BarangController::class, 'index']);
Route::get('/create', [BarangController::class, 'create']);
Route::post('/store', [BarangController::class, 'store']);
Route::get('/show/{id}', [BarangController::class, 'show']);
Route::post('/update/{id}', [BarangController::class, 'update']);
Route::get('/destroy/{id}', [BarangController::class, 'destroy']);
