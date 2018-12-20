<!DOCTYPE html>
<html lang="es">
<head>
	<title>Final Fight Las Noches Skyperas</title>
	<meta charset="UTF-8">
	<meta name="description" content="Web dedicada a Final Fight LNS">
	<meta name="author" content="Equipo LNS">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,mozilla=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/galeria.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
            "popup": {
              "background": "#343c66",
              "text": "#cfcfe8"
            },
            "button": {
              "background": "#f71559"
            }
          },
          "content": {
            "message": "Este sitio web usa cookies propias y de terceros para mejorar la navegación. La UE y el Gobierno de España nos obligan a poneros este rollo que sabemos que no vais a leer.",
            "dismiss": "Lo pillo",
            "link": "Leer más",
            "href": "index.php?seccion=cookies"
          }
        })});
    </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131006648-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-131006648-1');
	</script>
</head>
<body>
	<div id="header-container">
		<header class="wrapper">
			<a href="http://www.fflns.com/"><img src="imagenes/title.gif" alt="Logo FFLNS 3.0" width="265px" align="left" /></a>
				<nav>
					<ul>
						<li><a href="index.php?seccion=inicio">Inicio</a></li>
						<li><a href="index.php?seccion=descarga">Descarga</a></li>
						<li><a href="index.php?seccion=protagonistas">Protagonistas</a></li>
						<li><a href="index.php?seccion=enemigos">Enemigos</a></li>
						<li><a href="index.php?seccion=objetos">Objetos</a></li>
						<li><a href="index.php?seccion=modos">Modos de Juego</a></li>
						<li><a href="index.php?seccion=howto">Cómo jugar</a></li>
						<li><a href="index.php?seccion=faq">F.A.Q</a></li>
	<!--				<li><a href="index.php?seccion=consejos">Consejos</a></li> -->
	<!--				<li><a href="index.php?seccion=curiosidades">Curiosidades</a></li>  -->
						<li><a href="index.php?seccion=contacta">Contáctanos</a></li>
					</ul>
				</nav>
			</header>
		</div>
	<article>
	<?php
	$seccion = $_GET['seccion'];
		if ($seccion) {
		  include_once "$seccion.php";
		}
		else { 
		  include_once "inicio.php";
		}
	?>
	</article>
	<div id="footer-container">
		<footer class="wrapper">
			<br><h4>© <a href="http://www.nochesskyperas.com/" target="_blank" rel="noopener">Las Noches Skyperas</a> and <a href="http://www.capcom.com/" target="_blank" rel="noopener">Capcom</a>. This site is in no way affiliated with Capcom.</h4>
		</footer>
	</div>
</body>
</html>