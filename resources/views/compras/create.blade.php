<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Título Aquí</title>
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
</head>
<body>
    <div class="users-form" > 
    <form action="{{ route('compras.store') }}" method="post">
        @csrf
      <h1>crear compra</h1>
            <input type="text" name="qr" placeholder="qr">
    
            <input type="text" name="cantida" placeholder="cantida">
      
            <select name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->nombres }}</option>
                @endforeach
            </select>
     
            <select name="carrito_compra_id">
                @foreach ($carritos as $carrito)
                    <option value="{{ $carrito->id }}">{{ $carrito->cantida_productos }}</option>
                @endforeach
            </select>
            <input type="submit" value="enviar formulario">
    </div>
    </form>


</body>
</html>
