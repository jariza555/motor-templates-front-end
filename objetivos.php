<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ("templates/objetivos.php");

/*head ($titulo,$link)*/
$titulo = "<title>Objetivos</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/alquileres.css">';
$link3 = '<meta content="Eventos Casa Morella, eventos sociales, eventos empresariales, casa de eventos, eventos" name="keywords" />
		  <meta content="Crear un evento perfecto donde la distinción sea parte del estilo de cada cliente." name="description" />';
/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $alquileres;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>