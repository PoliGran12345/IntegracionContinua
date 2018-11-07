<?php
ini_set('memory_limit', '1024M');
/*
	https://dev.socrata.com/docs/datatypes/text.html
	nombrenivelacademico
*/
/* ###############  PAGINACIÓN  ########################### */
$p1 = "100";	// cantidad
$p2 = "0";		// desde
/* ######################################################## */
/* ###############  PARAMETROS  ########################### */
$estado = "ACTIVO";
$ciudad = "MEDE";
$nivel = "PREGRADO";
/* ######################################################## */   // AND starts_with(nombrenivelacademico,'".$nivel."')
$parametros = "\$where=starts_with(nombremunicipioinstitucion,'".$ciudad."')&";  //
$fuente = "https://www.datos.gov.co/resource/jtq6-33tt.json?nombreestadoprograma=".$estado."&".$parametros/* ."\$limit=". $p1 ."&\$offset=".$p2 */;

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




