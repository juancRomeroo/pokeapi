var contador = 0;

function señalar(col , celda){
	fila=celda.parentElement;//Acceder al elemento tr
	matriz=fila.parentElement;//Acceder al elemento table
    if(contador<=4){
		/*La condicional busca la clase desactivado*/
		if (celda.classList.contains( 'desactivado' ) == false) {
			contador++;
			celda.innerText="X";
			//Agregar clase desactivado a la fila
			for (var i = fila.children.length - 1; i >= 0; i--) {
				//Este condicional determina los cruces de las filas
				if(fila.children[i].classList.contains('desactivado')==true){
                    fila.children[i].classList.add("desactivado2");
				}else{
					fila.children[i].classList.add("desactivado");
				}
			}
			//Agregar clase desactivado a la columna
		    for (var i = matriz.children.length - 1; i >= 0; i--) {
		    	//Este condicional determina los cruces de las columnas
		    	if(matriz.children[i].children[col-1].classList.contains('desactivado')==true){
                    matriz.children[i].children[col-1].classList.add("desactivado2");
				}else{
					matriz.children[i].children[col-1].classList.add("desactivado");
				}
				celda.classList.remove("desactivado2");
		    }
		}else if(celda.innerText != ""){ //Activar nuevamente las celdas
			contador--;
			celda.innerText="";
			//Quitar clase desactivado a la fila
		    for (var i = fila.children.length - 1; i >= 0; i--) {
				if(fila.children[i].classList.contains('desactivado2')==true){
                    fila.children[i].classList.remove("desactivado2");
				}else{
					fila.children[i].classList.remove("desactivado");
				}
			}
			//Quitar clase desactivado a la columna 
			for (var i = matriz.children.length - 1; i >= 0; i--) {
			   	if(matriz.children[i].children[col-1].classList.contains('desactivado2')==true){
                    matriz.children[i].children[col-1].classList.remove("desactivado2");
				}else{
					matriz.children[i].children[col-1].classList.remove("desactivado");
				}
			}
	    }else{
			alert("Esta celda se encuentra desactivada");
		}
		console.log(contador);
    }else if(celda.innerText != ""){ //Activar nuevamente las celdas cuando ya se cumplió con el límite de celdas desactivadas
		contador--;
		celda.innerText="";
		//Quitar clase desactivado a la fila
	    for (var i = fila.children.length - 1; i >= 0; i--) {
			if(fila.children[i].classList.contains('desactivado2')==true){
                fila.children[i].classList.remove("desactivado2");
			}else{
			    fila.children[i].classList.remove("desactivado");
			}
		}
		//Quitar clase desactivado a la columna 
		for (var i = matriz.children.length - 1; i >= 0; i--) {
		   	if(matriz.children[i].children[col-1].classList.contains('desactivado2')==true){
                matriz.children[i].children[col-1].classList.remove("desactivado2");
			}else{
				matriz.children[i].children[col-1].classList.remove("desactivado");
			}
		}
	}else{
    	alert("Desactive una de las celdas");
    }
	
}