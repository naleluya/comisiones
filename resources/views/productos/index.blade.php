@extends('../layouts.plantilla')

@section("cabecera")
    LEER REGISTROS
@endsection

@section("contenido")

<table border="1">
    <tr>
        <th>Nombre de Articulo</th>
        <th>Sección</th>
        <th>Precio</th>
        <th>Fecha</th>
        <th>Pais de Origen</th>
        <th>Acción</th>
    </tr>
    @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->nombre_articulo }}</td>
            <td>{{ $producto->seccion }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->fecha }}</td>
            <td>{{ $producto->pais_origen }}</td> 
        <td><a href="{{ route('productos.edit', $producto->id) }}">Actualizar</a></td>           
        </tr>
    @endforeach
</table>

<form action="/productos/create">
    <input type="submit" name="crear" value="crear articulo">
        {{ csrf_field() }}
</form>

@endsection

@section('pie')
    
@endsection