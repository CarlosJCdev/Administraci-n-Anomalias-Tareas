<?php

//conexion con la BD y el servidor
include '../conect/conexion.php';

//obtenemos los valores del formulario
$nombre=$_POST['Matricula'];
$nick=$_POST['Docentes'];
$chatar=$_POST['Chatarra'];
$MOBILIARIO=$_POST['mobiliario'];
$radio=$_POST['programa'];
$RSanitario=$_POST['sanitario'];
$RTranslados=$_POST['translados'];
$REror=$_POST['incorrecto'];
$Infraestructura=$_POST['infraestructura'];
$Detalle=$_POST['fechareparacion'];
$ApoyoFecha=$_POST['Apoyofecha'];
/*$passwd=$_POST['passUsuario'];
$rPass=$_POST['RpassUsuario'];*/

//verificar que se hayan llenado todos los campos midiendo la longitud de cada string
//confirmar que las contraseñas dadas coincidan
if (strlen($nombre)*strlen($nick)*strlen($chatar)){
    
//ingresar la informacion a la BD
$query = "INSERT INTO planeacion VALUES ('$nombre','$nick','$chatar','$radio','$RSanitario','$RTranslados','$REror','$MOBILIARIO','$Infraestructura','$Detalle','$ApoyoFecha','')";
$resultado = $conexion->query($query);	
}
else {
echo'<script> alert ("Verifica tus datos ")</script>';
echo"<script> location.href='FormularioPlaneacion.php' </script>";
}
if($resultado){
echo'<script> alert ("Datos guardados de manera correcta")</script>';
echo"<script> location.href='FormularioPlaneacion.php' </script>";
}
else{
echo "Insercion Fallida";
}















