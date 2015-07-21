<html lang="es-ES">
<head>

<link rel="shortcut icon" href="/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Formulario de contacto</title>

<script type="text/javascript" src="http://www.banquetesdelchef.com/b_form/prog_send_mail.js"></script>

<link rel="stylesheet" href="../css/formulario_contacto.css" type="text/css">

</head>
<body> 
<form method="post" action="banquetes_val.php"  onsubmit="return validar(this)" >
			
		<div id="formulario_body">
			<p id="error" style="visibility:hidden">Campo Obligatorio</p>
 			
 			<div><p id="titulo">FORMULARIO SOLICITUD DE COTIZACION</p></div>
			
				<div id="primer_contenedor">
					<div id="datos_texto">
						<h3>Cont&aacute;ctenos</h3>
	
						<p>Tel: 464 5760</br>
						Cel. 313 373 5953</br>
						Cra 71D #75A - 91 
						</br>
						Email: eventosmorella@hotmail.com</p>

						<p>Para poder efectuar su cotizaci&oacute;n le pedimos el favor de 
						<br />llenar el siguiente formulario:</p>
						<div id="campo_obligatorio">*Los datos que aparecen con aster&iacute;sco son obligatorios</div>

					</div>
					
					<form action="banquetes_val.php" method="post">
					<div id="contenedor_formulario">
						<div id="campo" style="margin-left: 8px;"><input placeholder="Empresa" type="text" name="empresa" value=""></div>
						<div id="campo"><input placeholder="Nombre y apellido*" type="text" name="nombre" value="" required></div>
						<div id="campo" style="margin-left: 8px;"><input placeholder="Teléfono*" type="tel" name="telefono" value=""></div>
						<div id="campo"><input type="email" name="email" value="" placeholder="Email*"required></div>
						<div id="campo"><input type="number" name="personas" value="" placeholder="Número de personas" pattern="[0-9]+"></div>
						<div id="campo"><input type="date" name="fecha" value="" placeholder="Fecha Día/Mes/Año"></div>
						<div id="campo" style="margin-bottom: 18px; margin-left: 8px;"><input type="text" name="ubicacion" value="" placeholder="Dirección"></div>
						<div><label style="float: left; margin-left: 177px; color: #A49683;">Comentarios*:</label><textarea name="mensaje" cols="48" rows="5" required></textarea></div>
						<div id="boton_enviar"><input type="submit" value="Enviar"></div>
					</div>
							
					</form>
				</div>

		</div>
			
</form>

</body>
</html>