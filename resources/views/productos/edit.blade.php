@extends('../layouts.plantilla')


@section('cabecera')
<h3>Editar producto</h3>

@endsection

@section('contenido')

<form action="/productos/{{$producto->id}}" method="post">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">

    <table>
        <tr>
            <td>Nombre: </td>
        </tr>
        <tr>
            <td><input class='form-control'  type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}">
            @error('NombreArticulo')
            <span style="color: red;">{{$message}}</span>
            @enderror
        </td>
        </tr>
        <tr>
            <td>Sección: </td>
        </tr>
        <tr>
            <td><input class='form-control'  type="text" name="Seccion" value="{{$producto->Seccion}}">
            @error('Seccion')
            <span style="color: red;">{{$message}}</span>
            @enderror
        </td>
        </tr>
        <tr>
            <td>Precio:</td>
        </tr>
        <tr>
            <td><input class='form-control'  type="text" name="Precio" value="{{$producto->Precio}}">
            @error('Precio')
            <span style="color: red;">{{$message}}</span>
            @enderror</td>
        </tr>
        <tr>
            <td>País:</td>
        </tr>
        <tr>
            <td><input class='form-control' type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}"></td>
        </tr>
        <tr>
            <td>Fecha:</td>

        </tr>
        <tr>
            <td>
                <input class='form-control' type="date" name="Fecha" value="{{$producto->Fecha}}">
            </td>
        </tr>
        <tr>
            <td><span> </span></td>
        </tr>
        <tr>

            <td colspan='2' align="right"> <br> <button class="btn btn-primary">Guardar</button></td>
        </tr>


    </table>

</form>




@endsection