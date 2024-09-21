<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
use App\Models\User;

class AdminDeleteUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_user_detail()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);

        $user = new User([
            'email' => 'demo05@example.co.jp',
            'password' => 'demo0005',
        ]);
        $user->save();

        $this->assertDatabaseHas('users', [
            'email' => 'demo05@example.co.jp',
            'password' => 'demo0005',
        ]);

        $response = $this->actingAs($admin_user)->get(route('admin.showUserDetail', ['user_id' => $user->id], compact('user')));

        $response->assertStatus(302);
    }

    public function test_can_delete_user()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);
        $email = 'demo05@example.co.jp';
        $password = 'demo0005';

        $user = User::where('email', $email)->where('password', $password)->first();

        $response = $this->actingAs($admin_user)->delete(route('admin.userDestroy', ['user_id' => $user->id]), [
            'id' => $user->id,
        ]);

        $response->assertStatus(302);
    }
}
