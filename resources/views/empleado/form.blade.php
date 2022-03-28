    <label for="nombre">Nombre</label>
    <input type="text" value="{{ $empleado->nombre }}" name="nombre" id="nombre"> 
    
    <br>

    <label for="apellido">Apellido</label>
    <input type="text" value="{{ $empleado->apellido }}" name="apellido" id="apellido"> 
    
    <br>
    
    <label for="rut">RUT</label>
    <input type="text" value="{{ $empleado->rut }}" name="rut" id="rut"> 
    
    <br>
    
    <label for="correo">Correo</label>
    <input type="email" value="{{ $empleado->correo }}" name="correo" id="correo"> 
    
    <br>

    <input type="submit"> <br>