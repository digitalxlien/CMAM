<!DOCTYPE html>
<?php
	//Inclusión de archivos php
	include ("../../php/conexion_db_cmam.php");
?>
<html lang="es">
  <head>
    <meta charset="UTF-8">
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

    <div id="div_contenedor_principal">

      <div id="div_cuerpo">
        <!-- Lo escencial de la pagina: -->
				<h1>Consultar personal:</h1>

				<div id="div_frm_buscar">

					<form name="frm_registrar_personal" >

						<label class="label_frm">Número de control:</label>
						<input name="id_personal" id="id_personal" type="text" class="input_frm" maxlength="4" required>
						<input name="bnt_buscar_personal" id="btn_buscar_personal" type="button" class="btn_frm_aceptar" value="Buscar personal" onclick="consultaPersonal()" />

					</form>

        </div>

        <div id="div_resultado">

        </div><!--div_resultado-->
      </div><!--div_cuerpo-->
    </div><!--div_contenedor_principal-->
    <div id="div_pie_pagina">

    </div>
  </body>
</html>
