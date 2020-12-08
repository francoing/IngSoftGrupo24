<!-- Nombredefecto Field -->
<div class="form-group">
    {!! Form::label('nombreDefecto', 'Nombredefecto:') !!}
    <p>{{ $defecto->nombreDefecto }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $defecto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $defecto->updated_at }}</p>
</div>

