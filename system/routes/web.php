<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\LowonganController;
use App\Http\Controllers\Admin\PerusahaanController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SlideController;

use App\Http\Controllers\Alumni\BaseAlumniController;


use App\Http\Controllers\HomeController;

use App\Http\Controllers\AuthController;

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


Route::prefix('admin')->middleware('auth')->group(function(){

    Route::resource('/', AdminController::class);

    Route::resource('alumni', AlumniController::class);
    Route::get('alumni/{id}', [AlumniController::class, 'show']);
    Route::get('alumni/{id}/edit', [AlumniController::class, 'edit']);
    Route::PUT('alumni/{alumni}/update', [AlumniController::class, 'update']);


    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('lowongan', LowonganController::class);
    
    Route::resource('perusahaan', PerusahaanController::class);
    Route::PUT('perusahaan/{perusahaan}/update', [PerusahaanController::class, 'update']);

    Route::resource('user', UserController::class);
    Route::PUT('user/{user}/update', [UserController::class, 'update']);

    Route::resource('slide', SlideController::class);
    Route::PUT('slide/{slide}/update', [SlideController::class, 'update']);



});

Route::prefix('alumni')->middleware('auth:alumni')->group(function (){
    Route::get('/', [BaseAlumniController::class, 'index']);

    Route::get('lowongan', [BaseAlumniController::class, 'lowongan']);
    Route::get('perusahaan', [BaseAlumniController::class, 'perusahaan']);
});



Route::get('/', [HomeController::class,'index']);
Route::get('page-home', [HomeController::class,'index']);
Route::get('informasi', [HomeController::class,'informasi']);
Route::get('lowongan', [HomeController::class,'lowongan']);
Route::get('kegiatan', [HomeController::class,'kegiatan']);
Route::get('kegiatan/{id}', [HomeController::class, 'showkegiatan']);
Route::get('perusahaan', [HomeController::class,'perusahaan']);
Route::get('perusahaan/{id}', [HomeController::class,'showperusahaan']);
Route::get('galeri', [HomeController::class,'galeri']);
Route::get('tracer', [HomeController::class,'tracer']);
Route::get('tim', [HomeController::class,'tim']);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses']);
Route::get('logout', [AuthController::class, 'logout']);