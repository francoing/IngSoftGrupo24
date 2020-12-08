<div class="table-responsive">
    <table class="table" id="modelos-table">
        <thead>
            <tr>
                <th>Sku</th>
        <th>Denominacion</th>
        <th>Color Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($modelos as $modelo)
            <tr>
                <td>{{ $modelo->sku }}</td>
            <td>{{ $modelo->denominacion }}</td>
            <td>{{ $modelo->color_id }}</td>
                <td>
                    {!! Form::open(['route' => ['modelos.destroy', $modelo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('modelos.show', [$modelo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('modelos.edit', [$modelo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
