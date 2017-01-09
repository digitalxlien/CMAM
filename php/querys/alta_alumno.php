<?php
	$base_datos = "db_cmam";//Verificar si se puede usar la variable que ya tiene el archivo conexion_db_cmam
	include("../conexion_db_cmam.php");

	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_datos)
		or die("Ha fallado la conexion con la base de datos");

	/*Variables que obtienen los datos del formulario*/
	$id_alumno 							= $_REQUEST['id_alumno'];
	$apellido_paterno 			= $_REQUEST['apellido_paterno'];
	$apellido_materno 			= $_REQUEST['apellido_materno'];
	$nombre 								= $_REQUEST['nombre'];
	$sexo  									= $_REQUEST['sexo'];
	$grado 									= $_REQUEST['grado'];
	$horas_arresto   				= $_REQUEST['horas_arresto'];
	$puntos_demerito  			= $_REQUEST['puntos_demerito'];
	$fecha_ingreso    			= $_REQUEST['fecha_ingreso'];//La fecha debe estar en formato YYYY/MM/DD
	$fecha_nacimiento 			= $_REQUEST['fecha_nacimiento'];//La fecha debe estar en formato YYYY/MM/DD
	$calle 					  			= $_REQUEST['calle'];
	$colonia 				  			= $_REQUEST['colonia'];
	$ciudad 				  			= $_REQUEST['ciudad'];
	$estado 				  			= $_REQUEST['estado'];
	$codigo_postal 	  			= $_REQUEST['codigo_postal'];
	$numero_telefono  			= $_REQUEST['numero_telefono'];
	$numero_celular   			= $_REQUEST['numero_celular'];
	$email 					  			= $_REQUEST['email'];
	$estatura				  			= $_REQUEST['estatura'];
	$peso 					 			  = $_REQUEST['peso'];
	$alergia 							  = "Meh";//$_REQUEST['alergia'];
	$tipo_sangre	   			  = $_REQUEST['tipo_sangre'];
	$estatus 				 			  = $_REQUEST['estatus'];
	$foto 					 			  = $_REQUEST['foto'];
	$rango								  = $_REQUEST['rango'];
	$modalidad 			  			= $_REQUEST['modalidad'];
	$padre_apellido_paterno = $_REQUEST['padre_apellido_paterno'];
	$padre_apellido_materno = $_REQUEST['padre_apellido_materno'];
	$padre_nombre 					= $_REQUEST['padre_nombre'];
	$padre_fecha_nacimiento = $_REQUEST['padre_fecha_nacimiento'];
	$padre_calle						= $_REQUEST['padre_calle'];
	$padre_colonia					= $_REQUEST['padre_colonia'];
	$padre_ciudad						= $_REQUEST['padre_ciudad'];
	$padre_estado						= $_REQUEST['padre_estado'];
	$padre_codigo_postal		= $_REQUEST['padre_codigo_postal'];
	$padre_numero_telefono	= $_REQUEST['padre_numero_telefono'];
	$padre_numero_celular		= $_REQUEST['padre_numero_celular'];
	$padre_email						= $_REQUEST['padre_email'];
	$padre_profesion				= $_REQUEST['padre_profesion'];
	$madre_apellido_paterno	= $_REQUEST['madre_apellido_paterno'];
	$madre_apellido_materno = $_REQUEST['madre_apellido_materno'];
	$madre_nombre 					= $_REQUEST['madre_nombre'];
	$madre_fecha_nacimiento = $_REQUEST['madre_fecha_nacimiento'];
	$madre_calle						= $_REQUEST['madre_calle'];
	$madre_colonia					= $_REQUEST['madre_colonia'];
	$madre_ciudad						= $_REQUEST['madre_ciudad'];
	$madre_estado						= $_REQUEST['madre_estado'];
	$madre_codigo_postal		= $_REQUEST['madre_codigo_postal'];
	$madre_numero_telefono	= $_REQUEST['madre_numero_telefono'];
	$madre_numero_celular		= $_REQUEST['madre_numero_celular'];
	$madre_email						= $_REQUEST['madre_email'];
	$madre_profesion				= $_REQUEST['madre_profesion'];
	/*Sentencia SQL*/
	$query =
	"INSERT INTO `tbl_alumno`
	(
		`id_alumno`,
		`apellido_paterno`,
		`apellido_materno`,
		`nombre`,
		`sexo`,
		`grado`,
		`horas_arresto`,
		`puntos_demerito`,
		`fecha_ingreso`,
		`fecha_nacimiento`,
		`calle`,
		`colonia`,
		`ciudad`,
		`estado`,
		`codigo_postal`,
		`numero_telefono`,
		`numero_celular`,
		`email`,
		`estatura`,
		`peso`,
		`alergia`,
		`tipo_sangre`,
		`estatus`,
		`foto`,
		`rango`,
		`modalidad`,
		`padre_apellido_paterno`,
		`padre_apellido_materno`,
		`padre_nombre`,
		`padre_fecha_nacimiento`,
		`padre_calle`,
		`padre_colonia`,
		`padre_ciudad`,
		`padre_estado`,
		`padre_codigo_postal`,
		`padre_numero_telefono`,
		`padre_numero_celular`,
		`padre_email`,
		`padre_profesion`,
		`madre_apellido_paterno`,
		`madre_apellido_materno`,
		`madre_nombre`,
		`madre_fecha_nacimiento`,
		`madre_calle`,
		`madre_colonia`,
		`madre_ciudad`,
		`madre_estado`,
		`madre_codigo_postal`,
		`madre_numero_telefono`,
		`madre_numero_celular`,
		`madre_email`,
		`madre_profesion`
	)
	VALUES
	(
		'$id_alumno',
		'$apellido_paterno',
		'$apellido_materno',
		'$nombre',
		'$sexo',
		'$grado',
		'$horas_arresto',
		'$puntos_demerito',
		'$fecha_ingreso',
	  '$fecha_nacimiento',
		'$calle',
		'$colonia',
		'$ciudad',
		'$estado',
		'$codigo_postal',
		'$numero_telefono',
		'$numero_celular',
		'$email',
		'$estatura',
	  '$peso',
		'$alergia',
		'$tipo_sangre',
		'$estatus',
		'$foto',
		'$rango',
		'$modalidad',
		'$padre_apellido_paterno',
		'$padre_apellido_materno',
		'$padre_nombre',
		'$padre_fecha_nacimiento',
		'$padre_calle',
		'$padre_colonia',
		'$padre_ciudad',
		'$padre_estado',
		'$padre_codigo_postal',
		'$padre_numero_telefono',
		'$padre_numero_celular',
		'$padre_email',
		'$padre_profesion',
		'$madre_apellido_paterno',
		'$madre_apellido_materno',
		'$madre_nombre',
		'$madre_fecha_nacimiento',
		'$madre_calle',
		'$madre_colonia',
		'$madre_ciudad',
		'$madre_estado',
		'$madre_codigo_postal',
		'$madre_numero_telefono',
		'$madre_numero_celular',
		'$madre_email',
		'$madre_profesion'
	) ";

	/*Se ejecuta el query*/
	$resultado = mysqli_query($conexion, $query)
		or die ("No se pudo ejecutar el query " .mysqli_error($conexion) );
	echo "Datos ingresados correctamente";

	/*Esta es una sentencia de prueba*/
	/*$query2 =
	"INSERT INTO `tbl_alumno`
	(
		`id_alumno`,
		`apellido_paterno`,
		`apellido_materno`,
		`nombre`,
		`sexo`,
		`grado`,
		`horas_arresto`,
		`puntos_demerito`,
		`fecha_ingreso`,
		`fecha_nacimiento`,
		`domicilio`,
		`colonia`,
		`ciudad`,
		`estado`,
		`codigo_postal`,
		`numero_telefono`,
		`numero_celular`,
		`email`,
		`estatura`,
		`peso`,
		`alergia`,
		`tipo_sangre`,
		`estatus`,
		`foto`,
		`rango`,
		`modalidad`)
	VALUES
	(
		'AS0116009',
		'VILLA',
		'CARDENAS',
		'BRANDON EMMANUEL',
		'H',
		'6',
		'0',
		'0',
		'2016/12/21',
		'1996/06/21',
		'GUILLERMO PRIETO',
		'CENTRO',
		'CIUDAD GUZMAN',
		'JALISCO',
		'49000',
		'4123036',
		'3411361316',
		'bornofos@gmail.com',
		'1.85',
		'85',
		'NINGUNA',
		'O+',
		'ACTIVO',
		'NINGUNA',
		'TENIENTE CORONEL',
		'NO SE'
	) ";*/

?>
