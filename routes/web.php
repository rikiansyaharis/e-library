<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HistoryController;
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
Route::get('/home', [PageController::class,'home'])->name('home');
Route::post('/signin', [PageController::class, 'login'])->name('signin');
Route::post('/register', [PageController::class, 'register'])->name('register');

//admin
Route::get('/dataadmin', [AdminController::class,'admin'])->name('admin');
Route::get('/formAdmin', [AdminController::class,'formAdmin'])->name('form');
Route::post('/insertadmin',[AdminController::class,'insertAdmin'])->name('insertAdmin');
Route::get('/updateadmin/{id}',[AdminController::class,'update'])->name('update');
Route::post('/updateadmin/{id}',[AdminController::class,'updateAdmin'])->name('updateAdmin');
Route::get('/deleteadmin/{id}',[AdminController::class,'deleteAdmin'])->name('delete');

//user/anggota
Route::get('/datauser', [UsersController::class,'user'])->name('user');
Route::get('/formUser', [UsersController::class,'formUser'])->name('form');
Route::post('/insertuser',[UsersController::class,'insertUser'])->name('insertUser');
Route::get('/updateuser/{id}',[UsersController::class,'update'])->name('formupdate');
Route::post('/updateuser/{id}',[UsersController::class,'updateUser'])->name('updateUser');
Route::get('/deleteuser/{id}',[UsersController::class,'deleteUser'])->name('delete');

//buku
Route::get('/databuku', [BookController::class,'buku'])->name('buku');
Route::get('/detailbuku/{id}', [BookController::class,'detailBuku'])->name('DetailBuku');
Route::get('/formbuku', [BookController::class,'formBuku'])->name('formbuku');
Route::post('/insertbuku',[BookController::class,'insertBook'])->name('insertBuku');
Route::get('/updatebuku/{id}',[BookController::class,'editForm'])->name('update');
Route::post('/updatebuku/{id}',[BookController::class,'updateBook'])->name('updateBuku');
Route::get('/deletebuku/{id}',[BookController::class,'delete'])->name('delete');


// Route::get('/detailbukuadmin/{id}', [BookController::class,'detailBuku'])->name('detail');

Route::get('/transaksi', function () {
    return view('admin.pages.transaksi', [
        "title" => "Transaksi"
    ]);
});
Route::get('/pengembalian', function () {
    return view('admin.pages.pengembalian', [
        "title" => "Pengembalian"
    ]);
});


// user
Route::get('/dashboard', function () {
    return view('user.pages.dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/favorit', function () {
    return view('user.pages.Favorit', [
        "title" => "Favorit"
    ]);
});

// Historry
Route::get('/history', [HistoryController::class, 'history'])->name('history');
Route::get('/history', [HistoryController::class, 'historyUser'])->name('historyUser');

Route::get('/detail', function () {
    return view('user.pages.detail', [
        "title" => "Detail"
    ]);
});


