<?php 
//Iniciar la sesión
session_start(); 
date_default_timezone_set('America/Panama');
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);
error_reporting(E_ERROR |  E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proimpo prueba</title>
    <link href="css/header.scss" rel="stylesheet" type="text/css" media="all">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <?php if (isset($_GET["pagina"]) && $_GET["pagina"] != "registro"): ?>
    <nav>
        <ul class="menu">
            <li><a href="index.php?pagina=inicio&usu=<?php echo $_GET['usu'] ?>">Inicio</a></li>
            <li><a href="index.php?pagina=consulta&usu=<?php echo $_GET['usu'] ?>">Consulta</a></li>
            <li><a href="index.php?pagina=salir">Salir</a></li>
        </ul>
    </nav>
    <?php endif ?>
    <?php

        if (isset($_GET["pagina"])) {
            # code...

            if ($_GET["pagina"] == "inicio" || 
                $_GET["pagina"] == "registro" || 
                $_GET["pagina"] == "consulta" || 
                $_GET["pagina"] == "salir") {
                # code...

                include "vista/pagina/".$_GET["pagina"].".php";

            echo '	<footer class="py-1 text-center fixed-bottom bg-dark navbar-dark text-light">
                    <p>&copy; 2022 - Prueba PROIMPO. Todos los derechos son reservados | Diseñado por FABIAN JARAMILLO</p>
                    </footer>';

            }else{

                include "vista/pagina/error404.php";

            }

        }else{

            include "vista/pagina/login.php";
            
        }
    ?>

<script src="js/jsvalidaciones.js" type="text/javascript"></script>
</body>
</html>