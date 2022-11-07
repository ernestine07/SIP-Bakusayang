<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;


class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Kategori::create([
            'nama_kategori' => 'Minuman Kopi'
        ]);
        // 2
        Kategori::create([
            'nama_kategori' => 'Minuman Non Kopi'
        ]);
        // 3
        Kategori::create([
            'nama_kategori' => 'Makanan ringan'
        ]);
    }
}
