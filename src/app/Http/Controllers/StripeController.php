<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Item;
use App\Models\SoldItem;

class StripeController extends Controller
{
    public function checkout($id)
    {
        $user = Auth::user();
        $item = Item::find($id);
        $profile = '';

        if(Profile::where('user_id', $user->id)->exists())
        {
            $profile = Profile::where('user_id', $user->id)->first();
        }

        if(!$profile)
        {
            return redirect()->route('purchase.index', ['item_id' => $item->id])->with('error', 'プロフィール情報がありません。マイページからプロフィールを作成してください。');
        }

        $line_item = [
            'price_data' => [
                'currency' => 'jpy',
                'unit_amount' => $item->price,
                'product_data' => [
                    'name' => $item->name,
                    'description' => $item->description,
                ],
            ],
            'quantity' => 1,
        ];

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [$line_item],
            'success_url' => route('stripe.success', $item->id),
            'cancel_url' => route('purchase.index', $item->id),
            'mode' => 'payment',
        ]);

        return view('stripe.checkout', ['item' => $item, 'session' => $session, 'publicKey' => env('STRIPE_PUBLIC_KEY')]);
    }

    public function success($id)
    {
        $user = Auth::user();
        $item = Item::find($id);

        $sold_item = new SoldItem([
            'user_id' => $user->id,
            'item_id' => $item->id,
        ]);

        $sold_item->save();

        return view('stripe/done', compact('item'));
    }
}
