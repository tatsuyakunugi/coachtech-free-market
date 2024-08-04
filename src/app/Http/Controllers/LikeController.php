<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store($itemId)
    {
        $user = Auth::user();

        if(!$user->is_like($itemId))
        {
            $user->like_items()->attach($itemId);
        }
        return back();
    }

    public function destroy($itemId)
    {
        $user = Auth::user();
        if($user->is_like($itemId))
        {
            $user->like_items()->detach($itemId);
        }
        return back();
    }
}
