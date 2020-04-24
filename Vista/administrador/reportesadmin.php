
<!DOCTYPE html>
<html lang="es">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Referencia a archivos Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">   <!-- Estructura de toda la pagina -->
    <link rel="stylesheet" href="css/style.css">    <!-- Fondo de toda la pagina -->
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- iconos de Modificar y Actualizar -->
</head>
  <body>
      
  <!------------------------------------------------------- Menu -------------------------------------------------------->
    <header>          
    <div class="container-fluid menu" >
    <nav class="navbar navbar-expand-lg container">
    <a class="navbar-brand text-light bg-gray" href="index.php" >Usuarios USAE</a>
         <a class="navbar-brand text-light bg-gray" >|</a>
         <a class="navbar-brand text-light bg-gray" href="reportes.php" >Reportes</a>
         <a class="navbar-brand text-light bg-gray" >|</a>
         <a class="navbar-brand text-light bg-gray" >Seguimiento de Reportes</a>
         <a  href="../logout.php"><input  type="submit" value="Cerrar Sesión" > </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">               
    </ul>              
    </div>
    </nav>
    </div>            
    </header>
<!------------------------------------------------------ Fin Menu ----------------------------------------------------------->

<!----------------------------------------------------- Bienvenida ---------------------------------------------------------->
<div class="container-fliud fondo">
<div class="container">
<div class="row align-items-center text-center text-light py-5">
<div class="col-md-12">
<h1 class="display-4">Seguimiento de Reportes</h1> 
</div>
</div>	
</div>  
</div>
<!-------------------------------------------- fin Bienvenida ---------------------------------------------------------------->

      
      
<!-------------------------------------------------------------------------------------------------------------------------------------------->
<!---------------------------------------------------------- CRUD ---------------------------------------------------------------------------->
<div class="container-fluid bg-light ">
<div class="container py-5" >
<div class="row">
        
  
 
      <!------------------------------------------ Area donde se listan los datos de la base de datos------------------------------------>
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

                <!------  Boton para modificar un usuario  
                <span class="fa-stack  float-right modificar" id="<?php echo $fila['id']?>" style="color:blue; cursor: pointer ;" title="Actualizar Registro">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                </span>
                  Boton para modificar un usuario  --->    
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
    <!------------------------------------Fin del area donde se enlistan los datos de la base de datos----------------------------------->
    
    </div> 
   
       
</div>
</div>
<!-------------------------------------------------------------------- Fin CRUD ------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------------------------------->

      
<!--------------------------------------------------------- Area Modal --------------------------------------------------------------->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Modificar Usuario</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body datos">       
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>      
</div>
</div>
</div>
</div>
<!------------------------------------------------------- fin Area Modal -------------------------------------------------------------->

      
<!----------------------------------------------------------------Footer------------------------------------------------------->
<footer class="footer">
<div class="container text-center text-white">
<span>USAE - Valle de Santiago</span>
</div>
</footer>
<!----------------------------------------------------------------Footer-------------------------------------------------------->   
     
      
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
    
    // $(".modificar").click(function(){
    //  var clave = $(this).attr("id");
    //  $.ajax({
    //  url : "procesa.php",
    //  data : "opc=modificar-form&clave="+clave,
    //  type : "post",
    //  success: function($datos)
    //    {
    //    $(".datos").html($datos);
    //    }
    //    })
    //    $('#modificar').modal('show');
    //    }); 
    
</script> 
      
      
      
</body>
</html>
