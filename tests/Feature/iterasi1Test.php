<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;


class iterasi1Test extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_admin()
    {
        $user = User::where('role_id', '1')->first();
        $response = $this->post('/login-post', [
            'username' => $user->username,
            'password' => '456',
        ]);

        // $response->assertStatus(302);
        $this->assertAuthenticated();
        $response->assertRedirect(route('Dashboard.index'));
        // $response->assertStatus(200);
    }


    public function test_login_customer()
    {
        $user = User::where('role_id', '2')->first();
        $response = $this->post('/login-post', [
            'username' => $user->username,
            'password' => 'bri',
        ]);

        // $response->assertStatus(302);
        $this->assertAuthenticated();
        $response->assertRedirect(route('Dashboard.index_customer'));
        // $response->assertStatus(200);
    }
    // public function test_register()
    // {
    //     $this->visit('/register_customer');
    // }
}
