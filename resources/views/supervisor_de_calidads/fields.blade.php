<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $usuarios, null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('turno_id', 'Turno Id:') !!}
    {!! Form::select('turno_id', $turnos, null, ['class' => 'form-control']) !!}
</div>

<!-- Turno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('op_id', 'Op Id:') !!}
    {!! Form::select('op_id', $op, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('supervisorDeCalidads.index') }}" class="btn btn-default">Cancel</a>
</div>
