var morse = [".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....", "..", ".---", "-.-", ".-..", "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-", "...-", ".--", "-..-", "-.--", "--.."];
var letras =  ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

function imprimir_codigo_morse() {

	var frase = document.getElementById('input_frase').value;
	var traduccion_morse = "";
	var mayuscula = "";
	var letra = "";
	        
	mayuscula = frase.toLocaleUpperCase();

	for (var i = 0; i < mayuscula.length; i++) {
	            
	    letra = mayuscula.substring(i, i+1);
	    
	    for (var j = 0; j < morse.length; j++) {
	                
	        if (letra == (letras[j])) {
	            traduccion_morse = traduccion_morse + morse[j] + "   ";
	        }       
	    }
	}
	document.getElementById('input_frase').value= '';
	document.getElementById('caja').innerHTML = traduccion_morse;
}
function imprimir_codigo_espaniol(){
	var codigo = document.getElementById('input_morse').value;
	var traduccion_espaniol = "";
	var palabra = Array();

    palabra = codigo.split(" ");
        
    for (var i = 0; i < palabra.length; i++) {

        for (var j = 0; j < letras.length; j++) {

            if (palabra[i] == (morse[j])) {
                traduccion_espaniol = traduccion_espaniol + letras[j] + "   ";
            } 
        }
    }
    document.getElementById('caja1').innerHTML = traduccion_espaniol;
    document.getElementById('input_morse').value= '';
}
