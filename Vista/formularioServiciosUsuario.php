<!DOCTYPE HTML>
<html>
<head>
<title>Formulario Servicios</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/formularioeficiencia.css">	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/Eficiencia.js"></script>  
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
    
$(function() {
$("#codigo").autocomplete({
source: "productos.php",
minLength: 2,
select: function(event, ui) {
event.preventDefault();
$('#codigo').val(ui.item.codigo);
$('#descripcion').val(ui.item.descripcion);
$('#precio').val(ui.item.precio);
$('#id_producto').val(ui.item.id_producto);
}
});
});
</script>
</head>
<body>
        
<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>    
<li><a><strong> Bienvenido </strong>Usuario</a> </li>
<li><a href="formularioUsuario.php">Inicio</a>    
<li><a href="logout.php">Cerrar Sesión</a>
</li>    
</ul>
</div>        
    
<div id="heading" >
<h1>Servicios al Personal</h1>
</div>

<div class="container"> 
<div class="side">
<nav class="dr-menu">
<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Encuestas</a></div>
    
<ul>             
<li><a class="dr-icon dr-icon-heart" href="formularioPlaneacion.php">Planeación</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="formularioeficiencia.php">Eficiencia Administrativa</a></li>
<li><a class="dr-icon dr-icon-settings" href="formularioinformatica.php">Informática</a></li>
<li><a class="dr-icon dr-icon-switch" href="logout.php">Cerrar Sesión</a></li>
</ul>
</nav>
</div>
</div>
<!-- /container -->      
<form action="phpServicios.php" method="POST" >
<div class="form-group">
        
<!-- Main, contenido -->	
<div align="">
<h3>Complete la información de la escuela</h3>
<label for="nombre">Nombre de escuela:</label>  
<input type="text" id="codigo" name="nombre" placeholder="Ingrese el nombre de la escuela" required>
    
<br>
    
<label for="c.t.t.">Centro de Trabajo:</label> 
&nbsp;<input type="text" id="descripcion" name="centro">
    
<br>
    
<label for="turno">Localidad: </label>
&emsp;&emsp;&emsp;&emsp;<input type="text" id="precio" name="localidad">
<input type="hidden" id="id_producto">
</div> 
    
<div class="login">
<h3 class="form-titulo">Área de Servicios al Personal</h3>
<div class="login-form">
<hr class="style1" />            

<p>Seleccione la fecha de realización del formulario:</p>               
<input type="date" name="fecha">
    
<br>
<br>
    
<p>Escriba nombre del encargado:</p>
<input type="text" name="encargado" required placeholder="Escriba nombre quien realiza la encuesta">
    
<br>
<br>									

<p style="color: #19070B"><b>De acuerdo a lo programado para el presente ciclo escolar, ¿Cuenta a la fecha con la plantilla de personal del sistema, control escolar perfectamente validada y completa?</b></p>
    
<br/><br/>
    
<input type="radio" value="SI"  id="test1"  name="ciclo" onclick="ocultar2()" /><label for="test1" >Si</label>
<input type="radio" value="NO"  id="test2" onclick="ver2()" name="ciclo" /><label for="test2">No </label>
				
<br/><br/>
						
<div id="efecto2">
<label class="label">Describa el motivo</label>							
<input type="text" name="motivo" placeholder="Escriba aquí" class="redondeadonorelieve " />
</div>

<br/><br/><br/>

<div class="select">                
<select id="soflow-color" name="status">
<option value="" >Seleccione un status:</option>
<option value="En proceso">En proceso</option>
<option value="Pendiente">Pendiente</option>

</select>
</div>

<br>  
						
<input type="submit" value="Guardar"  class="boton"/>
<input type="reset" value="Restablecer"  class="boton" />
</div>
</div>				 
</section>
			
</form>
<script src="assets/js/ytmenu.js"></script>
</body>
</html>