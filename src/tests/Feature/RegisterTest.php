<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_register_screen()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_user_post_register()
    {
        $email = 'demo01@example.co.jp';
        $password = 'demo0001';

        $response = $this->post('/register', [
            'email' => $email,
            'password' => $password,
        ]);

        $response->assertStatus(200);
    }
}
