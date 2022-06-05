<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\DetailBuku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function buku() {
        $buku = [
            Genre::all(),
            'buku' => DetailBuku::all()
        ];
        return view('admin.pages.book.dataBuku', $buku);
    }

    //form insert
    public function formBuku() {
        $data = [
            'genre' => Genre::all(),
            'action' => '/insertbook'
        ];
        return view('admin.pages.book.formBuku', $data);
    }

    //fungsi insert
    public function insertBook(Request $request) {

        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png'
        ]);

        if($request->hasFile('file')) {
            $file = $request->file('file');
            $path = public_path('images/product');
            $filename = 'product_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }
        $request->merge(['image' => $filename]);
        DetailBuku::create($request->only('id_genre','foto_buku','nama_buku','penulis_buku','jumlah_halaman','deskripsi'));
        return redirect('/databuku');
    }

    //form edit
    public function editForm($id) {
        $data = [
            'genre' => Genre::all(),
            'book'  => DetailBuku::find($id),
            'action' => "/updatebuku/$id"
        ];
        return view('admin.pages.book.formBuku', $data);
    }

    //fungsi update
    public function updateBook(Request $request) {
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,giff',
        ]);

        $data = DetailBuku::find($request->id);
        if($request->hasFile('file')) {
            $path = public_path('images/product');
            if (file_exists($path. '/' . $data->image)) {
                File::delete($path. '/' . $data->image);
            }

            $file = $request->file('file');
            $filename = 'product_'. rand(0, 999999999999) .'_'. rand(0, 999999999999) .'.'. $file->getClientOriginalExtension();
            $file->move($path, $filename);
        }

        $request->merge(['image' => $filename]);
        DetailBuku::where('id', $request->id)->update($request->only('id_genre','foto_buku','nama_buku','penulis_buku','jumlah_halaman','deskripsi'));

        return redirect('/databuku');
    }

    public function delete($id)
    {
        $data = DetailBuku::findOrFail($id);

        if(file_exists(public_path('images/product' . $data->image))){
            File::delete(public_path('images/product' . $data->image));
        }
        $data->delete();
        return redirect('/databuku');
    }
}

