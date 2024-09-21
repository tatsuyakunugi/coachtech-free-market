<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Admin;
use App\Models\User;
use App\Models\Item;
use App\Models\Comment;

class AdminDeleteCommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_get_comment_detail()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);
        $item_id = 10;

        $user = new User([
            'email' => 'demo10@example.co.jp',
            'password' => 'demo0010',
        ]);
        $user->save();

        $this->assertDatabaseHas('users', [
            'email' => 'demo10@example.co.jp',
            'password' => 'demo0010',
        ]);

        $comment = new Comment([
            'user_id' => $user->id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント3',
        ]);
        $comment->save();

        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'item_id' => $item_id,
            'comment' => 'デモテストコメント3',
        ]);

        $response = $this->actingAs($admin_user)->get(route('admin.showCommentDetail', ['user_id' => $user->id], compact('user')));

        $response->assertStatus(302);
    }

    public function test_can_comment_destroy()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);
        $item_id = 10;

        $email = 'demo10@example.co.jp';
        $password = 'demo0010';

        $user = User::where('email', $email)->where('password', $password)->first();

        $demo_comment = 'デモテストコメント3';

        $comment = Comment::where('user_id', $user->id)->where('item_id', $item_id)->where('comment', $demo_comment)->first();

        $response = $this->actingAs($admin_user)->delete(route('admin.commentDestroy', ['comment_id' => $comment->id]), [
            'id' => $comment->id,
        ]);

        $response->assertStatus(302);
    }
}
