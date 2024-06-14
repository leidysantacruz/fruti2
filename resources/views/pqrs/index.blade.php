<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de PQRS</title>
    <link rel="stylesheet" href="{{ asset('css/crud1.css') }}">
</head>
<body>
  
    <table class="crud-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>tipo</th>
                <th>Motivo</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pqrs as $pqr)
            <tr>
                <td>{{$pqr->id}}</td>
                <td>{{$pqr->user_id}}</td>
                <td>{{$pqr->tipo}}</td>
                <td>{{$pqr->motivo}}</td>

                <td>
                    
                        <form action="{{ route('pqrs.edit', ['id' => $pqr->id]) }}" method="GET">
                            @csrf
                            <button type="submit" class="edit-button">Editar</button>
                        </form>
                    <form action="{{ route('pqrs.destroy', $pqr->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="delete-button ">Eliminar</button>
                    </form>

                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <a  class="add-button"  href="{{route('pqrs.create')}}">Agregar</a>
    <a class="add-button" href="{{route('index')}}">inicio</a>
</body>
</html>
