<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ("templates/contacto.php");

/*head ($titulo,$link)*/
$titulo = "<title>Formulario de contacto</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/contacto.css">';
$link3 = '<meta content="solicitud de cotizacion, cotizacion evento, contacto@eventoscasamorella.com" name="keywords" />
		  <meta content="Para poder efectuar su cotización le pedimos el favor de llenar el siguiente formulario. Si lo desea puede contactarnos con los siguientes datos: Tel: 464 5760, Cel. 313 373 5953, Email: contacto@eventoscasamorella.com" name="description" />';
/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $contacto;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>s