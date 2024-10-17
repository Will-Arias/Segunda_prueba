<!DOCTYPE html>
<html>
<head>
	<?php 
	include('menu.php');
	 ?>
    <link rel="stylesheet" href="../modelo/css/consultar_archivo.css">
</head>
<body>
  <br>
  <br>
  <center>
    <input type="search" placeholder="&#128179;Documento O &#129333; Nombre Del Usuario" id="buscar">
    <br>
    <br>
    <br>
    <div class="tabla" id="datos"></div>
</center>
<script src="../modelo/js/consultar_archivo.js"></script>
<br><br><br>
<center><div class="tabla" style="height:30%; width:30%;">
  <table>
 <th align="left"><img src="../modelo/img/verde.png">&nbsp;&nbsp;&nbsp;Disponible
 <br><img src="../modelo/img/amarillo.png">&nbsp;&nbsp;&nbsp;Prestamo
 <br><img src="../modelo/img/rojo.png">&nbsp;&nbsp;&nbsp;Destruccion
 <br><img src="../modelo/img/blanco.png">&nbsp;&nbsp;&nbsp;Vencimiento
 <br><img src="../modelo/img/negro.png">&nbsp;&nbsp;&nbsp;Vencio tiempo del préstamo</th></table>
</div></center>
</body>
</html>