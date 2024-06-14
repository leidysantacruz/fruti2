@extends('layout')

@section('styles')
<link href="{{ asset('css/politicas.css') }}" rel="stylesheet">
@endsection

@section('content')

</head>

<body>
    
<div class="politics-container">
    <h1>POLÍTICAS DE PRIVACIDAD</h1>
    <p>Uso de la página web de FRUTIVEGETAL</p>

    <p>Frutivegetal Colombia está consciente de la importancia de proteger tu información personal, y nos complace transmitirte nuestra política de privacidad en Internet.</p>

    <p><strong>Nuestra Página</strong></p>
    <p>Cuando ingresas a nuestra Página Web te comprometes con nosotros en hacer buen uso del contenido y los servicios prestados por nosotros. Con esto debes abstenerte de cualquier práctica ilícita que pueda perjudicar el buen funcionamiento de nuestra página.</p>
    <p>Recuerda que el uso del contenido (textos, gráficos, archivos de sonido, imágenes, fotografías, códigos, fuentes o cualquier tipo de información disponible en la página web) no incluye:</p>
    <ul>
        <li>Su reproducción, distribución o modificación o disposición de los mismos de cualquier manera que fuera.</li>
        <li>Cualquier violación de los derechos de la Página Web o de terceros legitimados, incluyendo sus códigos o software.</li>
        <li>Su utilización para cualquier fin comercial o publicitario.</li>
        <li>Cualquier intento de obtener los contenidos de la Página Web por cualquier medio distinto de los que se pongan a disposición de los Usuarios así como de los que habitualmente se emplean en la red.</li>
        <li>Las marcas utilizadas en la Página Web y las correspondientes marcas gráficas son todas ellas marcas registradas y queda prohibida su reproducción o uso sin la autorización de su titular.</li>
    </ul>

    <p><strong>La información que te pedimos</strong></p>
    <p>Cuando te pedimos información personal como tus datos (nombre, teléfono, mail, etc.) lo hacemos para que puedas participar en nuestras actividades y para conocer de ti y tus gustos y así poder hacer que nuestra página sea de tu total gusto. Toda la información personal que nos des, es totalmente voluntaria y si deseas no recibir nuestras comunicaciones puedes comunicarte con nuestro link de contáctenos y estaremos dispuestos a atender tus solicitudes o inquietudes.</p>
    <p>FRUTIVEGETAL puede contratar a entidades externas a nuestra empresa para proveer ciertos servicios como llenar órdenes, ayudar con promociones, prestar servicios de tecnología, etc. Éstas podrán tener acceso a cierto tipo de información si es necesario para realizar sus funciones; sin embargo, la utilización de la misma sólo podrá ser para fines conocidos y estipulados por FRUTIVEGETAL.</p>

    <p><strong>FRUTIVEGETAL y los niños</strong></p>
    <p>Si eres menor de edad (18 años) deberás leer este reglamento con uno de tus padres o un adulto responsable que te pueda ayudar a entender todo lo que estás leyendo.</p>
    <p>Los niños son nuestro mayor tesoro, por lo que le pedimos a los padres revisar y estar atentos a las acciones de sus hijos en internet porque al final es su responsabilidad determinar cuáles contenidos son aptos y cuáles no. Así mismo, existen programas de filtro y bloqueo para el contenido en línea que aunque no son infalibles son útiles para restringir el contenido expuesto a los menores de edad.</p>
    </div>




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
           
            <a href="https://web.facebook.com/" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/?logout=1697589605669" class="social-icon">
                <img src="{{ asset('img/twitter.jpg') }}" alt="Twitter" class="social-icon-img">
            </a>
            <a href="https://www.instagram.com/" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
    
       <!-- Agrega la imagen "playstore.png" al frente y en la misma línea de los iconos -->
       <img src="{{ asset('img/playstore.png') }}" alt="Play Store" class="playstore-icon">
    
       <!-- Línea divisoria -->
       <hr class="footer-divider">
    
       <!-- Enlaces de políticas y logo con versión en la misma línea -->
       <div class="footer-links">
           <a href="{{ route('politicas') }}">Política de Privacidad</a>
           <a href="{{ route('terminos') }}">Términos y Condiciones</a>
           <a href="{{ route('datospersonales') }}">Protección  Datos Personales</a>
           <img src="{{ asset('img/logoofi.png') }}" alt="Logo Versión" class="footer-logo">
           <span class="version">2023 frutivegetal</span>
        </div>
    
    </footer>
    


</body>
@endsection

</html>
