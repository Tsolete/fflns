<p><img src="imagenes/modos.png" alt="modos" align="right" width="50%" id="modos" /></p>
<p>El juego se compone de 5 fases más una extra. Las fases 2, 3 y 4 cada una dispone de dos caminos. Si se consigue un total de 450.000 más 115.000 por jugador en cualquier modo menos en el Musou (Modo masivo) se desbloqueará la fase extra. En el Musou (Modo masivo) hay que conseguir 690.000 más 35.000 por jugador. La fase extra también dispone de dos caminos.</p>
<br>
<ul>
    <li><a href="index.php?seccion=modos&subseccion=arcade" class="button" id="arcade"><button name="Arcade">1-Arcade</button></a></li>
    <li><a href="index.php?seccion=modos&subseccion=capcom" class="button" id="capcom"><button name="capcom">2-CAPCOM All Stars</button></a></li>   
    <li><a href="index.php?seccion=modos&subseccion=special" class="button" id="special"><button name="special">3-CAPCOM All Stars (Special Mode)</button></a></li>
    <li><a href="index.php?seccion=modos&subseccion=boss" class="button" id="boss"><button name="boss">4-Boss Rush</button></a></li>
    <li><a href="index.php?seccion=modos&subseccion=versus" class="button" id="versus"><button name="versus">5-Versus</button></a></li>
    <li><a href="index.php?seccion=modos&subseccion=volleybred" class="button" id="volleybred"><button name="volleybred">6-VolleyBred</button></a></li>
    <li><a href="index.php?seccion=modos&subseccion=bonus" class="button" id="bonus"><button name="bonus">7-Bonus Stage Practice</button></a></li>
    <li><a href="index.php?seccion=modos&subseccion=training" class="button" id="training"><button name="training">8-Training</button></a></li>
</ul>
<?php
$subseccion = $_GET['subseccion'];

if ($subseccion) {
	include_once "$subseccion.php";
}
?>

<script>
if(!localStorage.getItem("url")) 
	localStorage.setItem("url",'imagenes/modos.png');


$(function() {
	$('.button').click(function(){
		   localStorage.setItem("url",'imagenes/modos/'+ this.id +'.png');
		});
		
	$('#modos').attr('src', localStorage.getItem("url"));
});
</script>