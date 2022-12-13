<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar Sesión");
                window.location = "../index.php";
            </script>
        ';
    session_destroy();
    die();
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum prg3 Ivan Salazar</title>
    <link rel="stylesheet" href="../assets/css/style_cr.css">
</head>

<body>

    <div class="contenedor">
        <div class="principal">
            <div class="header">
                <div>
                    <img class="foto" src="../assets/images/foto.webp" />
                </div>
                <div class="informacion">
                    <h1 class="nombre">Ivan Salazar</h1>
                    <p><b>Direcion:</b> Calabozo, Estado Guárico, Urb. Nicolas Hurtado Barrios
                        <br>
                        <b>Sección: </b> 1
                        <br>
                        <b>Celular:</b> 0412-9964606
                        <br>
                        <b>Email:</b> ivansantiagosua@gmail.com
                    </p>
                </div>
            </div>

            <div class="cuerpo">
                <div class="contenido">
                    <h2 class="titulo">Objetivos</h2>
                    <p class="txt">Graduarme de ingeniero en informatica, ser un exelente profesional, crecer profecionalmente, y superar mis espectativas.</p>
                </div>
                <div class="contenido">
                    <h2 class="titulo">Estudios</h2>
                    <p class="txt"><b>Unidad Educativa Colegio Nuestra Señora de los Dolores</b> <br> Bachiller-Educacion Media

                    </p>

                </div>

                <div class="contenido">
                    <h2 class="titulo">Lenguajes de programacion</h2>
                    <p class="txt"><b>JavaScript: </b> Básico
                        <br>
                        <b>Html: </b> Intermedio
                        <br>
                        <b>Css: </b> Básico
                    </p>

                </div>

                <div class="contenido">
                    <h2 class="titulo">Experiencia Laboral</h2>
                    <p class="txt">
                        Poca experiencia laboral, conocimineto basico de lenguaje de programacion, basico conocimiento sobre mantenimiento del computador.


                    </p>
                </div>

            </div>
        </div>
    </div>
    <div class="cerrar_sesion">
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
    </div>
</body>

</html>
<html>