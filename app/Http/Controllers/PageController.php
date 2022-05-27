<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function admin() {
    $admin = [
    'dataAdmin' => [
                    [
                        'NIP' => '16510653153',
                        'nama' => 'Rikiansyah',
                        'email' => 'rikiansyah.aris29@gmail.com',
                        'no' => '081230464341'
                    ],
                    [
                        'NIP' => '23513215311',
                        'nama' => 'Aris Kurniawan',
                        'email' => 'rikiansyah.aris29@gmail.com',
                        'no' =>  '081230464342'
                    ],
                    [
                        'NIP' => '153145151651',
                        'nama' => 'Aris Kurniawan',
                        'email' => 'rikiansyah.aris29@gmail.com',
                        'no' =>  '081230464342'
                    ]
                ]
            ];
      return view('admin.pages.dataAdmin', $admin);
  }

  public function user() {
    $user = [
        'dataUser' => [
                        [
                            'nama' => 'Rikiansyah',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' => '081230464341'
                        ],
                        [
                            'nama' => 'Aris Kurniawan',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' =>  '081230464342'
                        ],
                        [
                            'nama' => 'Aris Kurniawan',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' =>  '081230464342'
                        ],
                        [
                            'nama' => 'Aris Kurniawan',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' =>  '081230464342'
                        ],
                        [
                            'nama' => 'Aris Kurniawan',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' =>  '081230464342'
                        ],
                        [
                            'nama' => 'Aris Kurniawan',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' =>  '081230464342'
                        ],
                        [
                            'nama' => 'Aris Kurniawan',
                            'email' => 'rikiansyah.aris29@gmail.com',
                            'no' =>  '081230464342'
                        ]
                    ]
                ];
          return view('admin.pages.dataUser', $user);
  }
}
