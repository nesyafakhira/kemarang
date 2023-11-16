<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
<<<<<<< HEAD
use App\Http\Controllers\ContentController;
=======
use App\Http\Controllers\LoggingController;
>>>>>>> 4ef809a1701f29350949daf81020bc8ceca8ec92
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;

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

Route::get('/home', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified']);

Route::get('/form', function () {
    return view('form-request');
});

Route::get('/register-guru', function () {
    return view('form-register');
});

Route::get('/login-guru', function () {
    return view('form-login');
});

Route::get('/loginadmin', function () {
    return view('admin.login');
});

Route::get('/requestdashboard', function () {
    return view('admin.request.show');
});

Route::get('/stockdashboard', function () {
    return view('admin.stock.show');
});

Route::get('/barangdashboard', function () {
    return view('admin.barang.create');
});

Route::get('/barangindex', function () {
    return view('admin.barang.index');
});

Route::get('/userindex', function () {
    return view('admin.user.index');
});

Route::get('/show', function () {
    return view('admin.logging-activity.show');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');

Route::resource('barang', BarangController::class)->middleware(['auth', 'verified']);
Route::resource('user', UserController::class)->middleware(['auth', 'verified', 'role:admin']);
Route::resource('request', RequestController::class)->middleware(['auth', 'verified']);
<<<<<<< HEAD
Route::resource('content', ContentController::class)->middleware(['auth', 'verified']);

Route::view('/form-request', 'form-request')->name('form-request');

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
=======
Route::resource('logging', LoggingController::class)->middleware(['auth', 'verified']);
>>>>>>> 4ef809a1701f29350949daf81020bc8ceca8ec92

require __DIR__.'/auth.php';
