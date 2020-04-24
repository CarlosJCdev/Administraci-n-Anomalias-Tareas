<?php
//se inidica que la sesión será iniciada en esta página
session_start();

//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==2){
header("location: administrador/index.php");//si es privilegio 2 lo manda a la pagina admin ponemos la pagina que querremos que nos habra
}
}else{
header("location:../index.php");//
}
//en caso que no exista lo manda al principal
//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==4){
header("location:eficiencia.php");//si es privilegio 2 lo manda a la pagina admin ponemos la pagina que querremos que nos habra
}
}else{
header("location:index.php");//
}

//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==5){
header("location:planeacion.php");//si es privilegio 2 lo manda a la pagina admin ponemos la pagina que querremos que nos habra
}
}else{
header("location:index.php");//
}

//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==3){
header("location:servicios.php");//si es privilegio  lo manda a la pagina ponemos la pagina que querremos que nos habra
}
}else{
header("location:index.php");//si no existe te manda al login
}

//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
if($_SESSION["usuario"]["privilegio"] ==6){
header("location: usuario.php");//si es privilegio  lo manda a la pagina ponemos la pagina que querremos que nos habra
}
}else{
header("location:index.php");//si no existe te manda al login
}

?>
<!doctype html>
<html lang=''>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/jefatura.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="assets/js/script.js"></script>
<title>Jefatura</title>
</head>
<body>

<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>    
<li><a><strong> Bienvenido </strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></a> </li>
<li><a>Departamento de <?php echo $_SESSION["usuario"]["privilegio"] ==1 ? 'Jefatura' : 'Administrador' ; ?></a> </li>
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
<h1>JEFATURA</h1> 
</div>
    
<section class="wrapper">
<p>    
<table class="table" style="margin: 0 auto;" BORDER CELLPADDING=10 CELLSPACING=0>
    
<tr>
<th>Módulo</th>
<th>Departamento</th>
<th> &nbsp; &nbsp; &nbsp; &nbsp;Resultados</th>       
</tr>
    
<tr>
<td>1</td>
<td>Planeación</td>
<td>  <input name="submit" value="Análisis " type="submit" onclick="window.location.href='seguiPlan.php'"></td>
</tr>
    
<tr>
<td>3</td>
<td>Eficiencia Administrativa</td>
<td>  <input name="submit" value="Análisis " type="submit" onclick="window.location.href='seguiEfi.php'"></td>
</tr>
    
<tr>
<td>4</td>
<td>Informática </td>
<td>  <input name="submit" value="Análisis " type="submit"  onclick="window.location.href='seguiInfo.php'"></td>
</tr>
    
<tr>
<td>5</td>
<td>Servicios al personal</td>
<td>  <input name="submit" value="Análisis " type="submit" onclick="window.location.href='seguiServi.php'"></td>
</tr>
    
</table>  
<p></p>
        
<div style="text-align: center;">       
<button id="button" onclick="window.location.href='../Reportes/reportes/Reporte_Planeacion.php'">PDF Planeación</button>
<button id="button" onclick="window.location.href='../Reportes/reportes/Reporte_Informatica.php'">PDF Informática</button>
<button id="button" onclick="window.location.href='../Reportes/reportes/Reporte_Eficiencia.php'">PDF eficiencia</button>
<button id="button" onclick="window.location.href='../Reportes/reportes/Reporte_Servicios.php'">PDF Servicios</button>
</div>         
              
</section> 
<br>
<footer id="footer">
<div class="copyright"> &copy; <a>USAE</a> <a>Valle de Santiago</a>      
</div>            
</footer>
   

    
</body>
<html>
