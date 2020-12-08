<!-- Supervisor Id Field -->
<div class="form-group">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $inspeccione->supervisor_id }}</p>
</div>

<!-- Linea Id Field -->
<div class="form-group">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    <p>{{ $inspeccione->linea_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inspeccione->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inspeccione->updated_at }}</p>
</div>

