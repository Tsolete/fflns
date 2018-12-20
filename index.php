<!DOCTYPE html>
<html lang="es">
    <head>
    	<title>Final Fight Las Noches Skyperas</title>
    	<meta charset="UTF-8">
    	<meta name="description" content="Web dedicada a Final Fight LNS">
    	<meta name="author" content="Equipo LNS">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,mozilla=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    	<link rel="shortcut icon" href="favicon.ico">
    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/galeria.css">
    </head>
<body>
	<div id="header-container">
		<header class="wrapper">
			<a href="http://www.fflns.com/" target="_blank"><img src="imagenes/title.gif" alt="Logo FFLNS 3.0" width="265px" align="left" /></a>
				<nav>
					<ul>
						<li><a href="index.php?seccion=inicio">Inicio</a></li>
						<li><a href="index.php?seccion=descarga">Descarga</a></li>
						<li><a href="index.php?seccion=protagonistas">Protagonistas</a></li>
						<li><a href="index.php?seccion=enemigos">Enemigos</a></li>
						<li><a href="index.php?seccion=objetos">Objetos</a></li>
						<li><a href="index.php?seccion=modos">Modos de Juego</a></li>
						<li><a href="index.php?seccion=howto">Cómo jugar</a></li>
	<!--				<li><a href="index.php?seccion=consejos">Consejos</a></li> -->
	<!--				<li><a href="index.php?seccion=curiosidades">Curiosidades</a></li>  -->
						<li><a href="index.php?seccion=contacta">Contáctanos</a></li>
					</ul>
				</nav>
			</header>
		</div>
	<div>
	<?php
		$seccion = $_GET['seccion'];
		if ($seccion) {
		  include_once "$seccion.php";
		}
		else { 
		  include_once "inicio.php";
		}
	?>
	</div>
	<div id="footer-container">
		<footer class="wrapper">
			<br><h4>© <a href="http://www.nochesskyperas.com/" target="_blank" rel="noopener">Las Noches Skyperas</a> and <a href="http://www.capcom.com/" target="_blank" rel="noopener">Capcom</a>. This site is in no way affiliated with Capcom.</h4>
		</footer>
	</div>
</body>
</html>