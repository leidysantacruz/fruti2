<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
</head>
<body>
    <div class="users-form">
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('put')
        <h3>Editar datos</h3>

     
        <select name="user_id" id="user_id" >
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $car->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->id }} - {{ $user->nombres }}
                </option>
            @endforeach
        </select>
    
        <select name="producto_id" id="producto_id">
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}" {{ $car->producto_id == $producto->id ? 'selected' : '' }}>
                    {{ $producto->id }} - {{ $producto->nombres }}
                </option>
            @endforeach
        </select>
      
        <input type="text" name="cantida_productos" value="{{ $car->cantida_productos }}" autofocus>
        <input type="submit" value="actualizar formulario">
    </div>
    </form>



</body>
</html>
