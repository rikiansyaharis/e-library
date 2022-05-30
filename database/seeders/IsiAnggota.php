<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class IsiAnggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anggota::insert([
            [
                'id' => 12345,
                'nama_anggota' => 'Rikiansyah',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Genteng',
                'email' => 'rikiansyah.aris29@gmail.com',
                'nomor' => '081230464341'
            ],
            [
                'id' => 13452,
                'nama_anggota' => 'Rikiansyah aris',
                'jenis_kelamin' => 'Laki-laki',
                'alamat' => 'Genteng',
                'email' => 'rikiansyah.aris28@gmail.com',
                'nomor' => '081230464342'
            ],
        ]);
    }
}
