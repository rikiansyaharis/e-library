<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user() {
        $user = [
            'dataUser' => Anggota::all()
                ];
            return view('admin.pages.dataUser', $user);
    }

}
