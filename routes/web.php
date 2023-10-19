<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/home', function () {
    return view('admin.dashboard.index');
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin', function() {
    return '<h1>admin panel</h1>';
})->middleware(['auth', 'verified', 'role:admin']);
Route::get('staff', function() {
    return '<h1>staff panel</h1>';
})->middleware(['auth', 'verified', 'role:staff']);;
Route::get('guru', function() {
    return '<h1>guru panel</h1>';
})->middleware(['auth', 'verified', 'role:guru']);;
Route::get('kepsek', function() {
    return '<h1>kepsek panel</h1>';
})->middleware(['auth', 'verified', 'role:kepsek']);;

require __DIR__.'/auth.php';
