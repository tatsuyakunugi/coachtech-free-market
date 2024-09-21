<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;

class AdminLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_admin_login_screen()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    public function test_can_admin_post_login()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);

        $response = $this->post('/admin/login', [
            'login_id' => $admin_user->login_id,
            'password' => $admin_user->password,
        ]);

        $response->assertStatus(302);
    }

    public function test_can_admin_post_logout()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);

        $response = $this->actingAs($admin_user)->post('/logout');

        $response->assertStatus(302);
    }
}
