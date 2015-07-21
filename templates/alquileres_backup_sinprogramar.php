<?php

$alquileres ='
	<div class="contenedor_gral">
			<p class="titulo">Calcule el valor de su alquiler</p>
		<section class="documento"> 
			<form action="" class="cont_cotz">	
			<p class="leyenda">
			Escriba el valor numérico a solicitar en los espacios de la columna
			<span style="padding: 0px 4px; background-color: white; color: black; font-family: sans-serif; font-size: 16px;">Cant.</span>
			</p>		 
		<!-- Inicio Categroría VAJILLA Y CUBIERTERÍA -->
		<div class="titulo_categoria">VAJILLA Y CUBIERTERÍA</div>
		<div class="subt_categoria nombre_t">Nombre</div>
		<div class="subt_categoria valor_t">Vista</div>
		<div class="subt_categoria valor_t">Valor C/U</div>
		<div class="subt_categoria cantidad_t">Cant.</div>
		<div class="subt_categoria subtotal_t">Subtotal</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Plato redondo seco <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor1">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor1\',this.value,\'subtotal1\');" autocomplete="off">
		<div class="subtotal" id="subtotal1"></div>
		<div class="repo">Valor de reposición: 10000</div>
		
		<span id="miniatura1"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Plato redondo postre <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor2">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor2\',this.value,\'subtotal2\');" autocomplete="off">
		<div class="subtotal" id="subtotal2" ></div>
		<div class="repo">Valor de reposición: 6000</div>
		
		<span id="miniatura2"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Plato Cuadrado seco <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor3">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor3\',this.value,\'subtotal3\');" autocomplete="off">
		<div class="subtotal" id="subtotal3"></div>
		<div class="repo">Valor de reposición: 12000</div>
		
		<span id="miniatura3"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Plato cuadrado mediano <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor4">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor4\',this.value,\'subtotal4\');" autocomplete="off">
		<div class="subtotal" id="subtotal4"></div>
		<div class="repo">Valor de reposición: 10000</div>
		
		<span id="miniatura4"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Plato cuadrado postre <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor5">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor5\',this.value,\'subtotal5\');" autocomplete="off">
		<div class="subtotal" id="subtotal5"></div>
		<div class="repo">Valor de reposición: 8000</div>
		
		<span id="miniatura5"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Plato crema/sopa <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor6">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor6\',this.value,\'subtotal6\');" autocomplete="off">
		<div class="subtotal" id="subtotal6"></div>
		<div class="repo">Valor de reposición: 6000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Pocillo chocolatero/café <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor7">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor7\',this.value,\'subtotal7\');" autocomplete="off">
		<div class="subtotal" id="subtotal7"></div>
		<div class="repo">Valor de reposición: 6000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Vaso largo <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor8">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor8\',this.value,\'subtotal8\');" autocomplete="off">
		<div class="subtotal" id="subtotal8"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Vaso corto <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor9">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor9\',this.value,\'subtotal9\');" autocomplete="off">
		<div class="subtotal" id="subtotal9"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa champaña <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor10">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor10\',this.value,\'subtotal10\');" autocomplete="off">
		<div class="subtotal" id="subtotal10"></div>
		<div class="repo">Valor de reposición: 4000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa vino tinto <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor11">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor11\',this.value,\'subtotal11\');" autocomplete="off">
		<div class="subtotal" id="subtotal11"></div>
		<div class="repo">Valor de reposición: 4000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa vino blanco <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor12">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor12\',this.value,\'subtotal12\');" autocomplete="off">
		<div class="subtotal" id="subtotal12"></div>
		<div class="repo">Valor de reposición: 4000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa agua <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor13">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor13\',this.value,\'subtotal13\');" autocomplete="off">
		<div class="subtotal" id="subtotal13"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa matini <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor14">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor14\',this.value,\'subtotal14\');" autocomplete="off">
		<div class="subtotal" id="subtotal14"></div>
		<div class="repo">Valor de reposición: 10000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa margarita <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor15">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor15\',this.value,\'subtotal15\');" autocomplete="off">
		<div class="subtotal" id="subtotal15"></div>
		<div class="repo">Valor de reposición: 10000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Copa helado <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor16">300</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor16\',this.value,\'subtotal16\');" autocomplete="off">
		<div class="subtotal" id="subtotal16"></div>
		<div class="repo">Valor de reposición: 4000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Cuchillo de mesa <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor17">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor17\',this.value,\'subtotal17\');" autocomplete="off">
		<div class="subtotal" id="subtotal17"></div>
		<div class="repo">Valor de reposición: 4000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Tenedor de mesa <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor18">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor18\',this.value,\'subtotal18\');" autocomplete="off">
		<div class="subtotal" id="subtotal18"></div>
		<div class="repo">Valor de reposición: 4000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Cuchara Sopa o Crema <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor18">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor18\',this.value,\'subtotal18\');" autocomplete="off">
		<div class="subtotal" id="subtotal18"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Cucharita Dulcera - Postre <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor18">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor18\',this.value,\'subtotal18\');" autocomplete="off">
		<div class="subtotal" id="subtotal18"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Tenedorcito de Ponqué <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor18">200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor18\',this.value,\'subtotal18\');" autocomplete="off">
		<div class="subtotal" id="subtotal18"></div>
		<div class="repo">Valor de reposición: 3000</div>
		<!-- Final Categroría VAJILLA Y CUBIERTERÍA -->
		
		<!-- Inicio Categroría MENAJE DE SERVICIO -->
		<div class="titulo_categoria">MENAJE DE SERVICIO</div>
		<div class="subt_categoria nombre_t">Nombre</div>
		<div class="subt_categoria valor_t">Vista</div>
		<div class="subt_categoria valor_t">Valor C/U</div>
		<div class="subt_categoria cantidad_t">Cant.</div>
		<div class="subt_categoria subtotal_t">Subtotal</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Jarra agua electro plata <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor19">4000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor19\',this.value,\'subtotal19\');" autocomplete="off">
		<div class="subtotal" id="subtotal19"></div>
		<div class="repo">Valor de reposición: 23000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Jarra agua en cristal <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor20">3000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor20\',this.value,\'subtotal20\');" autocomplete="off">
		<div class="subtotal" id="subtotal20"></div>
		<div class="repo">Valor de reposición: 9000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Hielera electro plata con pinza <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor21">3000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor21\',this.value,\'subtotal21\');" autocomplete="off">
		<div class="subtotal" id="subtotal21"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Bandeja de servicio <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor22">3000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor22\',this.value,\'subtotal22\');" autocomplete="off">
		<div class="subtotal" id="subtotal22"></div>
		<div class="repo">Valor de reposición: 23000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Pala y sierra / ponqué <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor23">4000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor23\',this.value,\'subtotal23\');" autocomplete="off">
		<div class="subtotal" id="subtotal23"></div>
		<div class="repo">Valor de reposición: 13000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Samovar 9 litros <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor24">18000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor24\',this.value,\'subtotal24\');" autocomplete="off">
		<div class="subtotal" id="subtotal24"></div>
		<div class="repo">Valor de reposición: 400000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Samovar 12 litros <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor25">22000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor25\',this.value,\'subtotal25\');" autocomplete="off">
		<div class="subtotal" id="subtotal25"></div>
		<div class="repo">Valor de reposición: 500000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Ensaladera bandeja <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor26">6000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor26\',this.value,\'subtotal26\');" autocomplete="off">
		<div class="subtotal" id="subtotal26"></div>
		<div class="repo">Valor de reposición: 60000</div>
		<!-- Final Categroría MENAJE DE SERVICIO -->
		
		<!-- Inicio Categroría MESAS - SILLAS -->
		<div class="titulo_categoria">MESAS - SILLAS</div>
		<div class="subt_categoria nombre_t">Nombre</div>
		<div class="subt_categoria valor_t">Vista</div>
		<div class="subt_categoria valor_t">Valor C/U</div>
		<div class="subt_categoria cantidad_t">Cant.</div>
		<div class="subt_categoria subtotal_t">Subtotal</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mesa tablón 10 puestos <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor27">5000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor27\',this.value,\'subtotal27\');" autocomplete="off">
		<div class="subtotal" id="subtotal27"></div>
		<div class="repo">Valor de reposición: 150000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mesa redonda 10 puestos 1.50cm <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor28">6000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor28\',this.value,\'subtotal28\');" autocomplete="off">
		<div class="subtotal" id="subtotal28"></div>
		<div class="repo">Valor de reposición: 150000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mesa redonda para ponqué 1.20cm <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor29">5500</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor29\',this.value,\'subtotal29\');" autocomplete="off">
		<div class="subtotal" id="subtotal29"></div>
		<div class="repo">Valor de reposición: 150000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mesa para cofre D: 60cm <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor30">4500</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor30\',this.value,\'subtotal30\');" autocomplete="off">
		<div class="subtotal" id="subtotal30"></div>
		<div class="repo">Valor de reposición: 70000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Silla sin brazos o Rimax <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor31">700</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor31\',this.value,\'subtotal31\');" autocomplete="off">
		<div class="subtotal" id="subtotal31"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Silla tiffany <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor31">5000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor31\',this.value,\'subtotal31\');" autocomplete="off">
		<div class="subtotal" id="subtotal31"></div>
		<div class="repo">Valor de reposición: 80000</div>
		<!-- Final Categroría MESAS - SILLAS -->
		
		<!-- Inicio Categroría MANTELERIA -->
		<div class="titulo_categoria">MANTELERIA</div>
		<div class="subt_categoria nombre_t">Nombre</div>
		<div class="subt_categoria valor_t">Vista</div>
		<div class="subt_categoria valor_t">Valor C/U</div>
		<div class="subt_categoria cantidad_t">Cant.</div>
		<div class="subt_categoria subtotal_t">Subtotal</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mantel tablón 10 puestos <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor32">5000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor32\',this.value,\'subtotal32\');" autocomplete="off">
		<div class="subtotal" id="subtotal32"></div>
		<div class="repo">Valor de reposición: 23000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mantel redondo blanco 10 puestos. <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor33">6000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor33\',this.value,\'subtotal33\');" autocomplete="off">
		<div class="subtotal" id="subtotal33"></div>
		<div class="repo">Valor de reposición: 23000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mantel redondo Color <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor34">9000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor34\',this.value,\'subtotal34\');" autocomplete="off">
		<div class="subtotal" id="subtotal34"></div>
		<div class="repo">Valor de reposición: 40000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Mantel de mesa cofre <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor35">5000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor35\',this.value,\'subtotal35\');" autocomplete="off">
		<div class="subtotal" id="subtotal35"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Tapa cubremantel Color <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor36">3000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor36\',this.value,\'subtotal36\');" autocomplete="off">
		<div class="subtotal" id="subtotal36"></div>
		<div class="repo">Valor de reposición: 9000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre" id="valor">Tapa de velo <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor37">4500</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor37\',this.value,\'subtotal37\');" autocomplete="off">
		<div class="subtotal" id="subtotal37"></div>
		<div class="repo">Valor de reposición: 10000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Faldon Blanco mesa tablon  <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor38">9000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor38\',this.value,\'subtotal38\');" autocomplete="off">
		<div class="subtotal" id="subtotal38"></div>
		<div class="repo">Valor de reposición: 10000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Camino brocado <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor39">5000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor39\',this.value,\'subtotal39\');" autocomplete="off">
		<div class="subtotal" id="subtotal39"></div>
		<div class="repo">Valor de reposición: 13000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Forro silla standar <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor40">1200</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor40\',this.value,\'subtotal40\');" autocomplete="off">
		<div class="subtotal" id="subtotal40"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Forro silla multiusos <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor41">1600</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor41\',this.value,\'subtotal41\');" autocomplete="off">
		<div class="subtotal" id="subtotal41"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Fajón (moño) de color <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor42">550</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor42\',this.value,\'subtotal42\');" autocomplete="off">
		<div class="subtotal" id="subtotal42"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Muselina color blanco <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor43">900</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor43\',this.value,\'subtotal43\');" autocomplete="off">
		<div class="subtotal" id="subtotal43"></div>
		<div class="repo">Valor de reposición: 13000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Pañoleta de color <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor44">1100</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor44\',this.value,\'subtotal44\');" autocomplete="off">
		<div class="subtotal" id="subtotal44"></div>
		<div class="repo">Valor de reposición: 8000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Servilleta blanca <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor45">500</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor45\',this.value,\'subtotal45\');" autocomplete="off">
		<div class="subtotal" id="subtotal45"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Servilleta de color <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor46">550</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor46\',this.value,\'subtotal46\');" autocomplete="off">
		<div class="subtotal" id="subtotal46"></div>
		<div class="repo">Valor de reposición: 3000</div>
		<!-- Final Categroría MANTELERIA -->
		
		<!-- Inicio Categroría DECORACION -->
		<div class="titulo_categoria">DECORACION</div>
		<div class="subt_categoria nombre_t">Nombre</div>
		<div class="subt_categoria valor_t">Vista</div>
		<div class="subt_categoria valor_t">Valor C/U</div>
		<div class="subt_categoria cantidad_t">Cant.</div>
		<div class="subt_categoria subtotal_t">Subtotal</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Cofre lluvia de sobres <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor47">7000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor47\',this.value,\'subtotal47\');" autocomplete="off">
		<div class="subtotal" id="subtotal47"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Bombona de cristal <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor48">1000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor48\',this.value,\'subtotal48\');" autocomplete="off">
		<div class="subtotal" id="subtotal48"></div>
		<div class="repo">Valor de reposición: 3000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Candelabro en cristal <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor49">3000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor49\',this.value,\'subtotal49\');" autocomplete="off">
		<div class="subtotal" id="subtotal49"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Cilindro en cristal <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor49">4000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor49\',this.value,\'subtotal49\');" autocomplete="off">
		<div class="subtotal" id="subtotal49"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Antorcha en bambú <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor50">8000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor50\',this.value,\'subtotal50\');" autocomplete="off">
		<div class="subtotal" id="subtotal50"></div>
		<div class="repo">Valor de reposición: 20000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Antorcha en hierro <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor51">14000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor51\',this.value,\'subtotal51\');" autocomplete="off">
		<div class="subtotal" id="subtotal51"></div>
		<div class="repo">Valor de reposición: 60000</div>
		
		<span id="miniatura"><img alt="miniatura" src="images/miniaturas/platoredondoseco.jpg" /></span>
		<div class="nombre">Candelabro 15 años <img onmouseover="vista()" onmouseout="offvista()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
		<div class="valor" id="valor52">14000</div>
		<input class="cantidad" type="text" onkeyup="sum(\'valor52\',this.value,\'subtotal52\');" autocomplete="off">
		<div class="subtotal" id="subtotal52"></div>
		<div class="repo">Valor de reposición: 100000</div>
		<!-- Final Categroría DECORACION -->
		
		<div class="cont_resultados">
		<div class="gran_total"></div>
		<div class="titulo_gran_total"><p>Gran Total:</p></div>
		</div>
	</form>
		
		</section>
	</div>
';


?>