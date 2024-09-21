<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Comment;
use App\Models\Reply;

class ReplyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_reply_create()
    {
        $user_id = 1;
        $user = User::find($user_id);
        $item_id = 10;
        $item = Item::find($item_id);

        $comment = new Comment([
            'user_id' => $user_id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント3',
        ]);

        $comment->save();

        $this->assertDatabaseHas('comments', [
            'user_id' => $user_id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント3',
        ]);
        
        $comment = Comment::where('user_id', $user_id)->where('item_id', $item_id)->first();
        $comment_id = $comment->id;

        $response = $this->actingAs($user)->get(route('reply.create', ['comment_id' => $comment_id], compact('user', 'comment')));

        $response->assertStatus(200);
    }

    public function test_can_reply_store()
    {
        $user_id = 5;
        $user = User::find($user_id);
        $comment_user_id = 1;
        $comment_item_id = 10;

        $comment = Comment::where('user_id', $comment_user_id)->where('item_id', $comment_item_id)->first();
        $comment_id = $comment->id;

        $response = $this->actingAs($user)->post(route('reply.store', ['comment_id' => $comment_id]), [
            'user_id' => $user_id,
            'comment_id' => $comment_id,
            'reply' => 'デモテストリプライ',
        ]);

        $this->assertDatabaseHas('replies', [
            'user_id' => $user_id,
            'comment_id' => $comment_id,
            'reply' => 'デモテストリプライ',
        ]);

        $response->assertStatus(302);
    }
}
