<!DOCTYPE html>
<html>
<head>
	<title>Arsama | Archivo Clinico</title>
	<?php 
	include('../vista/menu.php');
	 ?>
	 <link rel="stylesheet" href="../modelo/css/inicio.css">
</head>
<body>
<br>
<br>
<br>
</body>
</html>
<?php

$estado_archivo1 = ('solicitado');

$link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblprestamo WHERE estado_archivo='$estado_archivo1'");
    mysqli_data_seek($result,0);
    $extraido= mysqli_fetch_array($result);

    $estado_archivo=$extraido['estado_archivo'];

    mysqli_free_result($result);
    mysqli_close($link);

if ($estado_archivo==$estado_archivo1) {

	$mysqli= new mysqli ("localhost","root","","arsama2");
$consulta="SELECT * FROM tblprestamo WHERE estado_archivo='$estado_archivo1'";
$resultado=$mysqli->query($consulta);

echo "<table class='tabla'>
                        <tr>
                            <th>Codigo Prestamo</th>
                            <th>Documento Empleado</th>
                            <th>Nombre Empleado</th>
                            <th>Apellido Empleado</th>
                            <th>Cargo Empleado</th>
                            <th>Documento Usuario</th>
                            <th>Ubicacion Prestamo</th>
                            <th>Estado Archivo</th>
                            <th>Fecha Solicitud</th>
                            
                        </tr><tr><th height='20px'></th></tr>";

while($row=mysqli_fetch_assoc($resultado)){
					echo "<tr>".
                    "<td>".$row['codigo_prestamo']."</td>".
                    "<td>".$row['documento_empleado']."</td>".
                    "<td>".$row['nombre_empleado']."</td>".
                    "<td>".$row['apellido_empleado']."</td>".
                    "<td>".$row['cargo_empleado']."</td>".
                    "<td>".$row['documento_usuario']."</td>".
                    "<td>".$row['ubicacion_prestamo']."</td>".
                    "<td>".$row['estado_archivo']."</td>".
                    "<td>".$row['fecha_prestamo']."</td>".
                    
                    "</tr>";
            }
			echo "</table>";
}
?>