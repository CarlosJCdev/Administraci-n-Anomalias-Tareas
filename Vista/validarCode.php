<?php
include '../controlador/UsuarioControlador.php';//se importan
include '../helps/helps.php';//se importan

session_start();

header('Content-Type: application/json');

$resultado = array();

if($_SERVER["REQUEST_METHOD"] == "POST"){//login 
	if(isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])){

$txtUsuario = validar_campo($_POST["txtUsuario"]);
$txtPassword = validar_campo($_POST["txtPassword"]);

$resultado = array("estado" => "true");

if(UsuarioControlador::login($txtUsuario, $txtPassword)){
	
$usuario = UsuarioControlador::getUsuario($txtUsuario, $txtPassword);
$_SESSION["usuario"] = array(
"id"=>$usuario ->getId(),
"nombre"=>$usuario->getNombre(),
"usuario"=>$usuario ->getUsuario(),
"telefono"=>$usuario ->getTelefono(),
"email"=>$usuario ->getEmail(),
"privilegio"=>$usuario ->getPrivilegio(),
);
	
return print(json_encode($resultado));
}

}
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));