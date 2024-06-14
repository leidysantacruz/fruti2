
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/crud1.css') }}">
  
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
            <th>  id</th>
            <th>  user_id</th>
            <th>  nombre_chat</th>
            <th>  Acciones</th>
        </tr>
    </thead>
    @foreach ($mensaje as $mensaje)
    <tbody>
        <tr>
            <td>{{$mensaje->id}} </td>
            <td>{{$mensaje->user_id}}</td>
            <td>{{$mensaje->nombre_chat}}</td>
            <td>
                <form action="{{ route('mensajes.destroy', $mensaje->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete-button">Eliminar</button>
                </form>

                <form action="{{route('mensajes.edit', $mensaje->id)}}" method="GET">
                    @csrf
                    <button class="edit-button" type="submit">Editar</button>
                </form>

            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<a class="add-button" href="{{route('mensajes.create')}}">Agregar</a>
<a class="add-button" href="{{route('index')}}">inicio</a>
</body>
</html>



