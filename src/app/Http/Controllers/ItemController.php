<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Like;
use App\Models\Comment;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $dt = Item::with('categories');

        if(!empty($keyword))
        {
            $dt->where('name', 'like', '%' . $keyword . '%')
            ->orwhere('description', 'like', '%' . $keyword . '%')
            ->orwhereHas('condition', function ($query) use ($keyword) {
                $query->where('condition', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('categories', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })->get();
        }

        $items = $dt->get();

        return view('index', compact('items'));
    }

    public function getMyList(Request $request)
    {
        $user = Auth::user();
        $items = '';

        if(Like::where('user_id', $user->id)->exists())
        {
            $items = $user->like_items()->get();
        }

        return view('index', compact('items'));
    }

    public function item($id)
    {
        $item = Item::withCount('likes')->find($id);
        $categories = $item->categories;
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $id)
            ->get();

        return view('item', compact('item', 'categories', 'comments'));
    }
}
