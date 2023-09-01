<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./CSS/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
# Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: formulario.html");
    # Y salimos del script
    exit();
}

# No hace falta un else, pues si el usuario no se loguea, todo lo de abajo no se ejecuta
echo "Soy un mensaje secreto";
?>
<!-- Por cierto, también se puede usar HTML como en todos los scripts de PHP-->
<p>
    Hola mundo, soy un párrafo HTML que solamente pueden ver los usuarios logueados
</p>
<!-- Y aprovechando, le indicamos al usuario un enlace para salir-->
<a href="logout.php">Cerrar sesión</a>
    <header class="header">
        <nav class="nav">
            <div class="navigation">
              <div class="logo">
                <img class="img-logo" src="./Image/logo.png" alt="">
                <h1>AGENCIA DE VIAJES</h1> 
              </div>
                <ul class="list">
                    <li><a href="#Vuelos">Vuelos Programados</a></li> <!-- la etiqueta a tiene el href que me va a ubicar el contenido donde quiero ir -->
                    <li><a>Paquetes</a></li>
                    <li><a>Hoteles</a></li>
                    <li><a>Redes sociales</a></li>
                </ul> 
            </div>
        </nav>
        <div class="informacion">
            <h1>
                Vivamos el sueño de viajar 
            </h1>
            <h2>
                Bienvenidos a la agencia de viaje 
            </h2>

        </div>

    </header>
 <!-- vuelos -->
 <section id="Vuelos" class="vuelos">
       <strong><h1>Vuelos Programados</h1></strong> 
 <div class="carta">
       <!-- <div class="container">
         <img src="./Image/Santa marta.jpeg" alt="">
         <div class="informacion_vuelo">
            <h1> SANTAMARTA </h1>
            
         </div>
     </div>  -->
        <div class="container">
            <img src="./Image/Cancun.jpg" alt="">
            <div class="informacion_vuelo">
            <h1> CANCUN </h1>
            </div>
        </div>
            <div class="container">
                <img src="./Image/Argentina.jpg" alt="">
                <div class="informacion_vuelo">
                <h1> ARGENTINA </h1>
                </div>
            </div>
            <div class="container">
                <img src="./image/Cartagena.jpg" alt="">
                <div class="informacion_vuelo">
                   <h1> CARTAGENA </h1>
                   
                </div>
            </div> 

 </div>
    
</div>
</section>


<!-- hoteles  carrusel -->
<section class="hoteles">
    <h1>Hoteles</h1>
    <div class="carrusel">
      <div class="elementos">
        <img src="./image/Cancun.jpg" alt="">
        <div class="container_carrosul">
            <div class="informacion_carrusel">
                <h1> pauqtes a todo mundo jejejej </h1>
                <h2>santammartaalsjhdaskjhdkjashdkjashdkhjh</h2>
            </div>
             <div class="imagenes_carrousel">
                <img src="./Image/comidas.png" alt="">
                <img src="./Image/hoteles.png" alt="">
             </div>
        </div>
      </div>
      <div class="elementos">
        <img src="./image/Cancun.jpg" alt="">
        <div class="container_carrosul">
            <div class="informacion_carrusel">
                <h1> pauqtes a todo mundo jejejej </h2ç>
                <h2>santammartaalsjhdaskjhdkjashdkjashdkhjh</h2>
            </div>
             <div class="imagenes_carrousel">
                <img src="./Image/comidas.png" alt="">
                <img src="./Image/hoteles.png" alt="">
             </div>
        </div>
      </div>
      <div class="elementos">
        <img src="./image/Cancun.jpg" alt="">
        <div class="container_carrosul">
            <div class="informacion_carrusel">
                <h1> pauqtes a todo mundo jejejej </h1>
                <h2>santammartaalsjhdaskjhdkjashdkjashdkhjh</h2>
            </div>
             <div class="imagenes_carrousel">
                <img src="./Image/comidas.png" alt="">
                <img src="./Image/hoteles.png" alt="">
             </div>
        </div>
      </div>
      <div class="elementos">
        <img src="./image/Cancun.jpg" alt="">
        <div class="container_carrosul">
            <div class="informacion_carrusel">
                <h1> pauqtes a todo mundo jejejej </h1>
                <h2>santammartaalsjhdaskjhdkjashdkjashdkhjh</h2>
            </div>
             <div class="imagenes_carrousel">
                <img src="./Image/comidas.png" alt="">
                <img src="./Image/hoteles.png" alt="">
             </div>
        </div>
      </div>
      <div class="elementos">
        <img src="./image/Cancun.jpg" alt="">
        <div class="container_carrosul">
            <div class="informacion_carrusel">
                <h1> pauqtes a todo mundo jejejej </h1>
                <h2>santammartaalsjhdaskjhdkjashdkjashdkhjh</h2>
            </div>
             <div class="imagenes_carrousel">
                <img src="./Image/comidas.png" alt="">
                <img src="./Image/hoteles.png" alt="">
             </div>
        </div>
      </div>
      <div class="elementos">
        <img  src="./image/Cancun.jpg" alt="">
        <div class="container_carrosul">
            <div class="informacion_carrusel">
                <h1> pauqtes a todo mundo jejejej </h1>
                <h2>santammartaalsjhdaskjhdkjashdkjashdkhjh</h2>
            </div>
             <div class="imagenes_carrousel">
                <img src="./Image/comidas.png" alt="">
                <img src="./Image/hoteles.png" alt="">
             </div>
        </div>
      </div>
    </div>
</section>

</body>
</html>





