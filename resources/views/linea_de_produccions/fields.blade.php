<!-- Codigolinea De Produccion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigoLinea_de_produccion', 'Codigolinea De Produccion:') !!}
    {!! Form::text('codigoLinea_de_produccion', null, ['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="ocupacion" class="">Estado:</label>
        <select name="ocupacion" class= "form-control">

            <option value="libre">Libre</option>
            <option value="ocupada">Ocupada</option>
        </select>
        
    </div>
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="asigOP" class="">Asignacion de OP:</label>
        <select name="asigOP" class= "form-control">

            <option value="sin_asignar">Sin Asignar</option>
            <option value="asignada">Asignada</option>
        </select>
        
    </div>
</div>
<!-- Modelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    {!! Form::select('modelo_id', $modelos, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('lineaDeProduccions.index') }}" class="btn btn-default">Cancel</a>
</div>
