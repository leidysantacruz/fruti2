<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
    <title>Document</title>
</head>

<body>
    <h1>crear abastecimiento</h1>
    <div class="users-form">
    <form action="{{ route('abastecimientos.store') }}"method="post">
        @csrf 
            
            <input type="text" name="nombre" placeholder="nombre">
    
        <input type="text" name="ubicacion" placeholder="ubicacion">

         <input type="text" name="horario_atencion" placeholder="horario_atencion">

         <input type="submit" value="enviar formulario">
    </div>
    </form>

</body>

</html>
