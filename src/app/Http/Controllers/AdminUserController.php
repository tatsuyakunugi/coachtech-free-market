<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function show()
    {
        return view('admin.dashboard');
    }
}
