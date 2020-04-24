<?php
//conexion con la BD y el servidor
include '../conect/conexion.php';
//obtenemos los valores del formulario
$nombre=$_POST['plantilla'];
$nick=$_POST['Rplantilla'];

//$req=(strlen($nombre)*strlen($nick))
//  or die( '<script>alert ("verifica tus datos")</script>');
if (strlen($nombre)){
	
//ingresar la informacion a la BD
$query = "INSERT INTO Servicios VALUES ($nombre','$nick','')";
$resultado = $conexion->query($query);
}
else {
echo'<script> alert ("Verifica tus datos ")</script>';
echo"<script> location.href='ServiciosAlpersonal.php' </script>";
}
if($resultado){
echo'<script> alert ("Datos guardados de manera correcta")</script>';
echo"<script> location.href='servicios.php' </script>";
}
else{
echo "Insercion Fallida";
}
?>