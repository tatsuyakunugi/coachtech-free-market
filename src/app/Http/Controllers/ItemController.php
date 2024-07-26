<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SellRequest;

class ItemController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sell()
    {
        $user = Auth::user();
        return view('sell', compact('user'));
    }

    public function store(SellRequest $request)
    {
        return redirect('sell');
    }
}
