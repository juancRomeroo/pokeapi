const morse = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","--.--","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."," "];
const letras = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","Ñ","O","P","Q","R","S","T","U","V","W","X","Y","Z"," "];

var contentMorseText;
var contentTextMorse;

var formMorseText;
var formaTextMorse;

var campo_morse;
var campo_traduccionT;
var campo_texto;
var campo_traduccionM;

window.onload = function(){
	contentMorseText = document.getElementById('contentMorseText');
	contentTextMorse = document.getElementById('contentTextMorse');
	campo_morse = document.getElementById('campo_morse');
	campo_traduccionT = document.getElementById('campo_traduccionT');
	campo_texto = document.getElementById('campo_texto');
	campo_traduccionM = document.getElementById('campo_traduccionM');

	formMorseText = document.getElementById('formMorseText');
	formTextMorse = document.getElementById('formTextMorse');

	formMorseText.addEventListener("submit", function(event){
		event.preventDefault();
		calcularTraduccionMorse();
	})

	formTextMorse.addEventListener("submit", function(event){
		event.preventDefault();
		calcularTraduccionEspañol();
	})
}

function mostrarConversionMorseToTexto(){
	campo_morse.value = ".... --- .-.. .-";
    campo_traduccionT.value = "";

	contentMorseText.style.display = 'block';
	contentTextMorse.style.display = 'none';  
}

function mostrarConversionTextoToMorse(){
	campo_texto.value = "";
    campo_traduccionM.value = "";

	contentMorseText.style.display = 'none';
	contentTextMorse.style.display = 'block';  
}

function calcularTraduccionMorse(){
	campo_traduccionT.value = " ";
    let texto = campo_morse.value;
    let palabras = texto.split(" ");
    for(var i = 0; i <= palabras.length; i++){
    	console.log("traduciendo codigo morse");
    	for (var j = 0; j <= morse.length - 1; j++){
    		if (palabras[i]==morse[j]){
    			campo_traduccionT.value = campo_traduccionT.value + letras[j] + " ";	
    		}	
    	}
    }
}

function calcularTraduccionEspañol(){
	campo_traduccionM.value = " ";
    let texto = campo_texto.value;
    let palabras = texto.split("");
    for(var i = 0; i <= palabras.length; i++){
    	for (var j = 0; j <= letras.length - 1; j++){
    		if (palabras[i]==letras[j]){
    			campo_traduccionM.value = campo_traduccionM.value + morse[j] + " ";	
    		}	
    	}
    }
}