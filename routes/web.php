<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('index');
Route::get('/pendaftaraan', [App\Http\Controllers\Frontend\IndexController::class, 'pendaftaraan'])->name('pendaftaraan');
Route::get('/login', [App\Http\Controllers\Frontend\IndexController::class, 'login'])->name('login');
Route::get('/forgetpassword', [App\Http\Controllers\Frontend\IndexController::class, 'forgetpassword'])->name('forgetpassword');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

    Route::get('penduduk', [App\Http\Controllers\Admin\PendudukController::class, 'index'])->name('admin.penduduk.index');
    Route::get('penduduk/{id}', [App\Http\Controllers\Admin\PendudukController::class, 'lihat'])->name('admin.penduduk.lihat');
    Route::delete('penduduk/{id}/hapus', [App\Http\Controllers\Admin\PendudukController::class, 'destroy'])->name('admin.penduduk.destroy');


    Route::get('penyaluran', [App\Http\Controllers\Admin\PenyaluranController::class, 'index'])->name('admin.penyaluran.index');
    Route::post('penyaluran', [App\Http\Controllers\Admin\PenyaluranController::class, 'store'])->name('admin.penyaluran.store');
    Route::delete('penyaluran/{id}/hapus', [App\Http\Controllers\Admin\PenyaluranController::class, 'destroy'])->name('admin.penyaluran.destroy');
    
});
