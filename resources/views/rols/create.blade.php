
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
</head>
<body>
    <div class="users-form">
        <h1>crear rols</h1>
    <form action="{{route('rols.store')}}"method="post">@csrf
       
        <input type="text" name="nombre" placeholder="nombre">
        <input type="submit" value="enviar formulario">
   
</div>
</form> 
    
</body>
</html>