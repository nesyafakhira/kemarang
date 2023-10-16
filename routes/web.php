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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('admin', function() {
    return view('index');
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
