@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Par De Primera
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('par_de_primeras.show_fields')
                    <a href="{{ route('parDePrimeras.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
