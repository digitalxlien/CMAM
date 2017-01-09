<!DOCTYPE HTML 5>

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
    <link rel="stylesheet" href="../../css/registro_personal.css">
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
        <h1>Registrar personal:</h1>

        <div id="div_frm_registrar">
          <form  class= "frm_registrar" method="post" action=" " name="frm_registrar_alumno">
              <div id="div_labels">
                <label class="label_frm">Numero de control: </label>
                <br/>
                <label class="label_frm">Nombre: </label>
                <br/>
                <label class="label_frm">Apellido paterno: </label>
                <br/>
                <label class="label_frm">Apellido materno: </label>
                <br/>
                <label class="label_frm" >Cargo: </label>
              </div>
              <div id="div_boxes">
                <input id="id_personal" class="input_frm"  type="text"  maxlength="15" name="id_personal" required>
                <br/>
                <input id="nombre" class="input_frm"  type="text"  maxlength="30" name="nombre" required>
                <br/>
                <input id="apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="apellido_paterno" required>
                <br/>
                <input id="apellido_materno" class="input_frm"  type="text"  maxlength="30" name="apellido_materno" required>
                <br/>
                <select id="id_cargo" class="input_frm" name="id_cargo" style="width: 150px;">
                  <option value="comandante">Comandante</option>
                  <option value="docente">Docente</option>
                  <option value="coordinador">Coordinador</option>
                  <option value="Secretaria">Secretaria</option>
                </select>
              </div>

            <!-- DATOS DE NUEVO INGRESO ----------------------------------------------------->
          <!--  <label class="label_frm">Datos de nuevo ingreso: </label>
            <br/><hr/>
            <label class="label_frm">Numero de control: </label>
            <input id="id_personal" class="input_frm"  type="text"  maxlength="15" name="id_personal" required>
            <br/>
            <label class="label_frm">Nombre: </label>
            <input id="nombre" class="input_frm"  type="text"  maxlength="30" name="nombre" required>
            <br/>
            <label class="label_frm">Apellido paterno: </label>
            <input id="apellido_paterno" class="input_frm"  type="text"  maxlength="30" name="apellido_paterno" required>
            <br/>
            <label class="label_frm">Apellido materno: </label>
            <input id="apellido_materno" class="input_frm"  type="text"  maxlength="30" name="apellido_materno" required>
            <br/>
            <label class="label_frm" >Cargo: </label>
            <select id="id_cargo" class="input_frm" name="id_cargo" style="width: 150px;">
              <option value="comandante">Comandante</option>
              <option value="docente">Docente</option>
              <option value="coordinador">Coordinador</option>
              <option value="Secretaria">Secretaria</option>
            </select>
            <br/>
            <br/>
            <input class="btn_frm_aceptar" type="submit" name="btn_login" value="Registrar">-->
          </form>
        </div> <!--div_frm_registrar-->

      </div> <!-- div_cuerpo-->
      <div id="div_pie_pagina">
  				<!-- html/div_pie_pagina.php -->
			</div> <!-- div_pie_pagina -->

		</div> <!-- div_contenedorPrincipal -->
