<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Comment;

class CommentController extends Controller
{
    public function comment($id)
    {
        $user = Auth::user();
        $item = Item::find($id);
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $id)
            ->get();
        
        return view('comment', compact('user', 'item', 'comments'));
    }
}
