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
        'nama_menu'=>'Kopi Hazlenut',
        'kategori_id' => 1,
        'harga'=> '18000',
        'foto_produk' => asset('template/images/icon/Kopi Hazelnut.png')
        ]);
        Menu::create([
        'nama_menu'=>'Kopi Caramel',
        'kategori_id' => 1,
        'harga'=> '18000',
        'foto_produk' => asset('template/images/icon/Kopi Caramel.png')
        ]);
    }
}
