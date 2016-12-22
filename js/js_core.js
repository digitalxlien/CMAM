
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

function set_value(id_elemento, nuevo_valor){
	//Asigna un nuevo valor al elemento:	
	$("#"+id_elemento).prop('value', nuevo_valor);
}


function set_readonly(id_elemento, valor){
	//Asigna un nuevo valor al elemento:	
	$("#"+id_elemento).prop('readonly', valor);
}

function generar_numero_control_alumno(nivel, grupo){
	
	
	//Año:
	var fecha = new Date();
	var ano =  fecha.getFullYear().toString();
		
	//Forma del numero de control: [TIPO DE USUARIO] + [NIVEL] + [GRUPO] + [AÑO] + [NUMERO DE ALUMNO].
	numero_control = "A" + nivel + grupo + ano.charAt(2) + ano.charAt(3) + "NNN";


	/* ****************************
	 * 
	 *	FALTA REALIZAR UN METODOS DONDE "NNN" SEA EL ULTIMO VALOR ENCONTRADO NO REPETIDO. 
	 * 
	 */

	set_readonly('id_alumno', true);

	//return numero_control;
	$("#id_alumno").prop('value', numero_control);
}



function introducir_numero_control_alumno(id_elemento){
	
	set_value('id_alumno', "");
	set_readonly('id_alumno', false);	
	
	
	
}













