@extends('layouts.app')

@section('content')
<div class="container">
    @if(Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible" role="alert">

            {{Session::get('mensaje')}}
        
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
    <br/><br/>

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
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">Editar</a> 
                                
                    <form action="{{ url('/empleado/'.$empleado->id)}}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Borrar" class="btn btn-danger" onclick="return confirm('¿Quieres borrar?')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $empleados->links() !!}
</div>
@endsection