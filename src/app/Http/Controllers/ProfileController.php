<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function store(ProfileRequest $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'post_code' => 'required',
            'address' => 'required',
        ]);
        
        $user = Auth::user();
        $image = $request->file('image');
        $image_path = $image->store('public/images');

        $profile = new Profile([
            'user_id' => $user->id,
            'image_path' => $image_path,
            'name' => $request->input('name'),
            'post_code' => $request->input('post_code'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
        ]);
        
        $profile->save();

        return redirect('profile');
    }

    public function update(ProfileRequest $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'post_code' => 'required',
            'address' => 'required',
        ]);

        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $image = $request->file('image');
        $image_path = $image->store('public/images');

        $profile->update([
            'user_id' => $user->id,
            'image_path' => $image_path,
            'name' => $request->input('name'),
            'post_code' => $request->input('post_code'),
            'address' => $request->input('address'),
            'building' => $request->input('building'),
        ]);

        return redirect('profile');
    }
}
