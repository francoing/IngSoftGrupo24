@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Defecto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($defecto, ['route' => ['defectos.update', $defecto->id], 'method' => 'patch']) !!}

                        @include('defectos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection