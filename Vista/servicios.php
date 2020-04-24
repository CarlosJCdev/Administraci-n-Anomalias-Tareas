<?php
//se inidica que la sesión será iniciada en esta página
session_start();
//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==1){
header("location:jefatura.php");//si es privilegio  lo manda a la pagina jefatura(admin le correponde 2  solo es para departamentos, 1 para jefa )colocamos el nombre la pagina que querremos que nos habra
	                                      }
}else{
header("location:index.php");//en caso que no exista el usuario te manda a la principal
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Servicios al personal</title>
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
<li><a><strong> Bienvenido </strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></a> </li>
<li><a>Departamento de <?php echo $_SESSION["usuario"]["privilegio"] ==3 ? 'Servicio al Personal' : 'Administrador' ; ?></a> </li>
<li><a class="Active">Cuenta</a>
<ul>
<li><a href='logout.php'>Cerrar Sesión</a>
</li>
<li><a href='restablecerservicio.html'>Reestablacer Contraseña</a>
</li>
</ul>
</li>
</ul>
</div>      
             
<div id="heading" >
<h1>Servicio al Personal <br>Módulo 5</h1> 
</div>
    
<section id="main" class="wrapper">
<p>   
<table style="margin: 0 auto;" BORDER CELLPADDING=10 CELLSPACING=0>
<tr>
<td>Carrera magisterial y administrativa. </td><td>Ingreso y recepción de formas IPAC.</td>
</tr>
<tr>
<td>Recepción de solicitudes para cambio de formularios F2 OPORTUNIDADES.</td><td>Tramite de reclamos, plantilla de personal.</td>
</tr>
<tr>
<td>Licencias Médicas, y platilla de personal</td><td>Pago de servicios básicos. </td>
</tr>
<tr>
<td>Pago de becas, nóminas, personal SEG, jubilados. </td><td>Ingresos y egresos de escuelas.</td>
</tr>
</table>
    
<br>
<br>
    								
<div class="login-form" align="center">
<input type="Button" name="Reporte" value="Encuestas"  onclick = "location='formularioServicios.php'">
<input type="Button" name="Seguimiento" value="Filtrado" class="button" onclick = "location='filtradoServi.php'">    
</div>
</section>
    
<br>
<br>
<br>        
               
<!-- Footer o pie de pagina -->
<footer id="footer">
<div class="copyright">&copy; <a>USAE</a> <a>Valle de Santiago</a>
</div>
</footer>
<!-- Footer -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		   
</body>
</html>