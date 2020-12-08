<!-- Tiempoinicio Field -->
<div class="form-group">
    {!! Form::label('tiempoInicio', 'Tiempoinicio:') !!}
    <p>{{ $ordenDeProduccion->tiempoInicio }}</p>
</div>

<!-- Estado Field -->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $ordenDeProduccion->estado }}</p>
</div>

<!-- Linea Id Field -->
<div class="form-group">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    <p>{{ $ordenDeProduccion->linea_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ordenDeProduccion->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ordenDeProduccion->updated_at }}</p>
</div>

