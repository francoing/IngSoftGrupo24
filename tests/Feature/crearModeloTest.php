<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class crearModeloTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_un_usuario_puede_crear_un_modelo()
    {
        $this->withoutExceptionHandling();

        $user=factory(User::class)->create();
        $this->actingAs($user);
        $this->post(route('modelos.store',[
            'id' => 1,
            'sku' => 'JDDDS',
            'denominacion' => 'Prueba de modelos',
           ]));
        $this->assertDatabaseHas('modelos',[
            'id' => 1,
            'sku' => 'JDDDS',
            'denominacion' => 'Prueba de modelos',
           ]);

        
    }
}
