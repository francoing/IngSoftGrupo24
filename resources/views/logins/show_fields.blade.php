<!-- Nombre Completo Field -->
<div class="form-group">
    {!! Form::label('nombre_completo', 'Nombre Completo:') !!}
    <p>{{ $login->nombre_completo }}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $login->correo }}</p>
</div>

<!-- Contrasena Field -->
<div class="form-group">
    {!! Form::label('contrasena', 'Contrasena:') !!}
    <p>{{ $login->contrasena }}</p>
</div>

<!-- Token Field -->
<div class="form-group">
    {!! Form::label('token', 'Token:') !!}
    <p>{{ $login->token }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $login->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $login->updated_at }}</p>
</div>

