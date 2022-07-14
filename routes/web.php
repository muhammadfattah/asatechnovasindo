<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', function () {
        return redirect()->to('/admin/produk');
    });
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/ganti-password', [LoginController::class, 'ganti_password']);
    Route::post('/ganti-password', [LoginController::class, 'update_password']);

    Route::get('/admin/client', [AdminController::class, 'client']);
    Route::post('/admin/client', [AdminController::class, 'client_upload']);
    Route::get('/admin/client/{id}', [AdminController::class, 'client_edit']);
    Route::put('/admin/client/{id}', [AdminController::class, 'client_update']);
    Route::delete('/admin/client/{id}', [AdminController::class, 'client_delete']);

    Route::get('/admin/portfolio', [AdminController::class, 'portofolio']);
    Route::post('/admin/portfolio', [AdminController::class, 'portofolio_upload']);
    Route::get('/admin/portfolio/{id}', [AdminController::class, 'portofolio_edit']);
    Route::put('/admin/portfolio/{id}', [AdminController::class, 'portofolio_update']);
    Route::delete('/admin/portfolio/{id}', [AdminController::class, 'portofolio_delete']);

    Route::get('/admin/produk', [AdminController::class, 'product']);
    Route::post('/admin/produk', [AdminController::class, 'product_upload']);
    Route::get('/admin/produk/{id}', [AdminController::class, 'product_edit']);
    Route::put('/admin/produk/{id}', [AdminController::class, 'product_update']);
    Route::delete('/admin/produk/{id}', [AdminController::class, 'product_delete']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang-kami', [AboutController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/client', [ClientController::class, 'index']);
Route::get('/hubungi-kami', [ContactController::class, 'index']);
