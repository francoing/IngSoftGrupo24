<!-- Sku Field -->
<div class="form-group">
    {!! Form::label('sku', 'Sku:') !!}
    <p>{{ $modelo->sku }}</p>
</div>

<!-- Denominacion Field -->
<div class="form-group">
    {!! Form::label('denominacion', 'Denominacion:') !!}
    <p>{{ $modelo->denominacion }}</p>
</div>

<!-- Color Id Field -->
<div class="form-group">
    {!! Form::label('color_id', 'Color Id:') !!}
    <p>{{ $modelo->color_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $modelo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $modelo->updated_at }}</p>
</div>

