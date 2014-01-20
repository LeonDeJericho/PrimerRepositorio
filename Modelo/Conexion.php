<?php

class conexion
	{
		function obtener_conexion(){
		$link = mysqli_connect("localhost","root","123456","nombredelabd"); // servido, nombreBD, usuario, contraseña
		return $link;
		}

		function realizar_consulta($consulta){
		$resultado = mysqli_query($this->obtener_conexion(), $consulta);
		return $resultado;
		}

}
?>					