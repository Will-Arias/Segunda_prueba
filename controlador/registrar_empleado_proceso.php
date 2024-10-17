<?php 
if (isset($_POST['registrar'])) {
	
	$documento_empleado=$_POST['documento_empleado'];
	$nombre_empleado=$_POST['nombre_empleado'];
	$apellido_empleado=$_POST['apellido_empleado'];
	$cargo_empleado=$_POST['cargo_empleado'];
	$estado_empleado=$_POST['estado_empleado'];
	$contrasena_empleado=$_POST['contrasena_empleado'];

	$link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblempleado WHERE documento_empleado='$documento_empleado'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $documento_empleado_extraido=$extraido['documento_empleado'];

    mysqli_free_result($result);
    mysqli_close($link);

    if ($documento_empleado_extraido==$documento_empleado) {
      echo "<script>alert('El Documento Ya Esta Registrado');window.location.href='../vista/registrar_empleado.php';</script>";
    }

    if ($documento_empleado_extraido<>$documento_empleado) {
        
      $mysql = new mysqli("localhost","root","","arsama2");
       $mysql = $mysql -> query("INSERT INTO tblempleado(documento_empleado,nombre_empleado,apellido_empleado,cargo_empleado,estado_empleado,contrasena_empleado)VALUES('$documento_empleado', '$nombre_empleado', '$apellido_empleado','$cargo_empleado','$estado_empleado','$contrasena_empleado')")or die("<script>alert('Error al conectar a la base de datos');window.location.href='../vista/registrar_empleado.php';</script>");
        echo "<script>alert('REGISTRO EXITOSO');window.location.href='../vista/registrar_empleado.php';</script>";
    }

}
?>