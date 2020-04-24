<?php
//se inidica que la sesión será iniciada en esta página
session_start();
//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==1){
header("location: jefatura.php");//si es privilegio  lo manda a la pagina jefatura(admin le correponde 2  solo es para departamentos, 1 para jefa )colocamos el nombre la pagina que querremos que nos habra
	                                      }
}else{
	header("location:index.php");//en caso que no exista el usuario te manda a la principal
     }
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Usuario General</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="assets/js/script.js"></script>
<link rel="stylesheet" href="assets/css/servicios.css" />
</head>
<body>
    
<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>    
<li><a><strong> Bienvenido </strong>Usuario</a> </li>
<li><a></a> </li>
<li><a href="logout.php">Cerar Sesión </a>
</li>    
</ul>
</div> 
             
<div id="heading" >
<h1>Usuario General</h1> 
</div>
    
<section id="main" class="wrapper">
<p>  
<p></p>    
<div class="login-form" align="center">
<input type="Button" name="Reporte" value="Encuestas"  onclick = "location='formularioUsuario.php'">   
</div>
</section>
    
<br>
<br>
<br>        
               



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="assets/js/ajax.js"></script>
		
</body>
</html>