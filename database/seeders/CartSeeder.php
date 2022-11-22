<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::create([
        'menu_id' => 1,
        'qty' => '2',
        // 'harga' => '36000',
        'diskon' => '0',
        'subtotal' => '36000',
        ]);
    }
}
