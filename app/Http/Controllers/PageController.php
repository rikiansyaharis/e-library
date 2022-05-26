<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index() {
    $user = [
        'newUser' => [
          'Nama' => 'Rikiansyah',
          'Email' => 'rikiansyah.aris29@gmail.com',
          'No.Hp' => '081230464341'
        ],
      ];
      return view('admin.pages.dataUser', $user);
  }
}
