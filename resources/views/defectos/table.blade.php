<div class="table-responsive">
    <table class="table" id="defectos-table">
        <thead>
            <tr>
                <th>Nombre de defecto</th>
                <th>Descripcion</th>

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($defectos as $defecto)
            <tr>
                <td>{{ $defecto->nombreDefecto }}</td>
                <td>{{ $defecto->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['defectos.destroy', $defecto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('defectos.show', [$defecto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('defectos.edit', [$defecto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
