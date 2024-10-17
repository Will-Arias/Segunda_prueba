<?php
if (isset($_POST['actualizar'])) {
$documento_usuario1=$_POST['documento_usuario'];
$sala_archivo1=('activo');
$sala_archivo2=('inactivo');

	$link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblarchivo WHERE documento_usuario='$documento_usuario1'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $sala_archivo=$extraido['sala_archivo'];

    mysqli_free_result($result);
    mysqli_close($link);

    if ($sala_archivo==$sala_archivo1) {

    	$link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblarchivo SET sala_archivo='$sala_archivo2' WHERE documento_usuario='$documento_usuario1'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion De Sala Exitosa');window.location.href='../vista/consultar_archivo_actinacti.php';</script>";
    }

    if ($sala_archivo==$sala_archivo2) {

    	$link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblarchivo SET sala_archivo='$sala_archivo1' WHERE documento_usuario='$documento_usuario1'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion De Sala Exitosa');window.location.href='../vista/consultar_archivo_actinacti.php';</script>";
    }
}
 ?>