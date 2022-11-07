<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
        Role::create([
            'nama_role' => 'Admin'
        ]);
        // 2
        Role::create([
            'nama_role' => 'Customer'
        ]);
        // 3
        Role::create([
            'nama_role' => 'Dapur'
        ]);
        // 4
        Role::create([
            'nama_role' => 'Kasir'
        ]);
        // 5
        Role::create([
            'nama_role' => 'Aset'
        ]);
        // 6
        Role::create([
            'nama_role' => 'Pemilik'
        ]);
    }
}
