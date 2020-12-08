<!-- Nombre Completo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_completo', 'Nombre Completo:') !!}
    {!! Form::text('nombre_completo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Correo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correo', 'Correo:') !!}
    {!! Form::email('correo', null, ['class' => 'form-control']) !!}
</div>

<!-- Contrasena Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contrasena', 'Contrasena:') !!}
    {!! Form::password('contrasena', ['class' => 'form-control']) !!}
</div>

{{-- <!-- Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('token', 'Token:') !!}
    {!! Form::text('token', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('logins.index') }}" class="btn btn-default">Cancel</a>
</div>
