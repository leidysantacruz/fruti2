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
            <th> id </th>
            <th> nombre </th>
            <th>  Acciones</th>
            
        </tr>
    </thead>
    @foreach ($rols as $rol)
    <tbody>
        <tr>
            <td>{{$rol->id}} </td>
            <td>{{$rol->nombre}}</td>
            
            <td>
                <form action="{{ route('rols.destroy', $rol->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="delete-button ">Eliminar</button>
                </form>

                <form action="{{ route('rols.edit', $rol->id) }}" method="GET">
                    @csrf
                    <button class="edit-button" type="submit">Editar</button>
                </form>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>

<a  class="add-button" href="{{route('rols.create')}}">Agregar</a>
<a class="add-button" href="{{route('index')}}">inicio</a>
</body>
</html>

