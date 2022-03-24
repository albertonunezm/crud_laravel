Formulario de creación de empleado

<form action="{{ url('/empleado') }}" method="post">
@csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"> 
    
    <br>

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido"> 
    
    <br>
    
    <label for="rut">RUT</label>
    <input type="text" name="rut" id="rut"> 
    
    <br>
    
    <label for="correo">Correo</label>
    <input type="email" name="correo" id="correo"> 
    
    <br>

    <input type="submit"> <br>
</form>