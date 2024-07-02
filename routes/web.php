<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/', function () {
//     return redirect()->route('beranda.produk');
// });

Route::get('/', [BerandaController::class, 'index'])
    ->name('beranda.index');

Route::get('/produk', [BerandaController::class, 'produk'])
    ->name('beranda.produk');


Route::get('/about',function(){
    return view('beranda.about');
})->name('beranda.about');

Route::get('/produk/{id}', [BerandaController::class, 'show'])->name('beranda.detail');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('bahans', BahanController::class);
        Route::resource('kategoris', KategoriController::class);
        Route::resource('produks', ProdukController::class);
        Route::resource('users', UserController::class);
        Route::resource('was', WaController::class);
    });
