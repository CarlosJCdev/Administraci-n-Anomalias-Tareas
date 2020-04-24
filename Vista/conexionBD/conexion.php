<?php
function Conectar (){
	$conexion = null;
	$host = "localhost";
	$db = "usae";
	$user = "usae";
	$pwd = "1234";

	try{
		$conexion = new PDO("mysql:host=localhost;dbname=usae","usae","1234");
	}
	catch (PDOException $e){
		echo 'No se pùede conectar a la base de datos!!';
		exit;
	}
	return $conexion;
}
?>