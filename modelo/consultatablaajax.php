<?php

require_once "conexionbd.php";
$stmt = Conexion::Conectar()->prepare("select * from datosusuarios");

        $stmt->execute();
		$data = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
		$stmt = null;
