<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Testpizza';
        $user->email = 'frufruktpizza@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'frufruktpizza@yrgo.se',
                'password' => '123',
            ]);

        $response->assertSeeText('Yes');
    }

    public function test_login_user_without_password()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'frufruktpizza@yrgo.se',
            ]);

        $response->assertSeeText('Whoopssieedaisy, no pizza for you');
    }
}
