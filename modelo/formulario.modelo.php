<?php
//importamos la conexión de la bd
require_once "conexionbd.php";

class modeloformulario {
    
    //modelo para poder obtener los datos y enviamos el resultado de la consulta de vuelta al controlador
    static public function mdliniciarsesion($tabla, $campo, $valor) {

        $stmt = Conexion::Conectar()->prepare("Select * From $tabla where $campo = :$valor");
		$stmt->bindParam(":".$valor, $valor, PDO::PARAM_STR);
		$stmt->execute();

		return $stmt -> fetch();
		$stmt = null;

    }

    //modelo para poder insertar un nuevo registro a la tabla Usuarios
    static public function mdlregistrousuario($tabla, $datos) {

        //Si el usuario existe se enviara un mensaje al cliente informando que ya existe
        $stmt1 = Conexion::Conectar()->prepare("Select usuario From $tabla where usuario = :usuario");
        $stmt1->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt1->execute();
        $resultado = $stmt1->fetch();

        if ($resultado != null ) {
            # code...
            echo "<center><p><h4>Alerta! Este usuario ya existe</h4></p></center><br>";

        } else {
            # Proceso para insertar el registro en la bd
            $stmt = Conexion::Conectar()->prepare("Insert Into $tabla(usuario, clave) Values (:usuario, :clave)");
            $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":clave", 	 password_hash($datos["clave"], PASSWORD_BCRYPT), 	PDO::PARAM_STR);

            if ($stmt->execute()) {
                # Enviamos de vuelta la confirmación
                return true;

            }else{
                $errorsql = $stmt->errorInfo();
                print_r($errorsql);
            }
        }
        
        
    }

    //modelo para poder insertar un nuevo registro a la tabla datosusuarios - DATOS DEL FORM DE CONTACTO
    static public function mdlregistrocontacto($tabla, $datos) {
        //Si el campo cedula existe se enviara un mensaje al cliente informando que ya existe
        $stmt1 = Conexion::Conectar()->prepare("Select cedula From $tabla where cedula = :cedula");
        $stmt1->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
        $stmt1->execute();
        $resultado = $stmt1->fetch();

        if ($resultado != null ) {
            # se envia directamente el mensaje a la vista
            echo "<center><p><h4>Alerta! La cedula ya existe en el sistema</h4></p></center><br>";

        } else {
            # Proceso para insertar el registro en la bd
            $stmt = Conexion::Conectar()->prepare("Insert Into $tabla (cedula, fk_tipoid, nombre, apellido, correo, telefono, direccion, ciudad, usuario_creacion) Values (:cedula, :tipoid, :nombre, :apellido, :correo, :telefono, :direccion, :ciudad, :usu)");
            $stmt->bindParam(":cedula", $datos["cedula"], PDO::PARAM_STR);
            $stmt->bindParam(":tipoid", $datos["tipoid"], PDO::PARAM_INT);
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
            $stmt->bindParam(":usu", $datos["usu"], PDO::PARAM_INT);

            if ($stmt->execute()) {
                # Enviamos de vuelta la confirmación
                return true;

            }else{
                //capturamos el error y lo mostramos
                $errorsql = $stmt->errorInfo();
                print_r($errorsql);
            }
        }
        
    }

    //Modelo para listar la tabla tipoidentificacion
    static public function mdllistartipoid($tabla)
	{
        //Realizamos la consulta y la enviamos de vuelta al controlador
		$stmt = Conexion::Conectar()->prepare("Select * From $tabla order by 2 ASC");
		$stmt->execute();
        # Enviamos de vuelta la información
		return $stmt -> fetchAll();
		$stmt = null;
	}

}
