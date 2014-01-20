<?php
require_once "conexion.php";
//$conexion = new Conexion();
class Prueba extends Conexion{


//private $conjuntoResultados =array();


public function obtenerPersona($id)
 {
    //global $conexion;
    
    $consulta = "SELECT *from persona WHERE id=".$id."";
    $resultado = $this->realizar_consulta($consulta);
    while($fila = mysqli_fetch_assoc($resultado))
    {
       echo $fila['nombre']; 
       echo $fila['apellido'];
    }
 }
}
?>