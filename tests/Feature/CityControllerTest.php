<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use DatabaseMigrations;

class CityControllerTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_city_contoller_returns_a_successful_response(): void
    {
        $response = $this->get('api/cities');

        $response->assertStatus(200);
    }
}
