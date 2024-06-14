
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>frutivegetal</title>
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
     <link href="{{ asset('css/registro1.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio3.css') }}" rel="stylesheet">
     <link href="{{ asset('css/inicio6.css') }}" rel="stylesheet">
</head>
<nav>
    <div class="container-dos">
        <a href="{{ route('index') }}">
            <img src="{{ asset('img/logito.jpg') }}" class="logo">
        </a>
    </div>
</nav>
<br>

<script>
function validateForm() {
    var nombres = document.forms["myForm"]["nombres"].value;
    var apellidos = document.forms["myForm"]["apellidos"].value;
    var edad = document.forms["myForm"]["edad"].value;
    var telefono = document.forms["myForm"]["telefono"].value;
    var email = document.forms["myForm"]["email"].value;
    var password = document.forms["myForm"]["password"].value;

    if (nombres === "") {
        document.getElementById("nombresError").innerText = "Por favor, ingresa tu nombre.";
        return false;
    } else {
        document.getElementById("nombresError").innerText = ""; // Limpia el mensaje de error
    }

    if (apellidos === "") {
        document.getElementById("apellidosError").innerText = "Por favor, ingresa tus apellidos.";
        return false;
    } else {
        document.getElementById("apellidosError").innerText = "";
    }

    // Repite lo anterior para otros campos

    return true; // Envía el formulario si no hay errores
}
</script>
<body>
    <h1>Registrarse</h1>
    <div class="users-form-uno">
        <form name="myForm" action="{{ route('users.store') }}" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
            @csrf
            <input type="text" name="nombres" placeholder="Nombres">
            <div id="nombresError" class="error"></div>
            
            <input type="text" name="apellidos" placeholder="Apellidos">
            <div id="apellidosError" class="error"></div>
            
            <input type="text" name="edad" placeholder="Edad">
            <div id="edadError" class="error"></div>
            
            <input type="text" name="telefono" placeholder="Teléfono">
            <div id="telefonoError" class="error"></div>
            
            <input type="text" name="email" placeholder="Email">
            <div id="emailError" class="error"></div>
            
            <input type="password" name="password" placeholder="Contraseña">
            <div id="passwordError" class="error"></div>
            
            <input type="submit" value="Enviar formulario">
          <!--  <select name="rol_id">
                @foreach($rols as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                @endforeach
            </select>
            <select name="abastecimiento_id">
                @foreach($abastecimientos as $abastecimiento)
                    <option value="{{ $abastecimiento->id }}">{{ $abastecimiento->nombre }}</option>
                @endforeach
            </select>-->
     
        </form>
    </div>
<br>

    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="wave">
            <path fill="#35ea35" fill-opacity="1" d="M0,224L26.7,218.7C53.3,213,107,203,160,213.3C213.3,224,267,256,320,261.3C373.3,267,427,245,480,218.7C533.3,192,587,160,640,170.7C693.3,181,747,235,800,245.3C853.3,256,907,224,960,192C1013.3,160,1067,128,1120,128C1173.3,128,1227,160,1280,170.7C1333.3,181,1387,171,1413,165.3L1440,160L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path>
            <image href="{{ asset('img/logito.jpg') }}" x="20" y="80" width="300" height="90" />
            <text x="300" y="120" font-size="30" font-weight="bold" fill="#000"> Descárgate nuestra app</text>
            <a href="#" x="500" y="120" style="text-decoration: none;">
                <rect x="750" y="100" rx="10" ry="10" width="170" height="50" style="fill:#fcf8f8ea;" />
                <text x="830" y="130" font-size="20" fill="#060606" text-anchor="middle">Descargar ahora</text>
            </a>
        </svg>
    
        <div class="social-icons">
           
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon">
                <img src="{{ asset('img/twitter.jpg') }}" alt="Twitter" class="social-icon-img">
            </a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
    
       <!-- Agrega la imagen "playstore.png" al frente y en la misma línea de los iconos -->
       <img src="{{ asset('img/playstore.png') }}" alt="Play Store" class="playstore-icon">
    
       <!-- Línea divisoria -->
       <hr class="footer-divider">
    
       <!-- Enlaces de políticas y logo con versión en la misma línea -->
       <div class="footer-links">
           <a href="#">Política de Privacidad</a>
           <a href="#">Términos y Condiciones</a>
           <a href="#">Protección  Datos Personales</a>
           <img src="{{ asset('img/logoofi.png') }}" alt="Logo Versión" class="footer-logo">
           <span class="version">2023 frutivegetal</span>
        </div>
    </footer>

 
 <script src="{{ asset('js/validar.js') }}"></script>

</body>
</html>