<?php
	header("Content-Type: text/html;charset=utf-8");
	include("../conexion_db_cmam.php");
	/*Seleciona la base de datos a utilizar*/
	mysqli_select_db($conexion, $base_de_datos)
		or die("Ha fallado la conexion con la base de datos");

	$id_alumno = mb_strtoupper($_POST['id_alumno'],'utf-8');
	//$myQuery = "SELECT * FROM tbl_alumno WHERE id_alumno='".$id_alumno."'";
  $query = "SELECT 
  			id_alumno, 
  			nombre, 
  			apellido_paterno, 
  			apellido_materno, 
  			rango,
  			puntos_demerito,
  			horas_arresto,
  			foto 
			FROM tbl_alumno
			WHERE id_alumno = '$id_alumno'";

	$result = mysqli_query($conexion, $query);

  /*Almacena los datos en variables*/
	while($row = mysqli_fetch_array($result)) {
	    $id_alumno        = $row['id_alumno'];
	    $nombre           = $row['nombre'];
	    $apellido_paterno = $row['apellido_paterno'];
	    $apellido_materno = $row['apellido_materno'];
		$rango	  		  =	$row['rango'];
		$horas_arresto    = $row['horas_arresto'];
		$puntos_demerito  = $row['puntos_demerito'];
		
		$foto 			  = $row['foto'];

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

			<table class="tbl_lista_azul_simple" >
			  <tr>
			    <th style="width: 70em;">No. de control:</th>
			    <th style="width: 400em;">Alumno:</th>
			    <th style="width: 100em;">Grado: </th>
			  </tr>
			  <tr>
			  	<td><?php echo $id_alumno?></td>
			    <td><?php echo $nombre. " " . $apellido_paterno . " " .  " " . $apellido_materno ?></td>
			    <td><?php echo $rango ?></td>
			  </tr>
			</table>

			
			<table class="tbl_lista_verde_simple" >
				<tr>
					<th style="width: 15em;">Puntos de demerito:</th>
					<th style="width: 15em;">Horas de arresto:</th>
				</tr>
				<tr>
					<td><?php echo $puntos_demerito . " pts." ?></td>
					<td><?php echo $horas_arresto . " hrs." ?></td>
					<td></td>
				</tr>
			</table>

			



					<!-- div_resultado -->
		</div>
				




		</div>

	    <?php } else { ?>
					<div id="div_no_encontrado">
						<h2>No se encontro al alumno</h2>
					</div>
	    <?php  }?>
</div>
