@extends('../layouts.plantilla')


@section('cabecera')

<h3>Listar producto</h3>


@endsection

@section('contenido')

<table class="table table-striped table-bordered text-center">
    <thead class="thead-dark text-center">
        <tr>
            <th>Nombre</th>
            <th>Sección</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>País</th>
            <th>Imagen</th>
            <th colspan="2">Acciones</th>
        </tr>

    </thead>
    @foreach($productos as $producto)
    <tr>
        <td>{{$producto->NombreArticulo}}</td>
        <td>{{$producto->Seccion}}</td>
        <td>{{$producto->Precio}}</td>
        <td>{{$producto->Fecha}}</td>
        <td>{{$producto->PaisOrigen}}</td>
        <td><img src="images/{{$producto->Ruta}}" width="100px" alt="imagen"></td>
        <td>
            <form action="productos/{{$producto->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-xs btn-danger">Borrar</button>
            </form>
        </td>
        <td> <a class="btn btn-xs btn-success" href='productos/{{$producto->id}}/edit'>Editar</a></td>
    </tr>
    @endforeach
</table>







@endsection