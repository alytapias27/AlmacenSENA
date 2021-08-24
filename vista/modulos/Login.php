<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ALMACENSENA</title>
</head>
	<body>
		<div id="login-button">
			<img src="https://dqcgrsy5v35b9.cloudfront.net/cruiseplanner/assets/img/icons/login-w-icon.png"></img>
		</div>

		<div id="container">
			<h1>Iniciar Sesion</h1>
			<span class="close-btn">
				<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
			</span>

			<form>
				<input type="text" name="txtCorreo" placeholder="Correo">
				<input type="password" name="txtContraseña" placeholder="Contraseña">
				<a href="#">Ingresar</a>
				<button type="submit">INGRESAR</button>
			</form>
		</div>

		<!-- Forgotten Password Container -->
		<div id="forgotten-container">
			<h1>Forgotten</h1>
			<span class="close-btn">
				<img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
			</span>

			<form>
				<input type="email" name="email" placeholder="E-mail">
				<a href="#" class="orange-btn">Get new password</a>
			</form>
		</div>
		
		<?php
			$objAcesso = new ControladorUsuario();
			$objAcesso -> ctrConsultarUsuario();
		?>
	</body>
</html>

