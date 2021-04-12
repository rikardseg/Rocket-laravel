<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
        $response = $this
            ->followingRedirects()
            ->post('logout', [
                'email' => 'example@yrgo.se',
            ]);

        $response->assertSeeText('Email');
    }
}
