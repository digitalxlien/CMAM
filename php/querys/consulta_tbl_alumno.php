<?php
	header("Content-Type: text/html;charset=utf-8");
  	include("../conexion_db_cmam.php");
  
  	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
	or die("Ha fallado la conexion con la base de datos");
	

  
?>