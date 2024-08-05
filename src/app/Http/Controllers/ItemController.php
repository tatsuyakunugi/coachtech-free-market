<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Comment;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function item($id)
    {
        $item = Item::find($id);
        $categories = $item->categories;
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $id)
            ->get();

        return view('item', compact('item', 'categories', 'comments'));
    }
}
