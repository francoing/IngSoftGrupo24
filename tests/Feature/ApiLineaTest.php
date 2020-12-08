<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiLineaTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_api_get_linea()
    {
        $response = $this->getJson('lineasdeproduccion');

        $response
            ->assertStatus(500);
            
    }
}
