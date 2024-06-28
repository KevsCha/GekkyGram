
const item = document.querySelector('.b');
let boton = document.getElementById('lupa');
let buscador = document.querySelector('.buscador');
let usuario = document.querySelector('.mensaje');
let mensaje = document.querySelector('.usuario');
let itemusuario = document.querySelector('.item-usuario');
let itemMensaje = document.querySelector('.i-mensaje');
let puntos = document.querySelector(".punto");
let itemPuntos = document.querySelector(".itemPuntos");

let cajasubirfoto = document.querySelector(".cajaDeSubirFoto");
let x =  document.querySelector(".x");
let subir = document.querySelector(".seguir"); 

boton.addEventListener('click', () => {
	item.classList.toggle("b-visible");
    buscador.classList.toggle("buscador-v");
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


