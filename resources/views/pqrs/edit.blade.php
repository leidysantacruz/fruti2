<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/pqr.css') }}">
</head>
<body>
    <div class="users-form">
        <form action="{{ route('pqrs.update', $pqr->id) }}" method="post">
            @csrf
            @method('PUT') 
            <h3>Editar datos</h3>

            <label for="tipo">Tipo de PQRS:</label>
            <select id="tipo" name="tipo">
                <option value="peticion" {{ $pqr->tipo == 'peticion' ? 'selected' : '' }}>Petición</option>
                <option value="queja" {{ $pqr->tipo == 'queja' ? 'selected' : '' }}>Queja</option>
                <option value="reclamo" {{ $pqr->tipo == 'reclamo' ? 'selected' : '' }}>Reclamo</option>
                <option value="sugerencia" {{ $pqr->tipo == 'sugerencia' ? 'selected' : '' }}>Sugerencia</option>
            </select>

            <label for="mensaje">Mensaje:</label><br>
            <textarea id="mensaje" name="motivo" rows="4" cols="50" required>{{ $pqr->motivo }}</textarea><br><br>

            <label for="usuario">Usuario:</label>
            <select id="usuario" name="user_id">
                @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $usuario->id == $pqr->user_id ? 'selected' : '' }}>
                        {{ $usuario->id }} {{ $usuario->nombres }}
                    </option>
                @endforeach
            </select><br><br>

            <input type="submit" value="Actualizar PQRS">
        </form>
    </div>
</body>
</html>
