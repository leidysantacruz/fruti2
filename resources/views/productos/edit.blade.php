<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="{{ asset('css/formularios1.css') }}">
</head>


<body>
    <div class="users-form" >
   
    <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <h1>Editar Producto</h1>

    
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $producto->user_id == $user->id ? 'selected' : '' }}>
                    {{ $user->id }} - {{ $user->nombres }}
                </option>
            @endforeach
        </select>


        <input type="text" name="nombres" id="nombres" placeholder="nombres" value="{{ $producto->nombres }}" autofocus>



        <input type="text" name="tiempo_reclamo" id="tiempo_reclamo" placeholder="tiempo_reclamo" value="{{ $producto->tiempo_reclamo }}" autofocus>





        <input type="number" name="precio" id="precio" placeholder="precio" value="{{ $producto->precio }}" autofocus>

       
        <input type="text" name="descripcion" id="descripcion" placeholder="descripcion" value="{{ $producto->descripcion }}" autofocus>


        <label for="imagen_actual">Imagen Actual:</label>
        @if ($producto->imagen)
            <img src="{{ asset('storage/productos/' . $producto->imagen) }}" alt="Imagen actual del producto" class="imagen-producto" style="max-width: 300px; max-height: 300px;">
        @else
            <p>No hay imagen</p>
        @endif

        <label for="nueva_imagen">Nueva Imagen (opcional):</label>
        <input type="file" name="nueva_imagen" id="nueva_imagen">

        <input type="submit" value="actualizar formulario">
    </form>
</body>
</html>

