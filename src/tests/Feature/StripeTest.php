<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Profile;
use App\Models\Item;
use App\Models\SoldItem;

class StripeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_not_checkout()
    {
        $user = new User([
            'email' => 'demo08@example.co.jp',
            'password' => 'demo0008',
        ]);
        $user->save();

        $this->assertDatabaseHas('users', [
            'email' => 'demo08@example.co.jp',
            'password' => 'demo0008',
        ]);

        $item_id = 20;
        $profile = $user->profile;

        if(!$profile)
        {
            $response = $this->actingAs($user)->get(route('stripe.checkout', ['item_id' => $item_id]));
            $response->assertRedirect(route('purchase.index', ['item_id' => $item_id]));
        }
    }

    public function test_can_stripe_success()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $item_id = 13;

        $response = $this->actingAs($user)->get(route('stripe.success', ['item_id' => $item_id]), [
            'user_id' => $user_id,
            'item_id' => $item_id,
        ]);

        $this->assertDatabaseHas('sold_items', [
            'user_id' => $user_id,
            'item_id' => $item_id,
        ]);

        $response->assertStatus(200);
    }
}
