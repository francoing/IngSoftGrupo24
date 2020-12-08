<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiPost extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_post_api()
    {
        $response = $this->postJson('inicio', ['correo' => 'franco@mail.com','contrasena'=>'12313']);

        $response
            ->assertStatus(200);
            
       
    }
}
