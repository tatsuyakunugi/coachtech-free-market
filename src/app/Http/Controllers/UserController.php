<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
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
            $items = Item::where('user_id', $user->id)->get();
        }

        return view('mypage', compact('user', 'profile', 'items'));
    }
}
