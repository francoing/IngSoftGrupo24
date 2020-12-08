<div class="table-responsive">
    <table class="table" id="supervisorDeCalidads-table">
        <thead>
            <tr>
                <th>User Id</th>
                <th>Mail</th>
                <th>Nombre</th>
                <th>Turno Id</th>
                <th>Op Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($supervisorDeCalidads as $supervisorDeCalidad)
            <tr>
                <td>{{ $supervisorDeCalidad->user_id }}</td>
                <td>{{ $supervisorDeCalidad->usuario->email }}</td>
                <td>{{ $supervisorDeCalidad->usuario->name }}</td>
            <td>{{ $supervisorDeCalidad->turno->descripcion }}</td>
            <td>{{ $supervisorDeCalidad->op_id }}</td>
                <td>
                    {!! Form::open(['route' => ['supervisorDeCalidads.destroy', $supervisorDeCalidad->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('supervisorDeCalidads.show', [$supervisorDeCalidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('supervisorDeCalidads.edit', [$supervisorDeCalidad->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
