<?php 

include('config.php'); 
session_start();
if(isset($_SESSION['logueado']) != "SI"){
header('location: index.php');
exit();
}

$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario']."'";
$res = mysql_query($sql, $link) or die(mysql_error());
?>

<html>
    <head>
    <title>Mensajes</title>
    <link rel="stylesheet" href="listado.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    </head>
    
    <body> 
    <section id="cta" class="wrapper">

Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />
  <table width="800" border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="53" align="center" valign="top"><strong>ID</strong></td>
      <td width="426" align="center" valign="top"><strong>Asunto</strong></td>
      <td width="321" align="center" valign="top"><strong>De</strong></td>
	  <td width="321" align="center" valign="top"><strong>Fecha</strong></td>
    </tr>
    <?php
	$i = 0; 
	while($row = mysql_fetch_assoc($res)){ ?>
    <tr bgcolor="<?php if($row['leido'] == "si") { echo "#FFE8E8"; } else { if($i%2==0) { echo "#FFE7CE"; } else { echo "#FFCAB0"; } } ?>">
      <td align="center" valign="top"><?php echo $row['ID']?></td>
      <td align="center" valign="top"><a href="leer.php?id=<?php echo $row['ID']?>"><?php echo $row['asunto']?></a></td>
      <td align="center" valign="top"><?php echo $row['de']?></td>
	  <td align="center" valign="top"><?php echo $row['fecha']?></td>
    </tr>
<?php $i++; 
} ?>
</table>
        
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>        
<br>
<p></p>

        
</section>
<footer id="footer">
<p></p>
<div class="copyright">
&copy; <a>USAE Valle de Santiago.</a> <a>Instalaciones USAE Valle de Santiago.</a>
</div>
</footer>     
</body>
</html>