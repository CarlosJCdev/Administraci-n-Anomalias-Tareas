<?php

class Conexion
{

	//conexion a la BD
	//return PDO
public static function conectar()
{
	try{
		$cn= new PDO("mysql:host=localhost;dbname=usae","usae","1234");

		return $cn;

	}catch (PDOException $e){
		die($ex->getMessage());

	}
}
}

