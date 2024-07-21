<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $user_info = $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:8',
        ]);

        if(Auth::attempt($user_info)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return redirect()->back();
    }

    public function postLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
