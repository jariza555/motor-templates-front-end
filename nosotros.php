<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ("templates/nosotros.php");

/*head ($titulo,$link)*/
$titulo = "<title>Nosotros</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/alquileres.css">';
$link3 = '<meta content="Eventos Casa Morella, eventos sociales, eventos empresariales, casa de eventos, eventos" name="keywords" />
		  <meta content="Somos una empresa dedicada a la realización de eventos sociales y empresariales, contando con profesionales, basados en la preparación de momentos inolvidables, plasmando fechas y motivos en celebraciones únicas" name="description" />';
/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $alquileres;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>