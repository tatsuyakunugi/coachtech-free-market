<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Comment;

class AdminDeleteCommentController extends Controller
{
    public function getCommentDetail($id)
    {
        $user = User::find($id);
        $comments = '';
        
        if(Comment::where('user_id', $user->id)->exists())
        {
            $comments = Comment::where('user_id', $user->id)->get();
        }else{
            $comments = null;
        }

        return view('admin.comment_detail', compact('user', 'comments'));
    }

    public function destroy(Request $request, $id)
    {
        $comment = Comment::find($id);
        $user_id = $comment->user_id;
        $comment->delete();

        return redirect()->route('admin.showCommentDetail', ['user_id' => $user_id]);
    }
}
