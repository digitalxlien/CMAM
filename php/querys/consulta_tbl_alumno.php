<?php
	header("Content-Type: text/html;charset=utf-8");
  	include("../conexion_db_cmam.php");
  
  	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
	or die("Ha fallado la conexion con la base de datos");
	
	//Saber cuantos registros existen:
	$query = "SELECT COUNT(*) AS 'CONTADOR' FROM tbl_alumno; " ;

	
	$resultado = mysqli_query($conexion, $query);


	//Saber el numero de renglones en la consulta:
	echo $resultado->num_rows;
	
	
	//Mueve el puntero al renglon especificado.
	echo $resultado->data_seek(0);



  	
	
  /* SELECT COUNT(*) FROM tbl_alumno; */
  
  
  
?>