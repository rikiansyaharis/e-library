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
                'id' => '01',
                'nip' => '1016',
                'nama_petugas' => 'Rikiansyah',
                'jabatan' => 'Petugas',
                'email' => 'rikiansyah.aris29@gmail.com',
                'nomor' => '081230464341'
            ],
        ]);
    }
}
