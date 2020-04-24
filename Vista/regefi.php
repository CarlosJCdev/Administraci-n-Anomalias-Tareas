<?php

//conexion con la BD y el servidor
include'../conect/conexion.php';
//obtenemos los valores del formulario
$Ingreso=$_POST['ingreso'];
$Cuenta=$_POST['bancaria'];
$Motivo=$_POST['motivo'];
$Entrega=$_POST['entrega'];
$Porque=$_POST['porque'];
$Proceso=$_POST['Proceso'];
$Por_que=$_POST['por_que'];
$Sistema=$_POST['sistema'];
$LGT=$_POST['lgt'];
$Causa=$_POST['pq'];
$FECHA=$_POST['fecha'];
$Encargado=$_POST['encargado'];
$centro=$_POST['centro'];
$Escuela=$_POST['nombre'];
$Turno=$_POST['localidad'];
$Status=$_POST['status'];

//verificar que se hayan llenado todos los campos midiendo la longitud de cada string
if (strlen($Ingreso)*strlen($Entrega)*strlen($Cuenta)
*strlen($Proceso)*strlen($Sistema)*strlen($LGT)){
$query = "INSERT INTO administrativae VALUES ('','$Ingreso','$Cuenta','$Motivo','$Entrega','$Porque','$Proceso','$Por_que','$Sistema','$LGT','$Causa','$FECHA', '$Encargado','$centro','$Escuela','$Turno','$Status')";
$resultado = $conexion->query($query);
}

//confirmar que las contraseñas dadas coincidan
else {
echo'<script> alert ("Verifica tus datos ")</script>';
echo"<script> location.href='formularioEficiencia.php' </script>";
}
if($resultado){
echo'<script> alert ("Datos guardados de manera correcta")</script>';
echo"<script> location.href='formularioEficiencia.php' </script>";
}
else{
echo "Insercion Fallida";
}
?>


