<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
  
</head>
<body>
    <div class="users-form" >
    <form action="{{ route('compras.update', $compra->id) }}" method="POST">
        @csrf
        @method('put')
        <h3>Editar datos</h3>
    
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $compra->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->id }} - {{ $user->nombres }}
                </option>
            @endforeach
        </select>
        
            <select name="carrito_compra_id">
                @foreach($carrito_compras as $carrito)
                    <option value="{{ $carrito->id }}" {{ $compra->carrito_compra_id == $carrito->id ? 'selected' : '' }}>
                        {{ $carrito->id }} - {{ $carrito->cantida_productos }}
                    </option>
                @endforeach
            </select>
      
            <input type="text" name="qr" placeholder="qr" value="{{ $compra->qr }}" autofocus>
  
            <input type="text" name="cantida" placeholder="candida" value="{{ $compra->cantida }}" autofocus>
      
            <input type="submit" value="actualizar formulario">
    </div>
    </form>


</body>
</html>
