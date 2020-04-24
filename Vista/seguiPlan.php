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
$alumnos = "SELECT * FROM planeacion $where limit 6";
$resAlumnos=$conexion->query($alumnos);

if (mysqli_num_rows($resAlumnos)==0) 
{
$mensaje="<h1>No hay registros que coincidan.</h1>";
}
//Extraer todas la filas y almacenarlas en una tabla
/* PARTE 2: SI SE ENVÍA EL FORMULARIO CAPTURAR LOS DATOS PARA ELIMINAR EL CLIENTE */ 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Filtro de búsqueda de Planeación </title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />     
<link rel="stylesheet" href="assets/css/seguimiento.css" />
</head>
<body>
    
<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>    
<li><a><strong> Bienvenido </strong>Luisa Fernanda Arredondo Vargas</a> </li>
<li><a>Departamento de Jefatura</a> </li>
<li><a href="jefatura.php">Inicio</a>
</li>    
</ul>
</div>    
    
<div id="heading">
<h1>Filtro de búsqueda Planeación </h1>
</div>
<p></p>
    
<section class="wrapper">
<form method="post">
<div class="login" align="center">                
<input id="login-form" type="text" placeholder="Centro de Trabajo" name="centro"/>
<input id="login-form" type="text" placeholder="Usuario" name="encargado"/>
<input name="submit" value="Buscar" type="submit">
</div>
</form>
<p></p>

<div id="tablas" style="height:187px; overflow:auto;">    
<table class="table" style="margin: 0 auto;"  CELLSPACING="0">
<tr id="row1">
<th style="width:130px;">Estado<br>(Descripción )</th>
<th style="width:130px;">Usuario</th>
<th style="width:400px;">Escuela</th>
<th style="width:100px;">Centro </th>
<th style="width:190px;">Fecha</th>
</tr>

    
<?php 
/* Mostrar la tabla con los registros */
while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH)) {
$resAlumnos++;
echo  
"<tr>
<td>".$registroAlumnos["status"]."</td>
<td>".$registroAlumnos["encargado"]."</td>
<td>".$registroAlumnos["escuela"]."</td>
<td>".$registroAlumnos["centro"]."</td>
<td>".$registroAlumnos["fecha"]."</td>
</td>
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

