<!DOCTYPE html>
<html lang="en">
<head>
<title>Formulario Planeación y Control</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<script src="assets/js/Eficiencia.js"></script> 
<link rel="stylesheet" type="text/css" href="assets/css/formularioeficiencia.css"> 
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
<script src="assets/js/modernizr.custom.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
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
<li><a><strong> Bienvenido </strong>Jesus Flores Arrollo</a> </li>
<li><a>Departamento de Planeación</a> </li>
<li><a href="planeacion.php">Inicio</a>
</li>    
</ul>
</div>    

<div id="heading" >
<h1>Planeación y Control </h1>
</div>
 
<div class="container"> 
<div class="side">
<nav class="dr-menu">
<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Encuestas</a></div>
<ul>             
<li><a class="dr-icon dr-icon-heart" href="formularioServicios.php">Servicios al Personal</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="formularioEficiencia.php">Eficiencia Administrativa</a></li>
<li><a class="dr-icon dr-icon-settings" href="formularioinformatica.php">Informática</a></li>
<li><a class="dr-icon dr-icon-switch" href="logout.php">Cerrar Sesión</a></li>
</ul>
</nav>
</div>
</div>
    
<!-- /container -->
<form action="reg.php" method="post" class="form-register">
<div class="form-group">
<div>
<h3>Complete la información de la escuela</h3>
<label for="nombre">Nombre de escuela:</label>  
<input type="text" id="codigo" name="nombre" placeholder="Ingrese el nombre de la escuela" required>
  
<br>
    
<label for="c.t.t.">Centro de Trabajo:</label> 
&nbsp;<input type="text" id="descripcion" name="centro" >
  
<br>
    
<label for="turno">Localidad: </label>
&emsp;&emsp;&emsp;&emsp; &nbsp;<input type="text" id="precio" name="localidad">
<input type="hidden" id="id_producto">
</div>       
<div class="login">
<h3 class="form-titulo">Área de Planeación y Control</h3>
<div class="login-form">
<hr class="style1" />            
<p>Seleccione la fecha de realización del formulario:</p>               
<input type="date" name="fecha" >
             
<br>
<br>
    
<p>Escriba nombre del encargado:</p>
<input type="text" name="encargado" required placeholder="Escriba nombre quien realiza la encuesta">       
<p>Matrícula:</p>
<input type="text" name="Matricula" placeholder="Matrícula" class="redondeadonorelieve"/>
				
<p>Número de docentes:</p>
<input type="text" name="Docentes" placeholder="Número de docentes " class="redondeadonorelieve"/>				
                
<p>Necesidades de mobiliario:</p>
<input type="text" name="mobiliario" placeholder="Escriba aquí" class="redondeadonorelieve"/>               

<p>¿Cuenta con chatarra?</p>
<input type="radio" id="test1" name="Chatarra" value="Si" onclick="ver()">
<label for="test1">Si</label>
                    
<input type="radio" id="test2" name="Chatarra" value="No" onclick="ver()">
<label for="test2">No</label>
                
<p>Necesidades de infraestructura:</p>
<input type="text" name="infraestructura"  class="redondeadonorelieve" placeholder="Escriba aquí" />                 
                
<p>¿Última fecha que recibió apoyo?</p>
<input type="radio" id="test3" name="Apoyo"   value="6 meses o menos" onclick="ver()">
<label for="test3">6 meses  o menos </label> 
                  
<input type="radio" id="test4" name="Apoyo"   value="Mas de 6 meses" onclick="ver()" >
<label for="test4"> Más de 6 meses</label>
                    
<input type="radio" id="test5" name="Apoyo"   value="Mas de 12 meses" onclick="ver()"> 
<label for="test5"> Más de 12 meses </label>				
                    
<p> ¿Tiene algún detalle a reparar?</p>
<input type="radio" id="test6" onclick="ver()" value="Si" name="reparar">
<label for="test6">Si </label>
                    
<input type="radio" id="test7" onclick="ver()" value="No" name="reparar">
<label for="test7">No </label>
                        
<div id="efecto">
<input type="text"  name="que" class="redondeadonorelieve" placeholder="Escriba aquí" />
</div>
				
<p>¿Cuál es la condición actual de los sanitarios?</p>
<input type="radio" id="test8" name="sanitario" value="Buena" onclick="ver()" >
<label for="test8">Buena </label>
                    
<input type="radio" id="test9"  name="sanitario" value="Regular" onclick="ver()">
<label for="test9" > Regular </label>
                  
<input type="radio" id="test10"  name="sanitario" value="Mala" onclick="ver()">
<label for="test10">Mala </label>
				
<p>¿Se encuentra en algún programa (PRE, PEC, PECT)?</p>
<input type="radio" id="test11" name="programa" value="si" onclick="ver()">
<label for="test11">Si</label>
                    
<input type="radio" id="test12" name="programa" value="no" onclick="ver()">
<label for="test12">No </label>                     
                    
<p>¿Tiene conocimientos para realizar traslados?</p>                   
<input type="radio" id="test13" name="translados" value="si" onclick="ver()">
<label for="test13">Si </label>
<input type="radio" id="test14" value="No" name="translados" onclick="ver()">
<label for="test14">No </label>
				
<p>¿Cuenta con alumnos con error del nombre en el sistema?</p>
<input type="radio" id="test15"  value="Si" name="error" onclick="ver()">
<label for="test15">Si</label>
                    
<input type="radio" id="test16"  value="No" name="error" onclick="ver()">
<label for="test16">No </label>
</div>
</div>
        
<br>
                   
<div class="select">                
<select id="soflow-color" name="status">
<option value="" >Seleccione un status:</option>
<option value="En proceso">En proceso</option>
<option value="Pendiente">Pendiente</option>
</select>
</div>

<br>
    
<input type="submit" value="Guardar"  class="button" />
<input type="reset" value="Restablecer"  class="btn btn-success" />
</div>
</form>
<script src="assets/js/ytmenu.js"></script>
</body>
</html>
			
