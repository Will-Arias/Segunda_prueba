<!DOCTYPE html>
<html>
<head>
	<title>Arsama | Archivo Clinico</title>
	<?php 
	include('menu_empleado.php');
	 ?>
	 <link rel="stylesheet" href="../modelo/css/registrar_prestamo.css">
</head>
<body>
<br>
    <br>
    	<br>
	<br>
<br>
      <form class="form-register" name="registrar_prestamo.php" action="../controlador/registrar_prestamo_proceso.php" method="post" onsubmit="return validar();">

          <div class="contenedor-inputs">

            <input type="number" id="documento_empleado_prestamo" name="documento_empleado_prestamo" placeholder="&#128179; Documento Del Empleado" class="input-100">

            <input type="number" id="documento_usuario_prestamo" name="documento_usuario_prestamo" placeholder="&#128179; Documento Del Usuario" class="input-100">

            <input type="text" id="ubicacion_prestamo" name="ubicacion_prestamo" placeholder="&#128506; Ubicacion Del Prestamo" class="input-100">

            <input type="submit" value="Registrar Pedido Archivo" name="registrar" class="btn-enviar">

      </div>
    </form>
    <script src="../modelo/js/validar_registro_prestamo.js"></script>
  </body>
</html>