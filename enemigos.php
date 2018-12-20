<p><img src="imagenes/enemigos.png" alt="enemigos" align="right" width="40%" id="enemigos"/></p>
<p>El Juego tiene n-mil y un enemigos diferentes sin contar los enemigos finales que son un montón más. Cada enemigo tiene una forma de única de atacar y unos puntos débiles específicos.</p>
<p>Para conocerlos mejor escoge una opción de abajo.</p>
<br>
<ul>
    <li><a href="index.php?seccion=enemigos&subseccion=esbirros"><button name="esbirros" class="button" id="esbirros">Esbirros y Maleantes de Mad Gear</button></a></li>
    <li><a href="index.php?seccion=enemigos&subseccion=jefes"><button name="Jefes" class="button" id="jefes">Jefes Mad Gear y Shadaloo</button></a></li>
    <ul>    
    	<li><a href="index.php?seccion=enemigos&subseccion=cad"><button name="Cadillacs & Dinosaurs" class="button" id="cad">EXTRA Cadillacs & Dinosaurs</button></a></li>
        <li><a href="index.php?seccion=enemigos&subseccion=avp"><button name="Alien vs Predator" class="button" id="avp">EXTRA Alien vs Predator</button></a></li>
        <li><a href="index.php?seccion=enemigos&subseccion=commando"><button name="Captain Commando" class="button" id="commando">EXTRA Captain Commando</button></a></li>
        <li><a href="index.php?seccion=enemigos&subseccion=punisher"><button name="Punisher" class="button" id="punisher">EXTRA Punisher</button></a></li>
        <a href="index.php?seccion=enemigos&subseccion=secretos"><button name="Jefes secretos" style="visibility: hidden" class="button" id="secretos">EXTRA Jefes Secretos</button></a>
    </ul>
    <li><a href="index.php?seccion=enemigos&subseccion=sparrings" class="button" id="sparrings"><button name="Sparrings">Sparrings y Varios</button></a></li>
</ul>
<?php
$subseccion = $_GET['subseccion'];

if ($subseccion) {
	include_once "$subseccion.php";
}
?>
<script>
if(!localStorage.getItem("url")) 
	localStorage.setItem("url",'imagenes/enemigos.png');


$(function() {
	$('.button').click(function(){
		   localStorage.setItem("url",'imagenes/enemigos/'+ this.id +'.png');
		});
		
	$('#enemigos').attr('src', localStorage.getItem("url"));
});
</script>