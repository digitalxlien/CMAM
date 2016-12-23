<?php
	$base_datos = "db_cmam";//Verificar si se puede usar la variable que ya tiene el archivo conexion_db_cmam
	include("conexion_db_cmam.php");
	
	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_datos) 
		or die("Ha fallado la conexion con la base de datos");
	
	/*Variables que obtienen los datos del formulario*/
	$id_alumno = $_REQUEST['id_alumno'];
	$apellido_paterno = $_REQUEST['apellido_paterno'];
	$apellido_materno = $_REQUEST['apellido_materno'];
	$nombre = $_REQUEST['nombre'];
	$sexo = $_REQUEST['sexo'];
	$grado = $_REQUEST['grado'];
	$horas_arresto=0; //= $_REQUEST['horas_arresto'];
	$puntos_demerito = 0;// = $_REQUEST['puntos_demerito'];
	$fecha_ingreso ="2016/12/23";// $_REQUEST['fecha_ingreso'];//La fecha debe estar en formato YYYY/MM/DD
	$fecha_nacimiento = $_REQUEST['fecha_nacimiento'];//La fecha debe estar en formato YYYY/MM/DD
	$domicilio = $_REQUEST['domicilio'];
	$colonia = $_REQUEST['colonia'];
	$ciudad = $_REQUEST['ciudad'];
	$estado = $_REQUEST['estado'];
	$codigo_postal = $_REQUEST['codigo_postal'];
	$numero_telefono = $_REQUEST['numero_telefono'];
	$numero_celular = $_REQUEST['numero_celular'];
	$email = $_REQUEST['email'];
	$estatura = $_REQUEST['estatura'];
	$peso = $_REQUEST['peso'];
	$alergia ="NINGUNA";// $_REQUEST['alergia'];
	$tipo_sangre = $_REQUEST['tipo_sangre'];
	$estatus = "ACTIVO";//$_REQUEST['estatus'];
	$foto = "NO";//$_REQUEST['foto'];
	$rango = "SIN ESPECIFICAR";//$_REQUEST['rango'];
	$modalidad = "NO SE";//$_REQUEST['modalidad'];
	
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
		'$domicilio',
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
		'$modalidad'
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