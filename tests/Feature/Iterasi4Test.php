<?php

namespace Tests\Feature;

use App\Models\Kritik;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;


class Iterasi4Test extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Data_Transaksi()
    {
        $user = User::where('role_id', '3')->first();

        $response = $this->actingAs($user)->get(route('transaksi.index'));
        $response->assertStatus(200);
    }

    public function test_cetak_struk()
    {
        $user = User::where('role_id', '3')->first();

        $response = $this->actingAs($user)->get(route('cetak',1));
        $response->assertStatus(200);

    }

    public function test_Tambah_Kritik()
    {
        $user = User::where('role_id', '1')->first();

        $response = $this->actingAs($user)
                         ->post(route('store'), [
                        'users_id'=>$user,
                        'pesan'=>'Mantap',
                        'tanggal'=>'2023-06-06',
            ]);
        // $response = $this->actingAs($user)->get(route('Kritik.store'));
        $response->assertStatus(302);     
    }

    // public function test_Lihat_Kritik()
    // {
    //     $user = User::where('role_id', '1')->first();

    //     $response = $this->actingAs($user)->get(route('kritik'));
    //     // $response = $this->actingAs($user)->get('Pesan.index');
    //     // dd($response);
    //     $response->assertStatus(302);

    // }

    public function test_Lihat_Pesanan()
    {
        $user = User::where('role_id', '3')->first();

        $response = $this->actingAs($user)->get(route('transaksi.show',1));
        $response->assertStatus(200);
    }
}
