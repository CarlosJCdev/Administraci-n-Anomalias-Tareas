<?php

//variables para enlace a servidor mysql
$mysql_usuario = "administrador";
$mysql_password = "1234";
$mysql_host = "localhost";
$mysql_database = "login";



//variable con los datos de la conexión
$conexion = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_database) or die ('server problem'.mysqli_error());

$cod = $_POST['recuperar'];



//consulta sql obteniendo todos los registros 
$query= "SELECT * FROM SESION WHERE CODIGO = '".$cod."'";

//se ejecuta la consulta
$result=mysqli_query($conexion, $query) or die (mysqli_error());

//se creea una varibale $row que equivale a las columnas de la tabla de la variable $result
if($row = mysqli_fetch_array($result)){

$pass = $row ['contrasena'];
       echo'<script> alert ("Tu contraseña es: '.$pass.' ")</script>';
    echo"<script> location.href='index.html' </script>";
   }else{//en caso de que el número telefonico no esté en la base de datos,  será un error de Telefono y regresaremos a la página de recuperar
        echo'<script> alert ("Tu numero no coincide lo registraste")</script>';
       
    echo"<script> location.href='recupe.html' </script>";
        exit();

   
}

?>