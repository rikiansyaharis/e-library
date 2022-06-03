<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function history() {
        return view('user.pages.history');
    }

    public function historyUser() {
        $historyUser = [
            'userHistory' => [
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                    [
                        'time' => '2022-09-19 11:51',
                        'namaAnggota' => 'Erviannur Rahmasari',
                        'judul' => 'Tia'
                    ],
                ]
            ];
        return view('user.pages.history', $historyUser);
    }
}
