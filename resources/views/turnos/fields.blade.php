<!-- Horainicioturno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horaInicioTurno', 'Horainicioturno:') !!}
    {!! Form::text('horaInicioTurno', null, ['class' => 'form-control','id'=>'horaInicioTurno']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#horaInicioTurno').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Horafinturno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horaFinTurno', 'Horafinturno:') !!}
    {!! Form::text('horaFinTurno', null, ['class' => 'form-control','id'=>'horaFinTurno']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#horaFinTurno').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('turnos.index') }}" class="btn btn-default">Cancel</a>
</div>
