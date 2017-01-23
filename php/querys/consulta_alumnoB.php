<?php
	header("Content-Type: text/html;charset=utf-8");
	include("../conexion_db_cmam.php");
	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");

	$id_alumno = mb_strtoupper($_POST['id_alumno'],'utf-8');
	//$myQuery = "SELECT * FROM tbl_alumno WHERE id_alumno='".$id_alumno."'";
  $query = "SELECT id_alumno, nombre, apellido_paterno, apellido_materno FROM tbl_alumno WHERE id_alumno = '$id_alumno'";
	$result = mysqli_query($conexion, $query);

  /*Almacena los datos en variables*/
	while($row = mysqli_fetch_array($result)) {
	    $id_alumno        = $row['id_alumno'];
	    $nombre           = $row['nombre'];
	    $apellido_paterno = $row['apellido_paterno'];
	    $apellido_materno = $row['apellido_materno'];
	}
?>

<div class="datos_alumno">

  <?php
    /*
    * Con ese metodo se identifica si se encontro o no
    * al alumno.
    * isset() Regresa TRUE si la variable es definida
    *         Regresa FALSE si la variable es indefinida
    */
    if (isset($nombre)) {
    ?>
      <p>ID: <?php echo $id_alumno ?></p>
      <p>Nombre: <?php echo $nombre ?></p>
      <p>Apellidos: <?php echo $apellido_paterno . " " . $apellido_materno ?> </p>
    <?php } else { ?>
      <p>No se encontro al alumno</p>
    <?php  }?>
</div>
