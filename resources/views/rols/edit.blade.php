
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/formularios.css') }}">
</head>
<body>
    
    <div class="users-form">
    <form action="{{ route('rols.update', $rol->id) }}" method="POST">
        @csrf
        @method('put')
          
        <h3>editar datos </h3>
      
        <input type="text" name="nombre" placeholder="nombre" value="{{ $rol->nombre}}" autofocus>
 
         
        <input type="submit" value="actualizar formulario">  
   
    </div>
   </form> 
    
</body>
</html>