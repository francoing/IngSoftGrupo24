<div class="table-responsive">
    <table class="table" id="logins-table">
        <thead>
            <tr>
                <th>Nombre y Apellido</th>
                <th>Dni</th>
        <th>Correo</th>
        <th>Contraseña</th>
        {{-- <th>Token</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($logins as $login)
            <tr>
                <td>{{ $login->nombre_completo }}</td>
                <td>{{ $login->dni }}</td>

            <td>{{ $login->correo }}</td>
            <td>{{ $login->contrasena }}</td>
            {{-- <td>{{ $login->token }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['logins.destroy', $login->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('logins.show', [$login->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('logins.edit', [$login->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
