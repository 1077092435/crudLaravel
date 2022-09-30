@include('empleado.bootstrap');

<div class="container">
@if(Session::has('mensaje'))

    {{ Session::get('mensaje') }}

@endif
<br>

<a class="btn btn-success" href="{{ url('empleado/create') }}">Registrar Nuevo Empleado</a>

<table class="table  m-4">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Foto</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            
            <th scope="row">{{$empleado->id}}</th>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Correo}}</td>
            <td><img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt=""></td>
            <td >
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-primary">Editar</a>
            
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" class="d-inline">
                @csrf
                {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" onclick="return confirm('¿Borrarlo definitivamente?')" value="Eliminar">
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>




