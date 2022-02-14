<?php

/**
 * 
 */
class Conexion
{
	
	static public function Conectar()
	{
		# nos conectamos a la base de datos

		$link = new PDO("mysql:host=localhost;dbname=pruebaproimpo", "root", "");
		$link -> exec("set names utf8");

		return $link;

	}
}