<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisionController;
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
        return redirect()->to('/admin/artikel');
    });
    Route::delete('/logout', [LoginController::class, 'logout']);

    Route::get('/profil', [ProfileController::class, 'profile']);
    Route::put('/profile', [ProfileController::class, 'update_profile']);

    Route::middleware(['can:superadmin'])->group(function () {
        Route::get('/pengguna', [UserController::class, 'user']);
        Route::get('/pengguna/tambah', [UserController::class, 'user_add']);
        Route::post('/pengguna', [UserController::class, 'user_upload']);
        Route::get('/pengguna/{id}', [UserController::class, 'user_edit']);
        Route::put('/pengguna/{id}', [UserController::class, 'user_update']);
        Route::delete('/pengguna/{id}', [UserController::class, 'user_delete']);

        Route::get('/admin/slider', [SliderController::class, 'slider']);
        Route::post('/admin/slider', [SliderController::class, 'slider_upload2']);
        Route::get('/admin/slider/tambah', [SliderController::class, 'slider_add']);
        Route::post('/admin/slider/{id}', [SliderController::class, 'slider_upload']);
        Route::get('/admin/slider/{id}', [SliderController::class, 'slider_edit']);
        Route::put('/admin/slider/{id}', [SliderController::class, 'slider_update']);
        Route::delete('/admin/slider/{id}', [SliderController::class, 'slider_delete']);

        Route::get('/admin/tentang-perusahaan/visi', [VisionController::class, 'vision_add']);
        Route::get('/admin/tentang-perusahaan/visi/{id}', [VisionController::class, 'vision_edit']);
        Route::put('/admin/tentang-perusahaan/visi/{id}', [VisionController::class, 'vision_update']);
        Route::delete('/admin/tentang-perusahaan/visi/{id}', [VisionController::class, 'vision_delete']);
        Route::post('/admin/tentang-perusahaan/visi', [VisionController::class, 'vision_upload']);

        Route::get('/admin/tentang-perusahaan/misi', [MissionController::class, 'mission_add']);
        Route::get('/admin/tentang-perusahaan/misi/{id}', [MissionController::class, 'mission_edit']);
        Route::put('/admin/tentang-perusahaan/misi/{id}', [MissionController::class, 'mission_update']);
        Route::delete('/admin/tentang-perusahaan/misi/{id}', [MissionController::class, 'mission_delete']);
        Route::post('/admin/tentang-perusahaan/misi', [MissionController::class, 'mission_upload']);

        Route::get('/admin/tentang-perusahaan', [AboutController::class, 'profile']);
        Route::post('/admin/tentang-perusahaan/{id}', [AboutController::class, 'profile_upload']);

        Route::get('/admin/layanan', [ServiceController::class, 'service']);
        Route::get('/admin/layanan/tambah', [ServiceController::class, 'service_add']);
        Route::post('/admin/layanan', [ServiceController::class, 'service_upload']);
        Route::get('/admin/layanan/{id}', [ServiceController::class, 'service_edit']);
        Route::put('/admin/layanan/{id}', [ServiceController::class, 'service_update']);
        Route::delete('/admin/layanan/{id}', [ServiceController::class, 'service_delete']);

        Route::get('/admin/client', [ClientController::class, 'client']);
        Route::get('/admin/client/tambah', [ClientController::class, 'client_add']);
        Route::post('/admin/client', [ClientController::class, 'client_upload']);
        Route::get('/admin/client/{id}', [ClientController::class, 'client_edit']);
        Route::put('/admin/client/{id}', [ClientController::class, 'client_update']);
        Route::delete('/admin/client/{id}', [ClientController::class, 'client_delete']);

        Route::get('/admin/portfolio', [PortfolioController::class, 'portofolio']);
        Route::get('/admin/portfolio/tambah', [PortfolioController::class, 'portofolio_add']);
        Route::post('/admin/portfolio', [PortfolioController::class, 'portofolio_upload']);
        Route::get('/admin/portfolio/{id}', [PortfolioController::class, 'portofolio_edit']);
        Route::put('/admin/portfolio/{id}', [PortfolioController::class, 'portofolio_update']);
        Route::delete('/admin/portfolio/{id}', [PortfolioController::class, 'portofolio_delete']);

        Route::get('/admin/produk', [ProductController::class, 'product']);
        Route::get('/admin/produk/tambah', [ProductController::class, 'product_add']);
        Route::post('/admin/produk', [ProductController::class, 'product_upload']);
        Route::get('/admin/produk/{id}', [ProductController::class, 'product_edit']);
        Route::put('/admin/produk/{id}', [ProductController::class, 'product_update']);
        Route::delete('/admin/produk/{id}', [ProductController::class, 'product_delete']);

        Route::get('/admin/kontak', [ContactController::class, 'contact']);
        Route::post('/admin/kontak', [ContactController::class, 'contact_upload2']);
        Route::get('/admin/kontak/tambah', [ContactController::class, 'contact_add']);
        Route::post('/admin/kontak/{id}', [ContactController::class, 'contact_upload']);
        Route::get('/admin/kontak/{id}', [ContactController::class, 'contact_edit']);
        Route::put('/admin/kontak/{id}', [ContactController::class, 'contact_update']);
        Route::delete('/admin/kontak/{id}', [ContactController::class, 'contact_delete']);

        Route::get('/admin/catalog', [CatalogController::class, 'catalog']);
        Route::post('/admin/catalog/{id}', [CatalogController::class, 'catalog_upload']);

        Route::post('admin/swap/{table}/{id1}/{id2}', [AdminController::class, 'swap']);
    });

    Route::get('/admin/artikel', [ArticleController::class, 'article']);
    Route::get('/admin/artikel/tambah', [ArticleController::class, 'article_add']);
    Route::post('/admin/artikel', [ArticleController::class, 'article_upload']);
    Route::get('/admin/artikel/{id}', [ArticleController::class, 'article_edit']);
    Route::put('/admin/artikel/{id}', [ArticleController::class, 'article_update']);
    Route::delete('/admin/artikel/{id}', [ArticleController::class, 'article_delete']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/tentang-kami', [AboutController::class, 'index']);
Route::get('/layanan', [ServiceController::class, 'index']);
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/client', [ClientController::class, 'index']);
Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/{slug}', [ArticleController::class, 'show']);
Route::get('/hubungi-kami', [ContactController::class, 'index']);
