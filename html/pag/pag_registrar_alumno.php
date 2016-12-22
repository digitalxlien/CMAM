<!DOCTYPe HTML 5>

<?php
	//Inclusión de archivos php
	include ("../../php/conexion_db_cmam.php");
?>

<html lang="es" >
	
	<head>
		<meta charset="UTF-8"/>
		<title>Colegio Militarizado Águilas de México</title>
		<script src="../../js/jquery-3.1.1.js"></script>
		<script src="../../js/js_core.js"></script>
		<link rel="stylesheet" href="../../css/estilo_principal.css">
		<link rel="icon" type="image/png" href="../../img/logo_cmam_100x100.png" />
	</head>

	<body onload="precargarPagina()">
	<!-- <body> -->
		<div id="div_contenedor_principal" >
			
			<div id="div_cabecera">
				<!-- ../div_cebecera.php -->			
			</div><!-- div_cabecera -->

			<div id="div_menu_navegacion">
				<!-- ../div_menu_navegacion.php -->
			</div> <!-- div_menu_navegacion -->

			<div id="div_cuerpo">	
				<!-- Lo escencial de la pagina: -->
				<h1>Registrar alumno:</h1>
				
				<div id="div_frm_registro">
					<form action="" name="frm_login">
						
						
						<label class="label_frm">Datos de nuevo ingreso: </label>
						<br /><hr />
						
						
						<label class="label_frm">Nivel: </label>
						<select class="input_frm" name="nivel" id="nivel" style="width: 180px;">
							<option value="S">Secundaria</option> 
							<option value="B">Bachillerato</option>
						</select>
						
						<span class="espacio_horizontal_30px"></span>
						
																	
						<label class="label_frm">Grado: </label>
						<select class="input_frm" name="grado" id="grado" style="width: 190px;">
							<option value="1">1° - Primero</option> 
							<option value="2">2° - Segundo</option>
							<option value="3">3° - Tercero</option>
							<option value="4">4° - Cuarto</option>
							<option value="5">5° - Quinto</option>
							<option value="6">6° - Sexto</option>
						</select>
						
						<span class="espacio_horizontal_30px"></span>
						
						<label class="label_frm">Grupo: </label>
						<select class="input_frm" name="grupo" id="grupo" style="width: 70px;">
							<option value="01">A</option> 
							<option value="02">B</option>
							<option value="03">C</option>
						</select>
												
						<br />
						
						<!-- Número de control -->
						<label class="label_frm" onclick="" />Número de control:</label>
						
						<input name="id_alumno" id="id_alumno" type="text" class="input_frm" readonly="readonly">
						
						<br /><br />
						
						
						<input name="btn_generar_numero_control" class="btn_frm_aceptar" type="button" value="Generar número de control" onclick="generar_numero_control_alumno(document.getElementById('nivel').value, document.getElementById('grupo').value)">
						
						<input name="btn_introducir_numero_control" class="btn_frm_aceptar" type="button" value="Generar número de control" onclick="introducir_numero_control_alumno(document.getElementById('id_alumno').value)">
						
						
						<br /><br />
						
						<label class="label_frm">Datos principales: </label>
						<br /><hr />

						
						<label class="label_frm" >Apellido paterno: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="apellido_paterno">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Apellido materno: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="apellido_materno">
						
						<br />
						
						<label class="label_frm" >Nombre(s): </label>
						<input class="input_frm"  type="text"  maxlength="20" name="nombre">
						
						<span class="espacio_horizontal_30px "></span>
											
						<label class="label_frm" >Sexo: </label>
						<select class="input_frm" name="sexo" style="width: 150px;">
							<option value="H">Hombre</option> 
							<option value="M">Mujer</option>
						</select>
						
						
						
						<br /><br />
						
						<!-- FALTA INVESTIGAR ENTRADA DE FECHA -->
						<label class="label_frm" >Fecha de nacimiento: </label>
						
						<!-- Retorna una fecha con formta YYYY/MM/DD -->
						<input type="date" name="fecha_nacimiento" min="1950-01-01" value="2000-01-01" class="input_frm">
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Domicilio: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="domicilio">
						
						<br /><br />
						
						<label class="label_frm" >Colonia: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="colonia">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Ciudad: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="ciudad">
						
						<br /><br />
						
						<label class="label_frm" >Estado: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="estado">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Código postal: </label>
						<input class="input_frm"  type="text"  maxlength="6" name="codigo_postal">
						
						<br /><br />
						
						<label class="label_frm" >Número de teléfono: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="numero_telefono">
						
						
						
						
						<br /><br /><br />

					
						
						<input class="btn_frm_aceptar" type="submit" name="btn_login" value="Iniciar sesión">
					</form>
				</div> <!-- div_frm_login -->
				
				
				
				
			</div> <!-- div_login -->

			<div id="div_pie_pagina">
				<!-- html/div_pie_pagina.php -->
			</div> <!-- div_pie_pagina -->

		</div> <!-- div_contenedorPrincipal -->
	</body>

</html>

