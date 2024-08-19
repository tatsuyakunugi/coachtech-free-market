<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\AdminRegisterRequest;
use Illuminate\View\View;

class AdminRegisterController extends Controller
{
    public function getAdminRegister()
    {
        return view('admin.register');
    }

    public function postAdminRegister(AdminRegisterRequest $request): RedirectResponse
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required|unique:admins',
            'password' => 'required|min:8',
        ]);

        $admin = new Admin([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $admin->save();
        return view('admin.login');
    }
}
