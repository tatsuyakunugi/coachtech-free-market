<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Item;
use App\Models\SoldItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    public function mypage(Request $request)
    {
        $user = Auth::user();
        if(Profile::where('user_id', $user->id)->exists())
        {
            $profile = Profile::where('user_id', $user->id)->first();
        }else{
            $profile = null;
        }

        $items = '';
        if(Item::where('user_id', $user->id)->exists())
        {
            $items = Item::where('user_id', $user->id)->paginate(10);
        }else{
            $items = null;
        }
        $sold_items = null;

        return view('mypage', compact('profile', 'items', 'sold_items'));
    }

    public function getSoldItems(Request $request)
    {
        $user = Auth::user();
        if(Profile::where('user_id', $user->id)->exists())
        {
            $profile = Profile::where('user_id', $user->id)->first();
        }else{
            $profile = null;
        }

        $items = null;
        $sold_items = '';
        if(SoldItem::where('user_id', $user->id)->exists())
        {
            $sold_items = SoldItem::where('user_id', $user->id)->paginate(10);
        }else{
            $sold_items = null;
        }

        return view('mypage', compact('profile', 'items', 'sold_items'));
    }
}
