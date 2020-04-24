<?php 
include('config.php'); 
session_start();

if(isset($_POST['enviar']))
{
if(isset($_POST['user']))
{
		$sql = "SELECT * FROM usuarios WHERE nombre='".$_POST['user']."'";
		$res = mysql_query($sql, $link) or die(mysql_error());
		$tot = mysql_num_rows($res);
if($tot > 0)
{
				$_SESSION['logueado'] = "SI";
				$_SESSION['usuario'] = $_POST['user'];
} else 
{
echo "Usuario incorrecto";
}
}
}
?>
<?php if(isset($_SESSION['logueado']) == "SI"){ ?>
<?php
$sql = "SELECT * FROM mensaje WHERE para='".$_SESSION['usuario']."' and leido IS NULL";
$res = mysql_query($sql, $link) or die(mysql_error());
$tot = mysql_num_rows($res);
?>

    <html>
    <head>
    <title>Mensajes</title>
    <link rel="stylesheet" href="fondo.css">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    </head>

<body>     
<section id="cta" class="wrapper">  
Menu: <a href="listar.php">Ver mensajes</a> | <a href="crear.php">Crear mensajes</a> | <a href="cerrar.php">Cerrar sesion</a><br /><br />
Hola <strong><?php echo $_SESSION['usuario'];?></strong>, Usted tiene <?php echo $tot?> mensajes sin leer.
<?php } else { ?>
<form method="post" action="" >
<center><strong>Usuarios para la prueba: juan, luis, lina</strong></center><br /><br />
Nombre de usuario:<br />
<input type="text" name="user" /><br /><br />
<input type="submit" name="enviar" value="Entrar" />
</form>
<?php } ?>
    
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


