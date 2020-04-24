<?php
session_start();
if(isset($_SESSION["usuario"])){
    if($_SESSION["usuario"]["privilegio"]==1){
        header("location:jefatura.php");
    }
}else{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Referencia a archivos Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">   <!-- Estructura de toda la pagina -->
    <link rel="stylesheet" href="css/admin.css">    <!-- Fondo de toda la pagina -->
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- iconos de Modificar y Actualizar -->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/script.js"></script>
   </head>
  <body>
      
  <!------------------------------------------------------- Menu -------------------------------------------------------->
      
<div id='cssmenu'>
<ul>
<li><a><b style="color: white">USAE |</b></a></li>
<li><a><strong> Bienvenido </strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></a> </li>
<li><a>Departamento de <?php echo $_SESSION["usuario"]["privilegio"] ==2 ? 'Informática' : 'Administrador' ; ?></a> </li>
<li><a class="Active">Cuenta</a>
<ul>
<li><a href='../logout.php'>Cerrar Sesión</a>
</li>
<li><a href='restableceradmin.html'>Reestablacer Contraseña</a>
</li>
</ul>
</li>
</ul>
</div>
      

<div id="heading" >
<h1>Administración de Usuarios</h1>			
</div>
     

<div class="container-fluid bg-light ">  
<div class="container py-5" >
    
    <button><a onclick="window.location.href='../../Reportes/reportes/Reporte_Planeacion.php'">PDF Planeación</a></button>
	<button><a onclick="window.location.href='../../Reportes/reportes/Reporte_Informatica.php'">PDF Informática</a></button>
	<button><a onclick="window.location.href='../../Reportes/reportes/Reporte_Eficiencia.php'">PDF eficiencia</a></button>
	<button><a onclick="window.location.href='../../Reportes/reportes/Reporte_Servicios.php'">PDF Servicios</a></button>
    
<p></p>    
<div class="row">  
<div class="col-md-3 ">
<div class="card ml-auto sombra"> 
<div class="card-body">
  
     
    
<h4 class="card-title text-center">Ingresar usuario</h4>
<form action="procesa.php" method="post" id="guarda" autocomplete="off"><!--Agregue el campo autocomplete="off" -->
<input type="text" value="guardar" name="opc" hidden>
                    
                <div class="form-group">
                <label for="usuario" class="text-left">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required><!--Agregue el campo required -->
                </div>
                     <!--------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required><!--Agregue el campo required -->
                </div>
                    <!---------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                <label for="telefono">Teléfono </label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required><!--Agregue el campo required -->
                </div>
                      <!--------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Correo" required><!--Agregue el campo required -->
                </div>
                    <!----------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required><!--Agregue el campo required -->
                </div> 
                     <!--------------------------------------------------------------------------------------------------------->
                <div class="form-group">
                <label for="">Privilegio</label>
                <input type="text" class="form-control" id="privilegio" name="privilegio" placeholder="Privilegio" required><!--Agregue el campo required -->
                </div>
                    <!--------------------------------------------------------------------------------------------------------->
                <button  type="submit">Guardar</button>
</form>
</div>
</div>
</div>
    
        
<!--------------- Area donde se listan los datos de la base de datos---------------->
<div class="col-md-9 ">
<div class="card mr-auto sombra">
<div class="card-body">
<h4 class="card-title text-center">Usuarios en Existencia</h4>
<ul class="list-group">

                <?php
                try {
                $conexion = new PDO('mysql:host=localhost;dbname=usae', "root", "");      
                  } catch (PDOException $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die();
                  }
                try
                  {
                $sql = $conexion->prepare("SELECT * FROM usuarios");
                $sql->execute();
                while ( $fila = $sql->fetch()) {
                  ?>
                <li class="list-group-item">

    id = <?php echo $fila['id']?>,
    nombre = <?php echo $fila['nombre']?>,
    usuario = <?php echo $fila['usuario']?>,
    telefono = <?php echo $fila['telefono']?>,
    email = <?php echo $fila['email']?>, 
    password = <?php echo $fila["password"]?>, 
    privilegio = <?php echo $fila['privilegio']?>

                    
                <!------  Boton para eliminar un usuario  --->
                <span class="fa-stack  float-right eliminar" id="<?php echo $fila['id']?>" style="color:red; cursor: pointer;" title="Eliminar Registro">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-trash fa-stack-1x fa-inverse"></i>
                </span>
                <!------  Boton para eliminar un usuario  --->    

                  
                </li>                    
                    
                <?php
                  }
                  }
                catch(Exception $ex)
                  {
                print "¡Error!: " . $ex->getMessage() . "<br/>";
                die();
                  }
                  ?>
                </ul>
</div>
</div>
</div>
<!---------------Fin del area donde se enlistan los datos de la base de datos----------------->
</div>      
</div>
    
 <div class="botones">  
<button><a onclick="window.location.href='../filtradoAdmin.php'">Filtrado</a></button>
<button><a onclick="window.location.href='../formularioInformatica.php'">Encuestas</a></button>
 </div>
    
</div>
<!--------------- Fin CRUD -------------->
     
<!-------------Footer---------->
<footer class="footer">
<div class="container text-center text-white">
<span>USAE - Valle de Santiago</span>
</div>
</footer>
<!----------Footer---------->   
     
      
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/helper.js"></script>  -->
      
<script>
    $(".eliminar").click(function(){  
    var clave = $(this).attr("id");  
    $.ajax({
    url : "procesa.php",
    data : "opc=eliminar&clave="+clave,
    type : "post",
    success: function()
       {
    location.reload();
        }
        })
        });

</script> 
<footer id="footer">
<div class="copyright"> &copy; <a>USAE</a> <a>Valle de Santiago</a> 
</div>
</footer>
      
      
</body>
</html>
