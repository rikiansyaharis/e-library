<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HistoryController;
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

//home
Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/signup', [PageController::class,'signup'])->name('signup');
Route::post('/signin', [PageController::class, 'login'])->name('signin');
Route::post('/register', [PageController::class, 'register'])->name('register');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');


// Route::prefix('admin')->middleware('adminCheck')->group(function () {
    Route::get('/home', [PageController::class,'home'])->name('home');
    
    //genre
    Route::get('/datagenre', [GenreController::class,'index'])->name('add-genre');
    Route::get('/formgenre', [GenreController::class,'formgenre'])->name('form');
    Route::post('/insertgenre',[GenreController::class,'insertgenre'])->name('insertgenre');
    Route::get('/updategenre/{id}',[GenreController::class,'update'])->name('update');
    Route::post('/updategenre/{id}',[GenreController::class,'updateuser'])->name('updategenre');
    Route::get('/deletegenre/{id}',[GenreController::class,'delete'])->name('delete');

    // user/anggota
    Route::get('/datauser', [UsersController::class,'user'])->name('user');
    Route::get('/deleteuser/{id}',[UsersController::class,'deleteUser'])->name('delete');

    //buku
    Route::get('/databuku', [BookController::class,'buku'])->name('buku');
    Route::get('/detailbuku/{id}', [BookController::class,'detailBuku'])->name('DetailBuku');
    Route::get('/formbuku', [BookController::class,'formBuku'])->name('formbuku');
    Route::post('/insertbuku',[BookController::class,'insertBook'])->name('insertBuku');
    Route::get('/updatebuku/{id}',[BookController::class,'editForm'])->name('update');
    Route::post('/updatebuku/{id}',[BookController::class,'updateBook'])->name('updateBuku');
    Route::get('/deletebuku/{id}',[BookController::class,'delete'])->name('delete');

    // // Transaction
    // Route::get('/transaksi', function () {
    //     return view('admin.pages.transaksi', [
    //         "title" => "Transaksi"
    //     ]);
    // });

    // Route::get('/pengembalian', function () {
    //     return view('admin.pages.pengembalian', [
    //         "title" => "Pengembalian"
    //     ]);
    // });
// });



// Route::prefix('user')->middleware('userCheck')->group(function () {
    //view all
    Route::get('/all-book',[ProductController::class,'viewall'])->name('viewall');
    Route::get('genre/{nama_genre}',[ProductController::class, 'genre'])->name('genre');

    // Home User
    Route::get('/dashboard', [ProductController::class,'index'])->name('dashboard');
    Route::get('/detail', [ProductController::class,'detail'])->name('detail');
    Route::get('/search', [ProductController::class,'index'])->name('search');
    Route::get('/detailbukuuser/{id}', [ProductController::class,'detailBukuUser'])->name('DetailBukuUser');
    Route::get('data-cart', [ProductController::class, 'cart'])->name('getDataCart');
    Route::get('add-data-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');
    Route::delete('remove-from-cart/{id}', [ProductController::class, 'removeFromCart'])->name('remove-from-cart');
    Route::get('remove-from-bigcart/{id}', [ProductController::class, 'removeFromBigCart'])->name('remove-from-bigcart');

    //cart
    Route::get('/cart', [ProductController::class, 'viewcart'])->name('Cart');

    // Favorite
    Route::get('/favorite', [FavoriteController::class, 'index'])->name('favorite');

    // Historry
    Route::get('/history', [HistoryController::class, 'index'])->name('history');

    // Online Book
    Route::get('/onlinebook', [ProductController::class, 'onlinebook'])->name('Online-Book');
// });


