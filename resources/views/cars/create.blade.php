<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
</head>
<body>
<div class="users-form">
<form action="{{ route('cars.store') }}" method="POST">
    @csrf
  <h1>crear carrito</h1>
        <input type="text" name="cantida_productos" placeholder="cantida productos">
   
        <select name="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }} {{ $user->nombres }}</option>
            @endforeach
        </select>
  
        <select name="producto_id">
            @foreach ($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombres }}</option>
            @endforeach
        </select>
    
        <input type="submit" value="enviar formulario">
</div>
</form>

<!-- Aquí puedes incluir más contenido HTML o scripts si es necesario -->

</body>
</html>
