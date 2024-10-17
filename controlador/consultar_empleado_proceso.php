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
    
  $sql = "SELECT * FROM tblempleado WHERE documento_empleado LIKE '".$pattern."%' or nombre_empleado LIKE '".$pattern."%';";

    if($result = $conex->query($sql)){

        $numrows = $result->num_rows;

        if($numrows > 0){
            echo "<table>
                        <tr>
                            <th>Documento Empleado</th>
                            <th>Nombre Empleado</th>
                            <th>Apellido Empleado</th>
                            <th>Estado Empleado</th>
                            <th>Contraseña Empleado</th>
                            <th>Actualizar Empleado</th>
                        </tr><tr><th height='20px'></th></tr>";

            while($row = $result->fetch_assoc()){
                echo "<tr>".
                    "<td>".$row['documento_empleado']."</td>".
                    "<td>".$row['nombre_empleado']."</td>".
                    "<td>".$row['apellido_empleado']."</td>".
                    "<td>".$row['estado_empleado']."</td>".
                    "<td>".$row['contrasena_empleado']."</td>";
                    $documento_empleado=$row['documento_empleado'];
                    $nombre_empleado=$row['nombre_empleado'];
                    $apellido_empleado=$row['apellido_empleado'];
                    $contrasena_empleado=$row['contrasena_empleado'];
                    echo "<td>"."<a href=\"../vista/actualizar_empleado.php?documento_empleado=$documento_empleado&nombre_empleado=$nombre_empleado&apellido_empleado=$apellido_empleado&contrasena_empleado=$contrasena_empleado\"><img src=\"../modelo/img/actualizar.png\">"."</td>";
                    "</tr>";
            }
                    echo "</table >";
        }
        else{
            print "No se Encontraron Coincidencias.";
        }
    }
    else{
        print $conex->error;
    }
}
?>