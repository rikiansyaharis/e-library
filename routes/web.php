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

//admin
Route::get('/dataadmin', [AdminController::class,'admin'])->name('admin');
Route::get('/formAdmin', [AdminController::class,'formAdmin'])->name('form');
Route::post('/insertadmin',[AdminController::class,'insertAdmin'])->name('insertAdmin');
Route::get('/updateadmin/{id}',[AdminController::class,'update'])->name('update');
Route::post('/updateadmin/{id}',[AdminController::class,'updateAdmin'])->name('updateAdmin');
Route::get('/deleteadmin/{id}',[AdminController::class,'deleteAdmin'])->name('delete');

//user/anggota
Route::get('/datauser', [AdminController::class,'user'])->name('user');
Route::get('/formUser', [AdminController::class,'formUser'])->name('form');
Route::post('/insertuser',[AdminController::class,'insertUser'])->name('insertUser');
Route::get('/updateuser/{id}',[AdminController::class,'update'])->name('update');
Route::post('/updateuser/{id}',[AdminController::class,'updateUser'])->name('updateUser');
Route::get('/deleteuser/{id}',[AdminController::class,'deleteUser'])->name('delete');



//buku
Route::get('/databuku', [BookController::class,'Buku'])->name('databuku');
Route::get('/detailbukuadmin/{id}', [BookController::class,'detailBuku'])->name('detail');
Route::get('/datapeminjaman', [BookController::class,'dataPengembalian'])->name('datapengembalian');


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
