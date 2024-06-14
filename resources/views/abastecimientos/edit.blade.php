<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="users-form">
    <form action="{{ route('abastecimientos.update', $abastecimiento->id) }}" method="POST">
        @csrf
        @method('put')
        
            <h3>Editar datos</h3>
            <input type="text" name="nombre" placeholder="nombre" value="{{ $abastecimiento->nombre }}" autofocus>
     
            <input type="text" name="ubicacion" placeholder="ubicacion" value="{{ $abastecimiento->ubicacion }}" autofocus>
    
            <input type="text" name="horario_atencion" placeholder="horario de atencion" value="{{ $abastecimiento->horario_atencion }}" autofocus>
            
            <input type="submit" value="actualizar formulario">
    </div>
    </form>

</body>
</html>
