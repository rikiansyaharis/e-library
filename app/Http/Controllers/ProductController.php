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
            'buku' => DetailBuku::orderBy('created_at','desc')->get(),
            'new_add' => DetailBuku::orderBy('created_at','desc')->take(6)->get()
        ];
        return view('user.pages.dashboard', $buku);
    }

    public function viewall() {
        $buku = [
            Genre::all(),
            'genre' => Genre::all(),
            'buku' => DetailBuku::orderBy('created_at','desc')->get(),
        ];
        return view('user.pages.booking.all-book', $buku);
    }

    public function genre($genre) {
        $data = [
            'buku' =>DetailBuku::wherehas('genre', function ($query) use ($genre) {
                $query->where('nama_genre', $genre);
            })->get(),
        ];
        return view('user.pages.booking.all-book', $data);
    }

    public function detail() {
        return view('user.pages.booking.detail');
    }

    public function search(Request $request) {
        if ($request->has('search')) {
            $search = DetailBuku::where('nama_buku','LIKE', '%' . $request->search . '%')->get();
        }
        else {
            $search = DetailBuku::all();
        }

        return view('user.pages.dashboard', $search);
    }



    // ONLINE BOOK
    public function onlinebook() {
        return view('user.pages.online_book.detail');
    }
}
