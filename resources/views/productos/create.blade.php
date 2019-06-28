@extends('../layouts.plantilla')

@section("cabecera")
    INSERTAR REGISTROS
@endsection
@section("contenido")

<form method="post" action="/productos">
    <table>
        <tr>
            <td>Nombre: </td>
            <td><input type="text" name="nombre_articulo">
                {{ csrf_field() }}
            </td>
        </tr>
        <tr>
            <td>Sección</td>
            <td><input type="text" name="seccion"></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="text" name="precio"></td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td><input type="text" name="fecha"></td>
        </tr>
        <tr>
            <td>Pais de origen</td>
            <td><input type="text" name="pais_origen"></td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" name="enviar" value="enviar">
            </td>
            <td align="center">
                <input type="reset" name="borrar" value="borrar">
            </td>
        </tr>
</table>
</form>

@endsection

@section('pie')
    
@endsection