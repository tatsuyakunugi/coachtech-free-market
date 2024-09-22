<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        if(Profile::where('user_id', $user->id)->exists())
        {
            $profile = Profile::where('user_id', $user->id)->first();
        }else{
            $profile = null;
        }

        return view('profile', compact('profile'));
    }
    
    public function store(ProfileRequest $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'post_code' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required',
        ]);
        
        $user = Auth::user();
        $image_path = '';
        $building = '';

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_path = $image->store('public/profiles');
        }else{
            $image_path = null;
        }
        
        if($request->building)
        {
            $building = $request->input('building');
        }else{
            $building = null;
        }

        $profile = new Profile([
            'user_id' => $user->id,
            'image_path' => $image_path,
            'name' => $request->input('name'),
            'post_code' => $request->input('post_code'),
            'address' => $request->input('address'),
            'building' => $building,
        ]);
        
        $profile->save();

        return redirect('mypage/profile')->with('message', 'プロフィールを作成しました');
    }

    public function update(ProfileRequest $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'post_code' => 'required|regex:/^[0-9]{3}-[0-9]{4}$/',
            'address' => 'required',
        ]);

        $user = Auth::user();
        $profile = Profile::where('user_id', $user->id)->first();
        $image_path = '';
        $building = '';

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image_path = $image->store('public/profiles');
        }elseif($profile->image_path && empty($request->hasFile('image'))){
            $image_path = $profile->image_path;
        }else{
            $image_path = null;
        }



        if($request->building)
        {
            $building = $request->input('building');
        }else{
            $building = null;
        }

        $profile->update([
            'image_path' => $image_path,
            'name' => $request->input('name'),
            'post_code' => $request->input('post_code'),
            'address' => $request->input('address'),
            'building' => $building,
        ]);

        return redirect('mypage/profile')->with('message', 'プロフィール情報を更新しました');
    }
}
