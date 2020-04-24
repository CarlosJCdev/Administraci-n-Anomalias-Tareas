<?php
session_start();
if(isset($_SESSION["usuario"]))
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />     
<title>USAE</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>
<link rel="stylesheet" href="assets/css/estilos.css">
<body>
       
<section id="cta" class="wrapper">   
<div class="login">
<div class="login-header">
<h1>Inicio de Sesión </h1>
</div>
    
<fieldset>
<form id="loginForm" action="validarCode.php" method="POST" > <!--Conexion BD con el metodo post-->
<div class="login-form">
<label for="UserName" id="usuario" >Usuario:</label>      
<input type="text" name="txtUsuario" required id="usuario" placeholder="Nombre"/><br>
<label for="pwd" id="contraseña">Contraseña:</label>
<input type="password" name="txtPassword" id="password" required placeholder="Contraseña"/>
    
<br>
    
<button type="submit" name="button">Ingresar</button>
    
<br>
    
<p><p><span class="info"></span><a href="#" onclick="window.location.href='recuperar.php'">Olvidaste tu contraseña?</a></p>
</div>
</form>
</fieldset>
</div>
</section>
    
<footer id="footer">
<div class="copyright">
&copy; <a>USAE.</a> <a>Valle de Santiago.</a>
</div>
</footer>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/overhang.min.js"></script>
<script src="assets/js/ajax.js"></script>			
</body>
</html>
