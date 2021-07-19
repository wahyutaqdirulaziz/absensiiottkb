<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\ProdiControllers;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RfidController;
use App\Http\Controllers\AjaxController;

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

Route::get('led',[AjaxController::class,'update'])->name('led');
Route::get('lampu_putih',[AjaxController::class,'putih'])->name('putih');
Route::get('lampu_merah',[AjaxController::class,'merah'])->name('merah');
Route::get('rfid',[AjaxController::class,'rfid'])->name('rfid');
Route::get('getrfid',[AjaxController::class,'getrfid'])->name('getrfid');
Route::get('setmasuk',[AjaxController::class,'setMasuk'])->name('ajax-masuk');
Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {
    Route::middleware('role:admin')->group(function () {
       
        Route::get('user',[UserController::class,'index'])->name('user');
        Route::get('user-create',[UserController::class,'create'])->name('user-create');
        Route::post('user-store',[UserController::class,'store'])->name('user-store');
        Route::get('user-edit/{id}',[UserController::class,'edit'])->name('user-edit');
        Route::post('user-update/{id}',[UserController::class,'update'])->name('user-update');
        Route::get('setup-absen', [AbsenController::class, 'setupabsen'])->name('setup-absen');
        Route::get('masuk', [AbsenController::class, 'aktifkanmasuk'])->name('masuk');
        Route::get('pulang', [AbsenController::class, 'aktifkanpulang'])->name('pulang');

        Route::get('prodi',[ProdiControllers::class,'index'])->name('prodi');
        Route::get('prodi-create',[ProdiControllers::class,'create'])->name('prodi-create');
        Route::post('prodi-store',[ProdiControllers::class,'store'])->name('prodi-store');
        Route::get('prodi-edit/{id}',[ProdiControllers::class,'edit'])->name('prodi-edit');
        Route::post('prodi-update/{id}',[ProdiControllers::class,'update'])->name('prodi-update');


        Route::get('laporan',[LaporanController::class,'index'])->name('laporan');
        Route::get('rfid',[RfidController::class,'index'])->name('rfid');
        Route::get('tap',[RfidController::class,'tap'])->name('tap');
        Route::get('detail-laporan/{rfid}',[LaporanController::class,'detail'])->name('laporan-detail');
    
    });
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::middleware('role:user')->group(function () {
        Route::get('set-update', [AbsenController::class, 'set'])->name('set-absen');
      
        Route::get('set-masuk', [AbsenController::class, 'setmasuk'])->name('set-masuk');
        Route::get('set-pulang', [AbsenController::class, 'setpulang'])->name('set-pulang');
       
    });
});



