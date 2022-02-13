<?php

class controladorformulario {
    
    public function ctriniciarsesion() {

		if (isset($_POST["loginusuario"])) {
			# code...
			$tabla = "usuarios";
			$campo = "usuario";
			$valor = $_POST["loginusuario"];

            //echo $valor;

			$Respuesta = modeloformulario::mdliniciarsesion($tabla, $campo, $valor);

			if ($Respuesta["usuario"] == $_POST["loginusuario"] && password_verify($_POST["loginclave"], $Respuesta["clave"])) {
				# code...
				$_SESSION["validar"] = "ok";

				echo '<script>
						if(window.history.replaceState){							
							window.history.replaceState( null, null, window.location.href );
						}
						window.location = "index.php?pagina=inicio&usu='.$Respuesta["pk_usuario"].'";
					</script>';
			}else{
				
				echo '<script>
						if(window.history.replaceState){							
							window.history.replaceState( null, null, window.location.href );
						}
					</script>';
				echo "<script language=JavaScript>alert('Datos incorrectos, vuelva a intentarlo');</script>";
			}

		}

	}

    static public function ctrregistrousuario() {
        # code...
        if (isset($_POST["registrousuario"])) {
            # code...
            $tabla = "usuarios";
            $datos = array( "usuario" => $_POST["registrousuario"],
                            "clave" => $_POST["registroclave"]
                            );
            
            $Respuesta = modeloformulario::mdlregistrousuario($tabla, $datos);
			//unset($_GET['FechaConsulta']);
			echo '<script>

							if(window.history.replaceState){
								
								window.history.replaceState( null, null, window.location.href );

							}
						</script>';
			return $Respuesta;
        }
    }

}
