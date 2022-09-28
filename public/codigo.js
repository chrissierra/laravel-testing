// JavaScript source code


var fechaHora = new Date();
document.getElementById("reloj").innerHTML = fechaHora; //agrega hora en el html

function actualizar() { //funci�n del temporizador
	mihora = new Date(); //recoger hora actual
	mireloj = document.getElementById("reloj"); //buscar elemento reloj
	mireloj.innerHTML = mihora; //incluir hora en elemento
}
setInterval(actualizar, 1000); //iniciar temporizador


function agregarNoticia(e){
	let tituloInput = document.getElementById('tituloInput');
	let cuerpoNoticiaInput = document.getElementById('cuerpoNoticiaInput');
	let contenedorPrincipalNoticias = document.getElementById('contenedorPrincipalNoticias');

	if(tituloInput.value.length > 0 && cuerpoNoticiaInput.value.length > 0 ){
		let contenidoNuevo = `<div class="card col-sm">
		<!-- <img class="img-fluid" src="2.jpeg"> -->
		<div class="card-body">
		<h2 class="card-title">${tituloInput.value}</h2>
		<h5>Sección Mundo</h5>
		<p class="card-text">
		${cuerpoNoticiaInput.value}
		</p>
		<p class="card-text"><small class="text-muted">Last updated 3 mins ag	o</small></p>
		</div>
		</div>`

		contenedorPrincipalNoticias.insertAdjacentHTML('afterbegin', contenidoNuevo);

		tituloInput.value = ''
		cuerpoNoticiaInput.value = ''
	}else{
		return alert('Debes escribir los campos titulo y cuerpo noticia')
	}


}

