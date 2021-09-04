<?php
    
    //Conectamos con la base de datos
	include("conexionBD.php");
    
    //Asignamos las variables que se envían desde el formulario login
	$email = $_POST["email"];
	$password = $_POST["pass"];
	$password_encriptada = sha1($password);
    
    //Consultamos los datos en la base de datos
	$consulta = $conexion->query("SELECT Documento FROM usuarios WHERE email='$email' AND password='$password_encriptada' ");
	$datos = $consulta->num_rows;
    
    //Se mira si la variable datos si contiene alguna sesion
	if ($datos > 0){
		//Se ponen los datos de la sesión en modo de arreglo
        $row = $consulta->fetch_assoc();
	    $_SESSION["sesion_usuarios"] = $row[0];
        header("Location: pokedex.php");
	}else{ //En caso de que la variable datos esté vacía se devuelve al archivo index.php
       echo "<script>
                alert(Usuario o contraseña incorrecta');
                window.location = 'http://localhost/pokeApiPhp/';
             </script>";
	}

?>