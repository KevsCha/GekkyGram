<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
			<h1>Registro</h1>
			<!-- <span>or use your email for registration</span> -->
			<input type="text"  name="nombre" placeholder="Nombre" />
			<input type="email" name="correo" placeholder="Correo" />
			<input type="password" name="contraseña" placeholder="Contraseña" />
			<button>Registrar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Iniciar sesion</h1>
			<input type="email" placeholder="Correo"/>
			<input type="password" placeholder="Contraseña"/>
			<a href="#">Olvidate la contraseña</a>
			<button>Iniciar Secion</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>¿Ya tienes una cuenta?</h1>
				<p>inicia sesion para entrar a tu pagina</p>
				<button class="ghost" id="signIn">Iniciar sesion</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¿aun no tienes una cuenta?</h1>
				<p>registrate para que puedas iniciar sesion</p>
				<button class="ghost" id="signUp">Crera cuenta</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>

   <script src="js.js"></script>
</body>
</html>