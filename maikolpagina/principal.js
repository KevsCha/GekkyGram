
const item = document.querySelector('.b');
let boton = document.getElementById('lupa');
let buscador = document.querySelector('.buscador');
let usuario = document.querySelector('.mensaje');
let mensaje = document.querySelector('.usuario');
let itemusuario = document.querySelector('.containerUsuario');
const salir = document.querySelector('.cerrar');
let itemMensaje = document.querySelector('.i-mensaje');
let puntos = document.querySelector(".punto");
let itemPuntos = document.querySelector(".itemPuntos");
let r = document.querySelector(".r");
let divfotoPerfil =  document.querySelector(".divfotoPerfil");
let fotoPerfil =  document.querySelector(".fotoPerfil");
let fondoHeader = document.querySelector(".hd");

let cajasubirfoto = document.querySelector(".cajaDeSubirFoto");
let x =  document.querySelector(".x");
let subir = document.querySelector(".seguir"); 

boton.addEventListener('click', () => {
	item.classList.toggle("b-visible");
    buscador.classList.toggle("buscador-v");
	fondoHeader.classList.toggle("fondoBlanco");
});

boton.addEventListener('click', () => {
	r.classList.toggle("r-v");
   
});
mensaje.addEventListener('click', () => {
	itemMensaje.classList.toggle("m-visible");
});
usuario.addEventListener('click', () => {
	itemusuario.classList.toggle("u-visible");
    
});

puntos.addEventListener('click', () => {
	itemPuntos.classList.toggle("i-visible");
});

x.addEventListener('click', () => {
	cajasubirfoto.classList.toggle("subirFoto-v");
   
});

subir.addEventListener('click', () => {
	cajasubirfoto.classList.toggle("subirFoto-v");
   
});

fotoPerfil.addEventListener('click', () => {
	divfotoPerfil.classList.toggle("divfotoPerfil-g")
   
});

salir.addEventListener('click',()=>{
	window.location.href = "config2.php";
});

let vista_preliminar = (event)=>{
	let leer_img = new FileReader();
	let id_img = document.getElementById("file");


leer_img.onload = ()=>{
	if(leer_img.readyState == 2){
     id_img.src = leer_img.result;
	}
}

leer_img.readAsDataURL(event.target.files[0]);
}



