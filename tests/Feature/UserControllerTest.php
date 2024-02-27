<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use DatabaseMigrations;

class UserControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_user_contoller_returns_a_successful_response(): void
    {
        $response = $this->get('api/users');

        $response->assertStatus(200);
    }

    public function test_user_contoller_show_returns_a_successful_response(): void
    {
        $response = $this->get('api/users/1');

        $response->assertStatus(200);
    }
}
