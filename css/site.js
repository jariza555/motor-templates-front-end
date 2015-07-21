
function displaypub(){
	$('#ofertado').css('top','-8px');
	$('body').css('top','0px');
	$('.cont_btnes').css('display','none');
	$('.elemento_publicitario').css('display','inline-block');
	$('.cerrar_pub').css('display','block');
}

function nodisplaypub(){
	$('.cont_btnes').fadeIn(1000);
	$('#ofertado').css('top','1px');
	$('body').css('top','-131px');
	$('.elemento_publicitario').css('display','none');
	$('.cerrar_pub').css('display','none');
}

