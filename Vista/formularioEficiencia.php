<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>Formulario Eficiencia </title>
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
<li><a><strong> Bienvenido </strong>Guadalupe Liliana Garcia Perez</a> </li>
<li><a>Departamento de Eficiencia Administrativa</a> </li>
<li><a href="eficiencia.php">Inicio</a>
</li>    
</ul>
</div>    

<header>
<div id="heading" >
<h1>Eficiencia Administrativa</h1>
</div>
</header>
    
<div class="container"> 
<div class="side">
<nav class="dr-menu">
<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Encuestas</a></div>
    
<ul>
<li><a class="dr-icon dr-icon-heart" href="formularioServicios.php">Servicios al Personal</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="formularioPlaneacion.php">Planeación</a></li>
<li><a class="dr-icon dr-icon-settings" href="formularioinformatica.php">Informática</a></li>
<li><a class="dr-icon dr-icon-switch" href="logout.php">Cerrar Sesión</a></li>
</ul>
</nav>
</div>
</div>
    
<!-- /container -->
<form action="regefi.php" method="post" class="form-register">
<div class="form-group">
<div align="">
<h3>Complete la información de la escuela</h3>

<label for="nombre">Nombre de escuela:</label>  
<input type="text" id="codigo" name="nombre" placeholder="Ingrese el nombre de la escuela" required>
<br>
<label for="c.t.t.">Centro de Trabajo:</label> 
&nbsp;<input type="text" id="descripcion" name="centro" >
<br>
<label for="turno">Localidad: </label>
&emsp;&emsp;&emsp;&emsp;<input type="text" id="precio" name="localidad">
<input type="hidden" id="id_producto">
</div>

<div class="login">
<h3 class="form-titulo">Área de Eficiencia Administrativa</h3>
<div class="login-form">
<hr class="style1" />            
<p>Seleccione la fecha de realización del formulario:</p>
<input type="date" name="fecha">
<p>Escriba nombre del encargado:</p>
<input type="text" name="encargado" required placeholder="Escriba nombre quien realiza la encuesta">
<p>¿Su centro de trabajo cuenta con ingresos propios?</p>
<input type="radio" id="test1" name="ingreso" value="SI" onclick="ver()">
<label for="test1">Si</label>
<input type="radio" id="test2" name="ingreso" value="NO" onclick="ocultar()" >
<label for="test2">No</label>
<div id="efecto">
<p>¿Tiene cuenta bancaria?</p>
<input type="radio" id="test3" name="bancaria" value="SI" onclick="ocultar4()">
<label for="test3">Si</label>
<input type="radio" id="test4" name="bancaria" value="NO" onclick="ver4()">
<label for="test4">No</label>

</div>
<div id="efecto4">
  <p>Indique el motivo:</p>
   <input type="text" name="motivo"  placeholder="Describa el motivo" class="redondeadonorelieve" />
 </div>
 <p>¿Se te ha hecho una entrega formal al tomar el cargo de director o encargado del Centro de trabajo?</p>
 <input type="radio" id="test5" name="entrega" value="Si" onclick="ocultar5()">
    <label for="test5">Si</label>
  
    <input type="radio" id="test6" name="entrega" value="No" onclick="ver5()">
    <label for="test6">No</label>
  
  <div id="efecto5">
    <p>¿Por qué?</p>
     <input type="text" id="txtDescripcion" name="porque" placeholder="Escriba aquí" class="redondeadonorelieve" />
   </div>
   <p>¿Cuenta con la información del Proceso de trámite de Siniestro?</p>
   <input type="radio" id="test7" name="Proceso" value="Si" onclick="ocultar3()">
    <label for="test7">Si</label>
  
    <input type="radio"  id="test8" name="Proceso" value="No" onclick="ver3()">
    <label for="test8">No</label>

   <div id="efecto3" >
    <p>¿Por qué?</p>
    <input type="text" id="txtDescripcion" name="por_que" placeholder="Escriba aquí" class="redondeadonorelieve" />
  </div>
  <p>¿Qué te hace falta conocer sobre el manejo del Sistema de Inventarios?</p>
  <input type="text" id="txtDescripcion" name="sistema" placeholder="Escriba aquí" class="redondeadonorelieve" />
  <p>¿Todos los niños de su C.T. cuentan con LTG?</p>
 <input type="radio" id="test9" name="lgt" value="Si"  onclick="ocultar2()">
    <label for="test9">Si</label>
  
    <input type="radio" id="test0" name="lgt" value="No" onclick="ver2()">
    <label for="test0">No</label>
 
<div id="efecto2">
<p>¿Por qué?</p>
<input type="text" name="pq" placeholder="Escriba aqui" class="redondeadonorelieve" />
</div>
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
