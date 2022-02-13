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

    static public function mdlregistrocontacto($tabla, $datos) {

        
        # statement: Declaracion
        $stmt = Conexion::Conectar()->prepare("Insert Into $tabla (nombre, apellido, correo, telefono, direccion, ciudad, usuario_creacion) Values (:nombre, :apellido, :correo, :telefono, :direccion, :ciudad, :usu)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":usu", $datos["usu"], PDO::PARAM_INT);

        if ($stmt->execute()) {
			# code...
			return true;
			//$stmt->close();

		}else{

			$errorsql = $stmt->errorInfo();
			print_r($errorsql);
		}
        
    }

    static public function mdllistarcontactos($tabla) {

        # statement: Declaracion
        $stmt = Conexion::Conectar()->prepare("select * from $tabla");

        $stmt->execute();
		$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
		$stmt = null;
        
    }

}
