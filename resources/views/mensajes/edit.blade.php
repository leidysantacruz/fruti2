<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">

</head>
<body>
    <div class="users-form">
    <form action="{{ route('mensajes.update', $mensaje->id) }}" method="POST">
        @csrf
        @method('put')
        <h3>Editar datos</h3>
      

        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $mensaje->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->id }} - {{ $user->nombres }}
                </option>
            @endforeach
        </select>
   
            <input type="text" name="nombre_chat" placeholder="nombre chat" value="{{ $mensaje->nombre_chat }}" autofocus>
       
            <input type="submit" value="actualizar formulario">
    </div>
    </form>



</body>
</html>

