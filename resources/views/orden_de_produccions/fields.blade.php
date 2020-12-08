<!-- Tiempoinicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tiempoInicio', 'Tiempoinicio:') !!}
    {!! Form::text('tiempoInicio', null, ['class' => 'form-control','id'=>'tiempoInicio']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#tiempoInicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush


<div class="form-group col-sm-6">
    {!! Form::label('numOP', 'Numero de OP:') !!}
    {!! Form::text('numOP', null, ['class' => 'form-control']) !!}
</div>

<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="estado" class="">Estado:</label>
        <select name="estado" class= "form-control">

            <option value="proceso">Proceso</option>
            <option value="pausada">Pausada</option>
            <option value="finalizada">Finalizada</option>
        </select>
        
    </div>
</div>

<!-- Linea Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('linea_id', 'Linea Id:') !!}
    {!! Form::select('linea_id', $lineas, null, ['class' => 'form-control']) !!}
</div> --}}
<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
        <label for="linea_id" class="">Lineas de Produccion</label>
        <select name="linea_id" class= "form-control" ><!-- realizo un opcion de categorias y llamo al objeto categorias y lo nombro como cat-->
            @foreach($lineas as $lin)

                <option value="{{$lin->id}}">{{$lin->codigoLinea_de_produccion}}</option>

            @endforeach

        </select>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ordenDeProduccions.index') }}" class="btn btn-default">Cancel</a>
</div>
