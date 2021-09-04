<!DOCTYPE html>
<html>
<head>
	<title>Pokemon</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/newStyles3.css">
</head>
<body>
	<div class="container vh-100">
    	<div class="row pokemons_container justify-content-center m-0 p-4">
    	</div> 
    </div>
   
    		<script type="text/javascript" charset="utf-8" async defer>
            	var pokemon_container;

				window.onload = function(){
					pokemon_container = document.querySelector(".pokemons_container");
				}

				//crearPokemon recibe la variable id para determinar que pokemon se va a solicitar
				function crearPokemon(id){
					fetch("https://pokeapi.co/api/v2/pokemon/"+id+"/")
					.then(response => response.json())
					.then(data => crearMenuPokemon(data,id))
				}

				function crearMenuPokemon(pokemon,id){
				    text_html=`
				              <h1 class="col-8 center mb-0">`+pokemon.name+`</h1>
				              <div class="pokemon_container col-8 p-2 center">
					    	    	<div class="content_image">
						    	        <img src="`+pokemon.sprites.other["official-artwork"].front_default+`" alt="">    	    		
						    	    </div>
				    	      </div> 
				    	      <div class="stats_pokemon col-8 center">
				              		<h2>PORCENTAJES</h2>
				              		<div class="row m-0 p-1">
					              		<div class="align col-6 content_stats m-0">
					              			<h3><sapn>`+pokemon.stats[1].stat.name+`:</span> `+pokemon.stats[1].base_stat+`xp</h3>
					              			<h3><sapn>`+pokemon.stats[2].stat.name+`:</span> `+pokemon.stats[2].base_stat+`xp</h3>
					              			<h3><sapn>`+pokemon.stats[3].stat.name+`:</span> `+pokemon.stats[3].base_stat+`xp</h3>
					              		</div>
					              		<div class="align col-6 content_stats m-0 ps-5">
					              			<h3><sapn>`+pokemon.stats[4].stat.name+`:</span> `+pokemon.stats[4].base_stat+`xp</h3>
					              			<h3><sapn>`+pokemon.stats[5].stat.name+`:</span> `+pokemon.stats[5].base_stat+`xp</h3>
					              			<ul class="pagination">
											    <li id="next" class="w-50 m-0"><a class="page-link" href="pokedex.php">Volver al menú</a></li>
											</ul>
					              		</div>
					              	</div>
				    	      </div>  
				              `
				    pokemon_container.innerHTML = pokemon_container.innerHTML + text_html;
				}
				crearPokemon(<?php enlacesStats() ?>);
    		</script>
    		<?php
            	function enlacesStats(){
			   	    $id = $_GET["action"];
				    
				    echo `<script>
				          	crearPokemon(`.$id.`);
				          </script>`;
		                 
				} 
    		?>

</body>
</html>