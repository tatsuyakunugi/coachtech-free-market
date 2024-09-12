<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\SoldItem;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Pagination\Paginator;

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

        $items = $dt->paginate(10);
        $likes = null;

        return view('index', compact('items', 'likes'));
    }

    public function getMyList(Request $request)
    {
        $user = Auth::user();
        $items = null;
        $likes = '';

        if(Like::where('user_id', $user->id)->exists())
        {
            $likes = Like::where('user_id', $user->id)->paginate(10);
        }

        return view('index', compact('items', 'likes'));
    }

    public function item($id)
    {
        $item = Item::withCount('likes')->find($id);
        $categories = $item->categories;
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $id)
            ->get();
        $sold_item = '';
        if(SoldItem::where('item_id', $id)->exists())
        {
            $sold_item = SoldItem::where('item_id', $id)->first();
        }else{
            $sold_item = null;
        }

        return view('item', compact('item', 'sold_item', 'categories', 'comments'));
    }
}
