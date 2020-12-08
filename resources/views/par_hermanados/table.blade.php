<div class="table-responsive">
    <table class="table" id="parHermanados-table">
        <thead>
            <tr>
                <th>Hermanado</th>
        <th>Supervisor Id</th>
        <th>Linea Id</th>
        <th>Op Id</th>
        <th>Modelo Id</th>
        <th>Color Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parHermanados as $parHermanado)
            <tr>
                <td>{{ $parHermanado->hermanado }}</td>
            <td>{{ $parHermanado->Supervisor->nombre_completo}}</td>
            <td>{{ $parHermanado->linea->codigoLinea_de_produccion }}</td>
            <td>{{ $parHermanado->op_id }}</td>
            <td>{{ $parHermanado->modelo->denominacion }}</td>
            <td>{{ $parHermanado->color->codigo }}</td>
                {{-- <td>
                    {!! Form::open(['route' => ['parHermanados.destroy', $parHermanado->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parHermanados.show', [$parHermanado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parHermanados.edit', [$parHermanado->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td> --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
