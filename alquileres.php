<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ("templates/alquileres.php");

/*head ($titulo,$link)*/
$titulo = "<title>Alquileres - Cotizador online!</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/alquileres.css">
	  <script type="text/javascript" src="js/cotizador.js"></script>';
$link3 = '<meta content="alquiler de menaje, alquiler, cotizador online, cotizar, manteles, vajilla, cubierteria, servicio, mesas, sillas, manteleria, decoracion, mesas, sillas, mantel, platos, copas, " name="keywords" />
		  <meta content="Con nuestro cotizador online podrá calcular el valor para su alquiler" name="description" />';

$browser = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Chrome/i', $browser)) { echo '<link rel="stylesheet" type="text/css" href="css/alquileres-chrome.css">'; }
else { echo ''; }

/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $alquileres;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>