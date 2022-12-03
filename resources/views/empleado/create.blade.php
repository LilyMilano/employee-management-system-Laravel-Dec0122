<h2>Formulario de creación de empleado:</h2>

<form action="{{ url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form', ['modo'=>'Crear'])
</form>