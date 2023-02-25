<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AspirasiController;
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


//authentication
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

//aspirasi
Route::get('/', [AspirasiController::class, 'index'])->name('login');
Route::post('/aspirasi/store', [AspirasiController::class, 'store']);
Route::post('/aspirasi/feedback', [AspirasiController::class, 'feedback']);
//admin
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
Route::post('/admin/status', [AdminController::class, 'status'])->middleware('auth');
Route::delete('/admin/delete', [AdminController::class, 'destroy'])->middleware('auth');
