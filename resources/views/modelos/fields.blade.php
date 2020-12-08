<!-- Sku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control']) !!}
</div>

<!-- Denominacion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('denominacion', 'Denominacion:') !!}
    {!! Form::textarea('denominacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color_id', 'Color Id:') !!}
    {!! Form::select('color_id', $colores, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('modelos.index') }}" class="btn btn-default">Cancel</a>
</div>
