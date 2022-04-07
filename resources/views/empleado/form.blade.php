<label for="nombre">Nombre: </label>
<input type="text" name="nombre" id="nombre" value="{{ isset($empleado->nombre)?$empleado->nombre: '' }}" placeholder="Nombre" >
<br>

<label for="primerApellido">Primer Apellido: </label>
<input type="text" name="primerApellido" id="primerApellido" value="{{ isset($empleado->primerApellido)?$empleado->primerApellido: '' }}" placeholder="Primer Apellido" >
<br>

<label for="segundoApellido">Segundo Apellido: </label>
<input type="text" name="segundoApellido" id="segundoApellido" value="{{ isset($empleado->segundoApellido)?$empleado->segundoApellido: '' }}" placeholder="Segundo Apellido" >
<br>

<label for="correo">Correo: </label>
<input type="text" name="correo" id="correo" value="{{ isset($empleado->correo)?$empleado->correo: '' }}" placeholder="Correo" >
<br>

<label for="foto">Foto: </label>
@if (isset($empleado->foto))

<img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
    
@endif
<input type="file" name="foto" id="foto" value="">
<br>

<input type="submit" value="Enviar">

<a href="{{ url('empleado') }}">Regresar</a>