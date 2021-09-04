var pokemon_container;

var offset = 1; //Se inicia el offset en 1 para empezar a solicitar a los pokemones desde el primero
var limit = 11;//el limit es 11 para mostrar los pokemones en tandas de 12

window.onload = function(){
	pokemon_container = document.querySelector(".pokemons_container");
}

//previous le resta 12 unidades al offset para mostrar los 12 pokemones anteriores
function previous(){
	if (offset != 1) {
		pokemon_container.innerHTML = `<h1 class="col-12 center">PokeDex</h1> `;
		offset -=12;
	    pokemons(offset,limit);
	}
}
//next le suma 12 unidades al offset para mostrar los 12 pokemones siguientes
function next(){
	if (offset != 1118) {
		pokemon_container.innerHTML = `<h1 class="col-12 center">PokeDex</h1> `;
		offset +=12;
	    pokemons(offset,limit);
	}
}
//pokemons recibe el offset para determinar en que pokemon vamos y el limit para determinar hasta que pokemon se realiza la solicitud
function pokemons(offset, limit){
    for (var i = offset; i <= offset+limit; i++) {
    	//Se llama a la funcón crearPokemon por cada ciclo
    	crearPokemon(i);
    }	
}
//crearPokemon recibe la variable id para determinar que pokemon se va a solicitar
function crearPokemon(id){
	fetch("https://pokeapi.co/api/v2/pokemon/"+id+"/")
	.then(response => response.json())
	.then(data => crearMenuPokemon(data,id))
}
//Cada que se reciba la información del pokemon se agrega un pokemon_container al contenedor principal
function crearMenuPokemon(pokemon,id){
    text_html=`
              <div class="col-3 p-2 justify-content-center center">
                <div class="pokemon_container p-0 m-0">
	    	    	<div class="content-image">
		    	        <img src="`+pokemon.sprites.front_default+`" alt="">    	    		
		    	    </div>
		    	    <h3><a href="stats.php?action=`+id+`">#`+pokemon.id+` `+pokemon.name+`</a></h3>
	    	    </div>
    	      </div>   
              `
    pokemon_container.innerHTML = pokemon_container.innerHTML + text_html;
}
//Se hace el llamado de la función pokemons enviando los valores de offset y limit por defecto
pokemons(offset,limit);

function holaMundo(){
	console.log("Presionaste una tarjeta pokemon");
}