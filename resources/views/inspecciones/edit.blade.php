@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Inspeccione
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($inspeccione, ['route' => ['inspecciones.update', $inspeccione->id], 'method' => 'patch']) !!}

                        @include('inspecciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection