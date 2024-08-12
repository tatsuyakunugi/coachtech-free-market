<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\Reply;
use App\Http\Requests\ReplyRequest;

class ReplyController extends Controller
{
    public function reply($id)
    {
        $user = Auth::user();
        $comment = Comment::find($id);

        return view('reply', compact('user', 'comment'));
    }

    public function store(ReplyRequest $request, $id)
    {
        $this->validate($request,[
            'reply' => 'required|max:255',
        ]);

        $user = Auth::user();
        $comment = Comment::find($id);
        $comment_id = $comment->id;

        $reply = new Reply([
            'user_id' => $user->id,
            'comment_id' => $comment_id,
            'reply' => $request->input('reply'),
        ]);

        $reply->save();

        return redirect()->route('reply.create', ['comment_id' => $comment_id])->with('message', 'コメントへの返信を投稿しました');
    }
}
