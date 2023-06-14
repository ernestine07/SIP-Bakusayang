<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Iterasi5Test extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_monitoring_keuangan()
    {
        $user = User::where('role_id', '5')->first();

        $response = $this->actingAs($user)->get(route('proses_keuangan'));
        $response->assertStatus(200);
    }
    public function test_monitoring_penjualan()
    {
        $user = User::where('role_id', '5')->first();

        $response = $this->actingAs($user)->get(route('penjualan'));
        $response->assertStatus(200);
    }
    public function test_monitoring_stok()
    {
        $user = User::where('role_id', '5')->first();

        $response = $this->actingAs($user)->get(route('stok_barang2'));
        $response->assertStatus(200);
    }
    public function test_melihat_laporan()
    {
        $user = User::where('role_id', '1')->first();

        $response = $this->actingAs($user)->get(route('laporan.index'));
        $response->assertStatus(200);
    }
    public function test_store_lupa_password()
    {
        $user = User::where('role_id', '2')->first();
        $response = $this->post(route('verifikasi'), [
                            'email' => $user->email
                           ]);
        $response->assertStatus(302);
    }

    public function test_store_reset_password()
    {
        $user = User::where('role_id', '2')->first();

        $token = DB::table('password_resets')
                    ->where([
                        'email' => $user->email
                    ])
                    ->first();

        $response = $this->post(route('lihat_reset_password'), [
                            'token' => $token->token,
                            'email' => 'pemilik2@gmail.com',
                            'password' => 'Pemilik2',
                            'password_confirmation' => 'Pemilik2'
                           ]);

        $response->assertStatus(302);
    }
}

