<div class="table-responsive">
    <table class="table" id="parDeSegundas-table">
        <thead>
            <tr>
                <th>Par de segunda</th>
        <th>Linea</th>
        {{-- <th>Supervisor Id</th> --}}
        <th>Nombre</th>
                {{-- <th colspan="3">Action</th> --}}
            </tr>
        </thead>
        <tbody>
        @foreach($parDeSegundas as $parDeSegunda)
            <tr>
                <td>{{ $parDeSegunda->totalSegunda }}</td>
            <td>{{ $parDeSegunda->linea->codigoLinea_de_produccion }}</td>
            {{-- <td>{{ $parDeSegunda->supervisor_id }}</td> --}}
            <td>{{ $parDeSegunda->supervisor->nombre_completo }}</td>
                {{-- <td>
                    {!! Form::open(['route' => ['parDeSegundas.destroy', $parDeSegunda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parDeSegundas.show', [$parDeSegunda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parDeSegundas.edit', [$parDeSegunda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td> --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
