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
<li><a><strong> Bienvenido </strong>Usuario</a> </li>
<li><a href="usuario.php">Inicio</a> </li>
<li><a href="logout.php">Cerar Sesión </a>
</li>    
</ul>
</div>    

<header>
<div id="heading" >
<h1>Usuario General</h1>
</div>
</header>
    
<div class="container" style="align: left;"> 
<div class="side">
<nav class="dr-menu">
<div class="dr-trigger"><span class="dr-icon dr-icon-menu"></span><a class="dr-label">Encuestas</a></div>  
<ul>
<li><a class="dr-icon dr-icon-heart" href="formularioServiciosUsuario.php">Servicios al Personal</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="formularioPlaneacionUsuario.php">Planeación</a></li>
<li><a class="dr-icon dr-icon-settings" href="formularioInformaticaUsuario.php">Informática</a></li>
<li><a class="dr-icon dr-icon-bullhorn" href="formularioEficienciaUsuario.php">Eficiencia Administrativa</a></li>    
</ul>
</nav>
</div>
</div>
<script src="assets/js/ytmenu.js"></script>
</body>
</html>
