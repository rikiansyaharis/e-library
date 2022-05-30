<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiPengguna extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengguna::insert([
            [
                'id' => '2345',
                'nip' => '1434325',
                'nama_petugas' => 'Rikiansyah',
                'jabatan' => 'Petugas',
                'email' => 'rikiansyah.aris29@gmail.com',
                'nomor' => '081230464341'
            ],
            [
                'id' => '2355',
                'nip' => '1434325',
                'nama_petugas' => 'Rikiansyah aris',
                'jabatan' => 'Petugas',
                'email' => 'rikiansyah.aris28@gmail.com',
                'nomor' => '081230464342'
            ],
        ]);
    }
}
