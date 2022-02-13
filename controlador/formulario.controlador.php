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

    static public function ctrregistrocontacto() {
        # code...
        if (isset($_POST["guardarcontacto"])) {
            # code...
            $tabla = "datosusuarios";
            $datos = array( "nombre" => $_POST["nombre"],
                            "apellido" => $_POST["apellido"],
                            "correo" => $_POST["correo"],
                            "telefono" => $_POST["telefono"],
                            "direccion" => $_POST["direccion"],
                            "ciudad" => $_POST["ciudad"],
                            "usu" => $_GET["usu"]
                            );
            
            $Respuesta = modeloformulario::mdlregistrocontacto($tabla, $datos);
			//unset($_GET['FechaConsulta']);
			echo '<script>

							if(window.history.replaceState){
								
								window.history.replaceState( null, null, window.location.href );

							}
						</script>';
			return $Respuesta;
        }
    }

    static public function ctrlistarcontactos() {
        # code...
        $tabla = "datosusuarios";

        $Respuesta = modeloformulario::mdllistarcontactos($tabla);

        return $Respuesta;
        
    }

}
