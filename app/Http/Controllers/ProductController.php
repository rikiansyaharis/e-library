<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\DetailBuku;
use App\Models\Peminjaman;
use App\Models\Pinjam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Exception;

class ProductController extends Controller
{
    public function index() {
        $buku = [
            Genre::all(),
            'genre' => Genre::all(),
            'buku' => DetailBuku::orderBy('created_at','desc')->get(),
            'new_add' => DetailBuku::orderBy('created_at','desc')->take(6)->get(),
            'new_book' => DetailBuku::orderBy('created_at','desc')->take(5)->get()
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

    public function detailBukuUser($id) {
        $detail = [
            Genre::all(),
            'genre' => Genre::all(),
            'detailuser' => DetailBuku::find($id)
        ];
        return view('user.pages.booking.detail', $detail);
    }

    public function genre($genre) {
        $data = [
            'buku' =>DetailBuku::wherehas('genre', function ($query) use ($genre) {
                $query->where('nama_genre', $genre);
            })->get(),
        ];
        return view('user.pages.booking.all-book', $data);
    }


    public function search(Request $request) {
        if ($request->has('search')) {
            $search = DetailBuku::where('nama_buku','LIKE', '%' . $request->search . '%')->get();
        }
        else {
            $search = DetailBuku::all();
        }

        return view('user.pages.booking.all-book', $search);
    }

    // ONLINE BOOK
    public function onlinebook() {
        return view('user.pages.online_book.detail');
    }

    public function viewcart() {
        $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->pinjam->count() : 0,
            'data' => $transaction->pinjam()->with('product')->get() ?? [],
        ];
        return view('user.pages.cart.cart', $data);
    }

    public function cart() {
        $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending'])->first();
        $data = [
            'count' => !is_null($transaction) ? $transaction->pinjam->count() : 0,
            'data' => $transaction->pinjam()->with('product')->get() ?? [],
        ];

        return response()->json($data);
    }

    public function addToCart($id) {
        try {

            $transaction = Peminjaman::where(['id_user' => Auth::user()->id, 'status' => 'pending']);

            if ($transaction->count() > 0) {
                $transaction = $transaction->first();
            } else {
                $transaction = Transaction::create([
                    'status' => 'pending'
                ]);
            }   

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


    public function removeFromBigCart($id) {
        try {
            Pinjam::findOrFail($id)->delete();

            // return response()->json([
                // 'message' => 'Data telah dihapus'

                // ]);
                return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function removeFromCart($id)
    {
        try {
            Pinjam::findOrFail($id)->delete();

            return response()->json([
                'message' => 'Data telah dihapus'

                ]);
                // return redirect()->back();
        } catch (Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }
}

