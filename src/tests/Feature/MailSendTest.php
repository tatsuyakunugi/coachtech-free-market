<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Mail\SendNoticeMail;
use Mail;
use App\Models\Admin;
use App\Models\User;

class MailSendTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_show_mail_form_screen()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);

        $response = $this->actingAs($admin_user)->get(route('admin.mailCreate'));

        $response->assertStatus(302);
    }

    public function test_can_send_mail()
    {
        $admin_user_id = 1;
        $admin_user = Admin::find($admin_user_id);

        $data = ([
            'name' => 'demotest',
            'message' => 'デモテストメール',
        ]);

        $to = User::all();

        $response = $this->actingAs($admin_user)->post(route('admin.mailSend'));

        Mail::fake();
        Mail::to($to)->send(new SendNoticeMail($data));
        Mail::assertSent(SendNoticeMail::class, 1);
    }
}
