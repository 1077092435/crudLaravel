@include('empleado.bootstrap')

<div class="container ">
    
    
    <div class="container m-5">
        <h2>{{$modo}} usuario</h2>
        <br>
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
        </div>

        <div class="form-group">
            <label for="Apellido" style="width: 65px;">Apellido</label>
            <input class="form-control" type="text" name="Apellido" id="Apellido" value="{{ isset($empleado->Apellido)?$empleado->Apellido:'' }}">
        </div>

        <div class="form-group">
            <label for="Correo">Correo</label>
            <input class="form-control" type="email" name="Correo" id="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}">
        </div>

        <div class="form-group">
            <label for="Foto">Foto</label>
            @if(isset($empleado->Foto))
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="">
            @endif
            <input class="form-control" type="file" name="Foto" id="Foto" value="" >
        </div>

        

        <div>

            <input type="submit" class="btn btn-success" value="{{$modo}}">
            <a class="btn btn-primary" href="{{ url('empleado') }}">Regresar</a>
        </div>
    </div>
</div>