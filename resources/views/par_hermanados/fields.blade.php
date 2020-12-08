<!-- Hermanado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hermanado', 'Hermanado:') !!}
    {!! Form::number('hermanado', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Op Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('op_id', 'Op Id:') !!}
    {!! Form::select('op_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    {!! Form::select('modelo_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Color Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color_id', 'Color Id:') !!}
    {!! Form::select('color_id', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('parHermanados.index') }}" class="btn btn-default">Cancel</a>
</div>
