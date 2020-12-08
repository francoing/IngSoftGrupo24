@extends('layouts.app')

@section('content')
<div class="container">

<div class="row margen">

    <div >
        {{-- 00 : 00 : 00
       </div> --}}

       {{-- <input type="text" disabled="disabled" value="{{$now}}"> --}}

       <input class="reloj" type="text" disabled="disabled" value="{{$now}}" id="campo_hora" />
       </div>
</div>


    <div class="row margen">

        
        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pares Hermanados</span>
                  <span class="info-box-number">{{$hermanados}}</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->      
        </div>

        
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pares de Primera</span>
                      <span class="info-box-number">{{$primera}}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->      
            </div>

            
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pares de segunda</span>
                      <span class="info-box-number">{{$pares}}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->      
            </div>

        
          
          

    </div>

    <div class="row margen">

        
        <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pares a Reproceso</span>
                  <span class="info-box-number">{{$hermanados}}</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->      
        </div>

        
            <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pares a Observados</span>
                      <span class="info-box-number">{{$primera}}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->      
            </div>

            
            {{-- <div class="col-md-3 col-sm-6 col-xs-12" >
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Pares de segunda</span>
                      <span class="info-box-number">{{$pares}}</span>
                    </div><!-- /.info-box-content -->
                </div><!-- /.info-box -->      
            </div> --}}

        
          
          

    </div>




</div>

<style>
    .margen {
    margin-top: 20px;


}
.reloj { width: 150px; height: 30px; padding: 5px 10px; border: 1px solid black; 
         font: bold 1.5em dotum, "lucida sans", arial; text-align: center;
         float: left; margin: 1em 3em 1em 1em; }
</style>

<script>

// function actual() {
//          fecha=new Date(); //Actualizar fecha.
//          hora=fecha.getHours(); //hora actual
//          minuto=fecha.getMinutes(); //minuto actual
//          segundo=fecha.getSeconds(); //segundo actual
//          if (hora<10) { //dos cifras para la hora
//              hora="0"+hora;
//              }
//          if (minuto<10) { //dos cifras para el minuto
//              minuto="0"+minuto;
//              }
//          if (segundo<10) { //dos cifras para el segundo
//              segundo="0"+segundo;
//              }
//          //devolver los datos:
//          mireloj = hora+" : "+minuto+" : "+segundo;	
//          return mireloj; 
//          }

//          function actualizar() { //función del temporizador
//    mihora=actual(); //recoger hora actual
//    mireloj=document.getElementById("reloj"); //buscar elemento reloj
//    mireloj.innerHTML=mihora; //incluir hora en elemento
// 	 }
// setInterval(actualizar,1000); //iniciar temporizador

// var hora = document.querySelector('#campo_hora');
//     var partes = hora.value.split(':');
//     var ahora = new Date();
//     ahora.setHours(partes[0]);
//     ahora.setMinutes(partes[1]);
//     ahora.setSeconds(partes[2]);

//     //Cada 1 segundo actualizo el valor de la hora
//     setInterval(function(){
//         ahora.setSeconds(ahora.getSeconds() + 1);
//         hora.value = ahora.getHours() + ":" + ahora.getMinutes() + ":" + ahora.getSeconds();
//     }, 1000)




    // -------------------------------------------------------------------------------------

    var hora = document.querySelector('#campo_hora');
    var partes = hora.value.split(':');
    var ahora = new Date();
    ahora.setHours(partes[0]);
    ahora.setMinutes(partes[1]);
    ahora.setSeconds(partes[2]);

    //Cada 1 segundo actualizo el valor de la hora
    setInterval(function(){
        ahora.setSeconds(ahora.getSeconds() + 1);
        hora.value = ahora.getHours() + ":" + ahora.getMinutes() + ":" + ahora.getSeconds();
    }, 1000)
</script>
@endsection
