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

    public function getUserList()
    {
        $users = User::all();
        return view('admin.user_list', compact('users'));
    }

    public function getUserDetail($id)
    {
        $user = User::find($id);
        return view('admin.user_detail', compact('user'));
    }
}
