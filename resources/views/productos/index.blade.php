<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/imagenproduc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/crud1.css') }}">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<table class="crud-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>user_id</th>
            <th>Productos</th>
            <th>Tiempo de Reclamo</th>
            <th>Imagen</th>
            <th>Precio</th>
            <th>descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->user_id}}</td>
            <td>{{$producto->nombres}}</td>
            <td>{{$producto->tiempo_reclamo}}</td>
         
            <td>
                @if ($producto->imagen)
                    <img class="product-image" src="{{ asset('storage/productos/' . $producto->imagen) }}" alt="Imagen del producto">
                @else
                    No hay imagen
                @endif
            </td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="delete-button" type="submit">Eliminar</button>
                </form>

                <form action="{{ route('productos.edit', $producto->id) }}" method="GET">
                    @csrf
                    <button class="edit-button" type="submit">Editar</button>
                </form>


            </td>
        </tr>
   
    </tbody>
    @endforeach
</table>


<a class="add-button" href="{{ route('productos.create') }}">Agregar</a>
<a class="add-button" href="{{route('index')}}">inicio</a>
</div>

</body>
</html>
