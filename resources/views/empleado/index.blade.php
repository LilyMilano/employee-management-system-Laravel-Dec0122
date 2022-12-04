@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif

    <a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a><br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>
                    <img class="img-thumbnail img-fluid" width=" 100px" src="{{ asset('storage').'/'.$empleado->foto}}"
                        alt="foto-perfil">
                </td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellidoPaterno }}</td>
                <td>{{ $empleado->apellidoMaterno }}</td>
                <td>{{ $empleado->correo }}</td>
                <td>
                    <a href=" {{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">Editar</a>
                    |
                    <form action="{{ url('/empleado/'.$empleado->id )}}" class="d-inline" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input class="btn btn-danger" type="submit"
                            onclick="return confirm('¿Desea confirmar el borrado?' )" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection