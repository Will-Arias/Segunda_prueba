<?php
  if (isset($_POST['registrar'])) {

    $documento_empleado_prestamo=$_POST['documento_empleado_prestamo'];
    $documento_usuario_prestamo=$_POST['documento_usuario_prestamo'];
    $ubicacion_prestamo=$_POST['ubicacion_prestamo'];

    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblempleado WHERE documento_empleado='$documento_empleado_prestamo'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $documento_empleado=$extraido['documento_empleado'];
    $nombre_empleado=$extraido['nombre_empleado'];
    $apellido_empleado=$extraido['apellido_empleado'];
    $cargo_empleado=$extraido['cargo_empleado'];

    mysqli_free_result($result);
    mysqli_close($link);

    if ($documento_empleado<>$documento_empleado_prestamo) {
      echo "<script>alert('El Documento No Existe');window.location.href='../vista/registrar_prestamo.php';</script>";
    }

    if ($documento_empleado==$documento_empleado_prestamo) {
     $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblarchivo WHERE documento_usuario='$documento_usuario_prestamo'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $documento_usuario=$extraido['documento_usuario'];

    mysqli_free_result($result);
    mysqli_close($link); 
    }

    if ($documento_usuario<>$documento_usuario_prestamo) {
      echo "<script>alert('El Documento No Existe');window.location.href='../vista/registrar_prestamo.php';</script>";
    }

    if ($documento_usuario==$documento_usuario_prestamo) {
        
        $fecha_prestamo=date("Y-m-d");

        $fecha_entrega = strtotime ('+3 day' , strtotime ($fecha_prestamo));
        $fecha_entrega = date ('Y-m-j' , $fecha_entrega);

        $estado_archivo = ('solicitado');

        $mysql = new mysqli("localhost","root","","arsama2");
        $mysql = $mysql -> query("INSERT INTO tblprestamo(documento_empleado,nombre_empleado,apellido_empleado,cargo_empleado,documento_usuario,ubicacion_prestamo,estado_archivo,fecha_prestamo,fecha_entrega)VALUES('$documento_empleado_prestamo', '$nombre_empleado', '$apellido_empleado','$cargo_empleado','$documento_usuario_prestamo','$ubicacion_prestamo','$estado_archivo','$fecha_prestamo', '$fecha_entrega')")or die("<script>alert('Error al conectar a la base de datos');window.location.href='../vista/registrar_prestamo.php';</script>");
        echo "<script>alert('REGISTRO EXITOSO');window.location.href='../vista/registrar_prestamo.php';</script>";
    }
}

?>