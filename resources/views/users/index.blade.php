
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
                <th>ID</th>
               <!-- <th>Rol</th>
                <th>Abastecimiento ID</th> -->
                <th>imagen</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Contraseña</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
            <tr>
                <td>{{$user->id}}</td>
              <!--  <td>{{$user->rol_id}}</td>
                <td>{{$user->abastecimiento_id}}</td> -->
                <td>{{$user->profile_picture}}</td>
                <td>{{$user->nombres}}</td>
               
                <td>{{$user->apellidos}}</td>
                <td>{{$user->edad}}</td>
                <td>{{$user->telefono}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="delete-button" type="submit">Eliminar</button>
                    </form>
                    <button class="edit-button" onclick="window.location.href='{{route('users.edit', $user->id)}}'">Editar</button>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

 
    <a class="add-button" href="{{route('index')}}">inicio</a>

    <!-- Agrega aquí tu contenido adicional si es necesario -->

</body>
</html>
