<?php 

$charset = '<meta charset="utf-8">';
$favicon = '<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">';
$link1 = '<link rel="stylesheet" type="text/css" href="css/layout.css">
		  <script src="js/site.js"></script>
		  ';
$link3 = '<meta content="Jonnathan Ariza Pinzón - Web developer" name="author" />
		  ';

Function hacer_template($titulo,$charset,$favicon,$link1,$link2,$link3,$cabeza_layout,$pagina,$pie_layout){
	$template= '<!DOCTYPE><html lang="es-ES">
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	'.$titulo.$charset.$favicon.$link1.$link2.$link3.'
	</head>
	<body>
	'.$cabeza_layout.$pagina.$pie_layout.'
	</body>
	</html>
	';
	
	return $template;

}

?>

