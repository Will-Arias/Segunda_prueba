<!DOCTYPE html>
<html>
<head>
    <title>Arsama | Archivo Clinico</title>
    <?php
    include('menu.php');
    $documento_empleado=$_GET['documento_empleado'];
    $nombre_empleado=$_GET['nombre_empleado'];
    $apellido_empleado=$_GET['apellido_empleado'];
    $contrasena_empleado=$_GET['contrasena_empleado'];
     ?>
    <link rel="stylesheet" href="../modelo/css/actualizar_empleado.css">
</head>
<body>
<br>
    <br>
      <form class="form-register" name="actualizar_empleado.php" action="../controlador/actualizar_empleado_proceso.php" method="post">

          <div class="contenedor-inputs">

            <input type="number" name="documento_empleado" placeholder="&#128179; Documento De Usuario" value="<?php echo $documento_empleado;?>" readonly='readonly' class="input-100">

            <input type="text" name="nombre_empleado" value="<?php echo $nombre_empleado;?>" placeholder="&#129333; Nombre Del Empleado" class="input-100">

            <input type="text" name="apellido_empleado" value="<?php echo $apellido_empleado;?>" placeholder="&#129333; Apellido Del Empleado" class="input-100">

            <div class="opcion">
            <select name="estado_empleado">
              <option hidden>&#11044; Estado Empleado</option>
                <option value="activo">&#127823; Activo</option>
                  <option value="inactivo">&#127822; Inactivo</option>
                </select>
              </div>

            <input type="text" name="contrasena_empleado" value="<?php echo $contrasena_empleado;?>" placeholder="&#128272; Contraseña Del Empleado" class="input-100">

            <input type="submit" value="Actualizar" name="actualizar" class="btn-enviar">

      </div>
    </form>
</body>
</html>