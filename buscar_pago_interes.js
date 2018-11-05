
$(buscar());

function buscar(consulta){
	$.ajax({
		url: 'php/buscar_pago_interes.php',
		type: 'POST',
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error"); 
	})
}


$(document).on('keyup', '#caja_busqueda', function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar(valor);
	} else{
		buscar();
	}
});

