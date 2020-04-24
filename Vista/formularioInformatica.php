<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title>Formulario Informática </title>
<link rel="stylesheet" type="text/css" href="assets/css/formularioeficiencia.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<li><a><strong> Bienvenido </strong>J. Jesus Rodriguez Vidal</a></li>
<li><a>Departamento de Informatica</a> </li>
<li><a href="administrador/index.php">Inicio</a>
</li>    
</ul>
</div>    
    
<header>
<div id="heading" >
<h1>Informática</h1>
</div>
</header>
    
<div class="container"> 
<div class="side">
<nav class="dr-menu">
<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Encuestas</a></div>
    
<ul>             
<li><a class="dr-icon dr-icon-heart" href="formularioServicios.php">Servicios al Personal</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="formularioPlaneacion.php">Planeación</a></li>
<li><a class="dr-icon dr-icon-settings" href="formularioEficiencia.php">Eficiencia Administrativa</a></li>
<li><a class="dr-icon dr-icon-switch" href="logout.php">Cerrar Sesión</a></li>
</ul>
</nav>
</div>
</div>
    
<!-- /container -->
<form action="infor.php" method="POST" class="form-register">
<div class="form-group">
<div align="">
<h3>Complete la información de la escuela</h3>
<label for="nombre">Nombre de escuela:</label>  
<input type="text" id="codigo" name="nombre" placeholder="Ingrese el nombre de la escuela" required>
  
<br>

<label for="c.t.t.">Centro de Trabajo:</label> 
&nbsp;<input type="text" id="descripcion" name="centro" >
  
<br>
    
<label for="localidad">Localidad: </label>
&emsp;&emsp;&emsp;&emsp;<input type="text" id="precio" name="localidad">
<input type="hidden" id="id_producto">
</div>
<div class="login">
<h3 class="form-titulo">Área de Informática</h3>
<div class="login-form">
<hr class="style1" />            
<p>Seleccione la fecha de realización del formulario:</p>               
<input type="date" name="fecha">
<p>Escriba nombre del encargado:</p>
<input type="text" name="encargado" required placeholder="Escriba nombre quien realiza la encuesta">
<p style="color: #19070B"><b>¿Tiene algún equipo que requiera mantenimiento?</b></p>
    
<br/><br/>
    
<input type="radio" value="SI"  id="test1"  name="ciclo" onclick="ver()" /><label for="test1" >Si</label>
<input type="radio" value="NO"  id="test2" onclick="ocultar()" name="ciclo" /><label for="test2">No </label>
        
<br/><br/>
            
<div id="efecto">
<p>¿Qué problema tiene?</p>              
<input type="text" name="motivo" placeholder="Escriba aquí" class="redondeadonorelieve " />
</div>
<span style="color:red;font-weight:bold;font-size:13px;text-align: center;">*Favor de llevar el equipo junto con un oficio de solicitud, en el que se especifique: marca, modelo, serie. Así como una breve descripción de la falla.</span> 
</div>
                
<div class="select">                
<select id="soflow-color" name="status">
<option value="" >Seleccione un status:</option>
<option value="En proceso">En proceso</option>
<option value="Pendiente">Pendiente</option>
</select>
</div>
<input type="submit" value="Guardar"  class="button" />
<input type="reset" value="Restablecer"  class="btn btn-success" />               
</div>
</div>
</form>
<script src="assets/js/ytmenu.js"></script>
</body>
</html>
