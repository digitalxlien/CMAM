<?php
	//Parametros de inicio de sesion en la base de datos:
	$servidor = "127.0.0.1";
	$usuario = 'admin';
	$contraseña = "qwerty1234";
	$base_de_datos = "db_cmam";
		
	//Conexion a la base de datos.
	$conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);
		
	/*
	//Verificacion de la conexion:
	if(!$conexion){
		//conexion fallida
		echo "Conexion falida.";
	}
	else{
		//conexion establecida
		echo "Conexión establecida. <br>" ;
		echo "Informacion del host: " . mysqli_get_host_info($conexion);
	}
	*/
		
?>




	
	


