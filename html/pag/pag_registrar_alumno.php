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
						
						
						
						
						<!-- DATOS DE NUEVO INGRESO ----------------------------------------------------->
						
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
						
						<input name="id_alumno" id="id_alumno" type="text" class="input_frm" maxlength="9" required>
						
						<br /><br />
						
						
						<input name="btn_generar_numero_control" class="btn_frm_aceptar" type="button" value="Generar número de control" onclick="generar_numero_control_alumno(document.getElementById('nivel').value, document.getElementById('grupo').value)">
						
						<input name="btn_introducir_numero_control" class="btn_frm_aceptar" type="button" value="Introducir número de control" onclick="introducir_numero_control_alumno(document.getElementById('id_alumno').value)">
						
						
						<br /><br />
						
						<!-- DATOS PRINCIPALES ----------------------------------------------------->
						
						<label class="label_frm">Datos principales: </label>
						<br /><hr />	
						
						<label class="label_frm" >Apellido paterno: </label>
						<input id="apellido_paterno" class="input_frm"  type="text"  maxlength="20" name="apellido_paterno" required>
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Apellido materno: </label>
						<input id="apellido_materno" class="input_frm"  type="text"  maxlength="20" name="apellido_materno" required >
						
						<br />
						
						<label class="label_frm" >Nombre(s): </label>
						<input id="nombre" class="input_frm"  type="text"  maxlength="20" name="nombre" required style="width: 260px;">
						
						<span class="espacio_horizontal_30px "></span>
											
						<label class="label_frm" >Sexo: </label>
						<select id="sexo" class="input_frm" name="sexo" style="width: 150px;">
							<option value="H">Hombre</option> 
							<option value="M">Mujer</option>
						</select>
																	
						<br />
						
						<!-- FALTA INVESTIGAR ENTRADA DE FECHA -->
						<label class="label_frm" >Fecha de nacimiento: </label>
						
						<!-- Retorna una fecha con formta YYYY-MM-DD -->
						<input id="fecha_nacimiento" type="date" name="fecha_nacimiento" min="1950-01-01" value="2000-01-01" class="input_frm">

						<span class="espacio_horizontal_30px "></span>						
						
						<label class="label_frm">CURP: </label>
												
						
						<input id="curp" class="input_frm"  type="text" name="curp" maxlength="18" 
							onfocus="generar_curp(
								document.getElementById('apellido_paterno').value,
								document.getElementById('apellido_materno').value,
								document.getElementById('nombre').value,
								document.getElementById('fecha_nacimiento').value,
								document.getElementById('sexo').value,
								'curp'
							)"
						>
						
						<br><br>
						
						<!-- INFORMACIÓN DE CONTACTO ----------------------------------------------------->
						
						
						<label class="label_frm">Información de contacto:  </label>
						<br /><hr />
										
						<label class="label_frm" >Domicilio: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="domicilio" style="width: 350px;" > 
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Colonia: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="colonia">
						
						<br />
						
						<label class="label_frm" >Ciudad: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="ciudad">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Estado: </label>
						
						<select id="estado" name="estado" class="input_frm" >
							<option value="Jalisco">Jalisco</option>
							<option value="Aguascalientes">Aguascalientes</option>							
							<option value="Baja California">Baja California</option>							
							<option value="Baja California Sur">Baja California Sur</option>							
							<option value="Campeche">Campeche</option>							
							<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>							
							<option value="Colima">Colima</option>							
							<option value="Chiapas">Chiapas</option>							
							<option value="Chihuahua">Chihuahua</option>							
							<option value="Distrito Federal">Distrito Federal</option>							
							<option value="Durango">Durango</option>							
							<option value="Guanajuato">Guanajuato</option>							
							<option value="Guerrero">Guerrero</option>							
							<option value="Hidalgo">Hidalgo</option>							
							<option value="México">México</option>							
							<option value="Michoacán de Ocampo">Michoacán de Ocampo</option>							
							<option value="Morelos">Morelos</option>							
							<option value="Nayarit">Nayarit</option>							
							<option value="Nuevo León">Nuevo León</option>							
							<option value="Oaxaca">Oaxaca</option>							
							<option value="Puebla">Puebla</option>							
							<option value="Querétaro">Querétaro</option>							
							<option value="Quintana Roo">Quintana Roo</option>							
							<option value="San Luis Potosí">San Luis Potosí</option>							
							<option value="Sinaloa">Sinaloa</option>							
							<option value="Sonora">Sonora</option>							
							<option value="Tabasco">Tabasco</option>							
							<option value="Tamaulipas">Tamaulipas</option>							
							<option value="Tlaxcala">Tlaxcala</option>							
							<option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>							
							<option value="Yucatán">Yucatán</option>							
							<option value="Zacatecas">Zacatecas</option>							
						</select>
						
						<br />
						
						<label class="label_frm" >Código postal: </label>
						<input class="input_frm"  type="text"  maxlength="6" name="codigo_postal">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Número de teléfono: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="numero_telefono">

						<br />

						<label class="label_frm" >Número de celular: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="numero_celular">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >E-mail: </label>
						<input class="input_frm"  type="email"  maxlength="15" value="@" name="email" style="width: 300px;"  >
						
						<br /><br />
						
						<!-- DATOS VARIOS ----------------------------------------------------->
						
						<label class="label_frm">Datos varios:  </label>
						<br /><hr />
						
						<label class="label_frm" >Estatura (m): </label>
						<input class="input_frm"  type="number" value="1.50" min="1.00" max="2.10" name="estatura" step="0.01" style="width: 100px;">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm" >Peso (kg): </label>
						<input class="input_frm"  type="number" value="60" min="30" max="120" name="peso"  style="width: 100px;">
						
						<span class="espacio_horizontal_30px "></span>
						
						<label class="label_frm">Tipo de sangre: </label>
						<select class="input_frm" name="tipo_sangre" id="tipo_sangre" style="width: 70px;">
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							 
						</select>
						
						<br />
						
						<!-- FALTA AGREGAR BOTON DE FOTO -->
						<!-- FALTA AGREGAR LIST DE RANGO -->
						<!-- FALTA AGREGAR BOTON DE FOTO -->
						<!-- FALTA AGREGAR LIST DE MODALIDADES -->
						<!-- FALTA AGREGAR TEXTAREA DE ALERGIAS -->
						
						
						<select class="input_frm" name="rango" id="rango" style="width: 70px;">
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option> 
						</select>
						
						
						<br /><br /><br />

					
						
						<input class="btn_frm_aceptar" type="submit" name="btn_login" value="Registrar">
					</form>
				</div> <!-- div_frm_login -->
				
				
				
				
			</div> <!-- div_login -->

			<div id="div_pie_pagina">
				<!-- html/div_pie_pagina.php -->
			</div> <!-- div_pie_pagina -->

		</div> <!-- div_contenedorPrincipal -->
	</body>

</html>

