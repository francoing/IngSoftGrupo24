@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Supervisor De Calidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($supervisorDeCalidad, ['route' => ['supervisorDeCalidads.update', $supervisorDeCalidad->id], 'method' => 'patch']) !!}

                        @include('supervisor_de_calidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection