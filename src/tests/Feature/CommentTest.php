<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Comment;


class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_comment_create()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $item_id = 1;
        $item = Item::withCount('likes')->find($item_id);
        $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $item_id)
            ->get();

        $response = $this->actingAs($user)->get(route('comment.create', ['item_id' => $item_id], compact('user', 'item', 'comments')));

        $response->assertStatus(200);
    }

    public function test_can_comment_store()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $item_id = 1;

        $response = $this->actingAs($user)->post(route('comment.store', ['item_id' => $item_id]), [
            'user_id' => $user_id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント',
        ]);

        $this->assertDatabaseHas('comments', [
            'user_id' => $user_id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント',
        ]);

        $response->assertStatus(302);
    }

    public function test_can_comment_destroy()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $item_id = 1;

        $comment = Comment::where('user_id', $user_id)->where('item_id', $item_id)->first();

        $this->assertDatabaseHas('comments', [
            'id' => $comment->id,
            'user_id' => $user_id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント',
        ]);

        $response = $this->actingAs($user)->delete(route('comment.destroy', ['comment_id' => $comment->id]), [
            'id' => $comment->id,
        ]);

        $response->assertStatus(302);
    }

    public function test_can_comment_show()
    {
        $user_id = 2;
        $user = User::find($user_id);
        $item_id = 1;
        $comments = '';

        if(Comment::where('item_id', $item_id)->exists())
        {
            $comments = Comment::with(['user', 'replies', 'replies.user'])
            ->where('comments.item_id', $item_id)
            ->get();
        }

        $response = $this->actingAs($user)->get(route('comment.show', ['item_id' => $item_id], compact('user', 'comments')));

        $response->assertStatus(200);
    }
}
