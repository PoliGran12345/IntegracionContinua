<?php
########### CAPTURANDO LOS POST ################################# 
$ciudad = strtoupper($_POST['ciudad']); // almacenamos en una variable la ciudad
$nivel = $_POST['nivel']; // almacenamos en una variable el nivel
switch ($nivel) {
       case '1':
          $nivel = 'PREGRADO';
          break;
       case '2':
          $nivel = 'POSGRADO';
          break;
}
$programa = strtoupper($_POST['programa']);
$origen = $_POST['origen']; //almacenamos en una variable el origen de la entidad
switch ($origen) {
       case '1':
          $origen = 'PRIVADA';
          break;
       case '2':
          $origen = 'OFICIAL';
          break;
}
########### MOSTRANDO LOS POST ################################### 
echo "ciudad: " .$ciudad;
echo "<br/>nivel:  " .$nivel;
echo "<br/>programa:  " .$programa;
echo "<br/>origen:  " .$origen; 

// include("base.php");  
?>
