@extends('../layouts.plantilla')


@section('cabecera')
<h3>Registrar producto</h3>

@endsection

@section('contenido')

<form action="/productos" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <table>
        <tr>
            <td>Nombre: </td>
        </tr>
        <tr>
            <td><input class='form-control'  type="text" name="NombreArticulo" value="{{old('NombreArticulo')}}">
            @error('NombreArticulo')
            <span style="color: red;">{{$message}}</span>
            @enderror
        </td>
        </tr>
        <tr>
            <td>Sección: </td>
        </tr>
        <tr>
            <td><input class='form-control'  type="text" name="Seccion" value="{{old('Seccion')}}">
            @error('Seccion')
            <span style="color: red;">{{$message}}</span>
            @enderror
        </td>
        </tr>
        <tr>
            <td>Precio:</td>
        </tr>
        <tr>
            <td><input class='form-control'  type="text" name="Precio" value="{{old('Precio')}}">
            @error('Precio')
            <span style="color: red;">{{$message}}</span>
            @enderror</td>
        </tr>
        <tr>
            <td>País:</td>
        </tr>
        <tr>
            <td><input class='form-control' type="text" name="PaisOrigen"></td>
        </tr>
        <tr>
            <td>Fecha:</td>

        </tr>
        <tr>
            <td>
                <input class='form-control' type="date" name="Fecha">
            </td>
        </tr>
        <tr>
            <td><span> </span></td>
        </tr>
        <tr>
            <td>Imagen:</td>

        </tr>
        <tr>
            <td>
                <input class='form-control' type="file" name="imagen">
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