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
        'foto_produk' => '63f205212d4abmenu_fwvaerg-removebg-preview.png'
        ]);
        // Menu::create([
        // 'nama_menu'=>'Kopi Caramel',
        // 'kategori_id' => 1,
        // 'harga'=> '18000',
        // 'foto_produk' => asset('template/images/icon/Kopi Caramel.png')
        // ]);
    }
}
