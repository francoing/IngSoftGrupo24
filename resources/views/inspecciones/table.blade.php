<div class="table-responsive">
    <table class="table" id="inspecciones-table">
        <thead>
            <tr>
                <th>Supervisor</th>
        <th>Linea</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inspecciones as $inspeccione)
            <tr>
                <td>{{ $inspeccione->supervisor_id }}</td>
            <td>{{ $inspeccione->linea_id }}</td>
                <td>
                    {!! Form::open(['route' => ['inspecciones.destroy', $inspeccione->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inspecciones.show', [$inspeccione->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('inspecciones.edit', [$inspeccione->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
