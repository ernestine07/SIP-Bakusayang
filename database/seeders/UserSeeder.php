<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make("admin"),
            'role_id' => '1'
        ]);
        User::create([
            'name' => 'Ernest',
            'username' => 'Ernest',
            'email' => 'ernest@gmail.com',
            'password' => Hash::make("123"),
            'role_id' => '2'
        ]);
        User::create([
            'name' => 'Kasir',
            'username' => 'kasir',
            'email' => 'kasir@gmail.com',
            'password' => Hash::make("kasir"),
            'role_id' => '3'
        ]);
        // User::create([
        //     'name' => 'Dapur',
        //     'username' => 'dapur',
        //     'email' => 'dapur@gmail.com',
        //     'password' => Hash::make("dapur"),
        //     'role_id' => '3'
        // ]);
        User::create([
            'name' => 'aset',
            'username' => 'aset',
            'email' => 'aset@gmail.com',
            'password' => Hash::make("aset"),
            'role_id' => '4'
        ]);
        User::create([
            'name' => 'pemilik',
            'username' => 'pemilik',
            'email' => 'pemilik@gmail.com',
            'password' => Hash::make("pemilik"),
            'role_id' => '5'
        ]);
    }
}
