/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.addEventListener("load", iniciar);

function iniciar() {
    document.getElementById("enviar").addEventListener("click", validar, false);
}

function validarNombre() {
    var elemento = document.getElementById("nombre");
    console.log(elemento);
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error2(elemento, "Introduzca un nombre.");
        }else{
        
//        if (!elemento.validity.patternMismatch) {
            error2(elemento, "Nombre de al menos 4 caracteres.");
        }
//            error(elemento);
        return false;
    }
        quitarError(elemento);
    return true;
}


function validarLatitud() {
    var elemento = document.getElementById("lat");
    console.log(elemento);
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error2(elemento, "Introduzca la latitud en número.");
        }
        
        if (elemento.validity.rangeOverflow) {
            error2(elemento, "Debe tener un valor inferior a 90.");
        }
        
        if (elemento.validity.rangeUnderflow) {
            error2(elemento, "Debe tener un valor superior a -90.");
        }
//            error(elemento);
        return false;
    }
       quitarError(elemento);
    return true;
}

function validarLongitud() {
    var elemento = document.getElementById("long");
    console.log(elemento);
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error2(elemento, "Introduzca la longitud en número.");
        }
        
        if (elemento.validity.rangeOverflow) {
            error2(elemento, "Debe tener un valor inferior a 180.");
        }
        
        if (elemento.validity.rangeUnderflow) {
            error2(elemento, "Debe tener un valor superior a -180.");
        }
//            error(elemento);
        return false;
    }
     quitarError(elemento);
    return true;
}


function validarAltura() {
    var elemento = document.getElementById("alt");
    console.log(elemento);
    if (!elemento.checkValidity()) {
        if (elemento.validity.valueMissing) {
            error2(elemento, "Introduzca la altura en número.");
        }
        
        if (elemento.validity.rangeOverflow) {
            error2(elemento, "Debe tener un valor inferior a 4000.");
        }
        
        if (elemento.validity.rangeUnderflow) {
            error2(elemento, "Debe tener un valor superior a 0.");
        }
//            error(elemento);
        return false;
    }
      quitarError(elemento);
    return true;
}


function validarTipo() {
	switch(document.forms[0].tipo.selectedIndex){
		case 0: 
			alert("Debe seleccionar una opción válida!.");
                        document.getElementById("tipo").focus();
                        return false;
			break;
		case 1: 
                       	document.getElementById("lmesas").style.color="#eff1f1";
			document.forms[0].nplazas.hidden=false;
			document.forms[0].nmesas.hidden=true;	
                        
			break;
		case 2: 
                        document.getElementById("lplazas").style.color="#eff1f1";
			document.forms[0].nplazas.hidden=true;
			document.forms[0].nmesas.hidden=false;
                        
			break;
	}
        
//        if (document.getElementById("tipo").selectedIndex === 1) {
//            document.getElementById("lmesas").style.color="#eff1f1";
//        }
//        if (document.getElementById("tipo").selectedIndex === 2) {
//            document.getElementById("lplazas").style.color="#eff1f1";
//        }
          
    return true;
}

function validar(e) {
    quitarError();
   if (validarNombre() && validarLatitud() && validarLongitud() && validarAltura() && validarTipo() && confirm("Todo está correcto. Gracias. ¿Desea Enviar?.")) {
    return true;
    } else {
        e.preventDefault();
    return false;
    }
}

//function error(elemento) {
//    document.getElementById("mensajeError").innerHTML = elemento.validationMessage;
//    elemento.className = "error";
//    elemento.focus();
//}

function error2(elemento, mensaje) {
    document.getElementById("mensajeError").innerHTML = mensaje;
//    elemento.className = "error";
    elemento.focus();
}

function quitarError() {
    var formulario = document.forms[0];
    for (var i = 0; i < formulario.elements.lenght; i++) {
        formulario.elements[i].classname = "";
    }
}