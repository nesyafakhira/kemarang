<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoggingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Models\Request;

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

Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function() {  

    Route::resource('user', UserController::class)->middleware([ 'role:admin']);
    Route::resource('barang', BarangController::class)->middleware([ 'role:staff|admin']);
    Route::resource('request', RequestController::class);
    Route::resource('logging', LoggingController::class);

    Route::get('/', function () {
        $req = Request::where('status', 'menunggu')->count();
        return view('admin.dashboard.index', compact('req'));
    })->name('dashboard')->middleware([ 'role:admin|staff']);
    
    // Stok
    Route::get('laporan/stok', [LaporanController::class, 'index'])->middleware(['role:kepsek|staff|admin'])->name('laporan.index');
    Route::post('laporan/stok', [LaporanController::class, 'index'])->middleware(['role:kepsek|staff|admin'])->name('laporan.index');

    // Request
    Route::get('laporan/request', [LaporanController::class, 'request'])->middleware(['role:kepsek|staff|admin'])->name('laporan.request');
    Route::post('laporan/request', [LaporanController::class, 'request'])->middleware(['role:kepsek|staff|admin'])->name('laporan.request');

    // PDF
    Route::get('laporan/stok-pdf', [LaporanController::class, 'indexpdf'])->middleware(['role:kepsek|staff|admin'])->name('laporan.index.pdf');
    Route::get('laporan/request-pdf', [LaporanController::class, 'requestpdf'])->middleware(['role:kepsek|staff|admin'])->name('laporan.request.pdf');
});





Route::resource('content', ContentController::class)->parameters([
    'content' => 'request'
])->middleware(['auth', 'verified', 'role:guru']);

Route::patch('/detail/{request}', [ContentController::class, 'gambar'])->middleware(['auth', 'verified', 'role:guru'])->name('content.gambar');

require __DIR__.'/auth.php';
