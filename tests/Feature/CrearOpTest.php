<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use App\Models\Linea_de_produccion;

class CrearOpTest extends TestCase
{
    use RefreshDatabase;
   
    public function test_un_usuario_puede_crear_un_op()
    {
        $user=factory(User::class)->create();
        $this->actingAs($user);
        $linea = factory(Linea_de_produccion::class)->create();

        $this->post(route('ordenDeProduccions.store',[
            'id' => 1,
            'tiempoInicio' => '2020-09-19 16:40:45',
            'estado' => 'proceso',
            'linea_id' => $linea,
            'numOP'=>'1'
           ]));
        $this->assertDatabaseHas('orden_de_produccions',[
            'id' => 1,
            'tiempoInicio' => '2020-09-19 16:40:45',
            'estado' => 'proceso',
            'linea_id' =>$linea ,
            'numOP'=>'1'
           ]);

        
    }
}
