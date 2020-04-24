<?php 

include('config.php'); 
session_start();
if(isset($_SESSION['logueado']) != "SI"){
header('location: index.php');
exit();
}
if (isset($_POST['enviar'])) 
{
	if(!empty($_POST['para']) && !empty($_POST['asunto']) && !empty($_POST['texto']))
	{
		$fecha = date("j/m/Y, g:i a");
		$sql = "INSERT INTO mensaje (para,de,fecha,asunto,texto) VALUES ('".$_POST['para']."','".$_SESSION['usuario']."','".$fecha."','".$_POST['asunto']."','".$_POST['texto']."')";
		mysql_query($sql,$link);
		echo "Mensaje enviado correctamente.";
	}
}
?>

<html>
    <head>
    <title>Mensajes</title>
    <link rel="stylesheet" href="creacion.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    </head>
    
    <body>
    <section id="cta" class="wrapper"> 

Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />

<form method="post" action="" >
<center><strong>Usuarios para la pruba: juan, luis, lina</strong></center><br /><br />
Para:<br />
<input type="text" name="para" /><br />
Asunto:<br />
<input type="text" name="asunto" /><br />
Mensaje:<br />
<textarea name="texto"></textarea>
<br /><br />
<input type="submit" name="enviar" value="Enviar" />
</form>
        
        
       <br>
        <br>
   
      
       </section>
        <footer id="footer">
            <p></p>
        <div class="copyright">
        &copy; <a>USAE Valle de Santiago.</a> <a>Instalaciones USAE Valle de Santiago.</a>
        </div>
        </footer>     
</body>
</html>        