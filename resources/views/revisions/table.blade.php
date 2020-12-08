<div class="table-responsive">
    <table class="table" id="revisions-table">
        <thead>
            <tr>
                <th>Pie</th>
        <th>Defecto Id</th>
        <th>Supervisor </th>
        <th>Linea Id</th>
                {{-- <th colspan="3">Action</th> --}}
            </tr>
        </thead>
        <tbody>
        @foreach($revisions as $revision)
            <tr>
                <td>{{ $revision->pie }}</td>
            {{-- <td>{{ $revision->defecto_id }}</td> --}}
            <td>{{ $revision->defecto->nombreDefecto }}</td>
            <td>{{ $revision->Supervisor->nombre_completo }}</td>
            <td>{{ $revision->linea->codigoLinea_de_produccion }}</td>
                {{-- <td>
                    {!! Form::open(['route' => ['revisions.destroy', $revision->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('revisions.show', [$revision->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('revisions.edit', [$revision->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td> --}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
