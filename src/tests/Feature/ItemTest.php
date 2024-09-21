<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\SoldItem;
use App\Models\Like;
use App\Models\Comment;

class ItemTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_index()
    {   
        $keyword = null;
        $dt = Item::with('categories');
        $items = $dt->paginate(10);
        $likes = null;
        $response = $this->get(route('item.index', compact('items', 'likes')));

        $response->assertStatus(200);
    }

    public function test_can_search_items()
    {
        $keyword = 'ストライプ';
        $dt = Item::with('categories');

        $dt->where('name', 'like', '%' . $keyword . '%')
            ->orwhere('description', 'like', '%' . $keyword . '%')
            ->orwhereHas('condition', function ($query) use ($keyword) {
                $query->where('condition', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('categories', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })->get();
        
        $items = $dt;
        $likes = null;
        $response = $this->get(route('item.index', compact('items', 'likes')));

        $response->assertStatus(200);
    }

    public function test_can_get_mylist()
    {
        $user_id = 1;
        $user = User::find($user_id);

        $items = null;
        $likes = '';
        if(Like::where('user_id', $user_id)->exists())
        {
            $likes = Like::where('user_id', $user_id)->get();
        }
        
        $response = $this->actingAs($user)->get(route('mylist.index', compact('items', 'likes')));

        $response->assertStatus(200);
    }

    public function test_can_get_item_detail()
    {
        $user_id = 1;
        $user = User::find($user_id);

        $item_id = 10;
        $item = Item::withCount('likes')->find($item_id);
        $categories = $item->categories;
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $item_id)
            ->get();
        
        $sold_item = '';
        if(SoldItem::where('item_id', $item_id)->exists())
        {
            $sold_item = SoldItem::where('item_id', $item_id)->first();
        }else{
            $sold_item = null;
        }

        $response = $this->get(route('item.detail', ['item_id' => $item_id], compact('item', 'sold_item', 'categories', 'comments')));

        $response->assertStatus(200);
    }
}
