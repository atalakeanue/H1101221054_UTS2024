<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/masterjabatan', [FormController::class, 'view_masterjabatan']);

Route::get('/gaji', [FormController::class, 'view_gaji']);

Route::get('/presensi', [FormController::class, 'view_presensi']);