<?php

namespace Tests\Feature;

use App\Models\Kategori;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Hash;





class Iterasi2Test extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_membuat_kategori()
    {
        $role = '1';
        $kategori = User::where('role_id', $role)->first();   
        // $response = $this->actingAs($kategori)
        //                  ->post(route('Kategori.index'), [
        //                     'nama_kategori'=>'Makanan Berat',
        //                  ]);

        Kategori::create([
            'nama_kategori' =>'Makanan Berat',
        ]);
        // $response = $this->actingAs($kategori)->post(route('Kategori.index'));
        $response = $this->actingAs($kategori)->get(route('Kategori.index'));
        
        $response->assertStatus(200);
    }

    public function test_hapus_kategori()
    {
        $user = User::where('role_id', '1')->first();

        $response = $this->actingAs($user)->delete(route('Kategori.destroy', 3));
        $response->assertStatus(302);
    }

    public function test_tambah_user()
    {
        $datauser = User::where('role_id', '1')->first();   
        $response = $this->actingAs($datauser)
                         ->post(route('Datauser.store'), [
                            'name'=>'user1',
                            'username'=>'user1',
                            'email'=>'user1@gmail.com',
                            'password' => Hash::make('user1'),
                            'role_id'=>'2',
                         ]);
        $response->assertStatus(302);
    }

    public function test_ubah_user() 
    {
        $user = User::where('role_id', '1')->first();
        $response = $this->actingAs($user)
                         ->put(route('Datauser.update', 2), [
                            'name'=>'Karin',
                            'username'=>'karin',
                            'email'=>'karin@gmail.com',
                            'password' => Hash::make('123'),
                            'role_id'=>'2',
                         ]);
        $response->assertStatus(302);
    }

    public function test_hapus_user()
    {
        $user = User::where('role_id', '1')->first();

        $response = $this->actingAs($user)->delete(route('Kategori.destroy',2));
        $response->assertStatus(302);
    }
}
