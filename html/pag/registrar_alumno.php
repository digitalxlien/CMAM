<!DOCTYPE HTML 5>

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
		<script src="../../js/validar_clave.js"></script>
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

				<div id="div_frm_registrar">
					<form  method="post" action="../../php/querys/alta_alumno.php" name="frm_registrar_alumno">


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
						<br />
						<label class="label_frm" onclick="" />Contraseña:</label>
						<input id="contrasena" class="input_frm"  type="password"  maxlength="30" name="contrasena" style="width: 300px;" required><br />
						<label class="label_frm" onclick="" />Confirmar contraseña:</label>
						<input id="confirmar_contrasena" class="input_frm"  type="password"  maxlength="30" name="confirmar_contrasena" style="width: 220px;" required>
						<br /><br />
						<input name="btn_generar_numero_control" class="btn_frm_aceptar" type="button" value="Generar número de control" onclick="generar_numero_control_alumno(document.getElementById('nivel').value, document.getElementById('grupo').value)">
						<input name="btn_introducir_numero_control" class="btn_frm_aceptar" type="button" value="Introducir número de control" onclick="introducir_numero_control_alumno(document.getElementById('id_alumno').value)">
						<br /><br />


						<!-- DATOS PRINCIPALES ----------------------------------------------------->

						<label class="label_frm">Datos principales: </label>
						<br /><hr />
						<label class="label_frm" >Apellido paterno: </label>
						<input id="apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="apellido_paterno" required>
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Apellido materno: </label>
						<input id="apellido_materno" class="input_frm"  type="text"  maxlength="30" name="apellido_materno" required >
						<br />
						<label class="label_frm" >Nombre(s): </label>
						<input id="nombre" class="input_frm"  type="text"  maxlength="30" name="nombre" required style="width: 260px;">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Sexo: </label>
						<select id="sexo" class="input_frm" name="sexo" style="width: 150px;">
							<option value="H">Hombre</option>
							<option value="M">Mujer</option>
						</select>
						<br />
						<label class="label_frm" >Fecha de nacimiento: </label>

						<!-- Retorna una fecha con formta YYYY-MM-DD -->
						<input id="fecha_nacimiento" type="date" name="fecha_nacimiento" min="1950-01-01" value="2000-01-01" class="input_frm" required>
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
						<label class="label_frm" >Calle: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="calle" style="width: 350px;" >
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Colonia: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="colonia">
						<br />
						<label class="label_frm" >Ciudad: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="ciudad">
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
						<label class="label_frm" required>Código postal: </label>
						<input class="input_frm"  type="text"  maxlength="5" name="codigo_postal">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Número de teléfono: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="numero_telefono">
						<br />
						<label class="label_frm" >Número de celular: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="numero_celular">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >E-mail: </label>
						<input class="input_frm"  type="email"  maxlength="40" value="@" name="email" style="width: 300px;"  >
						<br /><br />


						<!-- DATOS VARIOS ----------------------------------------------------->

						<label class="label_frm">Datos varios:  </label>
						<br /><hr />
						<label class="label_frm" > Estatura (m): </label>
						<input class="input_frm"  type="number" value="1.50" min="1.00" max="2.10" name="estatura" step="0.01" style="width: 100px;">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" > Peso (kg): </label>
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
						<label class="label_frm" >Nacionalidad: </label>
						<input class="input_frm"  type="text"  maxlength="20" name="input_nacionalidad">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm">Religión</label>
						<input class="input_frm"  type="text"  maxlength="30" name="input_religion">
						</br>
						<label class="label_frm">Tutor: </label>
						<select class="input_frm" name="tutor" id="tutor" style="width: 170px;">
							<option value="P">Padre</option>
							<option value="M">Madre</option>
							<option value="O">Otro</option>
						</select>
						<br />
						<label class="label_frm">Foto: </label>
						<input type="file" name="foto" class="input_file_frm" id="foto" accept=".png, .jpeg, .jpg" style="color:#FFF">
						<br />
						<label class="label_frm">Alergias (descripción): </label>
						<br />
						<input class="input_frm"  type="text"  maxlength="25" rows="3" style="width: 500px; height: 60px" name="input_alergia">
						<!-- <input class="input_frm"  type="text" name="alergia" form="frm_registrar_alumno" rows="3"  maxlength="25"  style="width: 500px; height: 60px"> -->
						<br /><br />


						<!-- DATOS DE CONTROL----------------------------------------------------->


						<label class="label_frm">Datos de control:  </label>
						<br /><hr />

						<label class="label_frm">Estatus: </label>
						<select class="input_frm" name="estatus" id="estatus" style="width: 200px;">
							<option value="Activo">Activo</option>
							<option value="Inactivo">Inactivo</option>
							<option value="Baja temporal">Baja temporal</option>
							<option value="Expulsado">Expulsado</option>
						</select>
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm">Rango: </label>
						<select class="input_frm" name="rango" id="rango" style="width: 170px;">
							<option value="Cabo">Cabo</option>
							<option value="Cadete 2do.">Cadete 2do.</option>
							<option value="Cadete 1ro.">Cadete 1ro.</option>
							<option value="Sargento 2do.">Sargento 2do.</option>
							<option value="Sargento 1ro">Sargento 1ro.</option>
							<option value="Comandate de unidad">Comandate de unidad</option>
							<option value="Jefe de cadetes">Jefe de cadetes</option>
							<option value="Sub-oficial">Sub-oficial</option>
							<option value="Oficial 2do.">Oficial 2do.</option>
							<option value="Oficial 1ro.">Oficial 1ro.</option>
							<option value="Oficial">Oficial</option>
							<option value="Sin rango">Sin grado</option>
						</select>
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm">Modalidad: </label>
						<select class="input_frm" name="modalidad" id="modalidad" style="width: 170px;">
							<option value="Interno">Interno</option>
							<option value="Externo">Externo</option>
							<option value="Semi-interno">Semi-interno</option>
						</select>
						<br />
						<label class="label_frm" >Horas de arresto: </label>
						<input class="input_frm"  type="number" value="0" min="0" max="500" name="horas_arresto"  style="width: 70px;">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Horas de demerito: </label>
						<input class="input_frm"  type="number" value="0" min="0" max="500" name="puntos_demerito"  style="width: 70px;">
						<span class="espacio_horizontal_30px "></span>

						<br />

						<label class="label_frm" >Fecha de ingreso: </label>

						<!-- Retorna una fecha con formta YYYY-MM-DD -->
						<input id="fecha_ingreso" type="date" name="fecha_ingreso" min="2000-01-01" value="2010-01-01" class="input_frm">


						<!-- DATOS DEL PADRE---------------------------------------------------->

						<br /><br />
						<label class="label_frm">Datos del Padre (o tutor):  </label>
						<br /><hr />

						<label class="label_frm" >Apellido paterno del padre: </label>
						<input id="padre_apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="padre_apellido_paterno" required>
						<br	/>
						<label class="label_frm" >Apellido materno del padre: </label>
						<input id="padre_apellido_materno" class="input_frm"  type="text"  maxlength="30" name="padre_apellido_materno" required >
						<br />
						<label class="label_frm" >Nombre(s) del padre: </label>
						<input id="padre_nombre" class="input_frm"  type="text"  maxlength="30" name="padre_nombre" required style="width: 260px;">
						<span class="espacio_horizontal_30px "></span>
						<br />
						<label class="label_frm" >Fecha de nacimiento del padre: </label>
						<!-- Retorna una fecha con formta YYYY-MM-DD -->
						<input id="padre_fecha_nacimiento" type="date" name="padre_fecha_nacimiento" min="1940-01-01" value="2000-01-01" class="input_frm" required>
						<br>
						<label class="label_frm" >Calle: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="padre_calle" style="width: 350px;" >
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Colonia: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="padre_colonia" style="width: 350px;" >
						<br />
						<label class="label_frm" >Ciudad: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="padre_ciudad">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Estado: </label>
						<select id="estado" name="padre_estado" class="input_frm" >
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
						<input class="input_frm"  type="text"  maxlength="8" name="padre_codigo_postal">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Número de teléfono: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="padre_numero_telefono">
						<br />
						<label class="label_frm" >Número de celular: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="padre_numero_celular">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >E-mail: </label>
						<input class="input_frm"  type="email"  maxlength="40" value="@" name="padre_email" style="width: 300px;"  >
						<br />
						<label class="label_frm" >Profesion: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="padre_profesion">
						<br /><br />



						<!-- DATOS DE LA MADRE---------------------------------------------------->
						<label class="label_frm">Datos de la madre:  </label>
						<br /><hr />
						<label class="label_frm" >Apellido paterno de la madre: </label>
						<input id="madre_apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="madre_apellido_paterno" required>
						<br	/>
						<label class="label_frm" >Apellido materno del padre: </label>
						<input id="madre_apellido_materno" class="input_frm"  type="text"  maxlength="30" name="madre_apellido_materno" required >
						<br />
						<label class="label_frm" >Nombre(s) de la madre: </label>
						<input id="madre_nombre" class="input_frm"  type="text"  maxlength="30" name="madre_nombre" required style="width: 260px;">
						<span class="espacio_horizontal_30px "></span>
						<br />
						<label class="label_frm" >Fecha de nacimiento de la madre: </label>
						<!-- Retorna una fecha con formta YYYY-MM-DD -->
						<input id="madre_fecha_nacimiento" type="date" name="madre_fecha_nacimiento" min="1940-01-01" value="2000-01-01" class="input_frm" required>
						<br>
						<label class="label_frm" >Calle: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="madre_calle" style="width: 350px;" >
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Colonia: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="madre_colonia" style="width: 350px;" >
						<br />
						<label class="label_frm" >Ciudad: </label>
						<input class="input_frm"  type="text"  maxlength="30" name="madre_ciudad">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Estado: </label>
						<select id="estado" name="madre_estado" class="input_frm" >
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
						<input class="input_frm"  type="text"  maxlength="8" name="madre_codigo_postal">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >Número de teléfono: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="madre_numero_telefono">
						<br />
						<label class="label_frm" >Número de celular: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="madre_numero_celular">
						<span class="espacio_horizontal_30px "></span>
						<label class="label_frm" >E-mail: </label>
						<input class="input_frm"  type="email"  maxlength="40" value="@" name="madre_email" style="width: 300px;"  >
						<br />
						<label class="label_frm" >Profesion: </label>
						<input class="input_frm"  type="text"  maxlength="15" name="madre_profesion">
						<br />
						<hr>
						<br />
						<br />
						<input class="btn_frm_aceptar" type="submit" name="btn_login" value="Registrar" onclick="return validarPassword()">
					</form>
				</div> <!-- div_frm_login -->


			</div> <!-- div_login -->

			<div id="div_pie_pagina">
				<!-- html/div_pie_pagina.php -->
			</div> <!-- div_pie_pagina -->

		</div> <!-- div_contenedorPrincipal -->
	</body>

</html>
