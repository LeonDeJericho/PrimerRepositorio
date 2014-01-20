<?php
require_once "../Modelo/Prueba.php";
$Prueba = new Prueba();


 $metodo = $_REQUEST["metodo"];//indicador es la variable q esta en AJAX ;metodo REQUEST cogue = si es GET o POST

    if($metodo=="obtenerPersona")
    {
       $Prueba->obtenerPersona($_REQUEST["idPersona"]);
    }

?>