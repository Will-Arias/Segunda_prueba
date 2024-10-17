<!DOCTYPE html>
<html>
<head>
	<?php 
	include('menu.php');
	?>
	<link rel="stylesheet" href="../modelo/css/registrar_archivo.css">
</head>
<body>
	<form  name="macroconsulta.php" action="maconsulta.php" method="POST">
  <br>
  <br>
  <center>
  	<div class="opcion" style="width:420px">
            <select id="cantidad_consulta" name="cantidad_consulta">
              <option hidden>&#128194; Cantidad de consulta</option>
                <option value="5">&#128194; 5</option>
                  <option value="10">&#128194; 10</option>
                </select>
              </div>
              <input type="submit" value="Consultar" name="consulta" class="btn-enviar" href="archivo.php" >

