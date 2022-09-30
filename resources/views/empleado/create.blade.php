@include('empleado.bootstrap')
<body class="d-flex justify-content-center m-5">
    
    <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        @include('empleado.form',['modo'=>'Crear'])
    
    </form>
</body>