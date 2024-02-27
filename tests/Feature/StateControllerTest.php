<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use DatabaseMigrations;

class StateControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_state_contoller_returns_a_successful_response(): void
    {
        $response = $this->get('api/states');

        $response->assertStatus(200);
    }
}
