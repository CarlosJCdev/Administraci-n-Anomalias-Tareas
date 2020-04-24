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
<title>Eficiencia Administrativa</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />	 
<link rel="stylesheet" href="assets/css/eficiencia.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="assets/js/script.js"></script>    
</head>
<body>
    
    
 <div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>
<li><a><strong> Bienvenido </strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></a> </li>
<li><a>Departamento de <?php echo $_SESSION["usuario"]["privilegio"] ==4 ? 'Eficiencia Administrativa' : 'Administrador' ; ?></a> </li>
<li><a class="Active">Cuenta</a>
<ul>
<li><a href='logout.php'>Cerrar Sesión</a>
</li>
<li><a href='restablecerefi.html'>Reestablacer Contraseña</a>
</li>
</ul>
</li>
</ul>
</div>
			   
    
<div id="heading" >
<h1>Eficiencia Administrativa <br>Módulo 3</h1> 
</div>
	

<section class="wrapper">
<p>   
<table style="margin: 0 auto;" BORDER  cellspacing='3' cellpadding='10' >
<tr>
<td>Distribución de libros de texto gratuitos.</td><td>Distribución de material (Diversos programas).</td>
</tr>
<tr>
<td>Distribución de útiles escolares.</td><td>Pagos de escuelas de calidad.</td>
</tr>
<tr>
<td>Pagos de servicios básicos.</td><td>Pago de servicios básicos.</td>
</tr>
<tr>
<td>Pago de becas, nóminas, personal SEG, jubilados</td><td>Ingresos y egresos de escuelas.</td>
</tr>
</table> 
<br>
    
               								
<div class="login-form" align="center">
<input type="Button"   value="Encuestas" onclick="window.location.href='formularioEficiencia.php'">
<input type="Button" class="button" value="Filtrado" onclick="window.location.href='filtradoEfi.php'">
</div>
    
</section>
<br>
<br>    
   

		<!-- Footer -->
<footer id="footer">
<div class="copyright"> &copy; <a>USAE</a> <a>Valle de Santiago</a>                        
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