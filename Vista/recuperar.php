<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
<title>USAE</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="description" content="" />
<meta name="keywords" content="" />	
<link rel="stylesheet" href="assets/css/recuperar.css" />
</head>
<body>
        
<!-- Encabezado -->
<header > 
<nav>
<ul>
<br>
<br>
</ul>
</nav>                
</header>
            
<!--Encabezado -->       
<div class="login">
<div class="login-header">
<h1>Recuperar Contraseña</h1>
</div>
    
<fieldset>
<form action="conexionBD/rec.php" method="POST" >
    
<!--Conexion BD con el metodo post-->
<div class="login-form"> 
<label style="color=#000" for="UserName">Ingrese su correo:</label>    
        
<br>

<input type="text" name="recuperar" id="login-form"  required="required" placeholder="Escriba su correo"  onkeyup="this.value=Text(this.value)" maxlength="50">     
 
<br>

<!-- JS because of IE support; better: placeholder="Password" -->
<button type="submit" name="recup" class="button">Recuperar</button>
<input type="submit" name="reg" class="button" value="Regresar" onclick="window.location.href='index.php'">      
</div>
</form>
</fieldset>
</div>
    
<script src="assets/js/restricciones.js"></script>
<br>
<br>            
<script src="assets/js/valores.js"></script>
<footer id="footer">
</footer>
</body>
</html>
