<?php

$host="localhost";
$usuario="usae";
$contraseña="1234";
$base="usae";

$conexion= new mysqli($host,$usuario,$contraseña,$base);
if ($conexion -> connect_errno)
 {
    die("Fallo la conexion: (".$conexion ->mysqli_connect_errno().")".$conexion -> mysqli_connect_error());
}
//variables de consulta
if(isset($_POST['submit'])){

$encargado=$_POST['encargado'];
$escuela=$_POST['centro'];

}
$where="";

//boton buscar

if(isset($_POST['submit']))
{
    if(empty($_POST['centro']))
    {
        $where="where encargado like '".$encargado."%'";
    }
    else if(empty($_POST['encargado']))
    {
        $where="where centro like '".$escuela."%'";
    }
    else{
        $where="where encargado like '".$encargado."%' and escuela='".$escuela."'";
    }
}

//Preparar la consulta para extraer todos los clientes
$alumnos = "SELECT * FROM servicios $where limit 5";
$resAlumnos=$conexion->query($alumnos);

if (mysqli_num_rows($resAlumnos)==0) 
{
    $mensaje="<h1>No hay registros que coincidan.</h1>";
}


//Extraer todas la filas y almacenarlas en una tabla



/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */

if (isset($_POST["id_servicios"]))
{
//Se almacena en una variable el id del registro a eliminar
$id_servicios = $_POST["id_servicios"];
$status = $_POST["status"];

//Preparar la consulta
$alumnos = "UPDATE servicios SET status='$status' WHERE id_servicios=$id_servicios";

//Ejecutar la consulta
$registroAlumnos = mysqli_query($conexion,$alumnos) or die(mysql_error());

//redirigir nuevamente a la página para ver el resultado
header("location: filtradoServi.php");
}
  
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Filtro de búsqueda de Servicios al Personal</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
<link rel="stylesheet" href="assets/css/filtrado.css" />
</head>
<body>
    
<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>    
<li><a><strong> Bienvenido </strong>Ana Maria Lopez Cano</a> </li>
<li><a>Departamento de Servicios al Personal</a> </li>
<li><a href="servicios.php">Inicio</a>
</li>    
</ul>
</div>    
    
<div id="heading">
<h1>Filtro de búsqueda Servicios al Personal</h1>
</div>
    
<section>
<form method="post">
<div class="login" align="center">                
<input type="text" placeholder="Centro de Trabajo" name="centro"/>
<input type="text" placeholder="Usuario" name="encargado"/>
<br>
<input name="submit" value="Buscar" type="submit">
</div>
</form>
<br>
<div id="tablas" style="height:350px; overflow:auto;">             
<table  style="margin: 0 auto;" class="table">
                <tr id="row1">
                    <th >Estado<br>(Descripción)</th>
                    <th>Id formulario</th>
                    <th >Usuario</th>
                    <th >Escuela</th>
                    <th>Localidad</th>
                    <th >Centro </th>
                    <th>&emsp; Modificar</th>
</tr>

<?php 

/* Mostrar la tabla con los registros */
while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH)) {
  $resAlumnos++;
echo
     "<tr>
      <td>".$registroAlumnos["status"]."</td>
      <td>".$registroAlumnos["id_servicios"]."</td>
      <td>".$registroAlumnos["encargado"]."</td>
      <td>".$registroAlumnos["nombre"]."</td>
      <td>".$registroAlumnos["localidad"]."</td>
      <td>".$registroAlumnos["centro"]."</td>
      <td><form method='post' action=''>
      <input type='hidden' name='id_servicios' value='".$registroAlumnos["id_servicios"]."'>
      <textarea  name='status' value='".$registroAlumnos["status"]."'></textarea>
      <input  type='submit' value='Actualizar'>
      </form></td>
   </tr>";
    

}


?>
</table>
</div>    
<?
echo $mensaje;
?>
</section>
</body>
</html>

