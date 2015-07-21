<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ('templates/inicio.php');
require_once ('templates/portafolio.php');

/*head ($titulo,$link,$favicon)*/
$titulo = "<title>Bienvenidos a Eventos Casa Morella</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/inicio.css">';
$link3 = '<meta content="casa de eventos, eventos, alquileres, menaje, alquiler de menaje, alquiler, banquetes" name="keywords" />
		  <meta content="Somos una empresa dedicada a la realización de eventos sociales y empresariales, contando con profesionales, basados en la preparación de momentos inolvidables, plasmando fechas y motivos en celebraciones únicas. Tel 481 61 - 55 / Movil 313 373 5953 - contacto@eventoscasamorella.com" name="description" />';
/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $inicio;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>