<?php

use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SchneiderController;
use App\Http\Controllers\TrendingController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/trending', [TrendingController::class, 'index'])->name('trn-index');

Route::get('/device', [DeviceController::class, 'index'])->name('dev-index');
Route::get('/device/create', [DeviceController::class, 'create'])->name('dev-create');
Route::post('/device/create', [DeviceController::class, 'store'])->name('dev-store');
Route::get('/device/{id}', [DeviceController::class, 'show'])->name('dev-show');
Route::get('/device/{id}', [DeviceController::class, 'edit'])->name('dev-edit');
Route::put('/device/{id}', [DeviceController::class, 'update'])->name('dev-update');
Route::delete('/device/{id}', [DeviceController::class, 'destroy'])->name('dev-destroy');

Route::get('/schneider', [SchneiderController::class, 'index'])->name('sch-index');


