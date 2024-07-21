<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        return view('mypage');
    }

    public function profile()
    {
        $user = Auth::user();
        if(Profile::where('user_id', $user->id)->exists())
        {
            $profile = Profile::where('user_id', $user->id)->first();
        }else{
            $profile = null;
        }

        return view('profile', compact('user', 'profile'));
    }
}
