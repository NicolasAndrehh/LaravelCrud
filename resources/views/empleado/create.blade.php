Formulario para crear un empleado

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf    

    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" >
    <br>

    <label for="primerApellido">Primer Apellido: </label>
    <input type="text" name="primerApellido" id="primerApellido" placeholder="Primer Apellido" >
    <br>

    <label for="segundoApellido">Segundo Apellido: </label>
    <input type="text" name="segundoApellido" id="segundoApellido" placeholder="Segundo Apellido" >
    <br>

    <label for="correo">Correo: </label>
    <input type="text" name="correo" id="correo" placeholder="Correo" >
    <br>

    <label for="foto">Foto: </label>
    <input type="file" name="foto" id="foto">
    <br>

    <input type="submit" name="Enviar" id="Enviar">
</form>