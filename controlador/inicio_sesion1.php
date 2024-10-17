<?php
if (isset($_POST['ingresar'])) 
{
$user=$_POST['user'];
$contra=$_POST['contrasena'];
$archivo="archivo";
$activo="activo";
$result = mysqli_connect("localhost","root","");
mysqli_select_db($result,"arsama2");
$result2 = mysqli_query($result, "SELECT * FROM tblempleado WHERE documento_empleado='$user'");
mysqli_data_seek ($result2, 0);
$extraido = mysqli_fetch_array($result2);
$documento=$extraido['documento_empleado'];
$nombre=$extraido['nombre_empleado'];
$apellido=$extraido['apellido_empleado'];
$contrasena_c=$extraido['contrasena_empleado'];
$cargo=$extraido['cargo_empleado'];
$estado=$extraido['estado_empleado'];
mysqli_free_result($result2);
mysqli_close($result);
	if ($estado==$activo)
		{
			if ($contrasena_c==$contra AND $cargo==$archivo)
				{
					echo "<script> location.href='../controlador/inicio.php'</script>";
				}
			elseif ($contrasena_c<>$contra or $documento<>$user )
				{
					echo "<script> location.href='error_i.php?url=1 a g 1'</script>";
				}
				if ($contrasena_c==$contra AND $estado==$activo)
					{
						if ($cargo<>$archivo)
							{
								echo "<script> location.href='../vista/menu_empleado.php?url=1 e 1'</script>";
							}
					}
		}
}
if ($estado<>$activo)
{
echo "<script> location.href='error_i.php?url=1 a g 1'</script>";	
}
if (!isset($_SESSION['timeout_idle'])) 
	{
		$_SESSION['timeout_idle'] = time() + MAX_IDLE_TIME;
	} 
	else 
	{
		if ($_SESSION['timeout_idle'] < time()) 
		{} 
	else 
	{
        $_SESSION['timeout_idle'] = time() + MAX_IDLE_TIME;
    }
}
?>