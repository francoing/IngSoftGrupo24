<!-- Linea Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    {!! Form::select('linea_id', $lineas, null, ['class' => 'form-control']) !!}
</div>

<!-- Supervisor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    {!! Form::select('supervisor_id', $supervisores, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('parDeSegundas.index') }}" class="btn btn-default">Cancel</a>
</div>
