<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Wedding PhotoGallery: Galería fotográfica de invitados</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/prettyPhoto.css" />
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$("area[rel^='prettyPhoto']").prettyPhoto();
				
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:4000, autoplay_slideshow: false});
				$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});
			});
			</script>
</head>
<body>
	<header>
		<div class="logo left">
			<img src="images/logo.png" alt="WeddingPhotoGallery"/>
		</div>
		<div class="titular">
			<h1 class="cabecera">
			Wedding PhotoGallery - Juan y Laura - 26 Abril
			</h1>
		</div>
	</header>
	<nav>
		<ul class="menu">
			<li><a href="index.php">Sube tu foto</a></li>
			<li><a href="galeria.php">Ver la galeria</a></li>
		</ul>
	</nav>
<section class="posts">
		<article class="post">
			<div class="descripcion">
				<div class="detalles">
				<h2 class="titulo">
				<ul class="gallery clearfix">
				<?php 
				$total = count(glob('img/{*.jpg,*.jpeg,*.png}',GLOB_BRACE));
				$archivo = '';
				$directorio = opendir('img'); //ruta actual
				while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
					{
    				if (is_dir($archivo))//verificamos si es o no un directorio
    					{
        				echo ''; //de ser un directorio lo envolvemos entre corchetes
    					}
    			else
    					{
    				echo "<a href='img/".$archivo."' rel='prettyPhoto[gallery1]' title='Boda Juan y Laura - 26 Abril'><img src='img/".$archivo."' width='120' height='120' /></a> &nbsp;&nbsp;&nbsp; ";
    					}
					}
				?>
				</ul>
				</h2>
			</div>
		</article>
	</section>
	<footer>
		<h3> 
			<strong>® Andresjgb</strong>
			<span class="copy">2014</span>
		</h3>
	</footer>
</body>
</html>