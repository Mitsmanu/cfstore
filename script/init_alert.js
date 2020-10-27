"use strict"

/*Data Code alert*/

/*Requerimiento de datos*/


/*function alerta()
    {
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
	}
	document.getElementById("ejemplo").innerHTML = mensaje;
}*/

////////////////////////////////////Security//////////////////////////////////
  var user = "Manu";
  var user2 = "Mayra";
  var user3 = "Efrain";
  var pass = "pv5260";
 


  alert("Sistema de reportes de gastos administrativos ")

  var op = prompt("Ingrese usuario administrativo");
  

  if(op === user || op === user2 || op === user3){
    var utr = prompt("Ingrese su contraseña")

    if(utr === pass){
      alert("Bienvenido " + op + "\n"+
      	"Su numero identificador es 25TgTT89A")

     
    }else{
      alert("Constraseña incorrecta")
      location.href="https://www.folklore-panama.online"
    }


  }else{
    alert("Acceso denegado")
    location.href="http://www.google.com";
    alert("Redireccionando a Google.com");
  }

  document.getElementById('op').innerHTML = op;