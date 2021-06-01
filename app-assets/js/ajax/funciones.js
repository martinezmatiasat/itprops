addEventListener('load', inicializarEventos, false);

function inicializarEventos() {
   var ob = document.getElementsByClassName('nav-catalogo');
   //console.log(ob[0]);
   for (var f = 0; f < ob.length; f++) {
      console.log(ob[0]);
      ob[f].addEventListener('click', presionEnlace, false);
   }
}

function presionEnlace(e) {
   e.preventDefault();
   var url = this.getAttribute('href');
   console.log(url);
   cargarHoroscopo(url);
}

function retornarDatosJquery() {
   var cad = '';
   cad = $('#form-id').serialize();
   return cad;
}

function retornarDatos() {
   var cad = '';
   var form = document.querySelector("#form-id");
   var data = new FormData(form);
	for (var key of data.keys()) {
		cad += data.get(key);
	}
	return cad;
}

var conexion1;

function cargarHoroscopo(url) {
   conexion1 = new XMLHttpRequest();
   conexion1.onreadystatechange = procesarEventos;
   conexion1.open("POST", url, true);
   //conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
   
   conexion1.send();
}

function procesarEventos() {
   var contenedor = document.getElementById("table-container");
   if (conexion1.readyState == 4) {
      contenedor.innerHTML = conexion1.responseText;
   } else {
      contenedor.innerHTML = 'Cargando...';
   }
}