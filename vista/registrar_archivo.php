<!DOCTYPE html>
<html>
<head>
	<title>Arsama | Archivo Clinico</title>
	<?php
    include('menu.php');
     ?>
    <link rel="stylesheet" href="../modelo/css/registrar_archivo.css">
</head>
<body>
<br>
    <br>
      <form class="form-register" name="registrar_archivo.php" action="../controlador/registrar_archivo_proceso.php" method="post" onsubmit="return validar();">

          <div class="contenedor-inputs">

            <input type="number" id="documento_usuario" name="documento_usuario" placeholder="&#128179; Documento De Usuario" class="input-100">

            <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="&#129333; Nombre De Usuario" class="input-100">

            <input type="text" id="apellido_usuario" name="apellido_usuario" placeholder="&#129333; Apellido De Usuario" class="input-100">

          <div class="opcion">
            <select id="sala_archivo" name="sala_archivo">
              <option hidden>&#128213; Sala De Archivo</option>
                <option value="activo">Activo</option>
                  <option value="inactivo">Inactivo</option>
                </select>
              </div>

            <input type="text" id="ubicacion_archivo" name="ubicacion_archivo" placeholder="&#128506; Ubicacion Del Archivo" class="input-100">

            <input type="text" id="estante_archivo" name="estante_archivo" placeholder="&#128452; Estante Del Archivo" class="input-100">

            <input type="text" id="fila_archivo" name="fila_archivo" placeholder="&#8596; Fila Del Archivo" class="input-100">

            <input type="text" id="columna_archivo" name="columna_archivo" placeholder="&#8597; Columna Del Archivo" class="input-100">

            <input type="text" id="fecha_ingreso_archivo" name="fecha_ingreso_archivo" placeholder="&#128198; Fecha De Ingreso" onfocus="(this.type='date')" onblur="(this.type='text')" class="input-100">

            <input type="submit" value="Registrar" name="registrar" class="btn-enviar">
            

      </div>
    </form>
    <script src="../modelo/js/validar_registro_archivo.js"></script>
</body>
</html>