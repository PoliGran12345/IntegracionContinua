<?php
ini_set('memory_limit', '1024M');
/*
	https://dev.socrata.com/docs/datatypes/text.html
*/
/* ###############  PAGINACIÓN  ########################### */
$p1 = "22000";	// cantidad
$p2 = "0";		// desde
/* ######################################################## */
/* ###############  PARAMETROS  ########################### */
$estado = "ACTIVO"; //	ACTIVO 
$ciudad = "MEDELLIN"; // CIUDAD DÓNDE SE DA EL PROGRAMA
$nivel = "POSGRADO"; // NIVEL POSGRADO - PREGRADO
$origen = "PRIVADA"; // PUBLICA - PRIVADA
$programa = "ADMIN"; // SÓLO MAYÚSCULAS
/* ######################################################## */ 
$parametros= Array(
	"nombreestadoprograma=".$estado,
	"&nombremunicipioinstitucion=".$ciudad,
	"&nombreorigeninstitucional=".$origen,
	"&nombrenivelacademico=".$nivel,
	"&\$where=contains(nombreprograma,'".$programa."')",	
);
$parametro = implode($parametros);
$fuente = "https://www.datos.gov.co/resource/jtq6-33tt.json?".$parametro."&\$limit=". $p1 ."&\$offset=".$p2;


/* ###############  CURL  ########################### */
$cc2 = curl_init();
curl_setopt($cc2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($cc2, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cc2, CURLOPT_URL, $fuente);
$datos = json_decode(curl_exec($cc2));
curl_close($cc2);
/* ################################################## */



echo "<pre>"; 
print_r ($datos); 
echo "</pre>"; 




//echo $fuente;
