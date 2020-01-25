$(document).ready(function(){


	$('#salvar').bind('click',function(){
		var id = $('#id').val();
		var comentario = $('#texto_coment').val();
		var responsavel_tecnico = $('#resp-tecnico').val();

		// alert(id + comentario + responsavel_tecnico);
		// alert(responsavel_tecnico+' '+comentario);

		$('.coment-obs').html("<span>Enviando comentario</span>");

		$.post('salvar-comentario.php', {
			identificador: id,
			comentario_post: comentario,
			rt: responsavel_tecnico,

		},function(res_cadastra){
			$('.coment-obs').html(res_cadastra);

		});

	});	

});
