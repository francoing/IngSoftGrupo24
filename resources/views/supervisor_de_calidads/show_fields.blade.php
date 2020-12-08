<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $supervisorDeCalidad->user_id }}</p>
</div>

<!-- Turno Id Field -->
<div class="form-group">
    {!! Form::label('turno_id', 'Turno Id:') !!}
    <p>{{ $supervisorDeCalidad->turno_id }}</p>
</div>

<!-- Op Id Field -->
<div class="form-group">
    {!! Form::label('op_id', 'Op Id:') !!}
    <p>{{ $supervisorDeCalidad->op_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $supervisorDeCalidad->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $supervisorDeCalidad->updated_at }}</p>
</div>

