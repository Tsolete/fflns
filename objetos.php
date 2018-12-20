<p><img src="imagenes/objetos.png" alt="objetos" align="right" width="30%" /></p>
<p>Los objetos que aparecen en el juego son muy variados. Aquí tienes la lista completa de qué es cada cosa y para qué sirve.</p>
<br>
<a href="index.php?seccion=objetos&subseccion=comida"><button name="comida">Comida</button></a>
<a href="index.php?seccion=objetos&subseccion=puntos"><button name="puntos">Puntos</button></a>
<br>
<br>
<?php
$subseccion = $_GET['subseccion'];

if ($subseccion) {
	include_once "$subseccion.php";
	?><a href="index.php?seccion=objetos"><button name="arriba">Arriba</button></a>
<?php
}
?>