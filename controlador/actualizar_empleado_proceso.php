<?php 
	if (isset($_POST['actualizar'])) {
	$documento_empleado=$_POST['documento_empleado'];
    $nombre_empleado1=$_POST['nombre_empleado'];
    $apellido_empleado1=$_POST['apellido_empleado'];
    $estado_empleado1=$_POST['estado_empleado'];
    $contrasena_empleado1=$_POST['contrasena_empleado'];
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblempleado WHERE documento_empleado='$documento_empleado'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $nombre_empleado=$extraido['nombre_empleado'];
    $apellido_empleado=$extraido['apellido_empleado'];
    $estado_empleado=$extraido['estado_empleado'];
    $contrasena_empleado=$extraido['contrasena_empleado'];

    mysqli_free_result($result);
    mysqli_close($link);
    if ($nombre_empleado1<>$nombre_empleado) {
    	$link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblempleado SET nombre_empleado='$nombre_empleado1' WHERE documento_empleado='$documento_empleado'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion De Sala Exitosa');window.location.href='../vista/consultar_empleado.php';</script>";
    }
    if ($apellido_empleado1<>$apellido_empleado) {
    	$link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblempleado SET apellido_empleado='$apellido_empleado1' WHERE documento_empleado='$documento_empleado'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion De Sala Exitosa');window.location.href='../vista/consultar_empleado.php';</script>";
    }
    
    if ($estado_empleado1<>$estado_empleado) {
    	$link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblempleado SET estado_empleado='$estado_empleado1' WHERE documento_empleado='$documento_empleado'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion De Sala Exitosa');window.location.href='../vista/consultar_empleado.php';</script>";
    }
    if ($contrasena_empleado1<>$contrasena_empleado) {
    	$link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"arsama2");
        mysqli_query($link, "UPDATE tblempleado SET contrasena_empleado='$contrasena_empleado1' WHERE documento_empleado='$documento_empleado'");
        mysqli_close($link);
        echo "<script>alert('Actualizacion De Sala Exitosa');window.location.href='../vista/consultar_empleado.php';</script>";
    }
}
?>