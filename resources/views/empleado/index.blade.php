Mostrar la lista de empleado

@if(Session::has('mensaje'))

{{Session::get('mensaje')}}

@endif

<a href="{{ url('empleado/create') }}">Registrar nuevo empleado</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>RUT</th>
            <th>Correo</th>
            <th>Acciones</th
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->rut }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">Editar</a> 
                             
                <form action="{{ url('/empleado/'.$empleado->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Borrar" onclick="return confirm('¿Quieres borrar?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>