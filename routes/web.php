<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('barang', BarangController::class)->middleware(['auth', 'verified']);
Route::resource('user', UserController::class)->middleware(['auth', 'verified', 'role:admin']);
Route::resource('request', RequestController::class)->middleware(['auth', 'verified']);

Route::get('admin', function() {
    return view('index');
})->middleware(['auth', 'verified', 'role:admin']);

Route::get('staff', function() {
    return '<h1>staff panel</h1>';
})->middleware(['auth', 'verified', 'role:staff']);

Route::get('guru', function() {
    return '<h1>guru panel</h1>';
})->middleware(['auth', 'verified', 'role:guru']);

Route::get('kepsek', function() {
    return '<h1>kepsek panel</h1>';
})->middleware(['auth', 'verified', 'role:kepsek']);


require __DIR__.'/auth.php';
