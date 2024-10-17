<!DOCTYPE html>
<html>
<head>
    <title>Arsama | Archivo Clinico</title>
    <?php 
    include('../vista/menu.php');
     ?>
     <link rel="stylesheet" href="../modelo/css/prestamo.css">
</head>
<body>
<br>
<br>
<br>
</body>
</html>
<?php

$estado_archivo1 = ('prestamo');

$link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"arsama2");
    $result=mysqli_query($link, "SELECT * FROM tblprestamo WHERE estado_archivo='$estado_archivo1' ");
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
                            <th>Fecha Prestamo</th>
                            <th>Fecha Entrega</th>
                        </tr><tr><th height='20px'></th></tr>";

while($row=mysqli_fetch_assoc($resultado)){
                    echo "<tr>".
                    "<td>".$row['codigo_prestamo']."</td>".
                    "<td>".$row['documento_empleado']."</td>".
                    "<td>".$row['nombre_empleado']."</td>".
                    "<td>".$row['apellido_empleado']."</td>".
                    "<td>".$row['cargo_empleado']."</td>".
                    "<td>".$row['documento_usuario']."</td>".
                    "<td>".$row['ubicacion_prestamo']."</td>";
                    date_default_timezone_set('America/Bogota');
                    $fechadia=date("Y-m-d");
                    if ($row['estado_archivo']=="prestamo" AND $row['fecha_entrega']<>$fechadia) {
                        echo "<td>"."<img src=\"../modelo/img/amarillo.png\">"."</td>";
                    }
                    if ($row['estado_archivo']=="prestamo" AND $row['fecha_entrega']==$fechadia) {
                        echo "<td>"."<img src=\"../modelo/img/rojo.png\">"."</td>";
                    }
                    echo "<td>".$row['fecha_prestamo']."</td>".
                    "<td>".$row['fecha_entrega']."</td>".
                    "</tr>";
            }
            echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<br><br><br><br><br>
            <center><b><a style="color:#47EC86">Sistema Arsama</a> &copy; 2018 </b></center>
</html>