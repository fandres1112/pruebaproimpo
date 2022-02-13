<?php

require_once "conexionbd.php";

class modeloformulario {
    
    public function mdliniciarsesion($tabla, $campo, $valor) {

        $stmt = Conexion::Conectar()->prepare("Select * From $tabla where $campo = :$valor");
		$stmt->bindParam(":".$valor, $valor, PDO::PARAM_STR);
		$stmt->execute();

		return $stmt -> fetch();
		//$stmt->close();
		$stmt = null;

    }

    static public function mdlregistrousuario($tabla, $datos) {

        
        # statement: Declaracion
        $stmt = Conexion::Conectar()->prepare("Insert Into $tabla(usuario, clave) Values (:usuario, :clave)");
        $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":clave", 	 password_hash($datos["clave"], PASSWORD_BCRYPT), 	PDO::PARAM_STR);

        if ($stmt->execute()) {
			# code...
			return true;
			//$stmt->close();

		}else{

			$errorsql = $stmt->errorInfo();
			print_r($errorsql);
		}
        
    }

}
