<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RoutesTest extends TestCase
{
    use RefreshDatabase;


    public function test_home_route()
    {
        $home = '/';


        $response = $this->get($home);
        $response->assertStatus(200);
    }

    public function test_register_route()
    {
        $register = '/register';

        $response = $this->get($register);
        $response->assertStatus(200);
    }

    public function test_dashboard_route()
    {

        $dashboard = '/dashboard';

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

        $response = $this->get($dashboard);
        $response->assertStatus(200);
    }

    public function test_order_route()
    {
        $order = '/orders';

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

        $response = $this->get($order);
        $response->assertStatus(200);
    }
}
