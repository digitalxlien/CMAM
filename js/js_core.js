function precargarPaginaIndex(){

	//Carga los divs a la pagina Index.php

	/**** En el index no se carga la cabecera, pues es una seccion indepediente*/

	//Carga del menu de navegación:
	$("#div_menu_navegacion").load("html/div/div_menu_navegacion.php");

	//Carga de pie de pagina:
	$("#div_pie_pagina").load("html/div/div_pie_pagina.php");

	//Carga de formulario de login
	$("#div_login").load("html/div/div_login.php");

}

function precargarPagina(){
	//Carga de la cabecera:
	$("#div_cabecera").load("../div/div_cabecera.php");

	//Carga del menu de navegación:
	$("#div_menu_navegacion").load("../div/div_menu_navegacion.php");

	//Carga de pie de pagina:
	$("#div_pie_pagina").load("../div/div_pie_pagina.php");

	//Carga de formulario de login
	$("#div_login").load("../div/div_login.php");
}

function setValue(id_elemento, nuevo_valor){
	//Asigna un nuevo valor al elemento:
	$("#"+id_elemento).prop('value', nuevo_valor);
}


function setReadOnly(id_elemento, valor){
	//Asigna un nuevo valor al elemento:
	$("#"+id_elemento).prop('readonly', valor);
}

function generarNumeroControlAlumno(nivel, grupo){


	//Año:
	var fecha = new Date();
	var ano =  fecha.getFullYear().toString();

	//Forma del numero de control: [TIPO DE USUARIO] + [NIVEL] + [GRUPO] + [AÑO] + [NUMERO DE ALUMNO].
	numero_control = "A" + nivel + grupo + ano.charAt(2) + ano.charAt(3) + "000";



	/* ****************************
	 *
	 *	FALTA REALIZAR UN METODOS DONDE "000" SEA EL ULTIMO VALOR ENCONTRADO NO REPETIDO EN LA BASE DE DATOS.
	 *
	 */

	setReadOnly('id_alumno', true);

	//return numero_control;
	$("#id_alumno").prop('value', numero_control);
}



function introducirNumeroControlAlumno(id_elemento){
	setValue('id_alumno', "");
	setReadOnly('id_alumno', false);
}




function generarCurp(apellido_paterno, apellido_materno, nombre, fecha_nacimiento, sexo, id_elemento){
	//Este metodo genera los primeros 12 digitos aproximados de la curp.
	var curp;

	// Generar parcialmente la CURP:
	curp = apellido_paterno.toString().charAt(0) +
		apellido_paterno.toString().charAt(1) +
		apellido_materno.toString().charAt(0) +
		nombre.toString().charAt(0) +
		fecha_nacimiento.toString().charAt(2) +
		fecha_nacimiento.toString().charAt(3) +
		fecha_nacimiento.toString().charAt(5) +
		fecha_nacimiento.toString().charAt(6) +
	 	fecha_nacimiento.toString().charAt(8) +
	 	fecha_nacimiento.toString().charAt(9) +
	 	sexo;

	// Enviarla al elemento especificado
	setValue(id_elemento, curp.toUpperCase());
}

function consultaAlumno() {
	//Obtiene el id del alumno y lo almacena en una variable
	var id_alumno = document.getElementById("id_alumno").value;
	//Llama al archivo consulta_alumnoB.php pasando como parametro el id del alumno
	$("#div_resultado").load("../../php/querys/consulta_alumno.php",{
		'id_alumno': id_alumno
	});
}
