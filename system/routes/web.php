<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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

//tampilan admin
    //login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
 Route::get('kategori', [HomeController::class, 'showKategori']);
Route::get('registration', [AuthController::class, 'registration']);
    //beranda
     Route::get('beranda', [HomeController::class, 'showBeranda']);
     //laravel8
        // Route::get('/beranda', 'showBeranda@HomeController']); laravel 7
Route::get('produk', [HomeController::class, 'showProduk']);

Route::get('user', [HomeController::class, 'showUser']);
	//logout
Route::get('logout', [AuthController::class, 'logout']);
    //filter
  Route::post('produk/filter', [ProdukController::class, 'filter']);
   
  
    //produk controller
    Route::get('produk', [ProdukController::class, 'index']);
    Route::get('produk/create', [ProdukController::class, 'create']);
    Route::post('produk', [ProdukController::class, 'store']);
    Route::get('produk/{produk}', [ProdukController::class, 'show']);
    Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
    Route::put('produk/{produk}', [ProdukController::class, 'update']);
    Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);


    //kategori
     Route::get('kategori', [KategoriController::class, 'index']);
    Route::get('kategori/create', [KategoriController::class, 'create']);
    Route::post('kategori', [KategoriController::class, 'store']);
    Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
    Route::get('kategori/{kategori}/edit', [KategoriController::class, 'edit']);
    Route::put('kategori/{kategori}', [KategoriController::class, 'update']);
    Route::delete('kategori/{produk}', [KategoriController::class, 'destroy']);



    // Client
    Route::get('welcome', [ClientController::class, 'showClient']);
  
   
   

    //user controller
    Route::get('user', [UserController::class, 'index']);
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user', [UserController::class, 'store']);
    Route::get('user/{user}', [UserController::class, 'show']);
    Route::get('user/{user}/edit', [UserController::class, 'edit']);
    Route::put('user/{user}', [UserController::class, 'update']);
    Route::delete('user/{user}', [UserController::class, 'destroy']);


//produk controller
Route::get('/', [ClientProdukController::class, 'home']);
Route::get('produk_single/{produk}', [ClientProdukController::class, 'show']);
//tampilan user
 Route::get('/', function () {
   return view('home');
    });

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produk_single', function () {
    return view('produk_single');
});

//upload gambar
Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');