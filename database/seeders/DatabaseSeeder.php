<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class); // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class); // \App\Models\User::factory(10)->create();
        $this->call(KategoriSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(CartDetailSeeder::class);
    }
}
