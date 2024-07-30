<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illminate\Support\Str;

class UploadController extends Controller
{
    public function image()
    {
        return view('image');
    }

    public function store(Request $request)
    {
        $image = $request->file('image');
        $image->store('public/items');

        return redirect('image')->with('message', 'アップロードに成功しました');
    }
}
