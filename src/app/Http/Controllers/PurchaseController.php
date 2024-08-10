<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class PurchaseController extends Controller
{
    public function purchase($id)
    {
        $item = Item::find($id);

        return view('purchase', compact('item'));
    }

    public function address($id)
    {
        $item = Item::find($id);

        return view('address', compact('item'));
    }
}
