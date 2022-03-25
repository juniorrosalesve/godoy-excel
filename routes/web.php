<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('Home');

Route::get('importar-excel', [App\Http\Controllers\ImportExcel::class, 'index'])->name('ImportExcel');
Route::post('importar-excel', [App\Http\Controllers\ImportExcel::class, 'import'])->name('UploadFileExcel');

Route::get('register', [App\Http\Controllers\HomeController::class, 'register'])->name('Register');
Route::post('register/go', [App\Http\Controllers\HomeController::class, 'registerGo'])->name('RegisterGo');