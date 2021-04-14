<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;

    public function test_register_user()
    {
        $user = new User();
        $user->name = 'Test McTest';
        $user->email = 'testy@test.se';
        $user->password = Hash::make('password');
        $user->save();

        $this->assertDatabaseHas('users', ['email' => 'testy@test.se']);
    }

    public function test_view_register_form()
    {
        $response = $this->get('/register');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }
}
