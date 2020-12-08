@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Orden De Produccion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ordenDeProduccion, ['route' => ['ordenDeProduccions.update', $ordenDeProduccion->id], 'method' => 'patch']) !!}

                        @include('orden_de_produccions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection