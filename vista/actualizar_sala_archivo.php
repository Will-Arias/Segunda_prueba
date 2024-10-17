<!DOCTYPE html>
<html>
<head>
    <title>Arsama | Archivo Clinico</title>
    <?php
    include('menu.php');
    $documento_usuario=$_GET['documento_usuario'];
     ?>
    <link rel="stylesheet" href="../modelo/css/actualizar_sala_archivo.css">
</head>
<body>
<br>
    <br>
      <form class="form-register" name="actualizar_sala_archivo.php" action="../controlador/actualizar_sala_archivo.php" method="post" onsubmit="return validar();">

          <div class="contenedor-inputs">

            <input type="number" id="documento_usuario" name="documento_usuario" placeholder="" value="<?php echo $documento_usuario;?>" readonly='readonly' class="input-100">

            <input type="submit" value="Actualizar Sala" name="actualizar" class="btn-enviar">

      </div>
    </form>
</body>
</html>