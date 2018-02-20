var pacientes = document.querySelectorAll(".paciente");

var tabela = document.querySelector("table");

tabela.addEventListener("dblclick",function(event){
	event.target.parentNode.classList.add("fadeOut");
	setTimeout(function(){
		event.target.parentNode.remove();
	},200);
	//paiDoEvento.remove();
});
//pacientes.forEach(function(paciente){
//	paciente.addEventListener("dblclick",function(){
//		//console.log("Fui clicado com o duplo click");
//		this.remove(); //ou 'paciente.remove();'
//	});
//});

