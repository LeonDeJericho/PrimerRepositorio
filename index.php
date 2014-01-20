<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
	<link href="FrontEnt/css/normalize.css" rel="stylesheet" />
	<link href="FrontEnt/css/estilos.css" rel="stylesheet" />
</head>
<body>

    <!-- si quieres ir a otra página-->
    	<form action="Controlador/prueba.php" method="get">
    		<input type="text" name="idPersona"/>
    		<input type="hidden" name="metodo" value="obtenerPersona"/>
    		<input type="submit" value="Enviar">
    	</form>

 		
    <!-- FIN si quieres ir a otra página-->

    <!-- si quieres recargar con ajax-->
        <input type="text" id="idPersonaAjax" />
        <button id="botonAjax">Enviar</button>
        <div id="resultadoAjax"></div>
    <!-- FIN si quieres recargar con ajax-->

    <script type="text/javascript" src="FrontEnt/js/jquery.js"></script>
    <script type="text/javascript" src="FrontEnt/js/codigo.js"></script>
	
</body>
</html>
