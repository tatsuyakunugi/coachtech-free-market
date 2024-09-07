<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Category;
use App\Models\Condition;
use App\Http\Requests\SellRequest;

class SellController extends Controller
{
    public function sell()
    {
        $user = Auth::user();
        $categories = Category::all();
        $conditions = Condition::all();

        return view('sell', compact('categories', 'conditions'));
    }

    public function store(SellRequest $request)
    {
        $this->validate($request,[
            'image' => 'required',
            'category' => 'required',
            'condition' => 'required',
            'name' => 'required',
            'description' => 'required|max:255',
            'price' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        $user_id = $user->id;
        $image = $request->file('image');
        $image_path = $image->store('public/items');

        $item = new Item([
            'user_id' => $user_id,
            'condition_id' => $request->input('condition'),
            'image_path' => $image_path,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
        ]);

        $item->save();
        $item->categories()->attach($request->category);
        
        return redirect('sell')->with('message', '出品手続きが完了しました');
    }

    public function addStatus(Request $request, $id)
    {
        $user = Auth::user();
        $item = Item::find($id);
        $status = $request->input('status');

        $item->update([
            'status' => $status,
        ]);

        return redirect('/');
    }
}
