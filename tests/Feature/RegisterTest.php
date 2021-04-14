<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
}
