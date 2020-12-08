<!-- Horainicioturno Field -->
<div class="form-group">
    {!! Form::label('horaInicioTurno', 'Horainicioturno:') !!}
    <p>{{ $turno->horaInicioTurno }}</p>
</div>

<!-- Horafinturno Field -->
<div class="form-group">
    {!! Form::label('horaFinTurno', 'Horafinturno:') !!}
    <p>{{ $turno->horaFinTurno }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $turno->descripcion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $turno->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $turno->updated_at }}</p>
</div>

