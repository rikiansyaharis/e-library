<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anggota;
use App\Models\Pengguna;
use App\Models\DetailBuku;
use Illuminate\Http\Request;


class PageController extends Controller {

    public function index() {
        return view('admin.pages.auth.signin');
    }

    public function home() {
        return view('admin.pages.home');
    }



}
