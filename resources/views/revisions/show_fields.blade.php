<!-- Pie Field -->
<div class="form-group">
    {!! Form::label('pie', 'Pie:') !!}
    <p>{{ $revision->pie }}</p>
</div>

<!-- Defecto Id Field -->
<div class="form-group">
    {!! Form::label('defecto_id', 'Defecto Id:') !!}
    <p>{{ $revision->defecto_id }}</p>
</div>

<!-- Supervisor Id Field -->
<div class="form-group">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    <p>{{ $revision->supervisor_id }}</p>
</div>

<!-- Linea Id Field -->
<div class="form-group">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    <p>{{ $revision->linea_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $revision->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $revision->updated_at }}</p>
</div>

