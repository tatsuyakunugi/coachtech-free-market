<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;
use App\Models\Item;
use App\Models\SoldItem;
use Illuminate\Pagination\Paginator;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_mypage()
    {
        $user_id = 1;
        $user = User::find($user_id);

        if(Profile::where('user_id', $user_id)->exists())
        {
            $profile = Profile::where('user_id', $user_id)->first();
        }else{
            $profile = null;
        }

        $items = '';
        if(Item::where('user_id', $user_id)->exists())
        {
            $items = Item::where('user_id', $user_id)->paginate(10);
        }else{
            $items = null;
        }
        $sold_items = null;
        
        $response = $this->actingAs($user)->get(route('mypage.index', compact('user', 'profile', 'items', 'sold_items')));

        $response->assertStatus(200);
    }

    public function test_can_get_sold()
    {
        $user_id = 1;
        $user = User::find($user_id);

        if(Profile::where('user_id', $user_id)->exists())
        {
            $profile = Profile::where('user_id', $user_id)->first();
        }else{
            $profile = null;
        }

        $items = null;
        $sold_items = '';
        if(SoldItem::where('user_id', $user_id)->exists())
        {
            $sold_items = SoldItem::where('user_id', $user_id)->paginate(10);
        }else{
            $sold_items = null;
        }

        $response = $this->actingAs($user)->get(route('mypage.index', compact('user', 'profile', 'items', 'sold_items')));

        $response->assertStatus(200);
    }
}
