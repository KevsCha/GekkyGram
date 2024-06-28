<?php

session_start();

require 'config.php';

if (isset($_SESSION['welcome_usuario'])) {
	header('location:principal.php');
}

?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    

<div class="container" id="container">
	<div class="form-container sign-up-container">
	<form method='POST' action="#" enctype='multipart/form-data'>
			<h1>Registro</h1>
			<!-- <span>or use your email for registration</span> -->
			<input type="text"  name="name" placeholder="Nombre" />
			<input type="email" name="email" placeholder="Correo" />
			<input type="password" name="password" placeholder="Contraseña" />
			<input type="file" name=img />
			<button type="submit" name="regis">Registrar</button>
			<?php

	if (isset($_POST['regis'])) {
		
		$id=rand(1,9999);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$img=addslashes(file_get_contents($_FILES['img']['tmp_name']));
		
		$comprobar=mysqli_num_rows(mysqli_query($conect,"SELECT email FROM user WHERE email = '$email' "));
		print_r($comprobar);
		
		if($comprobar > 0){
			?>
			<script>alert('El correo Electronico se encuentra en uso');</script>
			<?php
		}else{
			?>
			<script>var x="<?php echo $email;?>"; alert('usuario "'+x+'" registrado exitosamente');console.log(x);</script>
			<?php
			$insert = mysqli_query($conect," INSERT INTO user (id,
													nombre,
													email,
													password,
													img) 
									values('$id',
											'$name',
											'$email',
											'$password',
											'$img')");
			
			//header("Location: principal.php");
		}
	}
?>
		</form>
	</div>
	<div class="form-container sign-in-container">
	<form method='POST' action="#">
			<h1>Iniciar sesión</h1>
			<input type="email" name='correo' placeholder="Correo"/>
			<input type="password" name='contrasena' placeholder="Contraseña"/>
			<a href="#">¿Olvidaste la contraseña?</a>
			<button type="submit" name="login">Iniciar Sesión</button>
	<?php
		if (isset($_POST['login'])) {
			$usuario=$_POST['correo'];
			$contra=$_POST['contrasena'];
			 
			$look=mysqli_query($conect,"SELECT * FROM user WHERE email = '$usuario' AND password ='$contra'");
			$ver=mysqli_num_rows($look);
			
			if ($ver == 1) {	

				$row=mysqli_fetch_array($look);

				if ($usuario == $row['email'] && $contra == $row['password']){
					
					$_SESSION['welcome_usuario'] = $row['nombre'];
					$_SESSION['id']=$row['id'];
					print_r($_SESSION['id']);
					header('location: principal.php');

				}		
				}else{
					echo 'Los datos ingresados no son correctos';
				}
		}
        ?>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>¿Ya tienes una cuenta?</h1>
				<p>Inicia sesión para entrar a tu cuenta</p>
				<button class="ghost" id="signIn">Iniciar Sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¿Aún no tienes una cuenta?</h1>
				<p>Registrate, ¡es gratis!</p>
				<button class="ghost" id="signUp">Crear cuenta</button>
			</div>
		</div>
	</div>
</div>


   <script src="js.js"></script>
</body>
</html>