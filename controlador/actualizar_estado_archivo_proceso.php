<?php
  if (isset($_POST['actualizar'])) {

    $documento_usuario1=$_POST['documento_usuario'];
    $ubicacion_archivo=$_POST['ubicacion_archivo'];
    $estante_archivo=$_POST['estante_archivo'];
    $fila_archivo=$_POST['fila_archivo'];
    $columna_archivo=$_POST['columna_archivo'];
    $estado_archivo1 = ('disponible');
    $estado_archivo2 = ('prestamo');
    $sala_archivo1=('activo');
    $sala_archivo2=('inactivo');

    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblarchivo WHERE documento_usuario='$documento_usuario1'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $sala_archivo=$extraido['sala_archivo'];
    $estado_archivo=$extraido['estado_archivo'];

    mysqli_free_result($result);
    mysqli_close($link);

    if ($sala_archivo==$sala_archivo2) {
        echo "<script>alert('El Archivo Se Encuentra Inactivo No Se Puede Actualizar El Estado');window.location.href='../vista/consultar_archivo.php';</script>";
    }
    if ($sala_archivo==$sala_archivo1) {

    if ($estado_archivo==$estado_archivo1) {
      $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblarchivo SET ubicacion_archivo='$ubicacion_archivo', estante_archivo='$estante_archivo', fila_archivo='$fila_archivo', columna_archivo='$columna_archivo', estado_archivo='$estado_archivo2' WHERE documento_usuario='$documento_usuario1'");
        mysqli_close($link);
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblprestamo SET estado_archivo='$estado_archivo2' WHERE documento_usuario='$documento_usuario1'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion Exitosa');window.location.href='../vista/consultar_archivo.php';</script>";
    }

    if ($estado_archivo==$estado_archivo2) {

      $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblarchivo SET ubicacion_archivo='$ubicacion_archivo', estante_archivo='$estante_archivo', fila_archivo='$fila_archivo', columna_archivo='$columna_archivo', estado_archivo='$estado_archivo1' WHERE documento_usuario='$documento_usuario1'");
        mysqli_close($link);

        $link=mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        $result=mysqli_query($link, "SELECT * FROM tblprestamo WHERE documento_usuario='$documento_usuario1'");
        mysqli_data_seek($result,0);
        $extraido= mysqli_fetch_array($result);

        $codigo_prestamo=$extraido['codigo_prestamo'];
        $documento_empleado=$extraido['documento_empleado'];
        $documento_empleado=$extraido['documento_empleado'];
        $nombre_empleado=$extraido['nombre_empleado'];
        $apellido_empleado=$extraido['apellido_empleado'];
        $cargo_empleado=$extraido['cargo_empleado'];
        $documento_usuario_extraido=$extraido['documento_usuario'];
        $ubicacion_prestamo=$extraido['ubicacion_prestamo'];
        $fecha_prestamo=$extraido['fecha_prestamo'];
        $fecha_entrega=$extraido['fecha_entrega'];

        mysqli_free_result($result);
        mysqli_close($link);

        $mysql = new mysqli("localhost","root","","arsama2");
        $mysql = $mysql -> query("INSERT INTO tblhistorialprestamo(codigo_historial,documento_empleado,nombre_empleado,apellido_empleado,cargo_empleado,documento_usuario,ubicacion_prestamo,fecha_prestamo,fecha_entrega)VALUES('$codigo_prestamo','$documento_empleado','$nombre_empleado','$apellido_empleado','$cargo_empleado','$documento_usuario_extraido','$ubicacion_prestamo','$fecha_prestamo','$fecha_entrega')")or die("<script>alert('Error al conectar a la base de datos');window.location.href='../vista/actualizar_estado_archivo.php';</script>");
        echo "<script>alert('Actualizacion Exitosa');window.location.href='../vista/consultar_archivo.php';</script>";

        $mysqli= new mysqli ("localhost","root","","arsama2");
        $sql = $mysqli->query("DELETE FROM tblprestamo WHERE documento_usuario='$documento_usuario1'"); 
    
        }
    }
}
?>