<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Profile;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;

class PurchaseController extends Controller
{
    public function purchase($id)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $item = Item::find($id);
        $customer = '';

        if(Customer::where('user_id', $user->id)->exists())
        {
            $customer = Customer::where('user_id', $user->id)->first();
        }else{
            $customer = null;
        }

        return view('purchase', compact('profile', 'customer', 'item'));
    }

    public function create($id)
    {
        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $item = Item::find($id);
        $customer = '';

        if(Customer::where('user_id', $user->id)->exists())
        {
            $customer = Customer::where('user_id', $user->id)->first();
        }else{
            $customer = null;
        }

        return view('address', compact('profile', 'customer', 'item'));
    }

    public function store(CustomerRequest $request, $id)
    {
        $this->validate($request,[
            'shipping_post_code' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'shipping_address' => 'required',
        ]);

        $user = Auth::user();
        $item = Item::find($id);
        $item_id = $item->id;
        $shipping_building = '';

        if($request->shipping_building) {
            $shipping_building = $request->input('shipping_building');
        }else{
            $shipping_building = null;
        }

        $customer = new Customer([
            'user_id' => $user->id,
            'shipping_post_code' => $request->input('shipping_post_code'),
            'shipping_address' => $request->input('shipping_address'),
            'shipping_building' => $shipping_building,
        ]);

        $customer->save();

        return redirect()->route('purchase.index', ['item_id' => $item_id]);
    }

    public function update(CustomerRequest $request, $id)
    {
        $this->validate($request,[
            'shipping_post_code' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'shipping_address' => 'required',
        ]);

        $user = Auth::user();
        $item = Item::find($id);
        $item_id = $item->id;
        $customer = Customer::where('user_id', $user->id)->first();
        $shipping_building = '';

        if($request->shipping_building) {
            $shipping_building = $request->input('shipping_building');
        }else{
            $shipping_building = null;
        }

        $customer->update([
            'user_id' => $user->id,
            'shipping_post_code' => $request->input('shipping_post_code'),
            'shipping_address' => $request->input('shipping_address'),
            'shipping_building' => $shipping_building,
        ]);

        return redirect()->route('purchase.index', ['item_id' => $item_id]);
    }
}
