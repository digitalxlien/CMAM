<?php
	header("Content-Type: text/html;charset=utf-8");
	include("../conexion_db_cmam.php");
	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");
		// $servidor = "127.0.0.1";
	// $usuario = 'admin';
	// $contraseña = "qwerty1234";
	// $base_de_datos = "db_cmam";
//
	// //Conexion a la base de datos.
	// $conexion = mysqli_connect($servidor, $usuario, $contraseña, $base_de_datos);
	$id_alumno = mb_strtoupper($_POST['id_alumno'],'utf-8');
	$myQuery = "SELECT * FROM tbl_alumno WHERE id_alumno='".$id_alumno."'";
	$result = mysqli_query($conexion, $myQuery);
	//$result = mysqli_query($conexion, "SELECT * FROM tbl_alumno WHERE id_alumno='AS0117000'");
	echo "<table>
	<tr>
	<th>ID Alumno</th>
	<th>Nombre</th>
	<th>Apellido Paterno</th>
	<th>Apellido Materno</th>
	</tr>";
	while($row = mysqli_fetch_array($result)) {
	    echo "<tr>";
	    echo "<td>" . $row['id_alumno'] . "</td>";
	    echo "<td>" . $row['nombre'] . "</td>";
	    echo "<td>" . $row['apellido_paterno'] . "</td>";
	    echo "<td>" . $row['apellido_materno'] . "</td>";
	    echo "</tr>";
	}
	echo "</table>";
?>
