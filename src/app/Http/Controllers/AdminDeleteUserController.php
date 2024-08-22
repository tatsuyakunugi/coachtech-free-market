<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminDeleteUserController extends Controller
{
    public function getUserDetail($id)
    {
        $user = User::find($id);
        return view('admin.user_detail', compact('user'));
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.showUserList');
    }
}
