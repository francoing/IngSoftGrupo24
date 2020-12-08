<div class="table-responsive">
    <table class="table" id="parDePrimeras-table">
        <thead>
            <tr>
                <th>Primera</th>
        <th>Supervisor Id</th>
        <th>Linea Id</th>
        <th>Op Id</th>
        <th>Modelo Id</th>
        <th>Color Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parDePrimeras as $parDePrimera)
            <tr>
                <td>{{ $parDePrimera->primera }}</td>
            <td>{{ $parDePrimera->supervisor_id }}</td>
            <td>{{ $parDePrimera->linea_id }}</td>
            <td>{{ $parDePrimera->op_id }}</td>
            <td>{{ $parDePrimera->modelo_id }}</td>
            <td>{{ $parDePrimera->color_id }}</td>
                <td>
                    {!! Form::open(['route' => ['parDePrimeras.destroy', $parDePrimera->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parDePrimeras.show', [$parDePrimera->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parDePrimeras.edit', [$parDePrimera->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
