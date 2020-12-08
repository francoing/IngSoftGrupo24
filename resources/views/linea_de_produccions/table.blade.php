<div class="table-responsive">
    <table class="table" id="lineaDeProduccions-table">
        <thead>
            <tr>
                <th>Codigolinea De Produccion</th>
                <th>Condicion</th>
                <th>Asignacion de OP</th>


        <th>Modelo Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lineaDeProduccions as $lineaDeProduccion)
            <tr>
                <td>{{ $lineaDeProduccion->codigoLinea_de_produccion }}</td>
                <td>{{ $lineaDeProduccion->ocupacion }}</td>
                <td>{{ $lineaDeProduccion->asigOP }}</td>
                <td>{{ $lineaDeProduccion->modelo_id }}</td>
                <td>
                    {!! Form::open(['route' => ['lineaDeProduccions.destroy', $lineaDeProduccion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lineaDeProduccions.show', [$lineaDeProduccion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('lineaDeProduccions.edit', [$lineaDeProduccion->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
