<?php
//Se realiza la conexión a la BD para poder capturar los datos consultados
require_once "conexionbd.php";
$stmt = Conexion::Conectar()->prepare("	select c.descripcion as tipoid, a.cedula as cedula, a.nombre as nombre, a.apellido as apellido, a.correo as correo, a.telefono as telefono, a.direccion as direccion, a.ciudad as ciudad, b.usuario as usuario, a.fecha_creacion as fecha 
										from datosusuarios a
										inner join usuarios b on b.pk_usuario = a.usuario_creacion
										inner join tipoidentificacion c on c.pk_tipoid = a.fk_tipoid");

        $stmt->execute();
		$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
		$stmt = null;
