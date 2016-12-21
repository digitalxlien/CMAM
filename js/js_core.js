
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