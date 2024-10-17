<!DOCTYPE html>
<html>
<head>
    <title>Arsama | Archivo Clinico</title>
    <?php
    include('menu.php');
    $documento_usuario=$_GET['documento_usuario'];
     ?>
    <link rel="stylesheet" href="../modelo/css/actualizar_estado_archivo.css">
</head>
<body>
<br>
    <br>
      <form class="form-register" name="actualizar_estado_archivo.php" action="../controlador/actualizar_estado_archivo_proceso.php" method="post" onsubmit="return validar();">

          <div class="contenedor-inputs">

            <input type="number" id="documento_usuario" name="documento_usuario" placeholder="" value="<?php echo $documento_usuario;?>" readonly='readonly' class="input-100">

            <input type="text" id="ubicacion_archivo" name="ubicacion_archivo" placeholder="&#128506; Ubicacion Del Archivo" class="input-100">

            <input type="text" id="estante_archivo" name="estante_archivo" placeholder="&#128452; Estante Del Archivo" class="input-100">

            <input type="text" id="fila_archivo" name="fila_archivo" placeholder="&#8596; Fila Del Archivo" class="input-100">

            <input type="text" id="columna_archivo" name="columna_archivo" placeholder="&#8597; Columna Del Archivo" class="input-100">

            <input type="submit" value="Actualizar" name="actualizar" class="btn-enviar">

      </div>
    </form>
    <script src="../modelo/js/actualizar_estado_archivo.js"></script>
</body>
</html>