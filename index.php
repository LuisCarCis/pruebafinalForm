<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario a correo</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Formulario</h1>
	<form method="POST" class="form">
		<div class="in-cont">
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" class="input">
		</div>
		<div class="in-cont">
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" id="apellido" class="input">
		</div>
		<div class="in-cont">
			<label for="correo">Correo</label>
			<input type="email" name="correo" id="correo" class="input">
		</div>
		<div class="in-cont">
			<label for="mensaje">Mensaje</label>
			<textarea name="mensaje" id="mensaje" class="input-area" cols="30" rows="10"></textarea>
		</div>
		<input type="submit" value="Enviar">
	</form>
	<?php

		include("enviar.php");

	?>
</body>
</html>