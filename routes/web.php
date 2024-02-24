<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Php;
use App\Http\Controllers\KaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::put('/karyawan/{id}/', [KaryawanController::class, 'update']);
Route::delete('/karyawan/{id}/', [KaryawanController::class, 'destroy']);
