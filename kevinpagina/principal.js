
const item = document.querySelector('.b');
let boton = document.getElementById('lupa');
let buscador = document.querySelector('.buscador');
let usuario = document.querySelector('.mensaje');
const mensaje = document.querySelector('.usuario');
const salir = document.querySelector('.cerrar');
const itemusuario = document.querySelector('.containerUsuario');
let itemMensaje = document.querySelector('.i-mensaje');
let puntos = document.querySelector(".punto");
let itemPuntos = document.querySelector(".itemPuntos");
let r = document.querySelector(".r");
let divfotoPerfil =  document.querySelector(".divfotoPerfil");
let fotoPerfil =  document.querySelector(".fotoPerfil");

let cajasubirfoto = document.querySelector(".cajaDeSubirFoto");
let x =  document.querySelector(".x");
let subir = document.querySelector(".seguir"); 

boton.addEventListener('click', () => {
	item.classList.toggle("b-visible");
    buscador.classList.toggle("buscador-v");
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


