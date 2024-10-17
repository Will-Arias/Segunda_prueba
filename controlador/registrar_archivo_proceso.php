<?php
  if (isset($_POST['registrar'])) {

    $documento_usuario=$_POST['documento_usuario'];
    $nombre_usuario=$_POST['nombre_usuario'];
    $apellido_usuario=$_POST['apellido_usuario'];
    $sala_archivo=$_POST['sala_archivo'];
    $ubicacion_archivo=$_POST['ubicacion_archivo'];
    $estante_archivo=$_POST['estante_archivo'];
    $fila_archivo=$_POST['fila_archivo'];
    $columna_archivo=$_POST['columna_archivo'];
    $estado_archivo = ('disponible');
    $fecha_ingreso_archivo=$_POST['fecha_ingreso_archivo'];


    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblarchivo WHERE documento_usuario='$documento_usuario'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $documento_usuario_extraido=$extraido['documento_usuario'];

    mysqli_free_result($result);
    mysqli_close($link);

    if ($documento_usuario_extraido==$documento_usuario) {
      echo "<script>alert('El Archivo Ya Existe');window.location.href='../vista/registrar_archivo.php';</script>";
    }

    if ($documento_usuario_extraido<>$documento_usuario) {
      
      $fecha_vencimiento_archivo = strtotime ('+5 year' , strtotime ($fecha_ingreso_archivo));
      $fecha_vencimiento_archivo = date ('y-m-j' , $fecha_vencimiento_archivo);

      $ano_destruccion = substr($fecha_ingreso_archivo, -10, 4);
      $mes_destruccion = substr($fecha_ingreso_archivo, -5, 2);
      $dia_destruccion = substr($fecha_ingreso_archivo, -2, 2);

      $fecha_destruccion = $ano_destruccion+30;
      $fecha_destruccion_archivo = "$fecha_destruccion-$mes_destruccion-$dia_destruccion";
          
        $mysql = new mysqli("localhost","root","","arsama2");
  	   $mysql = $mysql -> query("INSERT INTO tblarchivo(documento_usuario,nombre_usuario,apellido_usuario,sala_archivo,ubicacion_archivo,estante_archivo,fila_archivo,columna_archivo,estado_archivo,fecha_ingreso,fecha_vencimiento,fecha_destruccion)VALUES('$documento_usuario', '$nombre_usuario', '$apellido_usuario','$sala_archivo','$ubicacion_archivo','$estante_archivo','$fila_archivo','$columna_archivo','$estado_archivo', '$fecha_ingreso_archivo','$fecha_vencimiento_archivo','$fecha_destruccion_archivo')")or die("<script>alert('Error al conectar a la base de datos');window.location.href='../vista/registrar_archivo.php';</script>");
        echo "<script>alert('REGISTRO EXITOSO');window.location.href='../vista/registrar_archivo.php';</script>";
    }
  }

 ?>