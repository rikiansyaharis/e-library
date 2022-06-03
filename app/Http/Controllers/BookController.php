<?php

namespace App\Http\Controllers;

use App\Models\DetailBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function buku() {
        $buku = [
            'buku' => DetailBuku::all()
        ];
        return view('admin.pages.book.dataBuku', $buku);
    }

    public function formBuku() {
        return view('admin.pages.book.formBuku');
    }
    // public function detailBuku($id) {
    //     $detailBuku = [
    //         'detailBuku' => DetailBuku::find($id)
    //         ];
    //     return view('admin.pages.book.detailBuku', $detailBuku);
    // }
}

