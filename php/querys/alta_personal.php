<?php
	header("Content-Type: text/html;charset=utf-8");
  include("../conexion_db_cmam.php");

  /*Seleciona la base de datos a utilizar*/
  mysqli_select_db($conexion, $base_de_datos)
    or die("Ha fallado la conexion con la base de datos");
  /*Variables que obtienen los datos del formulario*/
  $id_personal      = $_REQUEST['id_personal'];
  $contrasena       = $_REQUEST['contrasena'];
  $id_cargo         = $_REQUEST['id_cargo'];
  $nombre           = $_REQUEST['nombre'];
  $apellido_paterno = $_REQUEST['apellido_paterno'];
  $apellido_materno = $_REQUEST['apellido_materno'];

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
