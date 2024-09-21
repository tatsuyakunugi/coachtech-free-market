<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_login_screen()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_can_post_login()
    {
        $user_id = 1;
        $user = User::find($user_id);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'testpass',
        ]);

        $this->assertAuthenticated();
    }

    public function test_can_not_post_login()
    {
        $user_id = 1;
        $user = User::find($user_id);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrongpass',
        ]);

        $this->assertGuest();
    }

    public function test_can_post_logout()
    {
        $user_id = 1;
        $user = User::find($user_id);

        $response = $this->actingAs($user)->post('/logout');

        $response->assertStatus(302);
    }
}
