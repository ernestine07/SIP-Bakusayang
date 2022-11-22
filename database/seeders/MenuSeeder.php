<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
        'kode_menu'=> '001',
        'kode_barang'=> 'mn01',
        'nama_menu'=>'Kopi Hazlenut',
        'kategori_id' => 1,
        'harga'=> '18.000',
        'foto_produk' => ''
        ]);
    }
}
