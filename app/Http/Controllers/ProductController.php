<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\DetailBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $buku = [
            Genre::all(),
            'genre' => Genre::all(),
            'buku' => DetailBuku::all()
        ];
        return view('user.pages.dashboard', $buku);
    }

    public function detail() {
        return view('user.pages.booking.detail');
    }

    // public function search(Request $request) {
    //     if ($request->has('search')) {
    //         $search = DetailBuku::where('nama_buku','LIKE', '%' . $request->search . '%')->get();
    //     }
    //     else {
    //         $search = DetailBuku::all();
    //     }

    //     return view('user.pages.dashboard', $search);
    // }

}
