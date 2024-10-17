<!DOCTYPE html>
<html>
<head>
	<?php 
	include('menu.php');
	?>
	<link rel="stylesheet" href="../modelo/css/registrar_archivo.css">
</head>
<form name="macroconsulta1.php" action="../controlador/macconsulta.php" method="POST">
<body>
  <br>
  <br>
  <center>
  	<?php
  $cant_c=$_POST['cantidad_consulta'];
  	if ($cant_c==5){
	$const=1;
	while ($const <= 5)
	{$const=$const+1;?>
		<!DOCTYPE html>
		<html>
		<body><center>
			<input type="number" id="documento_usuario" name="documento_usuario<?php$const;?>" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px"></center>
		</body>
		</html>
	<?php
	}
   }
?>
<?php
if ($cant_c==10){
	$const=1;
	while ($const <= 10)
	{$const=$const+1;?>
		<!DOCTYPE html>
		<html>
		<body><center>
			<input type="number" id="documento_usuario" name="documento_usuario<?php$const;?>" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px"></center>
		</body>
		</html>
	<?php
	}
   }
?>
<?php
if ($cant_c==15){
	$const=1;
	while ($const <= 15)
	{$const=$const+1;?>
		<!DOCTYPE html>
		<html>
		<body><center>
			<input type="number" id="documento_usuario" name="documento_usuario<?php$const;?>" placeholder="&#128179; Documento De Usuario" class="input-100" style="width: 280px"></center>
		</body>
		</html>
	<?php
	}
   }
?>

<!DOCTYPE html>
		<html>
		<body>
			<input type="submit" value="Consultar" name="consultar" class="btn-enviar">
		</body>
		</html>

