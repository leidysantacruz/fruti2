
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
            <th> id </th>
            <th> user_id </th>
            <th> carrito_compra_id </th>
            <th> qr</th>
            <th> cantidad</th>
            <th> Acciones</th>
    
        </tr>
    </thead>
    @foreach ($compra as $compra)
    <tbody>
        <tr>
            <td>{{$compra->id}} </td>
            <td>{{$compra->user_id}}</td>
            <td>{{$compra->carrito_compra_id}}</td>
            <td>{{$compra->qr}}</td>
            <td>{{$compra->cantida}}</td>
            <td>

                <form action="{{ route('compras.destroy', $compra->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete-button">Eliminar</button>
                </form>

                <form action="{{route('compras.edit', $compra->id)}}" method="GET">
                    @csrf
                    <button class="edit-button" type="submit">Editar</button>
                </form>
                
            </td>
        </tr>
 
    </tbody>
    @endforeach
</table>

  <a class="add-button" href="{{route('compras.create')}}">Agregar</a>
  <a class="add-button" href="{{route('index')}}">inicio</a>
</body>
</html>

