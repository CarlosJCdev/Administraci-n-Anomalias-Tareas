<?php

$mysql_usuario = "usae";
$mysql_password = "1234";
$mysql_host = "localhost";
$mysql_database = "usae";

$conexion = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_database) or die ('server problem'.mysqli_error());


   
 $sql= "UPDATE usuarios SET password= '$_POST[passw]' WHERE email ='$_POST[correo]'";


if(mysqli_query($conexion, $sql)){
    echo '<script>alert("Se han actualizado")</script> ';
    echo"<script> location.href='../planeacion.php'</script>";
    
}
    else {
     echo '<script>alert("Correo incorrecto")</script> ';
     header("location: restablecerplanea.html");
}

mysqli_close($conexion);




