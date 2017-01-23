<?php
	header("Content-Type: text/html;charset=utf-8");
	include("../conexion_db_cmam.php");
	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");

	$id_alumno = mb_strtoupper($_POST['id_alumno'],'utf-8');
	//$myQuery = "SELECT * FROM tbl_alumno WHERE id_alumno='".$id_alumno."'";
  $query = "SELECT id_alumno, nombre, apellido_paterno, apellido_materno, fecha_nacimiento, sexo, calle, colonia, ciudad, numero_telefono, email, codigo_postal, numero_celular, rango
						FROM tbl_alumno
						WHERE id_alumno = '$id_alumno'";
	$result = mysqli_query($conexion, $query);

  /*Almacena los datos en variables*/
	while($row = mysqli_fetch_array($result)) {
	    $id_alumno        = $row['id_alumno'];
	    $nombre           = $row['nombre'];
	    $apellido_paterno = $row['apellido_paterno'];
	    $apellido_materno = $row['apellido_materno'];
			$fecha_nacimiento = $row['fecha_nacimiento'];
			$sexo							=	$row['sexo'];
			$calle 						= $row['calle'];
			$colonia					= $row['colonia'];
			$ciudad 					= $row['ciudad'];
			$numero_telefono  = $row['numero_telefono'];
			$email 						= $row['email'];
			$codigo_postal 		= $row['codigo_postal'];
			$numero_celular		=	$row['numero_celular'];
			$rango						=	$row['rango'];
	}
?>

<div id="div_frm_registrar">
		<?php
	    /*
	    * Con ese metodo se identifica si se encontro o no
	    * al alumno.
	    * isset() Regresa TRUE si la variable es definida
	    *         Regresa FALSE si la variable es indefinida
	    */
	    if (isset($nombre)) {
	    ?>
			<h2 id="encontrado_h2">Datos generales del alumno</h2><hr>
	      <div id="div_encontrado">
					<div id="datos_personales">
						<p class="dato_alumno_nombre"><?php echo $nombre . " " . $apellido_paterno . " " . $apellido_materno ?></p>
						<p class="dato_alumno">Rango: <?php echo $rango ?></p>
						<p class="dato_alumno">Edad: x años	</p>
						<p class="dato_alumno">Fecha de nacimiento: <?php echo $fecha_nacimiento ?></p>
						<p class="dato_alumno">Sexo: <?php echo $sexo ?></p>
						<p class="dato_alumno">Direccion: <?php echo $calle . ", COLONIA ". $colonia ?></p>
						<p class="dato_alumno">Ciudad: <?php echo $ciudad ?></p>
						<p class="dato_alumno">Codigo postal: <?php echo $codigo_postal ?></p>
						<p class="dato_alumno">Telefono: <?php echo $numero_telefono ?></p>
						<p class="dato_alumno">Celular: <?php echo $numero_celular ?></p>
						<p class="dato_alumno">Email: <?php echo $email ?></p>
					</div>
					<div id="div_foto">
						<img src="../../img/itcg_logo.jpg" >
					</div>
			</div>

	    <?php } else { ?>
					<div id="div_no_encontrado">
						<h2>No se encontro al alumno</h2>
					</div>
	    <?php  }?>
</div>
