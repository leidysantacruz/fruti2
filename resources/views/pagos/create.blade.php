<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
</head>
<body>

    <div class="users-form">
        <h1>crear pagos</h1>
    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf
    
            <input type="text" name="facturas" placeholder="facturas">
      
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


