<!DOCTYPE html>
<html>
<head>
    <title>Programas universitarios</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
</head>
<body>
<div class="contenedor_1">
	<h1>Directorio programas universtarios Colombia</h1>
	 <!--// FORMULARIO BÚSQUEDAS -->
	<form action="" method="post">
		<label>Ingrese ciudad</label>
		<p><input type="text" name="ciudad" value="" /><p> <!--¿ponemos un listado? -->
		<label>Ingrese nivel</label>
		<p><select name="nivel">
		  <option value="1">PREGRADO</option>
		  <option value="2">POSGRADO</option>
		</select><p>
		<label>¿Qué le gustaría estudiar?</label>
		<p><input type="text" name="programa" value="" placeholder="EJ: MEDICINA, INGENIERIA" /><p>
		<input type="submit" value="Buscar" />
	</form>
	<!--// FIN FORMULARIO BÚSQUEDAS -->
<?php 

	if(isset($_POST['ciudad']) && isset($_POST['nivel'])  ) {
		//$ciudad = $_POST['ciudad'];	
		include("includes/resultados.php");
	} else {}

?>
</div>
</body>
</html>
<!-- #################################### 

		Politécnico GranColombiano 
		Integración contínua 

#################################### -->
