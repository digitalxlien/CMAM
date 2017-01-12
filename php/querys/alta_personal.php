<?php
	header("Content-Type: text/html;charset=utf-8");
  include("../conexion_db_cmam.php");

  /*Seleciona la base de datos a utilizar*/
  mysqli_select_db($conexion, $base_de_datos)
    or die("Ha fallado la conexion con la base de datos");
  /*Variables que obtienen los datos del formulario*/
  $id_personal      = mb_strtoupper($_REQUEST['id_personal'],'utf-8');
  $contrasena       = $_REQUEST['contrasena'];
  $id_cargo         = mb_strtoupper($_REQUEST['id_cargo'],'utf-8');
  $nombre           = mb_strtoupper($_REQUEST['nombre'],'utf-8');
  $apellido_paterno = mb_strtoupper($_REQUEST['apellido_paterno'],'utf-8');
  $apellido_materno = mb_strtoupper($_REQUEST['apellido_materno'],'utf-8');

  /*Sentencia SQL*/
  $query =
  "INSERT INTO `tbl_personal`
  (
    `id_personal`,
    `contrasena`,
    `id_cargo`,
    `nombre`,
    `apellido_paterno`,
    `apellido_materno`
  )
  VALUES
  (
    '$id_personal',
    '$contrasena',
    '$id_cargo',
    '$nombre',
    '$apellido_paterno',
    '$apellido_materno'
  ) ";
  /*Se ejecuta el query*/
	$resultado = mysqli_query($conexion, $query)
		or die ("No se pudo ejecutar el query " .mysqli_error($conexion) );
	echo "Datos ingresados correctamente";

?>
