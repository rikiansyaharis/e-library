<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index() {
        return view('user.pages.favorite.Favorit');
    }

    public function addToFavorite($id) {
        try {

            $transaction = Favorite::where(['id_user' => Auth::user()->id]); 

            $product = DetailBuku::find($id);
            $check = Pinjam::where(['id_peminjaman' => $transaction->id, 'id_buku' => $product->id]);

            if ($check->count() <= 0) {
                Pinjam::create([
                    'id_peminjaman' => $transaction->id,
                    'id_buku' => $product->id,
                ]);
            }

            return response()->json([
                'message' => 'Data telah ditambahkan'
            ]);
            // return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e-> getMessage()
            ], 500);
        }
    }
}
