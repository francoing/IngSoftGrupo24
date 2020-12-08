@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Ordenes de Produccion</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('ordenDeProduccions.create') }}">Crear Nueva orden</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('orden_de_produccions.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
    {{-- <script src="resources/js/contador.js"></script> --}}
    
@endsection

