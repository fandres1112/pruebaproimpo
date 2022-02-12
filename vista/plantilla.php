<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proimpo prueba</title>
</head>
<body>
    <?php

        if (isset($_GET["pagina"])) {
            # code...

            if ($_GET["pagina"] == "inicio" || 
                $_GET["pagina"] == "registro" || 
                $_GET["pagina"] == "salir") {
                # code...

                include "vista/pagina/".$_GET["pagina"].".php";

            echo '	<footer class="py-1 text-center fixed-bottom bg-dark navbar-dark text-light">
                    <p>&copy; 2020 - 2021 Intranet. Todos los derechos son reservados | Diseñado por <a href="https://servicegroup.com.co" target="_blank">SERVICE GROUP</a> - SI.TI</p>
                    </footer>';

            }else{

                include "vista/pagina/error404.php";

            }

        }else{

            include "vista/pagina/login.php";
            
        }
    ?>

</body>
</html>