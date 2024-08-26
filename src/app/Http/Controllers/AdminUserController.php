<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminUserController extends Controller
{
    public function show()
    {
        return view('admin.dashboard');
    }

    public function getUserList(Request $request)
    {
        $keyword = $request->input('keyword');
        $users = '';

        if(!empty($keyword))
        {
            $users = User::whereHas('profile', function ($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
            })
            ->orwhereHas('profile', function ($query) use ($keyword) {
                $query->where('address', 'like', '%' . $keyword . '%');
            })->get();
        }else{
            $users = User::all();
        }

        return view('admin.user_list', compact('users'));
    }
}
