<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Like;

class LikeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_like_store()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $item_id = 1;
        $item = Item::find($item_id);

        if(!like::where('user_id', $user_id)->where('item_id', $item_id)->exists())
        {
            $response = $this->actingAs($user)->post(route('likes.store', ['item' => $item]), [
                'user_id' => $user_id,
                'item_id' => $item_id,
            ]);

            $response->assertStatus(302);
        }
    }

    public function test_can_like_destroy()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $item_id = 1;
        $item = Item::find($item_id);
        $like = '';

        if(like::where('user_id', $user_id)->where('item_id', $item_id)->exists())
        {
            $like = like::where('user_id', $user_id)->where('item_id', $item_id)->first();

            $response = $this->actingAs($user)->delete(route('likes.destroy', ['item' => $item]), [
                'id' => $like->id,
            ]);

            $response->assertStatus(302);
            $this->assertDatabaseMissing('likes', ['id' => $like->id]);
        }
    }
}
