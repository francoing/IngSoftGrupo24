<div class="table-responsive">
    <table class="table" id="ordenDeProduccions-table">
        <thead>
            <tr>
                <th>Tiempo de Inicio</th>
                <th>Numero de OP</th>


                {{-- <th>Tiempo Transcurrido</th> --}}
                
        <th>Estado</th>
        <th>Linea Id</th>

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ordenDeProduccions as $ordenDeProduccion)
            <tr>
            <td>{{ $ordenDeProduccion->tiempoInicio }}</td>
            <td>{{ $ordenDeProduccion->numOP }}</td>

           
                {{-- <td>
                    <div id="screen">00 : 00 : 00 : 00</div>
                </td>
           --}}
            
            <td>{{ $ordenDeProduccion->estado }}</td>
            <td>{{ $ordenDeProduccion->linea_id }}</td>
                <td>
                    {{-- <button  onclick="start()">START &#9658;</button> --}}
                    {!! Form::open(['route' => ['ordenDeProduccions.destroy', $ordenDeProduccion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ordenDeProduccions.show', [$ordenDeProduccion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ordenDeProduccions.edit', [$ordenDeProduccion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <script>









// window.onload = function() {
//    pantalla = document.getElementById("screen");
   
// }
// var isMarch = false; 
// var acumularTime = 0; 
// function start () {
//          if (isMarch == false) { 
//             timeInicial = new Date();
//             control = setInterval(cronometro,10);
//             isMarch = true;
//             }
//          }
// function cronometro () { 
//          timeActual = new Date();
//          acumularTime = timeActual - timeInicial;
//          acumularTime2 = new Date();
//          acumularTime2.setTime(acumularTime); 
//          cc = Math.round(acumularTime2.getMilliseconds()/10);
//          ss = acumularTime2.getSeconds();
//          mm = acumularTime2.getMinutes();
//          hh = acumularTime2.getHours()-18;
//          if (cc < 10) {cc = "0"+cc;}
//          if (ss < 10) {ss = "0"+ss;} 
//          if (mm < 10) {mm = "0"+mm;}
//          if (hh < 10) {hh = "0"+hh;}
//          pantalla.innerHTML = hh+" : "+mm+" : "+ss+" : "+cc;
//          }

// function stop () { 
//          if (isMarch == true) {
//             clearInterval(control);
//             isMarch = false;
//             }     
//          }      

// function resume () {
//          if (isMarch == false) {
//             timeActu2 = new Date();
//             timeActu2 = timeActu2.getTime();
//             acumularResume = timeActu2-acumularTime;
            
//             timeInicial.setTime(acumularResume);
//             control = setInterval(cronometro,10);
//             isMarch = true;
//             }     
//          }

// function reset () {
//          if (isMarch == true) {
//             clearInterval(control);
//             isMarch = false;
//             }
//          acumularTime = 0;
//          pantalla.innerHTML = "00 : 00 : 00 : 00";
//          }

        // const getRemainTime = deadline => {

        // let now = new Date(),
        //     remainTime = (new Date(deadline) - now + 1000) / 1000;

        //     remainSecond = ('0' + Math.floor(remainTime % 60)).slice(-2),
        //     remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
        //     remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
        //     remainDays = Math.floor(remainTime / (3600 * 24));
            

        // return {

        //     remainTime,
        //     remainSecond,
        //     remainMinutes,
        //     remainHours,
        //     remainDays
        // }

        // };

        // console.log(getRemainTime('Sep 16 2020 22:40:33 GMT-0300'));

        // const countdown = (deadline ,elem ,finalMessage)=>{

        //     const el = document.getElementById(elem);

        //     const timerUpdate = setInterval(()=>{

        //         let t = getRemainTime(deadline);
        //         el.innerHTML=`${t.remainDays}d:${t.remainHours}h:${t.remainMinutes}m:${t.remainSecond}s`;

        //         if ( t.remainMinutes <= 1 ) {
        //             clearInterval(timerUpdate)
        //             el.innerHTML = finalMessage;
        //         }
        //     },1000)

        // };

        // countdown('Sep 18 2020 22:40:33 GMT-0300','hora','Tiempo terminado');


</script>
    
</div>
