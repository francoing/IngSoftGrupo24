@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Revision
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($revision, ['route' => ['revisions.update', $revision->id], 'method' => 'patch']) !!}

                        @include('revisions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection