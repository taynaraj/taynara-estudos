var tempoInicial = $("#tempo-digitacao").text();
var campo = $(".campo-digitacao");

$(document).ready(function(){
	atualizaTamanhoFrase();
	inicializaContadores();
	inicializaCronometro();
	inicializaMarcador();
	$("#botao-reiniciar").click(reiniciaJogo);
})

function atualizaTamanhoFrase(){
	var frase = $(".frase").text();
	var numeroPalavras = frase.split(" ").length;
	var tamanhoDaFrase = $("#tamanho-frase");
	tamanhoDaFrase.text(numeroPalavras);
}


function inicializaContadores(){
	campo.on("input",function(){
		var conteudo = campo.val();

		$("#botao-reiniciar").attr("disabled",true);

		var qtdPalavras = conteudo.split(/\S+/).length -1;
		$("#contador-palavras").text(qtdPalavras);

		var qtdCaracteres= conteudo.length;
		$("#contador-caracteres").text(qtdCaracteres);
	});	
}


function inicializaCronometro(){
	var tempoRestante = $("#tempo-digitacao").text();
	campo.one("focus",function(){
	var cronometroID = setInterval(function(){
		tempoRestante--;
		console.log(tempoRestante);
		$("#tempo-digitacao").text(tempoRestante);
		if(tempoRestante<1){
			clearInterval(cronometroID);
			finalizaJogo();
			}
		},1000);
	});
}
function finalizaJogo(){
	campo.attr("disabled",true);
	$("#botao-reiniciar").attr("disabled",false);
	campo.toggleClass("campo-desativado");
	inserePlacar();
}

function inicializaMarcador(){
	var frase =$(".frase").text();
	campo.on("input",function(){
		var digitado =campo.val();
		var comparavel = frase.substr(0,digitado.length);
		if(digitado == comparavel){
			campo.addClass("campo-certo");
			campo.removeClass("campo-errado");
		}else{
			campo.addClass("campo-errado");
			campo.removeClass("campo-certo");
		}
	});
}

function reiniciaJogo(){
	campo.attr("disabled",false);
	campo.val("");
	$("#contador-palavras").text("0");
	$("#contador-caracteres").text("0");
	$("#tempo-digitacao").text(tempoInicial);
	inicializaCronometro();
	campo.toggleClass("campo-desativado");
	campo.removeClass("campo-certo");
	campo.removeClass("campo-errado");

}
