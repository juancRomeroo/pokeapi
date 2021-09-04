<?php 

	session_start();
	if ( empty($_SESSION) == false ) {
		header("Location: php/pokedex.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/newStyles2.css">
</head>
<body>
    <div class="container_menu container p-0 vh-100">
    	<div class="row m-0">
    		<div class="cont_registro col-4 p-4">
	    		<h2 class="center mb-5">REGISTRO</h2>
	    		<form id="form_registro" action="php/registroUsuarios.php" method="post" accept-charset="utf-8">
	                <div class="form-floating mb-3 position-relative">
						<input type="number" class="form-control" id="input_documento" name="Documento" placeholder="documento" required>
						<label for="input_documento">Documento</label>
					</div>
	                <div class="form-floating mb-3 position-relative">
						<input type="text" class="form-control" id="input_nombre" name="Nombre" placeholder="nombre" required>
						<label for="input_nombre">Nombre</label>
					</div>
					<div class="form-floating mb-3 position-relative">
						<input type="text" class="form-control" id="input_apellidos" name="Apellido" placeholder="apellido" required>
						<label for="input_apellidos">Apellidos</label>
					</div>
					<div class="form-floating mb-3 position-relative">
						<input type="number" class="form-control" id="input_telefono" name="Tel" placeholder="telefono" required>
						<label for="input_telefono">Teléfono</label>
					</div>
					<div class="form-floating mb-3 position-relative">
						<input type="email" class="form-control" id="input_email_reg" name="Email" placeholder="email" required>
						<label for="input_email_reg">Email</label>
					</div>
					<div class="form-floating mb-3 position-relative">
						<input type="password" class="form-control" id="input_password_reg" name="Pass" placeholder="Password" required>
						<label for="input_password_reg">Contraseña</label>
					</div>
					<div class="center mt-5">
					    <button class="btn btn-primary w-100" name="registrar" type="submit">Registrarse</button>
					</div>
	    	    </form>
	    	</div>
	    	<div class="login col-8 p-4">
	    		<h2 class="h-25 mt-2 mb-0 center">Welcome To PokeDex!</h2>
	    		<div class="cont_login h-50 w-50 center p-4">
	    			<h3>Log in</h3>
	    			<form id="form_login" action="php/login.php" method="post" accept-charset="utf-8">
	    				<div class="form-floating mb-3 position-relative">
							<input type="email" class="form-control" id="input_email" name="email" placeholder="name@example.com" required>
							<label for="input_email">Email</label>
						</div>
						<div class="form-floating mb-3 position-relative">
							<input type="password" class="form-control" id="input_password" name="pass" placeholder="name@example.com" required>
							<label for="input_password">Contraseña</label>
						</div>
						<div class="center mt-2">
						    <button class="btn btn-primary w-100" type="submit">Log in!</button>
						</div>
	    			</form>
	    		</div>
	    	</div>
    	</div>	
    </div>
</body>
</html>