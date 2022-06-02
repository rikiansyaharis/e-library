<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('admin.pages.signin');
});

Route::get('/home', function () {
    return view('admin.pages.home', [
        "title" => "Beranda"
    ]);
});
// Route::get('/dataadmin', function () {
//     return view('admin.pages.dataAdmin', [
//         "title" => "Data admin"
//     ]);
// });

// Route::get('/datauser', function () {
//     return view('admin.pages.dataUser', [
//         "title" => "Data User"
//     ]);
// });

// Route::get('/detailbukuadmin', function () {
//     return view('admin.pages.detailBuku', [
//         "title" => "Detail"
//     ]);
// });



Route::get('/dataadmin', [PageController::class,'admin'])->name('admin');
Route::get('/dataadmin', [PageController::class,'edit'])->name('edit');
Route::get('/tambahadmin', function () {
    return view('admin.pages.formAdmin', [
        "title" => "Add"
    ]);
});

Route::get('/datauser', [PageController::class,'user'])->name('user');
Route::get('/databuku', [PageController::class,'Buku'])->name('Data Buku');
Route::get('/detailbukuadmin/{id}', [PageController::class,'detailBuku'])->name('Detail');
Route::get('/datapeminjaman', [PageController::class,'dataPengembalian'])->name('datapengembalian');
// Route::get('/dataadmin', 'App\Http\Controllers\PageController@admin',["title" => "Data User"]);
// Route::get('/datauser', 'App\Http\Controllers\PageController@user',["title" => "Data User"]);

// Route::get('/databuku', function () {
//     return view('admin.pages.dataBuku', [
//         "title" => "Data Buku"
//     ]);
// });

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
Route::get('/laporan', function () {
    return view('admin.pages.laporan', [
        "title" => "Laporan"
    ]);
});


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
