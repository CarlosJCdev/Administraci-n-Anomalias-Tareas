<?php
//se inidica que la sesión será iniciada en esta página //NO SE MUEVE NI ELIMINA NADA
session_start();

//el !isset valida si existe el usuario redirigue a otra pagina
if(isset($_SESSION["usuario"])){
	if($_SESSION["usuario"]["privilegio"] ==3){
		header("location:eficiencia.php");//si es privilegio  lo manda a la pagina jefatura(admin le correponde 2  solo es para departamentos, 1 para jefa )colocamos el nombre la pagina que querremos que nos habra

	}

}else{
	header("location:index.php");//en caso que no exista el usuario te manda a la principal
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Área de Informática </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/jefe.css" />
	</head>
	<body class="is-preload">

      

            <!-- Encabezado -->
			<header id="header">    
				<a class="logo" >USAE - Valle de Santiago, Gto.</a>
                <nav>
             <a class="name2"><strong> Bienvenido</strong>   <?php echo $_SESSION["usuario"]["nombre"]; ?>   
                               
				</a>
                </nav>
                <nav>
                	 <a>Departamento de  <?php echo $_SESSION["usuario"]["privilegio"] ==2 ? 'Informática' : 'Administrador'//aqui se coloca el nombre del area ; ?>   </a>
                   
                </nav>
                <nav>
                    <a>Sesión Iniciada</a> 
                <a href="#menu">Sesión</a>
                </nav>
		<nav id="menu">
				<ul class="links">
					<a class="name" href="logout.php"><input  type="submit" value="Cerrar Sesión"> </a>
				 
				</ul>
			</nav>
			</header>
        
        
        
        
       <!--DESDE AQUI SE MODIFICA DE ACUERDO A LA INFORMACION QUE TE HALLA TOCADO-->


<div id="heading" >
				<h1>Subjefe de informática y procesos de mejora</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<header>
							<h2>En esta area </h2>
						</header>
						<p>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Magna et cursus lorem faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod tempus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida lorem ipsum dolor sit amet dolor feugiat consequat. </p>
						<p>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Magna et cursus lorem faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod tempus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac sed amet praesent. Nunc lacinia ante nunc ac gravida lorem ipsum dolor sit amet dolor feugiat consequat. </p>
						<hr />
						<h3>Magna odio tempus commodo</h3>
				
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h4>15</h4>
							<ul class="alt">
								<li><a href="#"></a></li>
                                <li><a href="#">Punto 1</a></li>
								<li><a href="#">Punto 2</a></li>
								<li><a href="#">Punto 3</a></li>
								<li><a href="#">Punto 4</a></li>
							</ul>
						</section>
						<section>
							<h4>15</h4>
							<ul class="alt">
                                <li><a href="#"></a></li>
								<li><a href="#">punto 1</a></li>
								<li><a href="#">Punto 2</a></li>
								<li><a href="#">Punto 3</a></li>
								<li><a href="#">Punto 4</a></li>
							</ul>
						</section>
						<section>
							<h4>15</h4>
							<ul class="alt">
                                <li><a href="#"></a></li>
								<li><a href="#">punto 1</a></li>
								<li><a href="#">Punto 2</a></li>
								<li><a href="#">Punto 3</a></li>
								<li><a href="#">Punto 4</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; <a>USAE</a> <a>Valle de Santiago</a>, Video instalaciones USAE Valle de Santiago.
					</div>
				</div>
			</footer>
        <!-- Footer -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
		
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>