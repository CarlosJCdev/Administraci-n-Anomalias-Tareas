<?php

//se inidica que la sesión será iniciada en esta página
session_start();

//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==1){
header("location:jefatura.php");
//si es privilegio  lo manda a la pagina jefatura(admin le correponde 2  solo es para departamentos, 1 para jefa )colocamos el nombre la pagina que querremos que nos habra
}
}else{
header("location:index.php");//en caso que no exista el usuario te manda a la principal
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Planeación</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="assets/css/planeacion.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="assets/js/script.js"></script>
</head>
<body>
        
<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>
<li><a><strong> Bienvenido </strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></a> </li>
<li><a>Departamento de <?php echo $_SESSION["usuario"]["privilegio"] ==5 ? 'Planeación' : 'Administrador' ; ?></a> </li>
<li><a class="Active">Cuenta</a>
<ul>
<li><a href='logout.php'>Cerrar Sesión</a>
</li>
<li><a href='restablecerplanea.html'>Reestablacer Contraseña</a>
</li>
</ul>
</li>
</ul>
</div>    
       
        
        
<div id="heading" >
<h1>PLANEACIÓN <br>Módulo 1</h1> 
</div>
     
<!-- Main -->
<section class="wrapper">
<p>    
<table style="margin: 0 auto;" BORDER CELLPADDING=10 CELLSPACING=0>
<tr>
<td>Estadística 911 Inicio y fin de Ciclo.</td><td>Sistema de inscripción SI</td>
</tr>
<tr>
<td>Programa general de obra PAO</td><td>Programa Mejorando la Escuela </td>
</tr>
<tr>
<td> Detención de necesidades</td><td>Programación detallada de Micropodet </td>
</tr>
<tr>
<td>Inscripciones y reinscripciones de educación básica</td><td>Regularización de alumnos de Secundaría</td>
</tr>
<tr>
<td>>Acreditación y Certificación en SCE</td><td>Reporte de altas-bajas por traslado de alumnos</td>
</tr>
<tr>
<td>Impresión de datos oficiales de E. Básica</td><td>Trámite de reposición de certificados de primaria</td>
</tr>
<td style="text-align:center;" colspan="2" class="dos">Trámite de certificación de normal primaria</td>
</table>
<br>    
									
<div class="login-form" align="center">
<input type="Button" name="Reporte" value="Encuestas"  onclick = "location='formularioPlaneacion.php'">
<input type="Button" name="Reporte" value="Filtrado" class="button" onclick = "location='filtradoPlan.php'">
</div>
    
</section>
<br>
<br>			
        			
<!-- Footer -->
<footer id="footer">
<div class="copyright"> &copy; <a>USAE</a> <a>Valle de Santiago</a>                        
</div>            
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>