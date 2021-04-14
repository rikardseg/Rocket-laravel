<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use RefreshDatabase;

    public function test_logout_user()
    {
        $user = new User();
        $user->name = 'Testpizza';
        $user->email = 'frufruktpizza@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('logout', [
                'email' => 'frufruktpizza@yrgo.se',
            ]);

        $response->assertSeeText('Email');
    }
}
