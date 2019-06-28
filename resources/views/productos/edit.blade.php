@extends('../layouts.plantilla')

@section("cabecera")
    EDITAR REGISTROS
@endsection
@section("contenido")

<form method="post" action="/productos/{{ $producto->id }}">
    <table>
        <tr>
            <td>Nombre: </td>
            <td>
                <input type="text" name="nombre_articulo" value="{{ $producto->nombre_articulo }}">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PUT">
            </td>
        </tr>
        <tr>
            <td>Sección</td>
            <td><input type="text" name="seccion" value="{{ $producto->seccion }}"></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><input type="text" name="precio" value="{{ $producto->precio }}"></td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td><input type="text" name="fecha" value="{{ $producto->fecha }}"></td>
        </tr>
        <tr>
            <td>Pais de origen</td>
            <td><input type="text" name="pais_origen" value="{{ $producto->pais_origen }}"></td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" name="enviar" value="actualizar">
            </td>
            <td align="center">
                <input type="reset" name="borrar" value="limpiar campos">
            </td>
        </tr>
</table>
</form>
<form method="post" action="/productos/{{ $producto->id }}">
    {{ csrf_field() }}

    <input type="hidden" name="_method" value="DELETE">

    <input type="submit" value="Eliminar registro">
</form>

@endsection

@section('pie')
    
@endsection