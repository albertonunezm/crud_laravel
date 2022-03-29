    <h1>{{ $modo }} empleado</h1>

    @if(count($errors) > 0 )

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" value="{{ isset($empleado->nombre)?$empleado->nombre:old('nombre') }}" name="nombre" id="nombre"> 
    </div>

    <div class="form-group">
        <label for="apellido">Apellido</label>
        <input type="text" class="form-control" value="{{ isset($empleado->apellido)?$empleado->apellido:old('apellido') }}" name="apellido" id="apellido">   
    </div>

    <div class="form-group">    
        <label for="rut">RUT</label>
        <input type="text" class="form-control" value="{{ isset($empleado->rut)?$empleado->rut:old('rut') }}" name="rut" id="rut"> 
    </div>

    <div class="form-group">    
        <label for="correo">Correo</label>
        <input type="email" class="form-control" value="{{ isset($empleado->correo)?$empleado->correo:old('correo') }}" name="correo" id="correo"> 
    </div>
    
    <br>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>
