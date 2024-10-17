<!DOCTYPE html>
<html>
<head>
	<title>Arsama | Archivo Clinico</title>
	<?php 
	include ('menu.php');
	 ?>
	 <link rel="stylesheet" href="../modelo/css/registrar_empleado.css">
</head>
<body>
<br>
    <br>
    	<br>
	<br>
      <form class="form-register" name="registrar_empleado.php" action="../controlador/registrar_empleado_proceso.php" method="post" onsubmit="return validar();">

          <div class="contenedor-inputs">

            <input type="number" id="documento_empleado" name="documento_empleado" placeholder="&#128179; Documento Del Empleado" class="input-100">

            <input type="text" id="nombre_empleado" name="nombre_empleado" placeholder="&#129333; Nombre Del Empleado" class="input-100">

            <input type="text" id="apellido_empleado" name="apellido_empleado" placeholder="&#129333; Apellido Del Empleado" class="input-100">

            <div class="opcion">
            <select id="cargo_empleado" name="cargo_empleado">
              <option hidden>&#129333; Cargo Empleado</option>
                <option value="archivo">&#128213; Archivo</option>
                  <option value="externo">&#129333; Personal Externo</option>
                </select>
              </div>

            <div class="opcion">
            <select id="estado_empleado" name="estado_empleado">
              <option hidden>&#11044; Estado Empleado</option>
                <option value="activo">&#127823; Activo</option>
                  <option value="inactivo">&#127822; Inactivo</option>
                </select>
              </div>

              <input type="password" id="contrasena_empleado" name="contrasena_empleado" placeholder="&#128272; Contraseña Del Empleado" class="input-100">

            <input type="submit" value="Registrar Empleado" name="registrar" class="btn-enviar">

      </div>
    </form>
    <script src="../modelo/js/validar_registro_empleado.js"></script>
  </body>
</html>