<?php 
include('config.php'); 
session_start();
if(isset($_SESSION['logueado']) != "SI"){
header('location: index.php');
exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario']."' and ID='".$id."'";
$res = mysql_query($sql, $link) or die(mysql_error());
$row = mysql_fetch_assoc($res);
?>
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />
<strong>De:</strong> <?php echo $row['de']?><br />
<strong>Fecha:</strong> <?php echo $row['fecha']?><br />
<strong>Asunto:</strong> <?php echo $row['asunto']?><br /><br />
<strong>Mensaje:</strong><br />
<?php echo $row['texto']?>

<?php 

if($row['leido'] != "si")
{
	mysql_query("UPDATE mensaje SET leido='si' WHERE ID='".$id."'",$link) or die(mysql_error());
}
?>