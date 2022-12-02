<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}" id="Nombre"><br><br>

<label for="apellidoPaterno">Apellido Paterno</label>
<input type="text" name="apellidoPaterno" value="{{ isset( $empleado->apellidoPaterno)?$empleado->apellidoPaterno:'' }}"
    id="apellidoPaterno"><br><br>

<label for="apellidoMaterno">Apellido Materno</label>
<input type="text" name="apellidoMaterno" value="{{ isset($empleado->apellidoMaterno)?$empleado->apellidoMaterno:'' }}"
    id="apellidoMaterno"><br><br>

<label for="Correo">Correo</label>
<input type="email" name="Correo" value="{{ isset($empleado->correo)?$empleado->correo:'' }}" id="Correo"><br><br>

<label for="Foto">Foto</label>
@if(isset($empleado->foto))
<img width="100px" src="{{ asset('storage').'/'.$empleado->foto}}" alt="foto-perfil">
@endif
<input type="file" name="Foto" value="" id="Foto"><br><br>

<input type="submit" value="Guardar Datos"><br>