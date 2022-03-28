Formulario de creación de empleado

<form action="{{ url('/empleado') }}" method="post">
@csrf
@include('empleado.form',['modo'=>'Crear'])
</form>