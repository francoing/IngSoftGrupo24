<!-- Supervisor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supervisor_id', 'Supervisor Id:') !!}
    {!! Form::select('supervisor_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Linea Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    {!! Form::select('linea_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('inspecciones.index') }}" class="btn btn-default">Cancel</a>
</div>
