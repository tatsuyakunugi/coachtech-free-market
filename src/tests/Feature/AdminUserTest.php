<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
use App\Models\User;

class AdminUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_admin_toppage()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);

        $response = $this->actingAs($admin_user)->get('/admin');

        $response->assertStatus(302);
    }

    public function test_can_get_admin_user_list()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);
        $users = User::paginate(10);

        $response = $this->actingAs($admin_user)->get(route('admin.showUserList', compact('users')));

        $response->assertStatus(302);
    }

    public function test_can_search_users()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);
        $keyword = 'test太郎';
        $users = '';

        if(!empty($keyword))
        {
            $users = User::whereHas('profile', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('profile', function ($query) use ($keyword) {
                $query->where('address', 'like', '%' . $keyword . '%');
            })->get();
        }else{
            $users = User::paginate(10);
        }

        $response = $this->actingAs($admin_user)->get(route('admin.showUserList', compact('users')));

        $response->assertStatus(302);
    }
}
