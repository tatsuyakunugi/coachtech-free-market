<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(RegisterRequest $request)
    {
        $this->validate($request,[
            'email' => 'email|required|unique:users',
            'password' => 'required|min:8',
        ]);
        
        $user = new User([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->save();
        return view('auth.login');
    }
}
