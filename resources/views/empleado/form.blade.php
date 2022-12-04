<!-- Creación y Edición:(cuerpo de form a usar en include) -->
<h1>{{ $modo }} Empleado</h1>
<!-- ___________________________________________________________________ -->

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach( $errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<!-- ___________________________________________________________________ -->

<div class="form-group">

    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre"
        value="{{ isset($empleado->nombre)?$empleado->nombre: old('nombre') }}" id="nombre">
</div>

<div class="form-group">

    <label for="apellidoPaterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellidoPaterno"
        value="{{ isset( $empleado->apellidoPaterno)?$empleado->apellidoPaterno:old('apellidoPaterno') }}"
        id="apellidoPaterno">
</div>

<div class="form-group">

    <label for="apellidoMaterno">Apellido Materno</label>
    <input type="text" class="form-control" name="apellidoMaterno"
        value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:old('apellidoMaterno') }}"
        id="apellidoMaterno">
</div>

<div class="form-group">

    <label for="correo">Correo</label>
    <input type="email" class="form-control" name="correo"
        value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}" id="correo">
</div>

<div class="form-group">

    <label for="foto"></label>
    @if(isset($empleado->foto))
    <img class="img-thumbnail img-fluid" width="100px" src="{{ asset('storage').'/'.$empleado->foto}}"
        alt="foto-perfil">
    @endif
    <input type="file" class="form-control" name="foto" value="" id="foto"><br>
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>