<link rel="stylesheet" href="../css/formulario_contacto.css" type="text/css">

<?php

     $empresa = $_POST["empresa"];
     $nombre = $_POST["nombre"];
     $telefono = $_POST["telefono"];
     $email = $_POST["email"];
     $personas = $_POST["personas"];
     $fecha = $_POST["fecha"];
     $ubicacion = $_POST["ubicacion"];
     $comentarios = $_POST["mensaje"];
     
     // El mensaje
     $mensaje ='
     EMPRESA: 			'.$empresa.'
     NOMBRE: 			'.$nombre.' 
     TELEFONO:			'.$telefono.' 
     EMAIL: 			'.$email.' 
     # DE PERSONAS:		'.$personas.' 
     FECHA EVENTO:		'.$fecha.' 
     UBICACION:			'.$ubicacion.'
     COMENTARIOS:		'.$comentarios;
     
     
     
     // En caso de que cualquiera de las líneas sea más larga de 70 caracteres,
     // debe usarse wordwrap()
     $mensaje = wordwrap($mensaje, 70);
     
     // Send
     
     
     if(mail('contacto@eventoscasamorella.com', 'Consulta desde web para banquetes', $mensaje))
     {


         echo '<html><head></head><body bgcolor="silver"><div id="exito_error_msn">Éxito!</br><strong>Su mensaje ha sido enviado correctamente.</strong></div></body></html>';  
          
           }else 
           {
           
             echo '<html><head></head><body bgcolor="silver"><div id="exito_error_msn">Fallo!<strong>Se produjo un error en el servidor. Por favor vuelva a intentarlo.</strong></div></body></html>';  
           }
     
     
     
     ?>