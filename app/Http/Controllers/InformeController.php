<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InformeController extends Controller
{
   public function obtencionPorHorario(Request $request)
   {
       
    //    $horarios = DB::table('par_de_primeras')->pluck('created_at');

    //    foreach ($horarios as $key => $horario) {
    //        echo $horario;
    //    }

       $horas = DB::table('par_de_primeras')
        ->selectRaw('TIME(created_at) AS HORA')
        ->get();


        foreach ($horas as $hora) {
                   echo $hora;
               }

      return $horas;
       

   }



}
