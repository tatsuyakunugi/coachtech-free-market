<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Comment;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function comment($id)
    {
        $user = Auth::user();
        $item = Item::withCount('likes')->find($id);
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $id)
            ->get();

        return view('comment', compact('user', 'item', 'comments'));
    }

    public function store(CommentRequest $request, $id)
    {
        $this->validate($request,[
            'comment' => 'required|max:255',
        ]);

        $user = Auth::user();
        $item = Item::find($id);
        $item_id = $item->id;

        $comment = new Comment([
            'user_id' => $user->id,
            'item_id' => $item_id,
            'comment' => $request->input('comment'),
        ]);

        $comment->save();

        return redirect()->route('comment.create', ['item_id' => $item_id])->with('message', 'コメントを投稿しました');
    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $item = Item::find($comment->item->id);
        $item_id = $item->id;
        $comment->delete();

        return redirect()->route('comment.show', ['item_id' => $item_id])->with('message', 'コメントを削除しました');
    }

    public function show($id)
    {
        $user = Auth::user();
        $item = Item::find($id);
        $comments = '';

        if(Comment::where('item_id', $id)->exists())
        {
            $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $id)
            ->get();
        }

        return view('comment_list', compact('user', 'item', 'comments'));
    }
}
