    
    <label for="nombre">Nombre</label>
    <input type="text" value="{{ isset($empleado->nombre)?$empleado->nombre:'' }}" name="nombre" id="nombre"> 
    
    <br>

    <label for="apellido">Apellido</label>
    <input type="text" value="{{ isset($empleado->apellido)?$empleado->apellido:'' }}" name="apellido" id="apellido"> 
    
    <br>
    
    <label for="rut">RUT</label>
    <input type="text" value="{{ isset($empleado->rut)?$empleado->rut:'' }}" name="rut" id="rut"> 
    
    <br>
    
    <label for="correo">Correo</label>
    <input type="email" value="{{ isset($empleado->correo)?$empleado->correo:'' }}" name="correo" id="correo"> 
    
    <br>

    <input type="submit" value="{{ $modo }} datos"> <br>