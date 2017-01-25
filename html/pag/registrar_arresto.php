<!DOCTYPe HTML 5>

<?php
	//Inclusión de archivos php
	include ("../../php/conexion_db_cmam.php");
?>

<html lang="es" >

	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Colegio Militarizado Águilas de México</title>
		<script src="../../js/jquery-3.1.1.js"></script>
		<script src="../../js/js_core.js"></script>
		<link rel="stylesheet" href="../../css/estilo_principal.css">
		<link rel="icon" type="image/png" href="../../img/logo_cmam_100x100.png" />
	</head>

	<body onload="precargarPagina()">

		<div id="div_cabecera">
			<!-- ../div_cebecera.php -->
		</div><!-- div_cabecera -->

		<div id="div_menu_navegacion">
			<!-- ../div_menu_navegacion.php -->
		</div> <!-- div_menu_navegacion -->


		<div id="div_contenedor_principal" >



			<div id="div_cuerpo">
				<!-- Lo escencial de la pagina: -->
				<h1>Registrar arresto</h1>
				<br />

				<h2> Busque al alumno al cual se le desea cargar el arresto. </h2>

				<div id="div_frm_buscar">

					<form name="frm_consultar_alumno" >

						<label class="label_frm">Número de control:</label>
						<input name="id_alumno" id="id_alumno" type="text" class="input_frm" maxlength="9" required>
						<input name="bnt_buscar_alumno" id="btn_buscar_alumno" type="button" class="btn_frm_aceptar" value="Buscar alumno" onclick="consultaAlumnoArresto()"/>

					</form>
					<br>
				</div>

				<div id="div_resultado">

					<table class="tbl_lista_azul_simple" >
					  <tr>
					    <th style="width: 70em;">No. de control:</th>
					    <th style="width: 400em;">Alumno:</th>
					    <th style="width: 100em;">Grado: </th>
					  </tr>
					  <tr>
					  	<td>14290767</td>
					    <td>ANGEL MARTIN PACHECO CHAVEZ</td>
					    <td>CORONEL</td>
					  </tr>
					</table>

					<br>
					<!-- div_resultado -->

					<table class="tbl_lista_verde_simple" >
					  <tr>
					    <th style="width: 15em;">Puntos de demerito:</th>
					    <th style="width: 15em;">Horas de arresto:</th>
					  </tr>
					  <tr>
					  	<td>300 pts.</td>
					    <td>15:00 hrs.</td>
					    <td></td>
					  </tr>
					</table>


				</div>


			</div> <!-- div_login -->



		</div> <!-- div_contenedorPrincipal -->

		<div id="div_pie_pagina">
			<!-- html/div_pie_pagina.php -->
		</div> <!-- div_pie_pagina -->


	</body>

</html>
