<?php

namespace Tests\Feature;

use App\Models\Order;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;


    public function test_create_order()
    {
        $user = new User();
        $user->name = 'Fru Fruktpizza';
        $user->email = 'frufruktpizza@yrgo.se';
        $user->password = Hash::make('password');
        $user->save();

        $this->actingAs($user)
            ->post('/orders', [
                'pizza' => 'Hawaii',
                'address' => 'Fruktstreet 123'
            ]);

        $this->assertDatabaseHas('orders', [
            'pizza' => 'Hawaii',
            'address' => 'Fruktstreet 123'
        ]);
    }

    public function test_view_order_form()
    {
        $user = new User();
        $user->name = 'Fru Fruktpizza';
        $user->email = 'frufruktpizza@yrgo.se';
        $user->password = Hash::make('password');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'frufruktpizza@yrgo.se',
                'password' => 'password'
            ]);

        $response = $this->get('/orders/create');
        $response->assertSeeText('Pick Type');
        $response->assertStatus(200);
    }
}
