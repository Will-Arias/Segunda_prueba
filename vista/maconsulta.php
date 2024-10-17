<!DOCTYPE html>
<html>
<head>
	<?php 
	include('menu.php');
	?>
	<link rel="stylesheet" href="../modelo/css/registrar_archivo.css">
</head>
	<form name="maconsulta.php" action="../vista/archivo.php" method="POST">
<body>
  <br>
  <br>
  <center>
  	<?php
	$cant_c=$_POST['cantidad_consulta'];
	if ($cant_c==5){?>
		<!DOCTYPE html>
		<html>
		<body><center>
		<input type="number" id="documento_usuario1" name="documento_usuario1" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario2" name="documento_usuario2" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<input type="number" id="documento_usuario3" name="documento_usuario3" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario4" name="documento_usuario4" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<input type="number" id="documento_usuario5" name="documento_usuario5" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<br>
		<input href="../../vista/archivo.php" type="submit" value="Consultar" name="consultar" class="btn-enviar">
	</center>
		</body>
		</html>
	<?php
   }
if ($cant_c==10){?>
		<!DOCTYPE html>
		<html>
		<body><center>
		<input type="number" id="documento_usuario1" name="documento_usuario1" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario2" name="documento_usuario2" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<input type="number" id="documento_usuario3" name="documento_usuario3" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario4" name="documento_usuario4" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<input type="number" id="documento_usuario5" name="documento_usuario5" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario6" name="documento_usuario6" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<input type="number" id="documento_usuario7" name="documento_usuario7" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario8" name="documento_usuario8" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<input type="number" id="documento_usuario9" name="documento_usuario9" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<input type="number" id="documento_usuario10" name="documento_usuario10" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px">
		<br>
		<br>
		<input href="../../vista/archivo10.php" type="submit" value="Consultar" name="consultar" class="btn-enviar">
	</center>
		</body>
		</html>
	<?php
	}
?>


