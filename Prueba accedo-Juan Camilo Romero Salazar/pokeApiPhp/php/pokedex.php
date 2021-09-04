<!DOCTYPE html>
<html>
<head>
	<title>Menú</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/newStyles.css">
	<script src="../assets/js/newScript.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="../assets/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
    <div class="container vh-100">
    	<div class="pokemons_container justify-content-center row m-0 border">
    	    <h1 class="col-12 center title">PokeDex</h1> 
    	</div> 
    	<nav aria-label="Page navigation example">
		  <ul class="pagination">
		    <li id="previous" class="page-item w-50 m-0"><a class="page-link" href="#" onclick="previous()">Anterior</a></li>
		    <li id="next" class="w-50 m-0"><a class="page-link bg-danger center" href="cerrarSesion.php">Cerrar sesión</a></li>
		    <li id="next" class="w-50 m-0"><a class="page-link" href="#" onclick="next()">Siguiente</a></li>
		  </ul>
		</nav>	
    </div>
</body>
</html>