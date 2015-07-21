<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ("templates/portafolio.php");

/*head ($titulo,$link)*/
$titulo = "<title>Portafolio</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/portafolio.css">';
$link3 = '<meta content="baby shower, bautizo, primera comunion, 15 anos, confirmacion, grados, cumpleanos, bodas, empresarial" name="keywords" />
		  <meta content="Reciban una cordial bienvenida, a continuación encontrara una gama de servicios profesionales" name="description" />';
/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $portafolio;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>