// JavaScript Document
$(document).ready(function(){
	$("[name='data']").mask("9999/99/99");
	$("#formulario").validate({
		rules:{
			nome:{
				required: true,
				minlength:3
			},
			login:{
				required: true,
				minlength:3
			},
			senha:{
				required: true,
				minlength:6,
				maxlength:12
			},
			confsenha:{
				equalTo: "#senha"
			},
			email:{
				required: true,
				email: true
			},
			data:{
				required: true,
				date: true
			},
			endereco:{
				required: true
			},
			telefone:{
				required: true,
			}
		},
		messages:{
			nome:{
				required: "*O campo deve ser preenchido",
				minlength: "No mínimo 3 caracteres"
			},
			login:{
				required: "*O campo deve ser preenchido",
				minlength: "No mínimo 3 caracteres"
			},
			senha:{
				required: "*O campo deve ser preenchido",
				minlength: "No mínimo 6 caracteres",
				maxlength: "No máximo 12 caracteres"
			},
			confsenha:{
				equalTo: "Deve ser igual a senha"
			},
			email:{
				required: "*O campo deve ser preenchido",
				email: "*Insira um e-mail válido"
			},
			data:{
				required: "*O campo deve ser preenchido",
				date: "Insira uma data válida"
			},
			endereco:{
				required: "*O campo deve ser preenchido"
			},
			telefone:{
				required: "*O campo deve ser preenchido"
			}
		}
	});
});