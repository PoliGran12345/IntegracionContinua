<!DOCTYPE html>
<html>
<head>
    <title>Programas universitarios</title>
</head>
<body>
<h1>Directorio programas universtarios Colombia</h1>
 <!--// FORMULARIO BÚSQUEDAS -->
<form action="" method="post">
	<label>Ingrese ciudad</label>
	<p><input type="text" name="ciudad" value="" /><p> <!-- ¿ponemos un listado? -->
	<label>Ingrese nivel</label>
	<p><input type="text" name="nivel" value="" /><p>
	<input type="submit" value="Buscar" />
</form>
<!--// FIN FORMULARIO BÚSQUEDAS -->
<?php 

if(isset($_POST['ciudad']) ) {
    //$ciudad = $_POST['ciudad'];	
	include("includes/resultados.php");
} else {}

?>
</body>
</html>
<!-- #################################### 

		Politécnico GranColombiano 
		Integración contínua 

#################################### -->
