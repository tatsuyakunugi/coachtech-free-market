<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Profile;
use App\Models\Customer;

class PurchaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_purchase()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $profile = Profile::where('user_id', $user_id)->first();
        $item_id = 13;
        $item = Item::find($item_id);
        $customer = '';

        if(Customer::where('user_id', $user->id)->exists())
        {
            $customer = Customer::where('user_id', $user->id)->first();
        }else{
            $customer = null;
        }

        $response = $this->actingAs($user)->get(route('purchase.index', ['item_id' => $item_id], compact('profile', 'customer', 'item')));

        $response->assertStatus(200);
    }

    public function test_can_create_shipping_address()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $profile = Profile::where('user_id', $user_id)->first();
        $item_id = 13;
        $item = Item::find($item_id);
        $customer = '';

        if(Customer::where('user_id', $user->id)->exists())
        {
            $customer = Customer::where('user_id', $user->id)->first();
        }else{
            $customer = null;
        }

        $response = $this->actingAs($user)->get(route('shippingAddress.create', ['item_id' => $item_id], compact('profile', 'customer', 'item')));

        $response->assertStatus(200);
    }

    public function test_can_store_shipping_address()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $item_id = 13;
        $item = Item::find($item_id);
        $shipping_building = null;

        $response = $this->actingAs($user)->post(route('shippingAddress.store', ['item_id' => $item_id]), [
            'user_id' => $user_id,
            'shipping_post_code' => '111-1112',
            'shipping_address' => '東京都渋谷区代々木1-1-1',
            'shipping_building' => $shipping_building,
        ]);

        $response->assertStatus(302);
    }

    public function test_can_update_shipping_address()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $item_id = 13;
        $item = Item::find($item_id);

        $response = $this->actingAs($user)->put(route('shippingAddress.update', ['item_id' => $item_id]), [
            'user_id' => $user_id,
            'shipping_post_code' => '111-1112',
            'shipping_address' => '東京都渋谷区代々木1-1-1',
            'shipping_building' => '第一マンション11F',
        ]);

        $response->assertStatus(302);
    }
}
