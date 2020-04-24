<?php

//variables para enlace a servidor mysql
$mysql_usuario = "usae";
$mysql_password = "1234";
$mysql_host = "localhost";
$mysql_database = "usae";

//variable con los datos de la conexión
$conexion = mysqli_connect($mysql_host, $mysql_usuario,$mysql_password, $mysql_database) or die ('server problem'.mysqli_error());

//se crean variables que iguales a las variables POST que provienen del formulario
$telefono = $_POST['recuperar'];

//consulta sql obteniendo todos los registros del aplleido paterno introducido 
$query= "SELECT * FROM USUARIOS WHERE TELEFONO = '".$telefono."'";

//se ejecuta la consulta
$result=mysqli_query($conexion, $query) or die (mysqli_error());

//se creea una varibale $row que equivale a las columnas de la tabla de la variable $result
if($row = mysqli_fetch_array($result)){
$pass = $row ['password'];
echo'<script> alert ("Tu contraseña es: '.$pass.' ")</script>';
echo"<script> location.href='index.php' </script>";
}else{//en caso de que el número telefonico no esté en la base de datos,  será un error de Telefono y regresaremos a la página de recuperar
echo'<script> alert ("Tu numero no coincide con el numero que registraste")</script>';       
echo"<script> location.href='recupe.html' </script>";
exit();   
}
?>