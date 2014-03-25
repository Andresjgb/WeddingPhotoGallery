<!DOCTYPE html>
<html lang="es">
<head>
<?php
 include('up.php');
?>
	<meta charset="utf-8" />
	<title>Wedding PhotoGallery: Galería fotográfica de invitados</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/normalize.css" />
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
				<figure class="imagen">
				<img src="images/upload.jpg">
				</figure>
				<div class="detalles">
				<h2 class="titulo">
						Comparte tus momentos con los novios en este día tan especial.<br/>
						Sube tu foto haciendo click en el boton.<br/>
						Solo están permitidos archivos con formato Jpg, Jpeg o Png.<br/>
						Si quieres eliminar una foto, busca al hermano de la novia!.
					</h2>
			</div>
			<div class="acciones">
				<div class="votos">
					<span class="total">
					<form action="#" method="post" enctype="multipart/form-data">
					Foto: <input name="uploaded" type="file" />
					<input type="submit" name="submit" value="Enviar">
					</form>
					</span>
				</div>
				<div class="datos">
				</div>
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