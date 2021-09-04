<?php

    //conexión a base de datos
	include "conexionBD.php";
  //Se realiza la asignación de las variables
	$documento = $_POST["Documento"];
	$nombre = $_POST["Nombre"];
	$apellido = $_POST["Apellido"];
	$telefono = $_POST["Tel"];
	$email = $_POST["Email"];
	$password = $_POST["Pass"];
	$password_encriptada = sha1($password);
    //Se busca que los datos ingresado de documento y email no esten repetidos en la base de datos
    $sqlUser ="SELECT * FROM usuarios WHERE  Documento = '$documento' AND email='$email'";
    $resultadoUser = $conexion->query($sqlUser);
    $filas = $resultadoUser->num_rows;
    //Si ya están repetidos se devuelve al index.php
    if($filas > 0){
    	echo   "<script>
                   alert('El usuario ya existe');
                   window.location = 'http://localhost/pokeApiPhp/';
                </script>";
    	     
    }else{//Si no están repetidos se insertan los datos en la base de datos
    	$sqlUsuario = "INSERT INTO usuarios(Documento, Nombres, Apellidos, Teléfono, email, password) VALUES('$documento','$nombre','$apellido','$telefono','$email','$password_encriptada')";
    	$resultadoUsuario = mysqli_query($conexion, $sqlUsuario);
    	if($resultadoUsuario > 0){//Se le comunica al usuario si se registro exitosamente o no
    		echo "<script>
                   alert('Registro exitoso');
                   window.location = 'http://localhost/pokeApiPhp/';
                  </script>";
    	}else{
    		echo "<script>
                   alert('Registro fallido');
                   window.location = 'http://localhost/pokeApiPhp/';
                  </script>";
    	}
    } 

?>