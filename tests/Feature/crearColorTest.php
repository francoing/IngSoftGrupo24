<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class crearColorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     use RefreshDatabase;
    public function test_un_usuario_puede_crear_coloresTest()
    {
        $this->withoutExceptionHandling();

        $user=factory(User::class)->create();
        $this->actingAs($user);
        $this->post(route('colors.store',[
        'id' => 1,
        'codigo' => 'JWLK',
        'descripcion'=>'Zapatillas de pruebas']));
        $this->assertDatabaseHas('colors',[
        'id' => 1,
        'codigo' => 'JWLK',
        'descripcion'=>'Zapatillas de pruebas']);
        
    }
}
