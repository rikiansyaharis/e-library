<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
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
            'buku' => [
                [
                    'foto' => 'tia.jpg',
                    'judul_buku' => 'Tia',
                ],
                [
                    'foto' => 'Cooking.jpg',
                    'judul_buku' => 'Cooking',
                ],
                [
                    'foto' => 'mindset.jpg',
                    'judul_buku' => 'Mindset',
                ],
                [
                    'foto' => 'Hyderabad.jpg',
                    'judul_buku' => 'Hyderabat',
                ],
                [
                    'foto' => 'kisah-tanah-jawa.jpg',
                    'judul_buku' => 'Kisah Tanah Jawa',
                ],
            ]
        ];
        return view('admin.pages.dataBuku', $buku);
    }

    public function detailBuku() {
        $detailBuku = [
            'detailBuku' => [
                [
                    'foto' => 'Rikiansyah',
                    'judul_buku' => 'Tia',
                    'Penerbit' => 'Gramedia Pustaka Utama',
                    'Penulis' => 'kembangmanggis',
                    'Tahun_Terbit' => '29 Jul 2019',
                    'Genre' => 'Romance',
                    'Jumlah_Halaman' => '427',
                    'Deskripsi' => 'Tia, seorang gadis SMA kelas dua, menatap kehidupan dengan penuh ironi. Kedewasaan adalah penghapusan sekian banyak kenikmatan hidup, begitu selalu pendapatnya. Namun tentu saja dia tidak dapat menahan perputaran dunia. Hukum alam berlaku pada setiap manusia, termasuk Tia, yang sejak awal tegas-tegas menolaknya. Di saat dia tengah memasuki arti kedewasaan itu sendiri, Tia sama sekali tidak menyadarinya. Alam telah menjeratnya dengan amat halus, mengantar gadis itu ke dunia barunya tanpa penolakan lagi. Tia kini telah siap menyongsong fajar dengan mata dan hati terbuka. Dia berhasil menembus pintu kedewasaan itu lewat uluran tangan gaib yang menolongnya. Apa lagi kalau bukan tangan-tangan gaib cinta?',

                ],
            ]
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
