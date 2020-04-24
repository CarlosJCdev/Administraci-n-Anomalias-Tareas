<?php
try {

    $conexion = new PDO('mysql:host=localhost;dbname=usae', "root", "");
        
    }  catch (PDOException $e) {
       print "¡Error!: " . $e->getMessage() . "<br/>";
       die();
                               }


      switch($_POST['opc'])
{

              
      case "guardar":
      try{
      $sql = $conexion->prepare("INSERT INTO usuarios(nombre,usuario,telefono,email,password,privilegio)
    VALUES('".$_POST['nombre']."','".$_POST['usuario']."','".$_POST['telefono']."','".$_POST['email']."','".$_POST['password']."','".$_POST['privilegio']."')");       
      $sql->execute();         
      header("location:index.php");   
         }
      catch (PDOException $e) {
      print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
      die();
                        } 
      break;
              
              
              

      case "eliminar":
      try{
          $sql = $conexion->prepare("DELETE FROM usuarios WHERE id=".$_POST['clave']);       
          $sql->execute();         
          //header("location:index.php");   
          }
      catch (PDOException $e) {
      print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
      die();
                              } 
      break;
        
      case "modificar-form":
      try{
          $sql = $conexion->prepare("SELECT * FROM usuarios WHERE id=".$_POST['clave']);       
          $sql->execute();         
          if($fila = $sql->fetch())
          {  
               ?>
       <form action="procesa.php" method="post" id="modifica">
            <input type="text" value="modificar" name="opc" hidden>
            <input type="text" value="<?php echo $_POST['clave']?>" name="clave" hidden>
           
                <div class="form-group">
                <label for="nombre" class="text-left">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $fila['nombre']?>" placeholder="nombre">
                </div>
           
                <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $fila['usuario']?>" placeholder="usuario">
                </div>
           
                <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="telefono" class="form-control" id="telefono" name="telefono" value="<?php echo $fila['telefono']?>" placeholder="telefono">
                </div>
            
                <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $fila['email']?>" placeholder="correo">
                </div>
           
                <div class="form-group">
                <label for="passord">Password</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $fila['password']?>" placeholder="password">
                </div>
           
                <div class="form-group">
                <label for="usuario">Privilegio</label>
                <input type="text" class="form-control" id="privilegio" name="privilegio" value="<?php echo $fila['privilegio']?>" placeholder="privilegio">
                </div>
               
           <button type="submit" class="btn btn-info">Modificar</button>
        </form>

 <?php
 }
 }
      catch (PDOException $e) {
      print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
      die();
}
      break;
 
      case "modificar":
      try{
          $sql = $conexion->prepare("UPDATE usuarios SET nombre='".$_POST['nombre']."',usuario='".$_POST['usuario']."',telefono='".$_POST['telefono']."',email='".$_POST['email']."',password='".$_POST['password']."',privilegio='".$_POST['privilegio']."' WHERE id_user=".$_POST['clave']);       
          $sql->execute();         
          header("location:index.php");   
         }
         catch (PDOException $e) {
         print "¡Error al guardar!: " . $e->getMessage() . "<br/>";
         die();
                                 }
         break;
}
?>