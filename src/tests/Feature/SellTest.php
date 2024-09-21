<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Category;
use App\Models\Condition;

class SellTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_sell()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $categories = Category::all();
        $conditions = Condition::all();

        $response = $this->actingAs($user)->get('/sell', compact('categories', 'conditions'));

        $response->assertStatus(200);
    }

    public function test_can_add_status()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $item_id = 13;
        $item = Item::find($item_id);
        $status = 1;

        $response = $this->actingAs($user)->post(route('sell_item.status', ['item_id' => $item_id]), [
            'status' => $status,
        ]);

        $response->assertStatus(302);
    }
}
