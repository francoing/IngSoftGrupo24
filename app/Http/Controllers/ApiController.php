<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Str;
use  Carbon\Carbon;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function InicioApp(Request $request)
    {
        $correo = $request->correo;
        $contrasena = $request->contrasena;
       // $id_usuario= $request ->id;
        $usuario = DB::table('logins')
        ->where('correo' , $correo)
        ->where('contrasena',$contrasena)
        ->first();
        
        if ($usuario == null){
            $respuesta = array('error' => TRUE,
                                'mensaje'=>'Usuario y/o contrasena no valido' );

            
        }else{

            
            $token=Str::random(40);
            //$usuario= $id_usuario->get('id');
            $id_usuario = DB::table('logins')->where('correo', $correo)->value('id');
            $usuario = DB::table('logins')
            ->where('id', $id_usuario)
            ->update(['token'=>$token]) ;
            $respuesta = array('error' => FALSE,
                                'mensaje'=>'Succes',
                                'id_usuario'=> $id_usuario,
                                 'token' => $token,
                                 'correo'=>$correo,
                                 
                                                                );
           
        }

         return $respuesta;
    }



    public function pareDeSegunda(Request $request){
        $totalSegunda = $request->totalSegunda;
        $linea_id = $request->linea_id;
        $supervisor_id =$request->supervisor_id;
        // $fecha= new Date();
        
        $insertar = DB::table('par_de_segundas')
        ->insertGetId([
            'totalSegunda'=>$totalSegunda,
            'linea_id'=>$linea_id,
            'supervisor_id'=>$supervisor_id,
            
        ]);
        $respuesta = array('error' => FALSE,
                                'mensaje'=>'Par de segunda insertado',
                                'supervisor_id'=>$supervisor_id,
                                'linea_id'=>$linea_id,
                                // 'created_at'=>$fecha
                                );
           
        

         return $respuesta;
    }


    public function obtenerLineas(Request $request)
    {
        $lineas=DB::select('SELECT * FROM `linea_de_produccions`');

        $respuesta = Array(
            'error'=> FALSE,
            'lineas'=>$lineas
             
        );
       return $respuesta;
    }

    public function ObtenerOP(Request $request)
    {


    //     $ordenes=DB::select('select * from orden_de_produccions')
    //     ->where('linea_id');
    //     $respuesta = Array(
    //         'error'=> FALSE,
    //         'OP'=>$ordenes
    //     );
    //    return $respuesta;
        $lineas=DB::table('orden_de_produccions as o')
        ->join('linea_de_produccions as l','o.linea_id','=','l.id')
        ->select('o.linea_id','o.id','o.numOP')
        ->where('l.ocupacion','=','libre')
        ->get();

        $respuesta = Array(
                    'error'=> FALSE,
                    'OP'=>$lineas
                );
               return $respuesta;



       
    }


    public function parHermanado(Request $request){
        $hermanado = $request->hermanado;
        $linea_id = $request->linea_id;
        $supervisor_id =$request->supervisor_id;
        $op = DB::table('orden_de_produccions')->where('linea_id',$linea_id)->value('id');
        $modelo = DB::table('linea_de_produccions')->where('id',$linea_id)->value('modelo_id');
        $color=DB::table('modelos')->where('id',$modelo)->value('color_id');
        $insertar = DB::table('par_hermanados')
        ->insertGetId([
            'hermanado'=>$hermanado,
            'linea_id'=>$linea_id,
            'supervisor_id'=>$supervisor_id,
            'op_id'=>$op,
            'modelo_id'=>$modelo,
            'color_id'=>$color
        ]);
        $respuesta = array('error' => FALSE,
                                'mensaje'=>'Par Hermanado insertado',
                                'supervisor_id'=>$supervisor_id,
                                'linea_id'=>$linea_id,
                                'op_id'=>$op,
                                'modelo_id'=>$modelo,
                                'color_id'=>$color
                                );
           
        

         return $respuesta;
    }


    public function parDePrimera(Request $request){
        $primera = $request->primera;
        $linea_id = $request->linea_id;
        $supervisor_id =$request->supervisor_id;
        $op = DB::table('orden_de_produccions')->where('linea_id',$linea_id)->value('id');
        $modelo = DB::table('linea_de_produccions')->where('id',$linea_id)->value('modelo_id');
        $color=DB::table('modelos')->where('id',$modelo)->value('color_id');
        // $hora =  Carbon::now();
        $insertar = DB::table('par_de_primeras')
        ->insertGetId([
            'primera'=>$primera,
            'linea_id'=>$linea_id,
            'supervisor_id'=>$supervisor_id,
            'op_id'=>$op,
            'modelo_id'=>$modelo,
            'color_id'=>$color
        ]);
        $respuesta = array('error' => FALSE,
                                'mensaje'=>'Par de primera insertado',
                                'supervisor_id'=>$supervisor_id,
                                'linea_id'=>$linea_id,
                                'op_id'=>$op,
                                'modelo_id'=>$modelo,
                                'color_id'=>$color,
                                // 'created_at'=>$hora->created_ad
                                );
           
        

         return $respuesta;
    }

    public function comenzarInspeccion(Request $request){

        $supervisor_id = $request->supervisor_id;
        // $numOP=$request->numOP;
        $linea_id=$request->linea_id;

        $actualizar = DB::table('linea_de_produccions')
        ->where('id', $linea_id)
        ->update(['ocupacion'=>'ocupada']);

        $inspeccion=DB::table('inspecciones')
        ->insertGetId([
            'supervisor_id'=>$supervisor_id,
            // 'numOP'=>$numOP,
            'linea_id'=>$linea_id,
            
        ]);

        $respuesta = array('error' => FALSE,
        'mensaje'=>'Personal Registrado a Linea Exitoso',
        'supervisor_id'=>$supervisor_id,
        'linea_id'=>$linea_id,
        // 'numOP'=>$numOP,
        
        // 'created_at'=>$hora->created_ad
        );



return $respuesta;

    }

    public function horaServer()
    {
        $now = Carbon::now()->toTimeString();
        $hora = [

            'Hora'=>[[
                'hora'=>$now,
            ]
                

            ]
        ];
    $respuesta = $hora;
       
    return $respuesta;
    }

    public function obtenerDefectos()
    {
        $defectos=DB::select('select * from defectos');
            $respuesta = Array(
                'error'=> FALSE,
                'defectos'=>$defectos
            );
           return $respuesta;
        
    }

    public function enviarRevision(Request $request)
    {
        $pie = $request->pie;
        $supervisor_id = $request->supervisor_id;
        $linea_id = $request->linea_id;
        $defecto_id=$request->defecto_id;

        $insertar = DB::table('revisions')
        ->insertGetId([
            'pie'=>$pie,
            'linea_id'=>$linea_id,
            'supervisor_id'=>$supervisor_id,
            'defecto_id'=>$defecto_id

            
        ]);
        $respuesta = array('error' => FALSE,
                                'mensaje'=>'Revision enviada',
                                'supervisor_id'=>$supervisor_id,
                                'linea_id'=>$linea_id,
                                'pie'=>$pie,
                                'defecto_id'=>$defecto_id
                                // 'created_at'=>$hora->created_ad
                                );
           
        

         return $respuesta;
    }

    
}
