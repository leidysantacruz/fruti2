<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
</head>
<body>
    <div  class="users-form"> 
    <form action="{{ route('mensajes.store') }}" method="post">
        @csrf
       <h1>cear chat</h1>
            <input type="text" name="nombre_chat" placeholder="nombre chat">
     
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->nombres }}</option>
                @endforeach
            </select>
            <input type="submit" value="enviar formulario">

    </div>
    </form>


</body>
</html>
