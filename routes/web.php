<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SesiController;
use App\Models\Kategori;
use App\Models\Post;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
// Route::get('/', function(){
//     $data = Produk::all();
//     return view('dashboard',compact('data'));
// });

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [SesiController::class, 'index'])->name('login');
    Route::post('/login', [SesiController::class, 'login']);
});

Route::get('/home', function(){
    return redirect('admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/admin/editor', [AdminController::class, 'editor'])->middleware('userAkses:editor');
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/produk', [ProdukController::class, 'index']);
Route::resource('/produk', ProdukController::class);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::resource('/kategori', KategoriController::class);

Route::get('/post', [PostController::class, 'index']);
Route::resource('/post', PostController::class);