<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_profile()
    {
        $user_id = 1;
        $user = User::find($user_id);

        if(Profile::where('user_id', $user_id)->exists())
        {
            $profile = Profile::where('user_id', $user_id)->first();
        }else{
            $profile = null;
        }

        $response = $this->actingAs($user)->get(route('profile.create'), compact('user', 'profile'));

        $response->assertStatus(200);
    }

    public function test_can_store_profile()
    {
        $user = new User([
            'email' => 'demo02@example.co.jp',
            'password' => 'demo0002',
        ]);
        $user->save();

        $response = $this->actingAs($user)->post(route('profile.store'), [
            'user_id' => $user->id,
            'image_path' => null,
            'name' => 'demo次郎',
            'post_code' => '112-1212',
            'address' => '東京都八王子市八王子12-12',
            'building' => null,
        ]);

        $response->assertStatus(302);
    }
}
