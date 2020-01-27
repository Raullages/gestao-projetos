const url_base = 'http://localhost/incentiva-master/'

function exibeInformacaoProjeto (id) {

	let codigo = `codigo=${id}`

	httpGet('layout/components/comentarios/main.php', codigo).then(item => {
		document.getElementById('card-informacao').innerHTML = item
	
	})

}

function excluirProjeto (id) {

	let excluir = confirm("Deseja realmente excluir Projeto?")

	if(excluir){

		httpGet('controllers/projeto/excluir.php/', `codigo=${id}`).then(item =>{
			if(item){
				console.log(item)
			}
			// location.href = './../layout/main.php'
		})
	}

	// if(excluir){
	// 	alert("Item excluído com sucesso")
	// 	location.href = './../models/projeto/excluir.php?codigo=' + id
	// }
}

function salvarComentario ( id ) {

	let comentario = document.getElementById('texto_coment')
	let responsavel = document.getElementById('resp-tecnico')
	
	let data = {
		identificador: id,
		comentario_post: comentario.value.trim(),
		rt: responsavel.value
	}

	let addComentario = document.getElementsByClassName('.coment-obs')

	addComentario.innerHTML = '<span>Enviando Comentário</span>'

	httpPost('./../models/comentarios/main.php', data).then(item => {
		
		addComentario.innerHTML = item

	})

}

function httpGet(url, data) {

	return new Promise((resolve, reject) => {
		$.ajax({
			url: url_base + url,
			type: 'GET',
			data: data,
			success: (response) => {
				resolve(response)
			},
			error: (response) => {
				reject(response)
			}
		})
	})
}

function httpPost(url, data) {

	return new Promise ((resolve) => {
		$.post(url, data, response => {
			resolve(response)
		})
	})

}

function validacao(){
	if(login.nome.value == ""){
		alert("Insira seu nome!");
		login.nome.focus();
		return false;
	}else if(login.senha.value==""){
		alert("Insira sua senha!");
		login.senha.focus();
		
	}else{
		login.submit();
	}
}

function focus(){
	login.nome.focus();	
}

// 	/*IMAGEM COM EMAILS DA ABA SERVIÇOS*/
// 	$('.rodape #email').bind('click', function(){

// 		$('.bg-img').fadeIn('slow');
// 		$('.emails').fadeIn('slow');

// 	});

// 	$('.bg-img').bind('click',function(){

// 		$('.emails').fadeOut('slow');
// 		$(this).fadeOut('slow');
// 		$('.cadastrar-novo-projeto').fadeOut('slow');
// 	});

// 	$('.teste').bind('mouseover',function(){
// 		$(this).css('background-color','#eee');
// 		$(this).css('color','#000');
// 		$(this).css('cursor','pointer');

// 		$(this).bind('mouseout',function(){
// 			$(this).css('background-color','#fff');
// 			$(this).css('color','#000');
// 			$(this).css('cursor','default');
// 			$(this).css('z-index','0');

// 		});
// 	});

// 	$('.editar').bind('mouseover',function(){
// 		$(this).css({
// 			color: 'red',

// 		});

// 		$(this).bind('mouseout',function(){
// 			$(this).css({
// 				color: '#337ab7'
// 			});
// 		})

// 	})

// });
