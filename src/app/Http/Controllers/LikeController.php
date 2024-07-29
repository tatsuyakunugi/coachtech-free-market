<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class LikeController extends Controller
{
    public function like(Item $item)
    {
        $user = Auth::user();
        $isLiked = $user->favorites()->where('item_id', $item->id)->existed();

        if($isLiked)
        {
            $user->favorites()->detach($item);
        }else{
            $user->favorites()->attach($item);
        }

        return back();
    }
}
