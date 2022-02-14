<?php

class controladorformulario {
    
    public function ctriniciarsesion() {

		if (isset($_POST["loginusuario"])) {
			# code...
			$tabla = "usuarios";
			$campo = "usuario";
			$valor = $_POST["loginusuario"];

            //echo $valor;
			//pasamos al modelos los parametros de consulta
			$Respuesta = modeloformulario::mdliniciarsesion($tabla, $campo, $valor);

			//obtenemos los datos y Hacemos la comparación del usuario y la clave para poder iniciar sesión
			if ($Respuesta["usuario"] == $_POST["loginusuario"] && password_verify($_POST["loginclave"], $Respuesta["clave"])) {
				# code...
				$_SESSION["validar"] = "ok";

				//limpiamos el history y posteriormente redirigimos el usuario a la pagina de inicio
				echo '<script>
						if(window.history.replaceState){							
							window.history.replaceState( null, null, window.location.href );
						}
						window.location = "index.php?pagina=inicio&usu='.$Respuesta["pk_usuario"].'";
					</script>';
			}else{
				//Limpamos el history del formulario y enviamos una alerta de que no fue posible el inicio de sesión
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
            # 
            $tabla = "usuarios";
            $datos = array( "usuario" => $_POST["registrousuario"],
                            "clave" => $_POST["registroclave"]
                            );
            //Enviamos al modelo los parametros de consulta
            $Respuesta = modeloformulario::mdlregistrousuario($tabla, $datos);
			//limpiamos el history del formulario
			echo '<script>

							if(window.history.replaceState){
								
								window.history.replaceState( null, null, window.location.href );

							}
						</script>';
			//Retornamos el resultado de la consulta
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
                            "cedula" => $_POST["cedula"],
                            "tipoid" => $_POST["tipoid"],
                            "usu" => $_GET["usu"]
                            );
            //Enviamos al modelo los parametros de consulta
            $Respuesta = modeloformulario::mdlregistrocontacto($tabla, $datos);
			echo '<script>

							if(window.history.replaceState){
								
								window.history.replaceState( null, null, window.location.href );

							}
						</script>';
			//Retornamos el resultado de la consulta
			return $Respuesta;
        }
    }

	static public function ctrlistartipoid(){
		
		# code...
		$tabla = "tipoidentificacion";
		//Enviamos al modelo los parametros de consulta
		$Respuesta = modeloformulario::mdllistartipoid($tabla);
		//Retornamos el resultado de la consulta
		return $Respuesta;

	}

}
