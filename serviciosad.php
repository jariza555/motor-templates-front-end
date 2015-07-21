<?php 

require_once ('pages/funcion_template.php');
require_once ('pages/cabeza_layout.php');
require_once ('pages/pie_layout.php');

require_once ("templates/serviciosad.php");

/*head ($titulo,$link)*/
$titulo = "<title>Servicios</title>";
$link2 = '<link rel="stylesheet" type="text/css" href="css/serviciosad.css">';
$link3 = '<meta content="platos gourmet, desayunos, almuerzos, comida de mar, entradas, pasabocas, refrigerios, lasagnas, crepes, sonido, salones, recepciones, mariachis" name="keywords" />
		  <meta content="Eventos casa morela presta una amplia gama de servicios con los cuales deseamos suplir sus espectativas." name="description" />';
/*head*/

$cabeza_layout = $cabezote;

/*inicio contenido html*/
$pagina = $serviciosad;
/*final contenido html*/

$pie_layout = $footer;

echo hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout);

?>