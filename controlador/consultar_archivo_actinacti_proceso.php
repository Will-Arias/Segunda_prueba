<?php
const HOST = "localhost";
const DB = "arsama2";
const USER = "root";
const PASS = "";

class conexion{

 private $db;

 public function conexion(){
  $this->db = new mysqli(HOST, USER, PASS, DB);
 }

 public function getConexion(){

 if($this->db->connect_errno){
  echo "Error en la Conexion con la base de datos";
 }
 else{
  return $this->db;
 	}
 }

 public function closeConexion(){
  $this->db->close();
 }
}

if(!empty($_POST)){

    $pattern = $_POST['pattern'];

    $db = new conexion();
    $conex = $db->getConexion();

  $sql = "SELECT * FROM tblarchivo WHERE sala_archivo LIKE '".$pattern."%';";

    if($result = $conex->query($sql)){

        $numrows = $result->num_rows;

        if($numrows > 0){
            echo "<table>
                        <tr>
                            <th>Documento Usuario</th>
                            <th>Nombre Usuario</th>
                            <th>Apellido Usuario</th>
                            <th>Sala Archivo</th>
                            <th>Ubicacion Archivo</th>
                            <th>Estante Archivo</th>
                            <th>Fila Archivo</th>
                            <th>Columna Archivo</th>
                            <th>Estado Archivo</th>
                            <th>Fecha Ingreso Archivo</th>
                            <th>Fecha Vencimiento Archivo</th>
                            <th>Fecha Destruccion Archivo</th>
                        </tr><tr><th height='20px'></th></tr>";

            while($row = $result->fetch_assoc()){

                echo "<tr>".
                    "<td>".$row['documento_usuario']."</td>".
                    "<td>".$row['nombre_usuario']."</td>".
                    "<td>".$row['apellido_usuario']."</td>";
                    $documento_usuario=$row['documento_usuario'];
                    if ($row['sala_archivo']=="activo") {
                        echo "<td>"."<a href=\"../vista/actualizar_sala_archivo.php?documento_usuario=$documento_usuario\">activo"."</td>";
                    } else {
                        echo "<td>"."<a href=\"../vista/actualizar_sala_archivo.php?documento_usuario=$documento_usuario\">inactivo"."</td>";
                    }
                    echo "<td>".$row['ubicacion_archivo']."</td>".
                    "<td>".$row['estante_archivo']."</td>".
                    "<td>".$row['fila_archivo']."</td>".
                    "<td>".$row['columna_archivo']."</td>";
                   $documento_usuario=$row['documento_usuario'];
                    $link=mysqli_connect("localhost","root","");
                    mysqli_select_db($link,"arsama2");
                    $resulta=mysqli_query($link, "SELECT * FROM tblprestamo WHERE documento_usuario='$documento_usuario'");
                    mysqli_data_seek($resulta,0);
                    $extraido= mysqli_fetch_array($resulta);

                    $fecha_entrega=$extraido['fecha_entrega'];

                    mysqli_free_result($resulta);
                    mysqli_close($link);
                    date_default_timezone_set('America/Bogota');
                    $fechadia=date("Y-m-d");
                    if ($row['estado_archivo']=="disponible" AND $row['fecha_vencimiento']<>$fechadia AND $row['fecha_destruccion']<>$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/verde.png\">"."</td>";
                        }
                    if ($row['estado_archivo']=="disponible" AND $row['fecha_vencimiento']==$fechadia AND $row['fecha_destruccion']<>$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/blanco.png\">"."</td>";
                        }
                    if ($row['estado_archivo']=="disponible" AND $row['fecha_vencimiento']<>$fechadia AND $row['fecha_destruccion']==$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/negro.png\">"."</td>";
                        }
                    if ($row['estado_archivo']=="prestamo" AND $fecha_entrega<>$fechadia AND $row['fecha_vencimiento']<>$fechadia AND $row['fecha_destruccion']<>$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/amarillo.png\">"."</td>";
                    }
                    if ($row['estado_archivo']=="prestamo" AND $fecha_entrega==$fechadia AND $row['fecha_vencimiento']<>$fechadia AND $row['fecha_destruccion']<>$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/rojo.png\">"."</td>";
                    }
                    if ($row['estado_archivo']=="prestamo" AND $fecha_entrega<>$fechadia AND $row['fecha_vencimiento']==$fechadia AND $row['fecha_destruccion']<>$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/blanco.png\">"."</td>";
                    }
                    if ($row['estado_archivo']=="prestamo" AND $fecha_entrega<>$fechadia AND $row['fecha_vencimiento']<>$fechadia AND $row['fecha_destruccion']==$fechadia) {
                        echo "<td>"."<a href=\"../vista/actualizar_estado_archivo.php?documento_usuario=$documento_usuario\"><img src=\"../modelo/img/negro.png\">"."</td>";
                    }
                    echo "<td>".$row['fecha_ingreso']."</td>".
                    "<td>".$row['fecha_vencimiento']."</td>".
                    "<td>".$row['fecha_destruccion']."</td>".
                    "</tr>";
            }

            echo "</table >";

            

        }else{
            print "No se Encontraron Coincidencias.";
        }
    }else{
        print $conex->error;
    }
}  

?>