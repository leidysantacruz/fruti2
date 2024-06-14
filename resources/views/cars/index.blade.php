
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/crud1.css') }}">
    <title>Título de tu Página</title>
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
            <th> id</th>
            <th> user_id</th>
            <th> producto_id</th>
            <th> cantidad_productos</th>
            <th> Acciones</th>
        </tr>
    </thead>

    @foreach (  $carrito_compra as $car)
    <tbody>
        <tr>
            <td>{{$car->id}} </td>
            <td>{{$car->user_id}}</td>
            <td>{{$car->producto_id}}</td>
            <td>{{$car->cantida_productos}}</td>
            <td>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete-button">Eliminar</button>
                </form>

                <form action="{{route('cars.edit', $car->id)}}" method="GET">
                    @csrf
                    <button class="edit-button" type="submit">Editar</button>
                </form>
            </td>
        </tr>
 
    </tbody>
    @endforeach
</table>
    
    <a class="add-button" href="{{route('cars.create')}}">Agregar</a>
    <a class="add-button" href="{{route('index')}}">inicio</a>
</body>
</html>


