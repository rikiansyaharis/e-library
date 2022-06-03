<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin() {
        $admin = [
        'dataAdmin' => Pengguna::all()
            ];
        return view('admin.pages.admin.dataAdmin', $admin);
    }

    public function formAdmin() {
        return view('admin.pages.admin.formAdmin', ['action' => '/insertadmin']);
    }

    public function create() {
        $create = [
            'createadmin' => Pengguna::all()
        ];
        return view('admin.pages.admin.formAdmin', $create);
    }

    public function insertAdmin(Request $request) {
        Pengguna::create($request->only('nip','nama_petugas','jabatan','email','nomor'));
        return redirect()->route('admin')->with('success','Berhasil ditambahkan');
    }

    public function update($id) {
        $update = [
            'updateadmin' => Pengguna::find($id)
        ];
        return view('admin.pages..admin.formAdmin',  ['action' => '/updateadmin/'. $id], $update);
    }

    public function updateAdmin(Request $request, $id) {
        Pengguna::where('id', $id)->update($request->only('nip','nama_petugas','jabatan','email','nomor'));
        return redirect()->route('admin')->with('success','Berhasil diupdate');
    }

    public function deleteAdmin($id) {
        Pengguna::where('id', $id)->delete();
        return redirect()->route('admin')->with('success','Berhasil dihapus');
    }
}
