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

                <span id="miniatura2"><img alt="miniatura" src="images/miniaturas/platocuadradoseco.jpg" /></span>
                <div class="nombre">Plato cuadrado grande (Fuerte) <img onmouseover="min2()" onmouseout="offmin2()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor3">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor3\',this.value,\'subtotal3\');" autocomplete="off">
                <div class="subtotal" id="subtotal3"></div>
                <div class="repo">Valor de reposición: 12000</div>

                <span id="miniatura3"><img alt="miniatura" src="images/miniaturas/platocuadradomediano.jpg" /></span>
                <div class="nombre">Plato cuadrado mediano (Entrada)<img onmouseover="min3()" onmouseout="offmin3()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor4">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor4\',this.value,\'subtotal4\');" autocomplete="off">
                <div class="subtotal" id="subtotal4"></div>
                <div class="repo">Valor de reposición: 10000</div>

                <span id="miniatura4"><img alt="miniatura" src="images/miniaturas/platocuadradopostre.jpg" /></span>
                <div class="nombre">Plato cuadrado pequeño (postre) <img onmouseover="min4()" onmouseout="offmin4()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor5">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor5\',this.value,\'subtotal5\');" autocomplete="off">
                <div class="subtotal" id="subtotal5"></div>
                <div class="repo">Valor de reposición: 8000</div>

                <span id="miniatura5"><img alt="miniatura" src="images/miniaturas/platocrema.jpg" /></span>
                <div class="nombre">Plato crema/sopa <img onmouseover="min5()" onmouseout="offmin5()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor6">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor6\',this.value,\'subtotal6\');" autocomplete="off">
                <div class="subtotal" id="subtotal6"></div>
                <div class="repo">Valor de reposición: 6000</div>

                <span id="miniatura6"><img alt="miniatura" src="images/miniaturas/pocillochocolatero.jpg" /></span>
                <div class="nombre">Pocillo chocolatero/café <img onmouseover="min6()" onmouseout="offmin6()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor7">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor7\',this.value,\'subtotal7\');" autocomplete="off">
                <div class="subtotal" id="subtotal7"></div>
                <div class="repo">Valor de reposición: 6000</div>

                <span id="miniatura7"><img alt="miniatura" src="images/miniaturas/vasolargo.jpg" /></span>
                <div class="nombre">Vaso largo <img onmouseover="min7()" onmouseout="offmin7()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor8">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor8\',this.value,\'subtotal8\');" autocomplete="off">
                <div class="subtotal" id="subtotal8"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura8"><img alt="miniatura" src="images/miniaturas/vasocorto.jpg" /></span>
                <div class="nombre">Vaso corto <img onmouseover="min8()" onmouseout="offmin8()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor9">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor9\',this.value,\'subtotal9\');" autocomplete="off">
                <div class="subtotal" id="subtotal9"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura9"><img alt="miniatura" src="images/miniaturas/copachampania.jpg" /></span>
                <div class="nombre">Copa champaña <img onmouseover="min9()" onmouseout="offmin9()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor10">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor10\',this.value,\'subtotal10\');" autocomplete="off">
                <div class="subtotal" id="subtotal10"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura10"><img alt="miniatura" src="images/miniaturas/copavinotinto.jpg" /></span>
                <div class="nombre">Copa vino tinto <img onmouseover="min10()" onmouseout="offmin10()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor11">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor11\',this.value,\'subtotal11\');" autocomplete="off">
                <div class="subtotal" id="subtotal11"></div>
                <div class="repo">Valor de reposición: 5000</div>

                <span id="miniatura11"><img alt="miniatura" src="images/miniaturas/copavinoblanco.jpg" /></span>
                <div class="nombre">Copa vino blanco <img onmouseover="min11()" onmouseout="offmin11()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor12">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor12\',this.value,\'subtotal12\');" autocomplete="off">
                <div class="subtotal" id="subtotal12"></div>
                <div class="repo">Valor de reposición: 5000</div>

                <span id="miniatura12"><img alt="miniatura" src="images/miniaturas/copaagua.jpg" /></span>
                <div class="nombre">Copa agua <img onmouseover="min12()" onmouseout="offmin12()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor13">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor13\',this.value,\'subtotal13\');" autocomplete="off">
                <div class="subtotal" id="subtotal13"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura13"><img alt="miniatura" src="images/miniaturas/copamartini.jpg" /></span>
                <div class="nombre">Copa martini <img onmouseover="min13()" onmouseout="offmin13()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor14">400</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor14\',this.value,\'subtotal14\');" autocomplete="off">
                <div class="subtotal" id="subtotal14"></div>
                <div class="repo">Valor de reposición: 10000</div>

                <span id="miniatura14"><img alt="miniatura" src="images/miniaturas/copamargarita.jpg" /></span>
                <div class="nombre">Copa margarita <img onmouseover="min14()" onmouseout="offmin14()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor15">400</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor15\',this.value,\'subtotal15\');" autocomplete="off">
                <div class="subtotal" id="subtotal15"></div>
                <div class="repo">Valor de reposición: 10000</div>

                <span id="miniatura15"><img alt="miniatura" src="images/miniaturas/copahelado.jpg" /></span>
                <div class="nombre">Copa de helado <img onmouseover="min15()" onmouseout="offmin15()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor16">350</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor16\',this.value,\'subtotal16\');" autocomplete="off">
                <div class="subtotal" id="subtotal16"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura16"><img alt="miniatura" src="images/miniaturas/cuchillomesa.jpg" /></span>
                <div class="nombre">Cuchillo de mesa <img onmouseover="min16()" onmouseout="offmin16()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor17">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor17\',this.value,\'subtotal17\');" autocomplete="off">
                <div class="subtotal" id="subtotal17"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura17"><img alt="miniatura" src="images/miniaturas/tenedormesa.jpg" /></span>
                <div class="nombre">Tenedor de mesa <img onmouseover="min17()" onmouseout="offmin17()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor18">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor18\',this.value,\'subtotal18\');" autocomplete="off">
                <div class="subtotal" id="subtotal18"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura18"><img alt="miniatura" src="images/miniaturas/cucharasopa.jpg" /></span>
                <div class="nombre">Cuchara Sopa o Crema <img onmouseover="min18()" onmouseout="offmin18()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor19">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor19\',this.value,\'subtotal19\');" autocomplete="off">
                <div class="subtotal" id="subtotal19"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura19"><img alt="miniatura" src="images/miniaturas/cucharita.jpg" /></span>
                <div class="nombre">Cucharita Dulcera - Postre <img onmouseover="min19()" onmouseout="offmin19()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor20">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor20\',this.value,\'subtotal20\');" autocomplete="off">
                <div class="subtotal" id="subtotal20"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura20"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Tenedorcito de Ponqué <img onmouseover="min20()" onmouseout="offmin20()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor21">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor21\',this.value,\'subtotal21\');" autocomplete="off">
                <div class="subtotal" id="subtotal21"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura58"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Cuchillo Mantequillero <img onmouseover="min58()" onmouseout="offmin58()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor59">300</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor59\',this.value,\'subtotal59\');" autocomplete="off">
                <div class="subtotal" id="subtotal59"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura59"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Cuchillo de Mesa  De Lujo<img onmouseover="min59()" onmouseout="offmin59()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor60">500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor60\',this.value,\'subtotal60\');" autocomplete="off">
                <div class="subtotal" id="subtotal60"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura60"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Tendedor de Mesa  De Lujo <img onmouseover="min60()" onmouseout="offmin60()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor61">500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor61\',this.value,\'subtotal61\');" autocomplete="off">
                <div class="subtotal" id="subtotal61"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura61"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Cuchara Sopa o Crema De Lujo <img onmouseover="min61()" onmouseout="offmin61()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor62">500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor62\',this.value,\'subtotal62\');" autocomplete="off">
                <div class="subtotal" id="subtotal62"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura62"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Cucharita Dulcera - Postre  De Lujo <img onmouseover="min62()" onmouseout="offmin62()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor63">500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor63\',this.value,\'subtotal63\');" autocomplete="off">
                <div class="subtotal" id="subtotal63"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura63"><img alt="miniatura" src="images/miniaturas/tenedorcito.jpg" /></span>
                <div class="nombre">Tenedorcito de Ponqué De Lujo  <img onmouseover="min63()" onmouseout="offmin63()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor64">500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor64\',this.value,\'subtotal64\');" autocomplete="off">
                <div class="subtotal" id="subtotal64"></div>
                <div class="repo">Valor de reposición: 3000</div>


                <!-- Final Categroría VAJILLA Y CUBIERTERÍA -->

                <!-- Inicio Categroría MENAJE DE SERVICIO -->
                <div class="titulo_categoria">MENAJE DE SERVICIO</div>
                <div class="subt_categoria nombre_t">Nombre</div>
                <div class="subt_categoria valor_t">Vista</div>
                <div class="subt_categoria valor_t">Valor C/U</div>
                <div class="subt_categoria cantidad_t">Cant.</div>
                <div class="subt_categoria subtotal_t">Subtotal</div>

                <span id="miniatura21" class="primeraimg"><img alt="miniatura" src="images/miniaturas/jarraplata.jpg" /></span>
                <div class="nombre">Jarra agua electro plata <img onmouseover="min21()" onmouseout="offmin21()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor22">4000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor22\',this.value,\'subtotal22\');" autocomplete="off">
                <div class="subtotal" id="subtotal22"></div>
                <div class="repo">Valor de reposición: 40000</div>

                <span id="miniatura22"><img alt="miniatura" src="images/miniaturas/jarracristal.jpg" /></span>
                <div class="nombre">Jarra agua en cristal <img onmouseover="min22()" onmouseout="offmin22()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor23">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor23\',this.value,\'subtotal23\');" autocomplete="off">
                <div class="subtotal" id="subtotal23"></div>
                <div class="repo">Valor de reposición: 15000</div>

                <span id="miniatura23"><img alt="miniatura" src="images/miniaturas/hieleraplata.jpg" /></span>
                <div class="nombre">Hielera electro plata con pinza <img onmouseover="min23()" onmouseout="offmin23()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor24">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor24\',this.value,\'subtotal24\');" autocomplete="off">
                <div class="subtotal" id="subtotal24"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura24"><img alt="miniatura" src="images/miniaturas/bandejaservicio.jpg" /></span>
                <div class="nombre">Bandeja de servicio <img onmouseover="min24()" onmouseout="offmin24()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor25">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor25\',this.value,\'subtotal25\');" autocomplete="off">
                <div class="subtotal" id="subtotal25"></div>
                <div class="repo">Valor de reposición: 23000</div>

                <span id="miniatura25"><img alt="miniatura" src="images/miniaturas/palaponque.jpg" /></span>
                <div class="nombre">Pala y sierra / ponqué <img onmouseover="min25()" onmouseout="offmin25()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor26">4000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor26\',this.value,\'subtotal26\');" autocomplete="off">
                <div class="subtotal" id="subtotal26"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura26"><img alt="miniatura" src="images/miniaturas/samovar9lts.jpg" /></span>
                <div class="nombre">Samovar 9 litros <img onmouseover="min26()" onmouseout="offmin26()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor27">18000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor27\',this.value,\'subtotal27\');" autocomplete="off">
                <div class="subtotal" id="subtotal27"></div>
                <div class="repo">Valor de reposición: 600000</div>

                <span id="miniatura27"><img alt="miniatura" src="images/miniaturas/samovar12ltrs.jpg" /></span>
                <div class="nombre">Samovar 12 litros <img onmouseover="min27()" onmouseout="offmin27()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor28">22000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor28\',this.value,\'subtotal28\');" autocomplete="off">
                <div class="subtotal" id="subtotal28"></div>
                <div class="repo">Valor de reposición: 700000</div>

                <span id="miniatura28"><img alt="miniatura" src="images/miniaturas/ensaladerabandeja.jpg" /></span>
                <div class="nombre">Ensaladera bandeja <img onmouseover="min28()" onmouseout="offmin28()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor29">12000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor29\',this.value,\'subtotal29\');" autocomplete="off">
                <div class="subtotal" id="subtotal29"></div>
                <div class="repo">Valor de reposición: 140000</div>

                <span id="miniatura64"><img alt="miniatura" src="images/miniaturas/ensaladerabandeja.jpg" /></span>
                <div class="nombre">Canastillas Pan<img onmouseover="min64()" onmouseout="offmin64()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor65">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor65\',this.value,\'subtotal65\');" autocomplete="off">
                <div class="subtotal" id="subtotal65"></div>
                <div class="repo">Valor de reposición: 30000</div>

                <span id="miniatura65"><img alt="miniatura" src="images/miniaturas/ensaladerabandeja.jpg" /></span>
                <div class="nombre">Tazas Pasabocas Color<img onmouseover="min65()" onmouseout="offmin65()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor66">1000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor66\',this.value,\'subtotal66\');" autocomplete="off">
                <div class="subtotal" id="subtotal66"></div>
                <div class="repo">Valor de reposición: 20000</div>


                <!-- Final Categroría MENAJE DE SERVICIO -->

                <!-- Inicio Categroría MESAS - SILLAS -->
                <div class="titulo_categoria">MESAS - SILLAS</div>
                <div class="subt_categoria nombre_t">Nombre</div>
                <div class="subt_categoria valor_t">Vista</div>
                <div class="subt_categoria valor_t">Valor C/U</div>
                <div class="subt_categoria cantidad_t">Cant.</div>
                <div class="subt_categoria subtotal_t">Subtotal</div>

                <span id="miniatura29" class="primeraimg"><img alt="miniatura" src="images/miniaturas/mesa10ptos.jpg" /></span>
                <div class="nombre">Mesa tablón *10 puestos <img onmouseover="min29()" onmouseout="offmin29()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor30">6000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor30\',this.value,\'subtotal30\');" autocomplete="off">
                <div class="subtotal" id="subtotal30"></div>
                <div class="repo">Valor de reposición: 200000</div>

                <span id="miniatura30"><img alt="miniatura" src="images/miniaturas/mesaredonda10ptos.jpg" /></span>
                <div class="nombre">Mesa redonda *10 puestos<img onmouseover="min30()" onmouseout="offmin30()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor31">7000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor31\',this.value,\'subtotal31\');" autocomplete="off">
                <div class="subtotal" id="subtotal31"></div>
                <div class="repo">Valor de reposición: 350000</div>

                <span id="miniatura31"><img alt="miniatura" src="images/miniaturas/mesaredondaponque.jpg" /></span>
                <div class="nombre">Mesa redonda ponqué<img onmouseover="min31()" onmouseout="offmin31()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor32">6000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor32\',this.value,\'subtotal32\');" autocomplete="off">
                <div class="subtotal" id="subtotal32"></div>
                <div class="repo">Valor de reposición: 200000</div>

                <span id="miniatura32"><img alt="miniatura" src="images/miniaturas/mesacofre.jpg" /></span>
                <div class="nombre">Mesa para cofre<img onmouseover="min32()" onmouseout="offmin33()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor33">4500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor33\',this.value,\'subtotal33\');" autocomplete="off">
                <div class="subtotal" id="subtotal33"></div>
                <div class="repo">Valor de reposición: 70000</div>

                <span id="miniatura33"><img alt="miniatura" src="images/miniaturas/sillarimax.jpg" /></span>
                <div class="nombre">Silla sin brazos o Rimax <img onmouseover="min33()" onmouseout="offmin33()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor34">800</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor34\',this.value,\'subtotal34\');" autocomplete="off">
                <div class="subtotal" id="subtotal34"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura34"><img alt="miniatura" src="images/miniaturas/sillatiffany.jpg" /></span>
                <div class="nombre">Silla tiffany <img onmouseover="min34()" onmouseout="offmin34()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor35">4500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor35\',this.value,\'subtotal35\');" autocomplete="off">
                <div class="subtotal" id="subtotal35"></div>
                <div class="repo">Valor de reposición: 80000</div>

                <span id="miniatura66"><img alt="miniatura" src="images/miniaturas/sillatiffany.jpg" /></span>
                <div class="nombre">Mesa Rimax Cuadrada<img onmouseover="min66()" onmouseout="offmin66()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor67">5000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor67\',this.value,\'subtotal35\');" autocomplete="off">
                <div class="subtotal" id="subtotal67"></div>
                <div class="repo">Valor de reposición: 100000</div>

                <span id="miniatura67"><img alt="miniatura" src="images/miniaturas/sillatiffany.jpg" /></span>
                <div class="nombre">Mesa Rimax kids <img onmouseover="min67()" onmouseout="offmin67()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor68">4500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor68\',this.value,\'subtotal68\');" autocomplete="off">
                <div class="subtotal" id="subtotal68"></div>
                <div class="repo">Valor de reposición: 100000</div>

                <span id="miniatura69"><img alt="miniatura" src="images/miniaturas/sillatiffany.jpg" /></span>
                <div class="nombre">Silla Rimax Kids<img onmouseover="min69()" onmouseout="offmin69()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor70">600</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor70\',this.value,\'subtotal70\');" autocomplete="off">
                <div class="subtotal" id="subtotal70"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura77"><img alt="miniatura" src="images/miniaturas/sillatiffany.jpg" /></span>
                <div class="nombre">Silla Ejecutiva Rodachines<img onmouseover="min77()" onmouseout="offmin77()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor78">40000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor78\',this.value,\'subtotal78\');" autocomplete="off">
                <div class="subtotal" id="subtotal78"></div>
                <div class="repo">Valor de reposición: 290000</div>


                <!-- Final Categroría MESAS - SILLAS -->

                <!-- Inicio Categroría MANTELERIA -->
                <div class="titulo_categoria">MANTELERIA</div>
                <div class="subt_categoria nombre_t">Nombre</div>
                <div class="subt_categoria valor_t">Vista</div>
                <div class="subt_categoria valor_t">Valor C/U</div>
                <div class="subt_categoria cantidad_t">Cant.</div>
                <div class="subt_categoria subtotal_t">Subtotal</div>

                <span id="miniatura35" class="primeraimg"><img alt="miniatura" src="images/miniaturas/mantel10ptos.jpg" /></span>
                <div class="nombre">Mantel tablón blanco <img onmouseover="min35()" onmouseout="offmin35()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor36">7000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor36\',this.value,\'subtotal36\');" autocomplete="off">
                <div class="subtotal" id="subtotal36"></div>
                <div class="repo">Valor de reposición: 40000</div>

                <span id="miniatura70" class="primeraimg"><img alt="miniatura" src="images/miniaturas/mantel10ptos.jpg" /></span>
                <div class="nombre">Mantel Tablón Color<img onmouseover="min70()" onmouseout="offmin70()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor71">7000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor71\',this.value,\'subtotal71\');" autocomplete="off">
                <div class="subtotal" id="subtotal71"></div>
                <div class="repo">Valor de reposición: 40000</div>

                <span id="miniatura36"><img alt="miniatura" src="images/miniaturas/mantelredondo.jpg" /></span>
                <div class="nombre">Mantel redondo blanco. <img onmouseover="min36()" onmouseout="offmin36()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor37">7000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor37\',this.value,\'subtotal37\');" autocomplete="off">
                <div class="subtotal" id="subtotal37"></div>
                <div class="repo">Valor de reposición: 40000</div>

                <span id="miniatura37"><img alt="miniatura" src="images/miniaturas/mantelcolor.jpg" /></span>
                <div class="nombre">Mantel redondo Color <img onmouseover="min37()" onmouseout="offmin37()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor38">9000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor38\',this.value,\'subtotal38\');" autocomplete="off">
                <div class="subtotal" id="subtotal38"></div>
                <div class="repo">Valor de reposición: 45000</div>

                <span id="miniatura38"><img alt="miniatura" src="images/miniaturas/mantelcofre.jpg" /></span>
                <div class="nombre">Mantel de mesa cofre y/o rimax<img onmouseover="min38()" onmouseout="offmin38()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor39">5000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor39\',this.value,\'subtotal39\');" autocomplete="off">
                <div class="subtotal" id="subtotal39"></div>
                <div class="repo">Valor de reposición: 25000</div>

                <span id="miniatura39"><img alt="Vista previa no disponible" src="images/miniaturas/cubremantelcolor.jpg" /></span>
                <div class="nombre">Tapa cubremantel Color <img onmouseover="min39()" onmouseout="offmin39()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor40">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor40\',this.value,\'subtotal40\');" autocomplete="off">
                <div class="subtotal" id="subtotal40"></div>
                <div class="repo">Valor de reposición: 12000</div>

                <span id="miniatura71"><img alt="Vista previa no disponible" src="images/miniaturas/cubremantelcolor.jpg" /></span>
                <div class="nombre">Tapa cubremantel Color <img onmouseover="min71()" onmouseout="offmin71()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor72">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor72\',this.value,\'subtotal72\');" autocomplete="off">
                <div class="subtotal" id="subtotal72"></div>
                <div class="repo">Valor de reposición: 12000</div>

                <span id="miniatura71"><img alt="Vista previa no disponible" src="images/miniaturas/cubremantelcolor.jpg" /></span>
                <div class="nombre">Tapa Cubremantel Cuadros<img onmouseover="min71()" onmouseout="offmin71()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor72">4000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor72\',this.value,\'subtotal72\');" autocomplete="off">
                <div class="subtotal" id="subtotal72"></div>
                <div class="repo">Valor de reposición: 25000</div>

                <span id="miniatura40"><img alt="Vista previa no disponible" src="images/miniaturas/tapavelo.jpg" /></span>
                <div class="nombre" id="valor">Tapa de velo <img onmouseover="min40()" onmouseout="offmin40()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor41">4500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor41\',this.value,\'subtotal41\');" autocomplete="off">
                <div class="subtotal" id="subtotal41"></div>
                <div class="repo">Valor de reposición: 10000</div>

                <span id="miniatura41"><img alt="miniatura" src="images/miniaturas/faldonblanco.jpg" /></span>
                <div class="nombre">Faldon Blanco<img onmouseover="min41()" onmouseout="offmin41()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor42">12000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor42\',this.value,\'subtotal42\');" autocomplete="off">
                <div class="subtotal" id="subtotal42"></div>
                <div class="repo">Valor de reposición: 80000</div>

                <span id="miniatura42"><img alt="miniatura" src="images/miniaturas/caminobrocado.jpg" /></span>
                <div class="nombre">Camino brocado <img onmouseover="min42()" onmouseout="offmin42()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor43">5000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor43\',this.value,\'subtotal43\');" autocomplete="off">
                <div class="subtotal" id="subtotal43"></div>
                <div class="repo">Valor de reposición: 13000</div>

                <span id="miniatura43"><img alt="miniatura" src="images/miniaturas/forrosillast.jpg" /></span>
                <div class="nombre">Forro silla Estándar <img onmouseover="min43()" onmouseout="offmin43()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor44">1200</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor44\',this.value,\'subtotal44\');" autocomplete="off">
                <div class="subtotal" id="subtotal44"></div>
                <div class="repo">Valor de reposición: 25000</div>

                <span id="miniatura44"><img alt="miniatura" src="images/miniaturas/forrosillamul.jpg" /></span>
                <div class="nombre">Forro silla multiusos <img onmouseover="min44()" onmouseout="offmin44()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor45">1600</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor45\',this.value,\'subtotal45\');" autocomplete="off">
                <div class="subtotal" id="subtotal45"></div>
                <div class="repo">Valor de reposición: 25000</div>

                <span id="miniatura45"><img alt="miniatura" src="images/miniaturas/fajoncolor.jpg" /></span>
                <div class="nombre">Fajón (moño/cinta) de color <img onmouseover="min45()" onmouseout="offmin45()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor46">550</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor46\',this.value,\'subtotal46\');" autocomplete="off">
                <div class="subtotal" id="subtotal46"></div>
                <div class="repo">Valor de reposición: 4000</div>

                <span id="miniatura46"><img alt="miniatura" src="images/miniaturas/muselinacolor.jpg" /></span>
                <div class="nombre">Muselina color blanco <img onmouseover="min46()" onmouseout="offmin46()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor47">900</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor47\',this.value,\'subtotal47\');" autocomplete="off">
                <div class="subtotal" id="subtotal47"></div>
                <div class="repo">Valor de reposición: 13000</div>

                <span id="miniatura47"><img alt="miniatura" src="images/miniaturas/panioletacolor.jpg" /></span>
                <div class="nombre">Pañoleta de color <img onmouseover="min47()" onmouseout="offmin47()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor48">1100</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor48\',this.value,\'subtotal48\');" autocomplete="off">
                <div class="subtotal" id="subtotal48"></div>
                <div class="repo">Valor de reposición: 10000</div>

                <span id="miniatura48"><img alt="miniatura" src="images/miniaturas/servilletablanca.jpg" /></span>
                <div class="nombre">Servilleta blanca <img onmouseover="min48()" onmouseout="offmin48()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor49">600</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor49\',this.value,\'subtotal49\');" autocomplete="off">
                <div class="subtotal" id="subtotal49"></div>
                <div class="repo">Valor de reposición: 3500</div>

                <span id="miniatura49"><img alt="miniatura" src="images/miniaturas/servilletacolor.jpg" /></span>
                <div class="nombre">Servilleta de color <img onmouseover="min49()" onmouseout="offmin49()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor50">550</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor50\',this.value,\'subtotal50\');" autocomplete="off">
                <div class="subtotal" id="subtotal50"></div>
                <div class="repo">Valor de reposición: 10000</div>

                <span id="miniatura72"><img alt="miniatura" src="images/miniaturas/servilletacolor.jpg" /></span>
                <div class="nombre">Servilleta en Velo<img onmouseover="min72()" onmouseout="offmin72()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor73">800</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor73\',this.value,\'subtotal73\');" autocomplete="off">
                <div class="subtotal" id="subtotal73"></div>
                <div class="repo">Valor de reposición: 8000</div>


                <!-- Final Categroría MANTELERIA -->

                <!-- Inicio Categroría DECORACION -->
                <div class="titulo_categoria">DECORACION</div>
                <div class="subt_categoria nombre_t">Nombre</div>
                <div class="subt_categoria valor_t">Vista</div>
                <div class="subt_categoria valor_t">Valor C/U</div>
                <div class="subt_categoria cantidad_t">Cant.</div>
                <div class="subt_categoria subtotal_t">Subtotal</div>

                <span id="miniatura50" class="primeraimg"><img alt="miniatura" src="images/miniaturas/cofresobres.jpg" /></span>
                <div class="nombre">Cofre lluvia de sobres <img onmouseover="min50()" onmouseout="offmin50()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor51">7000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor51\',this.value,\'subtotal51\');" autocomplete="off">
                <div class="subtotal" id="subtotal51"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura51"><img alt="miniatura" src="images/miniaturas/bombonacristal.jpg" /></span>
                <div class="nombre">Bombona de cristal <img onmouseover="min51()" onmouseout="offmin51()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor52">1000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor52\',this.value,\'subtotal52\');" autocomplete="off">
                <div class="subtotal" id="subtotal52"></div>
                <div class="repo">Valor de reposición: 3000</div>

                <span id="miniatura52"><img alt="miniatura" src="images/miniaturas/candelabrocristal.jpg" /></span>
                <div class="nombre">Solitario en cristal <img onmouseover="min52()" onmouseout="offmin52()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor53">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor53\',this.value,\'subtotal53\');" autocomplete="off">
                <div class="subtotal" id="subtotal53"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura52"><img alt="miniatura" src="images/miniaturas/candelabrocristal.jpg" /></span>
                <div class="nombre">Solitario en cristal <img onmouseover="min52()" onmouseout="offmin52()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor53">3000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor53\',this.value,\'subtotal53\');" autocomplete="off">
                <div class="subtotal" id="subtotal53"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura73"><img alt="miniatura" src="images/miniaturas/candelabrocristal.jpg" /></span>
                <div class="nombre">Cilindro en Cristal Mediano <img onmouseover="min73()" onmouseout="offmin73()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor74">3500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor74\',this.value,\'subtotal74\');" autocomplete="off">
                <div class="subtotal" id="subtotal74"></div>
                <div class="repo">Valor de reposición: 15000</div>

                <span id="miniatura74"><img alt="miniatura" src="images/miniaturas/candelabrocristal.jpg" /></span>
                <div class="nombre">Cilindro en Cristal Pequeño<img onmouseover="min74()" onmouseout="offmin74()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor75">3500</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor75\',this.value,\'subtotal75\');" autocomplete="off">
                <div class="subtotal" id="subtotal75"></div>
                <div class="repo">Valor de reposición: 15000</div>

                <span id="miniatura53"><img alt="miniatura" src="images/miniaturas/cilindrocristal.jpg" /></span>
                <div class="nombre">Cilindro en cristal grande<img onmouseover="min53()" onmouseout="offmin53()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor54">4000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor54\',this.value,\'subtotal54\');" autocomplete="off">
                <div class="subtotal" id="subtotal54"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura54"><img alt="miniatura" src="images/miniaturas/antorchabambu.jpg" /></span>
                <div class="nombre">Antorcha en bambú <img onmouseover="min54()" onmouseout="offmin54()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor55">8000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor55\',this.value,\'subtotal55\');" autocomplete="off">
                <div class="subtotal" id="subtotal55"></div>
                <div class="repo">Valor de reposición: 20000</div>

                <span id="miniatura55"><img alt="miniatura" src="images/miniaturas/antorchahierro.jpg" /></span>
                <div class="nombre">Antorcha en hierro <img onmouseover="min55()" onmouseout="offmin55()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor56">14000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor56\',this.value,\'subtotal56\');" autocomplete="off">
                <div class="subtotal" id="subtotal56"></div>
                <div class="repo">Valor de reposición: 60000</div>

                <span id="miniatura56"><img alt="miniatura" src="images/miniaturas/candelabro15.jpg" /></span>
                <div class="nombre">Candelabro 15 años <img onmouseover="min56()" onmouseout="offmin56()" class="captura" height="16" alt="ver..." src="images/img.jpg" /></div>
                <div class="valor" id="valor57">20000</div>
                <input class="cantidad" type="text" onkeyup="sum(\'valor57\',this.value,\'subtotal57\');" autocomplete="off">
                <div class="subtotal" id="subtotal57"></div>
                <div class="repo">Valor de reposición: 100000</div>
                <!-- Final Categroría DECORACION -->

                <div class="cont_resultados">
                <div class="gran_total"></div>
                <div class="titulo_gran_total"><p>Gran Total:</p></div>
                </div>
            </form>
            <hr>
		    <div class="requisitos">
            	<h2 class="titulo">REQUISITOS DE CUMPLIMIENTO EN CASO DE NO ACEPTAR ABSTENGASE DE CONTINUAR EN EL PROCESO</h2>
            	<span>Este documento lo obliga solidariamente a cumplir unos requisitos necesarios para su debida contratacion en caso de no cumplir  
				<br />
				<br />
				Eventos Casa Morella anulara el proceso
				</span>
				<h3 class="titulo">REQUISITOS</h3>
				<p>
					* Ser mayor de edad. Presentar cedula original y copia.
				</p>
				<p>
					* Copia de 2 recibos de servicios públicos resientes (La dirección debe coincidir con los datos de residencia del solicitante).

				</p>
				<p>
					* 2 referencias personales con numeros telefonicos fijo para su debida confirmacion.

				</p>
				<p>
					* El solicitante debe firmar con huella este contrato de carácter legal.

				</p>

				<h3 class="titulo">TRANSPORTE</h3>
				<p>
					* En caso de requerir nuestro transporte la entrega se realizara en el lugar del evento siempre y cuando no supere un segundo piso y no exceda 20 metros del lugar de descargue, de lo contrario el cliente debe asumir su recorrido o incurrir en gastos adicionales para su puesta.


				</p>
				<p>
					* Recuerde que no incluye montaje ni desmontaje.

				</p>


				<h3 class="titulo">FORMAS DE PAGO</h3>
				<p>
					* El alquiler debe ser separado con un 30% y un 70% contra-entrega.

				</p>
				<p>
					* En ningun caso se hacen devoluciones de dinero despues de realizar el contrato. 

				</p>
				<p>
					* Adicionalmente se cobrara un deposito de acuerdo a su solicitud, el cual sera devuelto a conformidad. 

				</p>


				<h3 class="titulo">RESPONSABILIDADES</h3>
				<p>
					* El cliente se compromete a revisar y entregar en buenas condiciones el alquiler.

				</p>
				<p>
					* El cliente se compromete asumir los valores de reposicion establecidos en este contrato ya sea por roctura, perdida o maltrato.

				</p>
				<p>
					* El menaje debe entregarse limpio en caso contrario debera pagar $150 por pieza.

				</p>
				<p>
					* La manteleria no debe ser expuesta a manchas, lluvia cosmica, tintas, parafina, elementos cortopunzantes u otros que causen su daño.

				</p>
				<p>
					* El alquiler tendra un tiempo de duracion por 12 horas

				</p>
				<p>
					* El cliente debe entregar el alquiler tal y como lo recibe " canastillas, bolsas u otros elementos puestos por Eventos Casa Morella, en caso contrario se cobrara un adicional de desmonte.

				</p>


	    	</div>
		</section>
	</div>
';


?>