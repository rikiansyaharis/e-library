<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiGenre extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
        [
            'id' => 101,
            'nama_genre' => 'horor',
        ],
        [
            'id' => 102,
            'nama_genre' => 'romance',
        ],
        [
            'id' => 103,
            'nama_genre' => 'action',
        ],
        [
            'id' => 104,
            'nama_genre' => 'umum',
        ]
    ]);
    }
}
