<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function user() {
        $user = [
            'dataUser' => Anggota::all()
                ];
            return view('admin.pages.users.dataUser', $user);
    }

    public function formUser() {
        return view('admin.pages.users.formUser', ['action' => '/insertuser']);
    }

    public function create() {
        $create = [
            'createuser' => Anggota::all()
        ];
        return view('admin.pages.users.formUser', $create);
    }

    public function insertUser(Request $request) {
        Anggota::create($request->only('nama_anggota','jenis_kelamin','alamat', 'email','nomor'));
        return redirect()->route('admin')->with('success','Berhasil ditambahkan');
    }

    public function update($id) {
        $update = [
            'updateuser' => Anggota::find($id)
        ];
        return view('admin.pages.users.formUser',  ['action' => '/updateuser/'. $id], $update);
    }

    public function updateUser(Request $request, $id) {
        Anggota::where('id', $id)->update($request->only('nama_anggota','jenis_kelamin','alamat', 'email','nomor'));
        return redirect()->route('user')->with('success','Berhasil diupdate');
    }

    public function deleteUser($id) {
        Anggota::where('id', $id)->delete();
        return redirect()->route('user')->with('success','Berhasil dihapus');
    }

}
