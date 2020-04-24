<?php

include 'Conexion.php';
include '../entidades/Usuario.php';

class UsuarioDao extends Conexion
{
protected static $cnx;


private static function getConexion()
{
	self::$cnx = Conexion::conectar();

}

private static function desconectar(){
	self::$cnx =null;
}
//metodo que sirve para validar el login
public static function login($usuario)
{
$query ="SELECT * FROM usuarios WHERE usuario = :usuario and password =:password";



self::getConexion();

$resultado = self::$cnx->prepare($query);
$resultado->bindParam(":usuario",$usuario->getUsuario());
$resultado->bindParam(":password",$usuario->getPassword());

$resultado->execute();

if($resultado->rowCount() > 0){
	$filas = $resultado->fetch();
	if($filas["usuario"] == $usuario->getUsuario()
        && $filas["password"] == $usuario->getPassword()){
		return true;

	}
}
return false;
}
//metodo para obtener un usuario
public static function getUsuario($usuario)
{
$query ="SELECT id,nombre,usuario,telefono,email,privilegio FROM usuarios WHERE usuario = :usuario and password =:password";



self::getConexion();

$resultado = self::$cnx->prepare($query);
$resultado->bindParam(":usuario",$usuario->getUsuario());
$resultado->bindParam(":password",$usuario->getPassword());

$resultado->execute();

$filas = $resultado->fetch();

$usuario = new Usuario();
$usuario->setId($filas["id"]);
$usuario->setNombre($filas["nombre"]);
$usuario->setUsuario($filas["usuario"]);
$usuario->setTelefono($filas["telefono"]);
$usuario->setEmail($filas["email"]);
$usuario->setPrivilegio($filas["privilegio"]);

return $usuario;
}
}