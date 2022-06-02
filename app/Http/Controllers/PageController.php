<?php

namespace App\Http\Controllers;

use App\Models\DetailBuku;
use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;


class PageController extends Controller {


  public function admin() {
    $admin = [
    'dataAdmin' => Pengguna::all()
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

    public function buku() {
        $buku = [
            'buku' => DetailBuku::all()
        ];
        return view('admin.pages.dataBuku', $buku);
    }

    public function detailBuku($id) {
        $detailBuku = [
            'detailBuku' => DetailBuku::find($id)
            ];
        return view('admin.pages.detailBuku', $detailBuku);
    }

    public function dataPengembalian() {
        $dPengembalian = [
            'datapengembalian' => [
                            [
                                'no' => '01',
                                'kodeBuku' => '001',
                                'namaBuku' => 'Tia',
                                'namaAnggota' => 'Erviannur Rahmasari',
                                'namaPetugas' => 'Rahma',
                                'tanggalPinjam' => '01-05-2022',
                                'tanggalKembali' => '08-05-2022'
                            ],
                            [
                                'no' => '02',
                                'kodeBuku' => '002',
                                'namaBuku' => 'Kisah Tanah Jawa',
                                'namaAnggota' => 'Erviannur Rahmasari',
                                'namaPetugas' => 'Rahma',
                                'tanggalPinjam' => '01-05-2022',
                                'tanggalKembali' => '08-05-2022'
                            ],
                            [
                                'no' => '03',
                                'kodeBuku' => '003',
                                'namaBuku' => 'Matahari',
                                'namaAnggota' => 'Erviannur Rahmasari',
                                'namaPetugas' => 'Rahma',
                                'tanggalPinjam' => '01-05-2022',
                                'tanggalKembali' => '08-05-2022'
                            ],
                            [
                                'no' => '04',
                                'kodeBuku' => '004',
                                'namaBuku' => 'Bulan',
                                'namaAnggota' => 'Erviannur Rahmasari',
                                'namaPetugas' => 'Rahma',
                                'tanggalPinjam' => '01-05-2022',
                                'tanggalKembali' => '08-05-2022'
                            ],
                          ]
                ];
        return view('user.pages.data_peminjaman', $dPengembalian);
    }


}
