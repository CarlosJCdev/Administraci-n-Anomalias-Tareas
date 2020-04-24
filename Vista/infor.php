<?php

//conexion con la BD y el servidor
include '../conexion/conexion.php';

//obtenemos los valores del formulario
$Ciclo=$_POST['ciclo'];
$Porque=$_POST['motivo'];
$FECHA=$_POST['fecha'];
$Encargado=$_POST['encargado'];
$centro=$_POST['centro'];
$Escuela=$_POST['nombre'];
$Turno=$_POST['localidad'];
$Status=$_POST['status'];

//$req=(strlen($nombre)*strlen($nick))
//  or die( '<script>alert ("verifica tus datos")</script>');
if (strlen($Ciclo)){
    
//ingresar la informacion a la BD   
$query = "INSERT INTO Informatica VALUES ('','$Ciclo','$Porque','$FECHA','$Encargado', '$centro','$Escuela','$Turno','$Status')";
$resultado = $conexion->query($query);
}
else {
echo'<script> alert ("Verifica tus datos ")</script>';
echo"<script> location.href='formularioInformatica.php' </script>";
}
if($resultado){
echo'<script> alert ("Datos guardados de manera correcta")</script>';
echo"<script> location.href='formularioInformatica.php' </script>";
}
else{
echo "Insercion Fallida";
}
?>