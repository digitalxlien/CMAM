<?php
	header("Content-Type: text/html;charset=utf-8");
	include("../conexion_db_cmam.php");
	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");

	/*Variables que obtienen los datos del formulario*/
  $id_alumno 							= mb_strtoupper($_REQUEST['id_alum'],'utf-8');
	$apellido_paterno 			= mb_strtoupper($_REQUEST['apellido_paterno'],'utf-8');
	$apellido_materno 			= mb_strtoupper($_REQUEST['apellido_materno'],'utf-8');
	$nombre 								= mb_strtoupper($_REQUEST['nombre'],'utf-8');
	$sexo  									= $_REQUEST['sexo'];
	$grado 									= $_REQUEST['grado'];
	$horas_arresto   				= $_REQUEST['horas_arresto'];
	$puntos_demerito  			= $_REQUEST['puntos_demerito'];
	$fecha_ingreso    			= $_REQUEST['fecha_ingreso'];//La fecha debe estar en formato YYYY/MM/DD
	$fecha_nacimiento 			= $_REQUEST['fecha_nacimiento'];//La fecha debe estar en formato YYYY/MM/DD
	$curp										= mb_strtoupper($_REQUEST['curp'],'utf-8');
	$calle 					  			= mb_strtoupper($_REQUEST['calle'],'utf-8');
	$colonia 				  			= mb_strtoupper($_REQUEST['colonia'],'utf-8');
	$ciudad 				  			= mb_strtoupper($_REQUEST['ciudad'],'utf-8');
	$estado 				  			= mb_strtoupper($_REQUEST['estado'],'utf-8');
	$codigo_postal 	  			= $_REQUEST['codigo_postal'];
	$numero_telefono  			= $_REQUEST['numero_telefono'];
	$numero_celular   			= $_REQUEST['numero_celular'];
	$email 					  			= $_REQUEST['email'];
	$estatura				  			= $_REQUEST['estatura'];
	$peso 					 			  = $_REQUEST['peso'];
	$nacionalidad						= mb_strtoupper($_REQUEST['input_nacionalidad'],'utf-8');
	$religion							= mb_strtoupper($_REQUEST['input_religion'],'utf-8');
	$alergia 							  = mb_strtoupper($_REQUEST['input_alergia'],'utf-8');
	$tipo_sangre	   			  = $_REQUEST['tipo_sangre'];
	$estatus 				 			  = mb_strtoupper($_REQUEST['estatus'],'utf-8');
	$foto 					 			  = $_REQUEST['foto'];
	$rango								  = mb_strtoupper($_REQUEST['rango'],'utf-8');
	$modalidad 			  			= mb_strtoupper($_REQUEST['modalidad'],'utf-8');
	$padre_apellido_paterno = mb_strtoupper($_REQUEST['padre_apellido_paterno'],'utf-8');
	$padre_apellido_materno = mb_strtoupper($_REQUEST['padre_apellido_materno'],'utf-8');
	$padre_nombre 					= mb_strtoupper($_REQUEST['padre_nombre'],'utf-8');
	$padre_fecha_nacimiento = $_REQUEST['padre_fecha_nacimiento'];
	$padre_calle						= mb_strtoupper($_REQUEST['padre_calle'],'utf-8');
	$padre_colonia					= mb_strtoupper($_REQUEST['padre_colonia'],'utf-8');
	$padre_ciudad						= mb_strtoupper($_REQUEST['padre_ciudad'],'utf-8');
	$padre_estado						= mb_strtoupper($_REQUEST['padre_estado'],'utf-8');
	$padre_codigo_postal		= $_REQUEST['padre_codigo_postal'];
	$padre_numero_telefono	= $_REQUEST['padre_numero_telefono'];
	$padre_numero_celular		= $_REQUEST['padre_numero_celular'];
	$padre_email						= $_REQUEST['padre_email'];
	$padre_profesion				= mb_strtoupper($_REQUEST['padre_profesion'],'utf-8');
	$madre_apellido_paterno	= mb_strtoupper($_REQUEST['madre_apellido_paterno'],'utf-8');
	$madre_apellido_materno = mb_strtoupper($_REQUEST['madre_apellido_materno'],'utf-8');
	$madre_nombre 					= mb_strtoupper($_REQUEST['madre_nombre'],'utf-8');
	$madre_fecha_nacimiento = $_REQUEST['madre_fecha_nacimiento'];
	$madre_calle						= mb_strtoupper($_REQUEST['madre_calle'],'utf-8');
	$madre_colonia					= mb_strtoupper($_REQUEST['madre_colonia'],'utf-8');
	$madre_ciudad						= mb_strtoupper($_REQUEST['madre_ciudad'],'utf-8');
	$madre_estado						= mb_strtoupper($_REQUEST['madre_estado'],'utf-8');
	$madre_codigo_postal		= $_REQUEST['madre_codigo_postal'];
	$madre_numero_telefono	= $_REQUEST['madre_numero_telefono'];
	$madre_numero_celular		= $_REQUEST['madre_numero_celular'];
	$madre_email						= $_REQUEST['madre_email'];
	$madre_profesion				= mb_strtoupper($_REQUEST['madre_profesion'],'utf-8');
	/*Sentencia SQL*/
	$query =
	"UPDATE tbl_alumno SET apellido_paterno = '$apellido_paterno',
		apellido_materno = '$apellido_materno',
		nombre = '$nombre',
		sexo = '$sexo',
		grado = '$grado',
		horas_arresto = '$horas_arresto',
		puntos_demerito = '$puntos_demerito',
		fecha_ingreso = '$fecha_ingreso',
		fecha_nacimiento = '$fecha_nacimiento',
		curp = '$curp',
		calle = '$calle',
		colonia = '$colonia',
		ciudad = '$ciudad',
		estado = '$estado',
		codigo_postal = '$codigo_postal',
		numero_telefono = '$numero_telefono',
		numero_celular = '$numero_celular',
		email = '$email',
		estatura = '$estatura',
		peso = '$peso',
		nacionalidad = '$nacionalidad',
		religion = '$religion',
		alergia = '$alergia ',
		tipo_sangre = '$tipo_sangre',
		estatus = '$estatus',
		foto = '$foto',
		rango = '$rango',
		modalidad = '$modalidad',
		padre_apellido_paterno = '$padre_apellido_paterno',
		padre_apellido_materno = '$padre_apellido_materno',
		padre_nombre = '$padre_nombre',
		padre_fecha_nacimiento = '$padre_fecha_nacimiento',
		padre_calle = '$padre_calle',
		padre_colonia = '$padre_colonia',
		padre_ciudad = '$padre_ciudad',
		padre_estado = '$padre_estado',
		padre_codigo_postal = '$padre_codigo_postal',
		padre_numero_telefono = '$padre_numero_telefono',
		padre_numero_celular = '$padre_numero_celular',
		padre_email = '$padre_email',
		padre_profesion = '$padre_profesion',
		madre_apellido_paterno = '$madre_apellido_paterno',
		madre_apellido_materno = '$madre_apellido_materno',
		madre_nombre = '$madre_nombre',
		madre_fecha_nacimiento = '$madre_fecha_nacimiento',
		madre_calle = '$madre_calle',
		madre_colonia = '$madre_colonia',
		madre_ciudad = '$madre_ciudad',
		madre_estado = '$madre_estado',
		madre_codigo_postal = '$madre_codigo_postal',
		madre_numero_telefono = '$madre_numero_telefono',
		madre_numero_celular = '$madre_numero_celular',
		madre_email = '$madre_email',
		madre_profesion = '$madre_profesion'
    WHERE id_alumno = '$id_alumno'";




	//Se ejecuta el query:
	$resultado = mysqli_query($conexion, $query)

	//Si falla (or die), redirecciona a la pagina de fallo.
	// or die (header('Location: ../../html/pag/alumno_registro_incorrecto.php'));
  //
	// //Si no falla, redirecciona a la pagina de registro correcto.
	// header('Location: ../../html/pag/alumno_registro_correcto.php');


?>
