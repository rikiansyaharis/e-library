<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function admin() {
    $admin = array(
        'items' => [
                ['Rikiansyah', 'rikiansyah.aris29@gmail.com', '081230464341'],
                ['Aris Kurniawan', 'rikiansyah.aris29@gmail.com', '081230464342'],

        ]);
      return view('admin.pages.dataAdmin')->with($admin);
  }
  public function user() {
    $user = array(
        'items' => [
                ['Rikiansyah', 'rikiansyah.aris29@gmail.com', '081230464341'],
                ['Aris Kurniawan', 'rikiansyah.aris29@gmail.com', '081230464342'],
                ['Rikiaris', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Edy Siswanto', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Taufik E kecot', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Nanda aw', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Rikiaris', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Edy Siswanto', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Taufik E kecot', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Nanda aw', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Rikiaris', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Edy Siswanto', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Taufik E kecot', 'rikiansyah.aris29@gmail.com', '081230464343'],
                ['Nanda aw', 'rikiansyah.aris29@gmail.com', '081230464343'],
        ]);
      return view('admin.pages.dataUser')->with($user);
  }
}
